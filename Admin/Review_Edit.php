
<link rel="stylesheet" href="style.css">
<?php
include_once("../database/Create_database.php");

    $o_id = @$_GET['User_Id'];

    $q = "SELECT * FROM `Review` WHERE User_Id='$o_id'";

    $result = mysqli_query($con, $q);
    $a = mysqli_fetch_array($result);
    ?>
<form action="" method="post"enctype="multipart/form-data">
<table >
    <tr class="a1">
        <td colspan="2" style="font-size: 30px;">Update Review Details !</td>
    </tr>
    <tr class="a1">
        <td>User_Id_NO:</td>
        <td> <input type="text" name="uid" value="<?php echo "$a[0]"; ?>" readonly></td>
    </tr>
    <tr class="a0">
        <td>Product_Id_NO:</td>
        <td><input type="text" name="pid" value="<?php echo "$a[1]"; ?>"></td>
    </tr>
    <tr class="a1">
        <td>Feedback:</td>
        <td> <input type="text" name="qntt" value="<?php echo "$a[2]"; ?>"></td>
    </tr>
    <tr class="a0">
        <td>Rating:</td>
        <td> <input type="text" name="price" value="<?php echo "$a[3]"; ?>"></td>
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
            $o_id = @$_POST['uid'];
            $p_id = @$_POST['pid'];
            $c_name = @$_POST['qntt'];
            $price = @$_POST['price'];

            $update = "UPDATE `Review` SET `Product_Id`='$p_id',`Feedback`='$c_name',`Rating`='$price'WHERE User_Id='$o_id'";
            if (mysqli_query($con, $update)) {
                ?>
        <script>
            alert("Data Updated successfully");
            window.location.href="Review.php";
        </script>
        <?php
            } else {
                ?>
        <script>
            alert("Data Updated fail  Try Again latter");
            window.location.href="Review.php";
        </script>
        <?php
            }
        }