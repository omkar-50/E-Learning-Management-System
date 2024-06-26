<!-- start including header -->
<?php
include('./maininclude/header.php');
include('./dbConnection.php');
?>
<!-- end including header -->



<!-- start courses page banner -->
<div class="container-fluid bg-dark d-print-none">
    <div class="row">
        <img src="./images/bookbgimg.jpg" alt="coueses" style="height: 500px; width:100%; object-fit:cover; box-shadow:10px;opacity:0.6;">
    </div>
</div>
<!-- end courses page banner -->



<!-- start main content -->
<div class="container">
<h2 class=" my-4 text-center">Payment Status</h2>
    <form action="" method="POST" class="mt-3 form-inline d-print-none">
        <div class="form-group" style="margin-left: 20rem;">
            <label for="order_id">Enter Order ID :</label>
            <input type="text" class="form-control ml-3 mr-2" id="order_id" name="order_id">
        </div>
        <button type="submit" name="search" class="btn btn-primary">View</button>
    </form>
    <?php
            if(isset($_POST['search']) && $_POST['order_id'] != ""){
                $order_id = $_POST['order_id'];

                $sql = "SELECT * FROM courseorder WHERE order_id='$order_id'";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    $row = $result->fetch_assoc();
                
        ?>
                    <h3 class="mt-5 my-4 text-center">Payment Receipt</h3>
                    <table class="table table-bordered col-sm-4 mt-4 mx-auto">
                    <tr>
                        <td>Order ID</td>
                        <td><?php echo $row['order_id']; ?></td>
                    </tr>
                    <tr>
                        <td>Student Email</td>
                        <td><?php echo $row['stu_email']; ?></td>
                    </tr>
                    <tr>
                        <td>Amount</td>
                        <td><?php echo $row['amount']; ?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><?php echo $row['status']; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center d-print-none">
                            <form class="d-print-none">
                                <input type="submit" class="btn btn-primary" value="Print" onclick="window.print()">
                            </form>
                        </td>
                    </tr>
                    </table>
        <?php
                }
                else{
                    echo "<div class='alert alert-warning col-sm-4 mt-5 mx-auto' role='alert'>No Record Found !</div>";
                }              
            }
            else if(isset($_POST['search']) && $_POST['order_id'] == ""){
                echo "<div class='alert alert-warning col-sm-4 mt-5 mx-auto' role='alert'>Please Enter Order ID</div>";
            }
        ?>
</div>
<!-- end main content -->


<div class="horizantalline d-print-none"></div>


<!-- start contact us -->
<?php
include('./contact.php');
?>
<!-- end contact us -->

<!-- start including footer -->
<?php
include('./maininclude/footer.php');
?>
<!-- end including footer -->