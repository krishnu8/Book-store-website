<?php
include_once("../database/Create_database.php");
session_start();
$user_id=$_SESSION['User_id'];
$product_id = @$_GET['product_id'];
$quantity = @$_GET['quantity'];
$total = @$_GET['total'];
$select="UPDATE `cart` SET `Quantity`='$quantity',`price`='$total' WHERE product_id='$product_id' and user_id='$user_id'";
mysqli_query($con,$select);
?>