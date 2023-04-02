

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
        <td>Product_Id:</td>
        <td> <input type="text" name="pid" required></td>
    </tr>
    <tr>
        <td>Product_Name:</td>
        <td> <input type="text" name="p_name" required></td>
    </tr>
    <tr>
        <td>Seller_Id:</td>
        <td> <input type="text" name="sid" required></td>
    </tr>
    <tr>
        <td>Price: </td>
        <td><input type="text" name="price" required></td>
    </tr>
    <tr>
        <td>Quantity:</td>
        <td><input type="text" name="qntt" required></td>
    </tr>
    <tr>
        <td>Author:</td>
        <td><input type="text" name="athr" required></td>
    </tr>
    <tr>
        <td>Category:</td>
        <td><input type="text" name="c_name" required></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="Upload" name="btn"  style="font-size: 20px; width: 30%; background: green; border-radius: 7px;"></td>
    </tr>
    <!-- <tr>
        <td colspan="2" style="font-size: 20px;">Have an account? <a href="Login.php" style="text-decoration: none; color: green;">Login</a></td>
    </tr> -->
</table>
</form>
<?php
include_once("../database/Create_database.php");

if(isset($_POST['btn']))
{
$p_id = @$_POST['pid'];
$p_name = @$_POST['p_name'];
$s_id = @$_POST['sid'];
$price = @$_POST['price'];
$q_name = @$_POST['qntt'];
$author = @$_POST['athr'];
$cname = @$_POST['c_name'];

$q = "INSERT INTO `Products`(`Product_Id`, `Product_Name`, `Seller_Id`, `Price`, `Quantity`, `Author`, `Category`) VALUES 
('$p_id','$p_name','$s_id','$price','$q_name','$author','$cname')";

    if(mysqli_query($con,$q))
    {
        // move_uploaded_file($_FILES['pic']['tmp_name'],'uploads/'.$pic);
        ?>
        <script>
            alert("Pruduct Uploaded successful");
        </script>
        <?php

        ?>
<tr>
<td><a href="Product.php" style="text-decoration: none; color: green; width: 50%; text-align: center; 
font-size: 25px; background: transparent; border-radius: 5px; border:2px solid black;">View Data</a></td>
</tr>
<?php
    }
    else{
        ?>
        <script>
            alert("Product Uploaded unsuccessful");
        </script>
        <?php
    }
}
