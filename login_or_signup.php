<?php
include('./dbConnection.php');
include('./maininclude/header.php');
?>

<!-- start courses page banner -->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./images/bookbgimg.jpg" alt="coueses" style="height: 500px; width:100%; object-fit:cover; box-shadow:10px;opacity:0.6;">
    </div>
</div>
<!-- end courses page banner -->

<div class="container jumbotron mb-5">
    <div class="row">
        <div class="col-md-4">
            <h5 class="mb-3">If Already Registered !! Login</h5>
            <form role="form" id="stuLoginForm">

                <div class="form-group">
                    <img class="iconsizeregistration" src="icons/envelope.svg" alt=""><label for="stuLogemail" class="pl-2 font-weight-bold">Email</label>
                    <input type="email" class="form-control" placeholder="Email" id="stuLogemail" name="stuLogemail">
                </div>

                <div class="form-group">
                    <img class="iconsizeregistration" src="icons/key.svg" alt=""><label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
                </div>

                <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStudentLogin()">Login</button>

            </form><br/>
            <small id="statusLogMsg"></small>
        </div>
        <div class="col-md-6 offset-md-1">
            <h5 class="mb-3">New User !! Sign Up</h5>
            <form role="form" id="stuRegForm">
                <div class="form-group">
                    <img class="iconsizeregistration" src="icons/user.svg" alt=""><label for="stuname" class="pl-2 font-weight-bold">Name</label>
                    <small id="statusMsg1"></small>
                    <input type="text" class="form-control" id="stuname" placeholder="Name" name="stuname">
                </div>
                <div class="form-group">
                    <img class="iconsizeregistration" src="icons/envelope.svg" alt=""><label for="stuemail" class="pl-2 font-weight-bold">Email</label>
                    <small id="statusMsg2"></small>
                    <input type="email" class="form-control" placeholder="Email" id="stuemail" name="stuemail">
                    <small class="form-text">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <img class="iconsizeregistration" src="icons/key.svg" alt=""><label for="stupass" class="pl-2 font-weight-bold">New Password</label>
                    <small id="statusMsg3"></small>
                    <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
                </div>
                <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>
            </form><br/>
            <small id="successMsg"></small>
        </div>
    </div>
</div>
<hr/>

<?php
include('./contact.php');
?>

<?php
include('./maininclude/footer.php');
?>