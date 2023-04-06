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
$user_id=$_SESSION['User_id'];
$product_id=@$_GET['product_id'];
$quantity=@$_GET['quantity'];
$order_date = date('Y/m/d');
$Deliver_date=date('Y/m/d', strtotime(date('Y/m/d'). ' + 2 days'));
$order="INSERT INTO `oders`(`Product_Id`, `Quantity`, `Order_date`, `Deliver_date`, `User_id`, `Status`) VALUES ('$product_id','$quantity','$order_date','$Deliver_date','$user_id','Active')";
if(mysqli_query($con,$order)){
    $product_update="UPDATE `product` SET`Renaining_Quantity`=Renaining_Quantity-1 WHERE Product_Id='$product_id'";
    mysqli_query($con,$product_update);
$_SESSION["order_succ"]="Your Order has been confirmed";
}else{
$_SESSION["order_err"]="Something Went Wrong Please try Again";
}
?>
    <script>
        window.location.href="user_order.php";
    </script>
