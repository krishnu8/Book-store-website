<?php
session_start();
include_once("../database/Create_database.php");
$cupon=@$_GET['cupon'];
$user_id=$_SESSION['User_id'];
$cuponsel="SELECT * FROM `offer` WHERE coupon='$cupon'";
$cuponrow=mysqli_num_rows(mysqli_query($con,$cuponsel));
$cupondata=mysqli_fetch_array(mysqli_query($con,$cuponsel));
$date=date('Y/m/d');
if($cuponrow==0){
    echo "invalid cupon";
}elseif($date>=$cupondata[4] && $date<=$cupondata[5]){
    $secart="SELECT * FROM `cart` WHERE user_id='$user_id'";
    $cartcategory=mysqli_fetch_array(mysqli_query($con,$secart));
}

?>