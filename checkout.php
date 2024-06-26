<?php
    include('./dbConnection.php');
    session_start();
    if(!isset($_SESSION['stuLogemail'])){
        echo "<script>location.href = 'login_or_signup.php'</script>";
    }
    else{
        // header("Pragma: no-cache");
	    // header("Cache-Control: no-cache");
	    // header("Expires: 0");
        $stuEmail = $_SESSION['stuLogemail'];
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <!-- <meta name="GENERATOR" content="Evrsoft First Page"> -->
			<meta http-equiv="X-UA-Compatible" content="ie-edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Checkout</title>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/indexstyle.css">
        </head>
        <body>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 jumbotron">
                        <h3 class="mb-5">Welcome to E-Learning Payment Page</h3>
						<form method="POST" action="./paymentdone.php">
							<div class="form-group row">
								<label for="ORDER_ID" class="col-sm-4 col-form-label">Order ID</label>
								<div class="col-sm-8">
									<input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" size="20"
									name="ORDER_ID" autocomplete="off"
									value="<?php echo  "ORDS" . rand(10000,99999999)?>"readonly>
								</div>
							</div>
							<div class="form-group row">
								<label for="CUST_ID" class="col-sm-4 col-form-label">Student Email</label>
								<div class="col-sm-8">
									<input id="CUST_ID" class="form-control" tabindex="2" maxlength="12" size="12"
									name="CUST_ID" autocomplete="off"
									value="<?php if(isset($stuEmail)){echo $stuEmail;} ?>"readonly>
								</div>
							</div>
							<div class="form-group row">
								<label for="TXN_AMOUNT" class="col-sm-4 col-form-label">Amount</label>
								<div class="col-sm-8">
									<input type="text" title="TXN_AMOUNT" class="form-control" tabindex="10" maxlength="12" size="12"
									name="TXN_AMOUNT" value="<?php if(isset($_POST['id'])){echo $_POST['id'];} ?>"readonly>
								</div>
							</div>
							<div class="text-center">
								<input type="submit" class="btn btn-primary" value="Checkout" onclick="">
								<a href="./courses.php" class="btn btn-secondary">Cancel</a>
							</div>
						</form>
						<small class="form-text text-muted">Note: Complete Payment by Clicking Checkout Button</small>
                    </div>
                </div>
            </div>

			<script src="js/jquery.min.js"></script>
  			<script src="js/popper.min.js"></script>
  			<script src="js/bootstrap.min.js"></script>
        </body>
        </html>
<?php 
	}
?>