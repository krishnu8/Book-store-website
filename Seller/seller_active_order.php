<?php
include_once("../database/Create_database.php");
session_start();
$order_id=@$_GET['order_id'];
$path=@$_GET['path'];
$update="UPDATE `oders` SET `Status`='Active' WHERE Order_Id='$order_id'";
if(mysqli_query($con,$update)){
    $_SESSION['order_in']="Order Reactivated Successfully";
}else{
    $_SESSION['order_in']="Something Went wrong";
}
?>
<script>
    window.location.href="<?php echo $path ?>";
</script>