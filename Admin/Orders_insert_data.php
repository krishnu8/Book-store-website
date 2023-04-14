
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
        <td colspan="2"><input type="submit" value="Register" name="btn"  style="font-size: 20px; width: 70%; margin-left: 15%;"></td>
    </tr>
    <tr>
        <td colspan="2" style="font-size: 20px;">Return Back To Privious Page? <a href="Orders.php" style="text-decoration: none; color: green;">Return</a></td>
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
$odt = @$_POST['orderdt'];
$ddt = @$_POST['deleverdt'];
$uid = @$_POST['uid'];

$q = "INSERT INTO `Oders`(`Order_Id`, `Product_Id`, `Quantity`, `Order_date`, `Deliver_date`, `User_Id`) VALUES 
('$o_id','$p_id','$c_name','$odt','$ddt','$uid')";

    if(mysqli_query($con,$q))
    {
        // move_uploaded_file($_FILES['pic']['tmp_name'],'uploads/'.$pic);
        ?>
        <script>
            alert("Registration successful");
            window.location.href="Orders.php";
        </script>

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
