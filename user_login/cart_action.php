<?php
include_once("../database/Create_database.php");
session_start();
if(!isset($_SESSION['email'])&& !isset($_SESSION['password'])){
    ?>
    <script>
      window.location.href="login.php";
    </script>
    <?php
}
$product_id=@$_GET['product_id'];
$quantity=@$_GET['quantity'];
$user_id=$_SESSION['User_id'];
if($quantity==''){
$quantity=1;
}
$select="SELECt * FROM `cart` WHERE product_id='$product_id' AND user_id='$user_id'";
$count=mysqli_num_rows(mysqli_query($con,$select));
if($count==0){
$selectp="SELECT`Price` FROM `product` WHERE Product_Id='$product_id'";
$pri=mysqli_fetch_array(mysqli_query($con,$selectp)); 
$price=$pri[0]*$quantity;
$cart="INSERT INTO `cart`(`product_id`, `Quantity`, `user_id`,`price`) VALUES ('$product_id','$quantity','$user_id','$price')";

if(mysqli_query($con,$cart)){
$_SESSION["cart"]="Product Added to the cart";
}else{
$_SESSION["cart"]="Something Went Wrong Please try Again";
}
}else{
    $_SESSION["cart"]="This product is already present in the cart";
}
?>
    <script>
        window.location.href="cart.php";
    </script>
