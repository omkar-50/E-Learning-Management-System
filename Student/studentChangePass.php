<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include('./stuInclude/header.php');
    include_once('../dbConnection.php');

    if(isset($_SESSION['is_login'])){
        $stuemail =  $_SESSION['stuLogemail'];
        echo "<script>document.getElementsByTagName('title')[0].innerHTML='Change Password';</script>";
    }
    else{
        echo "<script> location.href='../index.php'; </script>";
    }

    if(isset($_REQUEST['stuPassUpdateBtn'])){
        if(($_REQUEST['stuNewPass'] == "")){
            $passmsg = '<div class="alert alert-warning col-sm-6 mt-2" role="alert">Fill All Fields</div>';
        }
        else{
            $sql = "SELECT * FROM student WHERE stu_email='$stuemail'";
            $result = $conn->query($sql);
            if($result->num_rows == 1){
                $stuPass = $_REQUEST['stuNewPass'];
                $sql = "UPDATE student SET stu_pass = '$stuPass' WHERE stu_email = '$stuemail'";
                if($conn->query($sql) == TRUE){
                    //below msg displayed on form submit success
                    $passmsg = '<div class="alert alert-success col-sm-6 mt-4" role="alert">Updated Successfully</div>';
                }
                else{
                    //below msg displayed on form submit failed
                    $passmsg = '<div class="alert alert-danger col-sm-6 mt-4" role="alert">Unable to Update</div>';
                }
            }
        }
    }
?>

<div class="col-sm-9 col-md-10">
    <div class="row">
        <div class="col-sm-6">
            <form class="mt-5 mx-5" method="POST">
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" 
                    value="<?php echo $stuemail ?>"readonly>
                </div>

                <div class="form-group">
                    <label for="inputNewPassword">New Password</label>
                    <input type="text" class="form-control" id="inputNewPassword" placeholder="New Password" name="stuNewPass">
                </div>

                <button class="btn btn-primary mr-4 mt-4" type="submit" name="stuPassUpdateBtn">Update</button>
                <button class="btn btn-secondary mt-4" type="reset">Reset</button>
                <?php if(isset($passmsg)){echo $passmsg;} ?>
            </form>
        </div>
    </div>
</div>

</div>  <!-- div Row close from header -->
</div>  <!-- div Container-fluid close from header -->

<?php
include('./stuInclude/footer.php')
?>