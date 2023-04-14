<?php
include_once("../database/Create_database.php");
    
    $o_id = @$_GET['Order_Id'];
    // echo $o_id;
    $q = "UPDATE `Oders` SET `Status`='Cancle' WHERE Order_Id='$o_id'";
    
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