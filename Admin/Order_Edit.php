<head>
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
        border-radius: 5px;
        font-size: 17px;
    }
    </style>
</head>
<?php
include_once('Header.php');
?>

<!-- <link rel="stylesheet" href="style.css"> -->
<?php
include_once("../database/Create_database.php");

// session_start();
// if (isset($_SESSION['Email_Id']) && isset($_SESSION['password'])) {
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
    <tr class="a1">
        <td>Order Date:</td>
        <td><input type="date" name="orderdt" value="<?php echo "$a[3]"; ?>" readonly> <br></td>
    </tr>
    <tr class="a0">
        <td>Deliver Date:</td>
        <td><input type="text" name="deliverdt" value="<?php echo "$a[4]"; ?>"></td>
    </tr>
    <tr class="a1">
        <td>User Id:</td>
        <td><input type="text" name="uid" value="<?php echo "$a[5]"; ?>" readonly> <br></td>
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
            $odt = @$_POST['orderdt'];
            $ddt = @$_POST['deleverdt'];
            $uid = @$_POST['uid'];
 
            $update = "UPDATE `Oders` SET `Product_Id`='$p_id',`Quantity`='$c_name',
            `Order_date`='$odt', `Deliver_date`='$ddt', `User_Id`='$uid'WHERE Order_Id='$o_id'";
            if (mysqli_query($con, $update)) {
                ?>
        <script>
            alert("Data Updated successfully");
            window.location.href="Orders.php?Order_Id=<?php echo $o_id ?>";
        </script>
        <?php
            } else {
                ?>
        <script>
            alert("Data Updated fail  Try Again latter");
            window.location.href="Orders.php?Order_Id=<?php echo $o_id ?>";
        </script>
        <?php
            }
        }
// }
// else
// {
//     header("location:Login.php");
// }