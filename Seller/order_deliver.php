<?php
session_start();
include_once("../database/Create_database.php");
$order_id=@$_GET['order_id'];
$path=@$_GET['path'];
// echo $order_id;
$update="UPDATE `oders` SET `Status`='Delivered' WHERE Order_Id='$order_id'";
if(mysqli_query($con,$update)){
    $_SESSION['Deliver_order']="Order Delivered Successfully";
}else{
    $_SESSION['Deliver_order']="Something Went wrong";
}
?>
<script>
    window.location.href="<?php echo $path?>";
</script>
