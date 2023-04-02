

<style>
    tr td input{
        color: black;
    }
</style>

<link rel="stylesheet" href="Github-killu/style.css">

<form action="" method="post"enctype="multipart/form-data">
<table border="1">
    <tr>
        <td colspan="2" style="font-size: 30px;">Add To Cart Form !</td>
    </tr>
    <tr>
        <td>Product_Id_NO:</td>
        <td><input type="text" name="pid" required></td>
    </tr>
    <tr>
        <td>Product Name:</td>
        <td> <input type="text" name="pname" required></td>
    </tr>
    <tr>
        <td>Seller Id:</td>
        <td><input type="text" name="sid" required></td>
    </tr>
    <tr>
        <td>Price:</td>
        <td><input type="text" name="price" required></td>
    </tr>
    <tr>
        <td>Quantity:</td>
        <td> <input type="text" name="quan" required></td>
    </tr>
    <tr>
        <td>Author:</td>
        <td> <input type="text" name="author" required></td>
    </tr>
    <tr>
        <td>Category:</td>
        <td> <input type="text" name="cat" required></td>
    </tr>
   
    <tr>
        <td colspan="2"><input type="submit" value="Add To Cart" name="btn"  style="font-size: 20px; width: 30%; "></td>
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
$pname = @$_POST['pname'];
$s_id = @$_POST['sid'];
$price = @$_POST['price'];
$quan = @$_POST['quan'];
$auther = @$_POST['author'];
$cat = @$_POST['cat'];

$q = "INSERT INTO `Carts`(`Product_Id`, `Product_Name`, `Seller_Id`, `Price`, `Quantity`, `Author`, `Category`) VALUES 
('$p_id','$pname','$s_id','$price','$quan','$auther','$cat',)";

    if(mysqli_query($con,$q))
    {
        // move_uploaded_file($_FILES['pic']['tmp_name'],'uploads/'.$pic);
        ?>
        <script>
            alert("Add To Cart successful");
        </script>
        <?php

        ?>
<tr>
<td><a href="Cart.php" style="text-decoration: none; color: green; width: 50%; text-align: center; 
font-size: 25px; background: transparent; border-radius: 5px; border:2px solid black;">View Data</a></td>
</tr>
<?php
    }
    else{
        ?>
        <script>
            alert("Error please Ckeck! unsuccessful");
        </script>
        <?php
    }
}
