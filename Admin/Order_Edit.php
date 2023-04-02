
<link rel="stylesheet" href="Github-killu/style.css">
<?php
include_once("../database/Create_database.php");

session_start();
if (isset($_SESSION['Email_Id']) && isset($_SESSION['password'])) {
    $o_id = @$_GET['Order_Id'];
    $q = "SELECT * FROM `Oders` WHERE Order_Id='$o_id'";
    $result = mysqli_query($con, $q);
    $a = mysqli_fetch_array($result);
    ?>
<form action="" method="post"enctype="multipart/form-data">
<table >
    <tr class="a1">
        <td colspan="2" style="font-size: 30px;">Update Order Details</td>
    </tr>
    <tr class="a0">
        <td>Order_Id_NO:</td>
        <td><input type="text" name="sid" value="<?php echo "$a[0]"; ?>" readonly> </td>
    </tr>
    <tr class="a1">
        <td>Product_Id:</td>
        <td> <input type="text" name="pid" value="<?php echo "$a[1]"; ?>"></td>
    </tr>
    <tr class="a1">
        <td>Quantity:</td>
        <td> <input type="text" name="qntt" value="<?php echo "$a[2]"; ?>"></td>
    </tr>
    <tr class="a0">
        <td>Price:</td>
        <td> <input type="text" name="price" value="<?php echo "$a[3]"; ?>"></td>
    </tr>
    <tr class="a1">
        <td>Order Date:</td>
        <td><input type="date" name="orderdt" value="<?php echo "$a[4]"; ?>" readonly> <br></td>
    </tr>
    <tr class="a0">
        <td>Deliver Date:</td>
        <td><input type="text" name="deliverdt" value="<?php echo "$a[5]"; ?>"></td>
    </tr>
    <tr class="a1">
        <td>Coupon:</td>
        <td><input type="text" name="cup" value="<?php echo "$a[6]"; ?>" readonly> <br></td>
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

            $o_id = @$_POST['oid'];
            $p_id = @$_POST['pid'];
            $c_name = @$_POST['qntt'];
            $price = @$_POST['price'];
            $odt = @$_POST['orderdt'];
            $ddt = @$_POST['deleverdt'];
            $uid = @$_POST['uid'];
            $des = @$_POST['dis'];

            $update = "UPDATE `Oders` SET `Product_Id`='$p_id',`Quantity`='$c_name',`Price`='$price',
            `Order_date`='$odt', `Deliver_date`='$ddt', `User_Id`='$uid',`Description`='$des'WHERE Order_Id='$o_id'";
            if (mysqli_query($con, $update)) {
                ?>
        <script>
            alert("Data Updated successfully");
            window.location.href="Order.php?Order_Id=<?php echo $o_id ?>";
        </script>
        <?php
            } else {
                ?>
        <script>
            alert("Data Updated fail  Try Again latter");
            window.location.href="Order.php?Order_Id=<?php echo $o_id ?>";
        </script>
        <?php
            }
        }
}
else
{
    header("location:Login.php");
}