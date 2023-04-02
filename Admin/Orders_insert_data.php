

<style>
    tr td input{
        color: black;
    }
</style>

<link rel="stylesheet" href="Github-killu/style.css">

<form action="" method="post"enctype="multipart/form-data">
<table border="1">
    <tr>
        <td colspan="2" style="font-size: 30px;">Order Insert Form !</td>
    </tr>
    <tr>
        <td>Order Id_NO:</td>
        <td><input type="text" name="oid" required></td>
    </tr>
    <tr>
        <td>Product_Id:</td>
        <td> <input type="text" name="pid" required></td>
    </tr>
    <tr>
        <td>Quantity:</td>
        <td><input type="text" name="qntt" required></td>
    </tr>
    <tr>
        <td>Price: </td>
        <td><input type="text" name="price" required></td>
    </tr>
    <tr>
        <td>Ordered Date:</td>
        <td><input type="date" name="orderdt" required></td>
    </tr>
    <tr>
        <td>Deliver Date:</td>
        <td><input type="date" name="deleverdt" required></td>
    </tr>
    <tr>
        <td>User_Id:</td>
        <td> <input type="text" name="uid" required></td>
    </tr>
    <tr>
        <td>Description:</td>
        <td><input type="text" name="dis" required></td>
    </tr>
   
    <tr>
        <td colspan="2"><input type="submit" value="Register" name="btn"  style="font-size: 20px; width: 30%; "></td>
    </tr>
    <tr>
        <td colspan="2" style="font-size: 20px;">Have an account? <a href="Login.php" style="text-decoration: none; color: green;">Login</a></td>
    </tr>
</table>
</form>
<?php
include_once("../database/Create_database.php");

if(isset($_POST['btn']))
{
$o_id = @$_POST['oid'];
$p_id = @$_POST['pid'];
$c_name = @$_POST['qntt'];
$price = @$_POST['price'];
$odt = @$_POST['orderdt'];
$ddt = @$_POST['deleverdt'];
$uid = @$_POST['uid'];
$des = @$_POST['dis'];

$q = "INSERT INTO `Oders`(`Order_Id`, `Product_Id`, `Quantity`, `Price`, `Order_date`, `Deliver_date`, `User_Id`, `Description`) VALUES 
('$o_id','$p_id','$c_name','$price','$odt','$ddt','$uid','$des')";

    if(mysqli_query($con,$q))
    {
        // move_uploaded_file($_FILES['pic']['tmp_name'],'uploads/'.$pic);
        ?>
        <script>
            alert("Registration successful");
        </script>
        <?php

        ?>
<tr>
<td><a href="Order.php" style="text-decoration: none; color: green; width: 50%; text-align: center; 
font-size: 25px; background: transparent; border-radius: 5px; border:2px solid black;">View Data</a></td>
</tr>
<?php
    }
    else{
        ?>
        <script>
            alert("Registration unsuccessful");
        </script>
        <?php
    }
}
