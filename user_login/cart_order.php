<?php
include_once("../database/Create_database.php");
session_start();
$user_id=$_SESSION['User_id'];
$order_date = date('Y/m/d');
$Deliver_date=date('Y/m/d', strtotime(date('Y/m/d'). ' + 2 days'));
$cartsel="SELECT * FROM `cart` WHERE user_id='$user_id'";
$a=mysqli_query($con,$cartsel);
$count=mysqli_num_rows($a);
if($count !=0){
    while($cart=mysqli_fetch_array($a)){
        $quantity=$cart[1];
        $product_id=$cart[0];
        $insert="INSERT INTO `oders`(`Product_Id`, `Quantity`, `Order_date`, `Deliver_date`, `User_id`, `Status`) VALUES ('$product_id','$quantity','$order_date','$Deliver_date','$user_id','Active')";
        mysqli_query($con,$insert);
        $product_info="UPDATE `product` SET`Renaining_Quantity`=Renaining_Quantity-$quantity WHERE Product_Id='$product_id'";
        mysqli_query($con,$product_info);
    }
    $delete="DELETE FROM `cart` WHERE user_id='$user_id'";
    mysqli_query($con,$delete);
    $_SESSION['cart_order']="Cart product Added to Order";
}else{
    $_SESSION['cart_order']="Cart Is Empty";
}
?>
<script>
    window.location.href="cart.php";
</script>