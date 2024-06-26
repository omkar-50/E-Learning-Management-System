<?php
if(!isset($_SESSION)){
    session_start();
}

include('./admininclude/header.php');
include('../dbConnection.php');

if(isset($_SESSION['is_admin_login'])){
    $adminEmail =  $_SESSION['adminLogemail'];
    echo "<script>document.getElementsByTagName('title')[0].innerHTML='Change Password';</script>";
}
else{
    echo "<script> location.href='../index.php'; </script>";
}

$adminEmail =  $_SESSION['adminLogemail'];
if(isset($_REQUEST['adminPassUpdateBtn'])){
    if(($_REQUEST['adminPass']=="")){
        //msg displayed if required fields is missing
        $passmsg = '<div class="alert alert-warning col-sm-6 mt-4" role="alert">Fill All Fields</div>';
    }
    else{
        $sql = "SELECT * FROM admin WHERE admin_email='$adminEmail'";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $adminPass = $_REQUEST['adminPass'];
            $sql = "UPDATE admin SET admin_pass = '$adminPass' WHERE admin_email = '$adminEmail'";
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
<div class="col-sm-9 mt-5">
    <div class="row">
        <div class="col-sm-6">
            <form class="mt-5 mx-5">
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" 
                    value="<?php echo $adminEmail ?>"readonly>
                </div>

                <div class="form-group">
                    <label for="inputNewPassword">New Password</label>
                    <input type="text" class="form-control" id="inputNewPassword" placeholder="New Password" name="adminPass">
                </div>

                <button class="btn btn-danger mr-4 mt-4" type="submit" name="adminPassUpdateBtn">Update</button>
                <button class="btn btn-secondary mt-4" type="reset">Reset</button>
                <?php if(isset($passmsg)){echo $passmsg;} ?>
            </form>
        </div>
    </div>
</div>

</div>  <!-- div Row close from header -->
</div>  <!-- div Container-fluid close from header -->

<?php
include('./admininclude/footer.php')
?>