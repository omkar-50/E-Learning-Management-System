<?php
    include('./dbConnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container{
            width: 30rem;
            height: 30rem;
            border: 2px solid rgba(132, 128, 128, 0.522);
            background-color: rgba(221, 168, 100, 0.200);
        }
        #imgdiv{
            display: flex;
            height: 5rem;
            /* border: 2px solid red; */
            margin-top: 2rem;
            justify-content: space-between;
        }
        img{
            width: 7rem;
            height: 5rem;
            /* border: 2px solid black; */
        }
        #lbl{
            margin-top: 5rem;
        }
    </style>
</head>
<body>
    <script>
    function fun2(){
                var cn6 = document.getElementById('otp').value;
                if(cn6 == ""){
                    document.getElementById('msg').innerHTML = "Please Enter OTP";
                }
                else{
                    document.getElementById('cont').innerHTML = '<form ><label id="lbl" class="text-center ml-5" style="margin-top: 12rem;"><h4>Transaction is in processing...</h4></label></form>';
                    setTimeout(() => {
                        document.getElementById('cont').innerHTML = '<form ><label id="lbl" class="text-center ml-5" style="margin-top: 12rem;"><h4>Please do not refresh the page...</h4></label></form>';
                    }, 2000);
                    setTimeout(() => {
                        document.getElementById('cont').innerHTML = '<form ><label id="lbl" class="text-center ml-5" style="margin-top: 12rem; color:green;"><h2>Transaction Successfull</h2></label></form>';
                     
                    }, 3500);
                }
    }
    function fun(){
        var cn1 = document.getElementById('chk1').value;
        var cn2 = document.getElementById('chk2').value;
        var cn3 = document.getElementById('chk3').value;
        var cn4 = document.getElementById('chk4').value;
        var cn5 = document.getElementById('chk5').value;

        if((cn1 == "") || (cn2 == "") ||  (cn3 == "") ||  (cn4 == "") ||  (cn5 == "")){
            document.getElementById('msg').innerHTML = "Please fill all fields";            
        }
        else{
            document.getElementById('cont').innerHTML = '<form action="" method="POST"><div class="text-center mt-5"><label class="mt-5"><h5 style="color:blue;">OTP is sent to registered mobile number</h5></label><label class="mt-3"><h3>Enter OTP</h3></label><br><input type="text" id="otp" name="otp" class="mt-3" maxlength="6" required></div><div class="text-center mt-5"><input type="submit" name="btn2" class="btn btn-primary" value="Verify" onclick="fun2()"></div></form><div id="msg" style="color: red;"></div>';
        }
    }                
    </script>
    <div class="container mt-5" id="cont">
        <form action="" method="POST">
            <div id="imgdiv">
                <span>
                    <img src="images/Mastercard.png" alt="">
                </span>
                <span>
                    <img src="images/Paypal.png" alt="">
                </span>
                <span>
                    <img src="images/Visa.png" alt="">
                </span>
            </div>
            <div>
                <label for="" class="mt-3">Card Number</label><br>
                <input type="text" id="chk1" name="card-number" class="form-control " maxlength="16" size="16" required>
            </div>
            <div>
                <label for="" class="mt-3">Card Holder Name</label><br>
                <input type="text" id="chk2" name="holdername" class="form-control " required>
            </div>
            <div class="form-group row">              
                <div class="ml-3 mr-5">
                    <label for="" class="mt-3">Expiry Date</label><br>
                    <span>
                        <input type="text" id="chk3" name="month" placeholder="MM" maxlength="2" size="2" required>
                    </span>
                    <span>
                        <input type="text" id="chk4" name="year" placeholder="YY" maxlength="2" size="2" required>
                    </span>
                </div>
            
                <div class="ml-5">
                    <label for="" class="mt-3">CVV</label><br>
                    <input type="text" id="chk5" name="cvvnum" maxlength="3" size="3" required>
                </div>
            </div>
            <div class="text-center mt-5">
            <input type="submit" name="btn" class="btn btn-primary" value="Generate OTP" onclick="fun()">
            </div>
            <div id="msg" style="color: red;"></div>
        </form>
    </div>

</body>
</html>