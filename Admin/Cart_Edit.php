<head>
    <style>
        form{
        text-align: center;
        margin-left: 37%;
        margin-top: 10px;
    }
    tr td input{
        font-size: 17px;
        border-radius: 5px;
    }
    tr td{
        font-size: 20px;
    }
    </style>
</head>
<?php
include_once('Header.php');
?>

<!-- <link rel="stylesheet" href="style.css"> -->
<?php
include_once("../database/Create_database.php");

    $p_id = @$_GET['Product_Id'];

    $q = "SELECT * FROM `Carts` WHERE Product_Id='$p_id'";

    $result = mysqli_query($con, $q);
    $a = mysqli_fetch_array($result);
    ?>
<form action="" method="post"enctype="multipart/form-data">
<table >
    <tr class="a1">
        <td colspan="2" style="font-size: 30px;">Update Cart Details !</td>
    </tr>
    <tr class="a0">
        <td>Product Id NO:</td>
        <td><input type="text" name="pid" value="<?php echo "$a[0]"; ?>" readonly></td>
    </tr>
    <tr class="a1">
        <td>User Id:</td>
        <td> <input type="text" name="uid" value="<?php echo "$a[1]"; ?>"></td>
    </tr>
    <tr class="a1">
        <td>Quantity:</td>
        <td> <input type="text" name="qntt" value="<?php echo "$a[4]"; ?>"></td>
    </tr>
    <tr class="a1">
        <td>Price:</td>
        <td> <input type="text" name="price" value="<?php echo "$a[1]"; ?>"></td>
    </tr>
    <tr class="a1">
        <td>Total:</td>
        <td> <input type="text" name="total" value="<?php echo "$a[4]"; ?>"></td>
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
            $s_id = @$_POST['uid'];
            $price = @$_POST['price'];
            $quan = @$_POST['quan'];
            $cat = @$_POST['total'];

            $update = "UPDATE `Carts` SET `User_Id`='$s_id',`Quantity`='$quan',`Price`='$price',
            `Total`='$cat'WHERE Product_Id='$p_id'";
            if (mysqli_query($con, $update)) {
                ?>
        <script>
            alert("Data Updated successfully");
            window.location.href="Cart.php";
        </script>
        <?php
            } else {
                ?>
        <script>
            alert("Data Updated fail  Try Again latter");
            window.location.href="Cart_Fetch_data.php";
        </script>
        <?php
            }
        }