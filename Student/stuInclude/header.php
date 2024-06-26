<?php
include_once('../dbConnection.php');
if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['is_login'])){
    $stuLogemail =  $_SESSION['stuLogemail'];
}
// else{
//     echo "<script> location.href='../index.php'; </script>";
// }

if(isset($stuLogemail)){
    $sql = "SELECT stu_img FROM student WHERE stu_email = '$stuLogemail'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $stu_img = $row['stu_img'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/studentstyle.css">
</head>
<body>
    <!-- top navbar -->
    <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background: linear-gradient(#2eedff,#198a95,#1a6f78);">
        <a href="studentProfile.php" class="navbar-brand col-sm-3 col-md-2 mr-0">E-Learning</a>
    </nav>

    <!-- side bar -->
    <div class="container-fluid mb-5" style="margin-top: 40px;">
        <div class="row">
            <nav class="col-sm-2 bg-light sidebar py-5 d-print-none" style="background: linear-gradient(#e00d0d40,#06f0a64e);">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3">
                            <img src="<?php echo $stu_img ?>" alt="studentImage" class="img-thumbnail rounded-circle">
                        </li>
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link"><img class="iconsize mr-2" src="../icons/logout.svg" alt="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="studentProfile.php"><img class="iconsize mr-2" src="../icons/user_dashboard.svg" alt="">Profile <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="myCourse.php" class="nav-link"><img class="iconsize mr-2" src="../icons/accessible.svg" alt="">My Course</a>
                        </li>
                        <li class="nav-item">
                            <a href="stuFeedback.php" class="nav-link"><img class="iconsize mr-2" src="../icons/accessible.svg" alt="">Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a href="studentChangePass.php" class="nav-link"><img class="iconsize mr-2" src="../icons/key_dashboard.svg" alt="">Change Password</a>
                        </li>
                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link"><img class="iconsize mr-2" src="../icons/logout.svg" alt="">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
</body>
</html>