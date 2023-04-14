<style>
    form{
        text-align: center;
        margin-top: 10px;
        margin-left: 35%;
    }
    tr td{
        font-size: 20px;
    }
    tr td input{
        font-size: 17px;
    }
</style>
<?php
include_once('Header.php');
?>

<!-- <link rel="stylesheet" href="style.css"> -->
<?php
include_once("../database/Create_database.php");

    $p_id = @$_GET['Product_Id'];
    $q = "SELECT * FROM `product` WHERE Product_Id='$p_id'";
    $result = mysqli_query($con, $q);
    $a = mysqli_fetch_array($result);
    ?>
<form action="" method="post"enctype="multipart/form-data">
<table >
    <tr class="a1">
        <td colspan="2" style="font-size: 30px;">Update Product Details !</td>
    </tr>
    <tr class="a0">
        <td>Product_Id_NO:</td>
        <td><input type="text" name="pid" value="<?php echo "$a[0]"; ?>" readonly></td>
    </tr>
    <tr class="a1">
        <td>Product_Name:</td>
        <td> <input type="text" name="p_name" value="<?php echo "$a[1]"; ?>"></td>
    </tr>
    <tr class="a0">
        <td>Price:</td>
        <td> <input type="text" name="price" value="<?php echo "$a[2]"; ?>"></td>
    </tr>
    <tr class="a1">
        <td>Quantity:</td>
        <td> <input type="text" name="qntt" value="<?php echo "$a[4]"; ?>"></td>
    </tr>
    <tr class="a0">
        <td>Category:</td>
        <td><input type="text" name="c_name" value="<?php echo "$a[6]"; ?>"></td>
    </tr>
    <tr class="a1">
        <td>Description:</td>
        <td><input type="text" name="des" value="<?php echo "$a[7]"; ?>"> <br></td>
    </tr>
    <tr class="a1">
        <td>Author:</td>
        <td><input type="text" name="athr" value="<?php echo "$a[8]"; ?>"> <br></td>
    </tr>
    <tr class="a0">
        <td>User_Id NO:</td>
        <td><input type="text" name="uid" value="<?php echo "$a[9]"; ?>"></td>
    </tr>

    <tr class="a1">
        <td colspan="2"><input type="submit" value="Update" name="btn"  style="font-size: 20px; width: 30%; border-radius: 5px;"></td>
    </tr>
    <!-- <tr class="a0">
        <td colspan="2" style="font-size: 20px;">Have an account? <a href="Login.php" style="text-decoration: none; color: green;">Login</a></td>
    </tr> -->
</table>
</form>
<?php
        if (isset($_POST['btn'])) {
            $p_id = @$_POST['pid'];
            $p_name = @$_POST['p_name'];
            $price = @$_POST['price'];
            $q_name = @$_POST['qntt'];
            $cname = @$_POST['c_name'];
            $des = @$_POST['des'];
            $author = @$_POST['athr'];
            $u_id = @$_POST['uid'];

            $update = "UPDATE `Product` SET `Product_Name`='$p_name',`Price`='$price',`Total_Quantity`='$q_name',
            `Category`='$cname',`Description`='$des',`Auther`='$author',`User_id`='$u_id'WHERE Product_Id='$p_id'";
            if (mysqli_query($con, $update)) {
                ?>
        <script>
            alert("Data Updated successfully");
            window.location.href="Product.php";
        </script>
        <?php
            } else {
                ?>
        <script>
            alert("Data Updated fail  Try Again latter");
            window.location.href="Product.php";
        </script>
        <?php
            }
        }