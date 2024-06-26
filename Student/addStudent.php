<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once('../dbConnection.php');

//Cheking email already registered
if (isset($_POST['checkemail']) && isset($_POST['stuemail'])) {
    $stuemail = $_POST['stuemail'];
    $sql = "SELECT stu_email FROM student WHERE stu_email = '" . $stuemail . "'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    echo json_encode($row);
}



//Insert student

if (isset($_POST['stusignup']) && isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['stupass'])) {

    $stuname = $_POST['stuname'];
    $stuemail = $_POST['stuemail'];
    $stupass = $_POST['stupass'];

    $sql = "INSERT INTO student(stu_name, stu_email, stu_pass) VALUES ('$stuname','$stuemail','$stupass')";

    if ($conn->query($sql) == TRUE) {
        echo json_encode("OK");
    } else {
        echo json_encode("Failed");
    }
}

//student login verification
if (!isset($_SESSION['is_login'])) {
    if (isset($_POST['checkLogemail']) && isset($_POST['stuLogemail']) && isset($_POST['stuLogpass'])) {
        $stuLogemail = $_POST['stuLogemail'];
        $stuLogpass = $_POST['stuLogpass'];

        $sql = "SELECT stu_email, stu_pass FROM student WHERE stu_email='" . $stuLogemail . "' AND stu_pass='" . $stuLogpass . "'";

        $result = $conn->query($sql);
        $row = $result->num_rows;

        if ($row === 1) {
            $_SESSION['is_login'] = true;
            $_SESSION['stuLogemail'] = $stuLogemail;
            echo json_encode($row);
        } else if ($row === 0) {
            echo json_encode($row);
        }
    }
}
?>