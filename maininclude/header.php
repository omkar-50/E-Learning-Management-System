<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/indexstyle.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.transitions.css">


</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark navbgcolor pl-5 fixed-top">
        <a id="learniverse" class="navbar-brand" href="index.php">Learniverse</a>
        <span class="navbar-text pl-2 mr-3" style="color: #fba2e2;">Learn , Grow , Succedd..!!</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav pl-5">
                <li class="nav-item liitem mr-4"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item liitem mr-4"><a class="nav-link" href="courses.php">Courses</a></li>
                <li class="nav-item liitem mr-4"><a class="nav-link" href="paymentstatus.php">Payment Status</a></li>
                <?php
                    session_start();
                    if(isset($_SESSION['is_login'])){
                        echo '
                        <li class="nav-item liitem mr-4"><a class="nav-link" href="Student/studentProfile.php">My Profile</a></li>
                        <li class="nav-item liitem mr-4"><a class="nav-link" href="logout.php">Logout</a></li>                       
                        ';
                    }
                    else{
                        echo '
                        <li class="nav-item liitem mr-4"><a class="nav-link" href="#" data-toggle="modal" data-target="#stuLoginModalCenter">Login</a></li>
                        <li class="nav-item liitem mr-4"><a class="nav-link" href="#" data-toggle="modal" data-target="#stuRegModalCenter">Signup</a></li>                       
                        ';
                    }
                ?>
                <li class="nav-item liitem mr-4"><a class="nav-link" href="#feedbackslid">Feedback</a></li>
                <li class="nav-item liitem mr-4"><a class="nav-link" href="#contactsec">Contact</a></li>

            </ul>
        </div>
    </nav>