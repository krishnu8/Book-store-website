<?php
include_once("../database/Create_database.php");
session_start();
$order_id=@$_GET['order_id'];
$update="UPDATE `oders` SET `Status`='Inactive' WHERE Order_Id='$order_id'";
if(mysqli_query($con,$update)){
    $_SESSION['Order_cancle_succ']="Successfully Your Order is Cancle";
}else{
    $_SESSION['Order_cancle_err']="Failed to Cancle Your Order";
}
?>
<script>
    window.location.href="user_order.php";
</script>