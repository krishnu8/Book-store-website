
<style>
    form{
        text-align: center;
        margin-top: 10px;
        margin-left: 30%;
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
        <td colspan="2" style="font-size: 30px;">Product Insert Form !</td>
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
        <td>Price:</td>
        <td><input type="text" name="price" required></td>
    </tr>
    <tr>
        <td>Product Pic:</td>
        <td><input type="file" name="pic" required></td>
    </tr>
    <tr>
        <td>Quantity:</td>
        <td><input type="text" name="qntt" required></td>
    </tr>
    <tr>
        <td>Category:</td>
        <td><input type="text" name="c_name" required></td>
    </tr>
    <tr>
        <td>Description:</td>
        <td><input type="text" name="des    " required></td>
    </tr>
    <tr>
        <td>Author:</td>
        <td><input type="text" name="athr" required></td>
    </tr>
    <tr>
        <td>User Id:</td>
        <td> <input type="text" name="sid" required></td>
    </tr>

    <tr>
        <td colspan="2"><input type="submit" value="Upload" name="btn"  style="font-size: 20px; width: 70%; margin-left: 15%;"></td>
    </tr>
    <tr>
        <td colspan="2" style="font-size: 20px;">Return Back To Privious Page? <a href="Product.php" style="text-decoration: none; color: green;">Return</a></td>
    </tr>
</table>
</form>
<?php
include_once("../database/Create_database.php");

if(isset($_POST['btn']))
{
$p_id = @$_POST['pid'];
$p_name = @$_POST['p_name'];
$price = @$_POST['price'];
$pic = @$_FILES['pic']['name'];
$q_name = @$_POST['qntt'];
$cname = @$_POST['c_name'];
$des = @$_POST['des'];
$author = @$_POST['athr'];
$u_id = @$_POST['uid'];

$q = "INSERT INTO `Product`(`Product_Id`, `Product_Name`, `Price`, Product_Image, `Total_Quantity`,
 `Category`, `Description`, `Author`, `User_id`) VALUES 
('$p_id','$p_name','$price','$pic','$q_name','$cname','$des','$author','$u_id')";

    if(mysqli_query($con,$q))
    {
        move_uploaded_file($_FILES['pic']['tmp_name'],'image/'.$pic);
        ?>
        <script>
            alert("Pruduct Uploaded successful");
            window.location.href="Product.php";
        </script>

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
