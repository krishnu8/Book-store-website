<?php
session_start();
include_once("../database/Create_database.php");
$cupon=@$_GET['cupon'];
$user_id=$_SESSION['User_id'];
$cuponsel="SELECT * FROM `offer` WHERE coupon='$cupon'";
$cuponrow=mysqli_num_rows(mysqli_query($con,$cuponsel));
$cupondata=mysqli_fetch_array(mysqli_query($con,$cuponsel));
$date=date('Y-m-d');
$count=0;
$ta=0;
if($cuponrow !=0){
    if($date>=$cupondata[4] && $date<=$cupondata[5]){
        $catesel="select * FROM cart INNER JOIN product ON cart.product_id = product.product_id WHERE cart.user_id='$user_id'";
        $cate=mysqli_query($con,$catesel);
        while($a=mysqli_fetch_array($cate)){
            if($a[10]==$cupondata[3]){
                $count++;
            }
            $ta++;
        }
        if($count==$ta){
            $carttota="SELECT sum(`price`) FROM `cart` WHERE user_id='$user_id'";
            $carttotal=mysqli_fetch_array(mysqli_query($con,$carttota));
            if($carttotal[0]>=$cupondata[7]){
                $_SESSION['Discount']=$cupondata[2];
                echo $cupondata[2]."% Discount have been Applied to your cart";
            }else{
                echo "less than Requireed price";
            }
        }else{
            echo "All product must be of same category";
        }
    }else{
        echo "Offer is expire";
    }

}else{
    echo "invalid cupon";
}
