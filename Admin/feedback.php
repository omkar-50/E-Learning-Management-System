<?php
if(!isset($_SESSION)){
    session_start();
}

include('./admininclude/header.php');
include('../dbConnection.php');

if(isset($_SESSION['is_admin_login'])){
    $adminEmail =  $_SESSION['adminLogemail'];
    echo "<script>document.getElementsByTagName('title')[0].innerHTML='Feedback';</script>";
}
else{
    echo "<script> location.href='../index.php'; </script>";
}
?>

<div class="col-sm-9 mt-5">
    <p class="bg-dark text-white p-2">List of Feedbacks</p>
    <?php

        $sql = "SELECT * FROM feedback";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            echo '<table class="table">
            <thead>
            <tr>
                <th scope="col">Feedback ID</th>
                <th scope="col">Content</th>
                <th scope="col">Student ID</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<th scope="row">' . $row['fb_id'] . '</th>';
                echo '<td>' . $row['fb_content'] . '</td>';
                echo '<td>' . $row['stu_id'] . '</td>';
                echo '<td>';
                echo '
                    <form action="" method="POST" class="d-inline">
                    <input type="hidden" name="id" value=' . $row["fb_id"] . '>
                    <button type="submit" class="btn btn-secondary" name="delete" value="Delete">
                        <img class="iconsize" src="../icons/trash.svg" style="margin-top: -4px;">
                    </button>
                    </form>
                    </td>
                    </tr>';
            }
            echo '</tbody>
            </table>';
        }
        else {
            echo "0 Result";                  
        }

        if (isset($_REQUEST['delete'])) {
            $sql = "DELETE FROM feedback WHERE fb_id = {$_REQUEST['id']}";
            if ($conn->query($sql) === TRUE) {
                echo '<meta http-equiv="refresh" content="0;URL=?deleted"/>';
            } else {
                echo "Unable to delete data";
            }
        }
    ?>
</div>

</div>  <!-- div Row close from header -->
</div>  <!-- div Container-fluid close from header -->
<?php
include('./admininclude/footer.php')
?>