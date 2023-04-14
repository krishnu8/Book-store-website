

<style>
    form{
        text-align: center;
        margin-left: 30%;
        margin-top: 10px;
    }
    tr td input{
        font-size: 17px;
    }
    tr td{
        font-size: 25px;
    }
</style>

<!-- <link rel="stylesheet" href="style.css"> -->

<?php
include_once('Header.php');
?>

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
        <td>Cart Pic:</td>
        <td> <input type="file" name="pic" required></td>
    </tr>
    <tr>
        <td>Quantity:</td>
        <td> <input type="text" name="quan" required></td>
    </tr>
    <tr>
    <tr>
        <td>Price:</td>
        <td><input type="text" name="price" required></td>
    </tr>
        <td>Total:</td>
        <td> <input type="text" name="total" required></td>
    </tr>
   
    <tr>
        <td colspan="2"><input type="submit" value="Add To Cart" name="btn"  style="font-size: 20px; width: 70%; margin-left: 15%;"></td>
    </tr>
    <tr>
        <td colspan="2" style="font-size: 20px;">Return Back To Privious Page? <a href="Cart.php" style="text-decoration: none; color: green;">Return</a></td>
    </tr>
</table>
</form>
<?php
include_once("../database/Create_database.php");

if(isset($_POST['btn']))
{
$p_id = @$_POST['pid'];
$s_id = @$_POST['uid'];
$pic = @$_POST['pic']['name'];
$quan = @$_POST['quan'];
$price = @$_POST['price'];
$cat = @$_POST['total'];

$q = "INSERT INTO `Carts`(`Product_Id`, `User_Id`, `Cart_pic`, `Quantity`, `Price`, `Total`) VALUES 
('$p_id','$s_id','$pic','$quan','$price','$cat')";

    if(mysqli_query($con,$q))
    {
        move_uploaded_file($_FILES['pic']['tmp_name'],'image/'.$pic);
        ?>
        <script>
            alert("Add To Cart successful");
            window.location.href="Cart.php";

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
