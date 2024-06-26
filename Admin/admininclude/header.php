<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/adminstyle.css">
</head>
<body>
    <!-- top navbar -->
    <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background: linear-gradient(#2eedff,#198a95,#1a6f78);">
        <a href="adminDashboard.php" class="navbar-brand col-sm-3 col-md-2 mr-0 " style="color: rgb(238, 10, 207);">E-Learning <small class="text-red">Admin Area</small></a>
    </nav>

    <!-- side bar -->
    <div class="container-fluid mb-5" style="margin-top: 40px;height: 100vh;">
        <div class="row">
            <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none" style="background: linear-gradient(#e3ef0b2a,#ad5b034e);">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="adminDashboard.php" class="nav-link"><img class="iconsize mr-2" src="../icons/dashboard.svg" alt="">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="courses.php" class="nav-link"><img class="iconsize mr-2" src="../icons/accessible.svg" alt="">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a href="lessons.php" class="nav-link"><img class="iconsize mr-2" src="../icons/accessible.svg" alt="">Lessons</a>
                        </li>
                        <li class="nav-item">
                            <a href="students.php" class="nav-link"><img class="iconsize mr-2" src="../icons/user_dashboard.svg" alt="">Students</a>
                        </li>
                        <li class="nav-item">
                            <a href="sellReport.php" class="nav-link"><img class="iconsize mr-2" src="../icons/table.svg" alt="">Sell Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="adminPaymentStatus.php" class="nav-link"><img class="iconsize mr-2" src="../icons/table.svg" alt="">Payment Status</a>
                        </li>
                        <li class="nav-item">
                            <a href="feedback.php" class="nav-link"><img class="iconsize mr-2" src="../icons/accessible.svg" alt="">Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a href="adminChangePass.php" class="nav-link"><img class="iconsize mr-2" src="../icons/key_dashboard.svg" alt="">Change Password</a>
                        </li>
                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link"><img class="iconsize mr-2" src="../icons/logout.svg" alt="">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>