

<style>
    tr td input{
        color: black;
    }
</style>

<link rel="stylesheet" href="style.css">

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
        <td>User Id:</td>
        <td><input type="text" name="uid" required></td>
    </tr>
    <tr>
        <td>My Cart Pic:</td>
        <td> <input type="file" name="pic" style="color:#fff;" required></td>
    </tr>
    <tr>
        <td>Quantity:</td>
        <td> <input type="text" name="quan" required></td>
    </tr>
    <tr>
        <td>Price:</td>
        <td><input type="text" name="price" required></td>
    </tr>
    <tr>
        <td>Total:</td>
        <td> <input type="text" name="total" required></td>
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
$u_id = @$_POST['uid'];
$pic = @$_FILES['pic']['name'];
$quan = @$_POST['quan'];
$price = @$_POST['price'];
$total = @$_POST['total'];

$q = "INSERT INTO `carts`(`Product_Id`, `User_Id`, `Cart_pic`, `Quantity`, `Price`, `Total`) VALUES 
('$p_id','$u_id','$pic','$quan','$price','$total')";

    if(mysqli_query($con,$q))
    {
        move_uploaded_file($_FILES['pic']['tmp_name'],'image/'.$pic);
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
