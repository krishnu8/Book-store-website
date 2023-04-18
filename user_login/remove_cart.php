<?php
include_once("nave.php");
$user_id=@$_GET['user_id'];
$Product_id=@$_GET['product_id'];
$remove="DELETE FROM `cart` WHERE product_id='$Product_id' and user_id='$user_id'";
if(mysqli_query($con,$remove)){
 $_SESSION['cart']='Product Deleted From Cart';
}else{
    $_SESSION['cart']='Product Deleted From Cart';
}
?>
<script>
    window.location.href="cart.php";
</script>
