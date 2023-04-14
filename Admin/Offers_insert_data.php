<style>
    form{
        text-align: center;
        margin-top: 10px;
        margin-left: 35%;
    }
    tr td{
        font-size: 25px;
    }
    tr td input{
        font-size: 17px;
    }
</style>
<!-- <link rel="stylesheet" href="style.css"> -->
<?php
include_once('Header.php');
?>

<form action="" method="post"enctype="multipart/form-data">
<table border="1">
    <tr>
        <td colspan="2" style="font-size: 30px;">The Offers Insert Form !</td>
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
        <td colspan="2"><input type="submit" value="Add To Cart" name="btn"  style="font-size: 20px; width: 70%; margin-left: 15%;"></td>
    </tr>
    <tr>
        <td colspan="2" style="font-size: 20px;">Return Back To Privious Page? <a href="Offers.php" style="text-decoration: none; color: green;">Return</a></td>
    </tr>
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
            window.location.href="Offers.php";
        </script>

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
