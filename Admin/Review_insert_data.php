

<style>
    tr td input{
        color: black;
    }
</style>

<link rel="stylesheet" href="style.css">

<form action="" method="post"enctype="multipart/form-data">
<table border="1">
    <tr>
        <td colspan="2" style="font-size: 30px;">Review/Feedback Form !</td>
    </tr>
    <tr>
        <td>Uer_Id:</td>
        <td> <input type="text" name="uid" required></td>
    </tr>
    <tr>
        <td>Product_Id_NO:</td>
        <td><input type="text" name="pid" required></td>
    </tr>
    <tr>
        <td>Feedback:</td>
        <td><input type="text" name="qntt" required></td>
    </tr>
    <tr>
        <td>Rating:</td>
        <td><input type="text" name="price" required></td>
    </tr>
    <tr>
        <td>My Product Pic:</td>
        <td><input type="file" name="pic" style="color: #fff;" required></td>
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
$o_id = @$_POST['uid'];
$p_id = @$_POST['pid'];
$c_name = @$_POST['qntt'];
$price = @$_POST['price'];
$pic = @$_FILES['pic']['name'];

$q = "INSERT INTO `Review`(`User_Id`, `Product_Id`, `Feedback`, `Rating`,`Review_pic`) VALUES 
('$o_id','$p_id','$c_name','$price','$pic')";

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
<td><a href="Review.php" style="text-decoration: none; color: green; width: 50%; text-align: center; 
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
