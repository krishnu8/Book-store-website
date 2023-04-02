

<style>
    tr td input{
        color: black;
    }
</style>

<link rel="stylesheet" href="Github-killu/style.css">

<form action="" method="post"enctype="multipart/form-data">
<table border="1">
    <tr>
        <td colspan="2" style="font-size: 30px;">The Offers Form !</td>
    </tr>
    
    <tr>
        <td>Discount:</td>
        <td><input type="text" name="disc" required></td>
    </tr>
    <tr>
        <td>Category:</td>
        <td><input type="text" name="cat" required></td>
    </tr>
    <tr>
        <td>Start Date:</td>
        <td><input type="date" name="startdt" required></td>
    </tr>
    <tr>
        <td>End Date:</td>
        <td><input type="date" name="enddt" required></td>
    </tr>
    <tr>
        <td>Coupen:</td>
        <td><input type="text" name="cup" required></td>
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
$dis = @$_POST['disc'];
$cat = @$_POST['cat'];
$sdt = @$_POST['startdt'];
$edt = @$_POST['enddt'];
$cup = @$_POST['cup'];

$q = "INSERT INTO `Offers`(`Discount`, `Category`, `Start_date`, `End_date`,
 `Coupon`) VALUES ('$dis','$cat','$sdt','$edt','$cup')";

    if(mysqli_query($con,$q))
    {
        // move_uploaded_file($_FILES['pic']['tmp_name'],'uploads/'.$pic);
        ?>
        <script>
            alert("Offers Data Uploaded successful");
        </script>
        <?php

        ?>
<tr>
<td><a href="Offers.php" style="text-decoration: none; color: green; width: 50%; text-align: center; 
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
