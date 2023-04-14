<?php
include_once("../database/Create_database.php");

$o_id = @$_GET['Order_Id'];
// echo $o_id;
$q = "UPDATE `Oders` SET `Status`='Active' WHERE Order_Id='$o_id'";

    if(mysqli_query($con,$q)){
        ?>
            <script>
                alert("Order Ativated");
                window.location.href = "Orders.php";
            </script>
        <?php
    }
    else{
        ?>
            <script>
                alert("Failed to Activate order");
                window.location.href = "Orders.php";
            </script>
        <?php
    }
?>