<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include('./stuInclude/header.php');
    include('../dbConnection.php');

    if(isset($_SESSION['is_login'])){
        $stuemail =  $_SESSION['stuLogemail'];
        echo "<script>document.getElementsByTagName('title')[0].innerHTML='Feedback';</script>";
    }
    else{
        echo "<script> location.href='../index.php'; </script>";
    }

    $sql = "SELECT * FROM student WHERE stu_email = '$stuemail'";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $stuId = $row["stu_id"];
    }

    if(isset($_REQUEST['submitFeedbackBtn'])){
        if(($_REQUEST['fb_content'] == "")){
            $passmsg = '<div class="alert alert-warning col-sm-6 mt-2" role="alert">Fill All Fields</div>';
        }
        else{
            $fbcontent = $_REQUEST["fb_content"];
            $sql = "INSERT INTO feedback (fb_content,stu_id) VALUES ('$fbcontent', '$stuId')";
            if($conn->query($sql) == TRUE){
                $passmsg = '<div class="alert alert-success col-sm-6 mt-2" role="alert">Submitted Successfully</div>';
            }
            else{
                $passmsg = '<div class="alert alert-danger col-sm-6 mt-2" role="alert">Unable to Submit</div>';
            }
        }
    }

?>

<div class="col-sm-6 mt-5">
    <form class="mx-5" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stuId">Student ID</label>
            <input type="text" class="form-control" id="stuId" name="stuId" 
            value="<?php if(isset($stuId)){echo $stuId;} ?>"readonly>
        </div>

        <div class="form-group">
            <label for="fb_content">Write Feedback</label>
            <textarea class="form-control" id="fb_content" name="fb_content" row=2></textarea>
        </div>

        <div class="text-left mt-4">
            <button class="btn btn-primary" type="submit" name="submitFeedbackBtn">Submit</button>
            <a href="../index.php" class="btn btn-secondary">Close</a>
        </div> 

        <?php if(isset($passmsg)){echo $passmsg;} ?>
    </form>
</div>

</div>  <!-- div Row close from header -->
</div>  <!-- div Container-fluid close from header -->

<?php
include('./stuInclude/footer.php')
?>