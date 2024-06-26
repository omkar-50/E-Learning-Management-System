<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include('./stuInclude/header.php');
    include('../dbConnection.php');

    if(isset($_SESSION['is_login'])){
        $stuemail =  $_SESSION['stuLogemail'];
        echo "<script>document.getElementsByTagName('title')[0].innerHTML='Profile';</script>";
    }
    else{
        echo "<script> location.href='../index.php'; </script>";
    }

    $sql = "SELECT * FROM student WHERE stu_email = '$stuemail'";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $stuId = $row["stu_id"];
        $stuName = $row["stu_name"];
        $stuOcc = $row["stu_occ"];
        $stuImg = $row["stu_img"];
    }

    if(isset($_REQUEST['updateStuNameBtn'])){
        if(($_REQUEST['stuName'] == "")){
            $passmsg = '<div class="alert alert-warning col-sm-6 mt-2" role="alert">Fill All Fields</div>';
        }
        else{
            $stuName = $_REQUEST["stuName"];
            $stuOcc = $_REQUEST["stuOcc"];
            $stu_image = $_FILES['stuImg']['name'];
            $stu_image_temp = $_FILES['stuImg']['tmp_name'];
            $img_folder = '../images/students/'.$stu_image;
            move_uploaded_file($stu_image_temp, $img_folder);

            $sql = "UPDATE student SET stu_name = '$stuName' , stu_occ = '$stuOcc' , stu_img = '$img_folder' WHERE stu_email = '$stuemail'";
            if($conn->query($sql) == TRUE){
                $passmsg = '<div class="alert alert-success col-sm-6 mt-2" role="alert">Updated Successfully</div>';
            }
            else{
                $passmsg = '<div class="alert alert-danger col-sm-6 mt-2" role="alert">Unable to Update</div>';
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
            <label for="stuemail">Email</label>
            <input type="email" class="form-control" id="stuemail" name="stuemail" value="<?php echo $stuemail ?>"readonly>
        </div>

        <div class="form-group">
            <label for="stuName">Name</label>
            <input type="text" class="form-control" id="stuName" name="stuName" 
            value="<?php if(isset($stuName)){echo $stuName;} ?>">
        </div>

        <div class="form-group">
            <label for="stuOcc">Occupation</label>
            <input type="text" class="form-control" id="stuOcc" name="stuOcc" 
            value="<?php if(isset($stuOcc)){echo $stuOcc;} ?>">
        </div>

        <div class="form-group">
            <label for="stuImg">Upload Image</label>
            <input type="file" class="form-control-file" id="stuImg" name="stuImg">
        </div>

        <div class="text-left mt-4">
            <button class="btn btn-primary" type="submit" name="updateStuNameBtn">Update</button>
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