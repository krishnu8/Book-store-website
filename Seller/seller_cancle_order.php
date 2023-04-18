<?php
session_start();
include_once("../database/Create_database.php");
$order_id=@$_GET['order_id'];
$path=@$_GET['path'];
// echo $order_id;
$update="UPDATE `oders` SET `Status`='Inactive' WHERE Order_Id='$order_id'";
if(mysqli_query($con,$update)){
    $_SESSION['order_in']="Order cancle Successfully";
}else{
    $_SESSION['order_in']="Something Went wrong";
}
?>
<script>
    window.location.href="<?php echo $path?>";
</script>
