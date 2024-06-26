//ajax call for admin login verification
function checkAdminLogin(){
    console.log("Checking admin login");
    var adminLogemail = $("#adminLogemail").val();
    var adminLogpass = $("#adminLogpass").val();

    $.ajax({
        url:"Admin/admin.php",
        method:"POST",
        data:{
            checkLogemail : "checkLogemail",
            adminLogemail : adminLogemail,
            adminLogpass : adminLogpass,
        },
        success: function(data){
            if(data == 0){
                $("#ststusAdminLogMsg").html('<small class="alert alert-danger">Invalid Email ID or Password</small>');
            }
            else if(data == 1){
                $("#ststusAdminLogMsg").html('<div class="spinner-border text-success" role="status"></div>');
                setTimeout(()=>{
                    window.location.href = "Admin/adminDashboard.php";
                },1000);
            }
            
        },
    });
}

function clearAdminLogFields(){
    $("#adminLoginForm").trigger("reset");
    $("#ststusAdminLogMsg").html("");
}