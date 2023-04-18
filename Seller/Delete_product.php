<?php
include_once("../database/Create_database.php");
session_start();
$product_id=@$_GET['product_id'];
$path=@$_GET['path'];
$update="UPDATE `product` SET`Status`='Inactive' WHERE Product_Id='$product_id'";
if(mysqli_query($con,$update)){
    $_SESSION['update']="Product Deleted Successfully";
}else{
    $_SESSION['update']="Something Went Wrong";
}
?>
<script>
    window.location.href="<?php echo $path ?>";
</script>