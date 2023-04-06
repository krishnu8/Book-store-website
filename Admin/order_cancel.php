<?php
include_once("../database/Create_database.php");
    
    $o_id = @$_GET['id'];
    // echo $o_id;
    $q = "UPDATE `oders` SET `order_status`='Cancelled' WHERE Order_Id='$o_id'";
    
    if(mysqli_query($con,$q)){
        ?>
            <script>
                alert("Order Cancelled");
                window.location.href = "Orders.php";
            </script>
        <?php
    }
    else{
        ?>
            <script>
                alert("Failed to cancel order");
                window.location.href = "Orders.php";
            </script>
        <?php
    }
?>