
<link rel="stylesheet" href="Github-killu/style.css">
<?php
include_once("../database/Create_database.php");

    $p_id = @$_GET['Product_Id'];

    $q = "SELECT * FROM `Products` WHERE Product_Id='$p_id'";

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
        <td>Seller_Id_NO:</td>
        <td><input type="text" name="sid" value="<?php echo "$a[2]"; ?>" readonly></td>
    </tr>
    <tr class="a0">
        <td>Price:</td>
        <td> <input type="text" name="price" value="<?php echo "$a[3]"; ?>"></td>
    </tr>
    <tr class="a1">
        <td>Quantity:</td>
        <td> <input type="text" name="qntt" value="<?php echo "$a[4]"; ?>"></td>
    </tr>
    <tr class="a1">
        <td>Author:</td>
        <td><input type="text" name="athr" value="<?php echo "$a[5]"; ?>"> <br></td>
    </tr>
    <tr class="a0">
        <td>Category:</td>
        <td><input type="text" name="c_name" value="<?php echo "$a[6]"; ?>"></td>
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
            $s_id = @$_POST['sid'];
            $price = @$_POST['price'];
            $q_name = @$_POST['qntt'];
            $author = @$_POST['athr'];
            $cname = @$_POST['c_name'];

            $update = "UPDATE `Products` SET `Product_Name`='$p_name',`Seller_Id`='$s_id',`Price`='$price',`Quantity`='$q_name',`Author`='$author',`Category`='$cname'WHERE Product_Id='$p_id'";
            if (mysqli_query($con, $update)) {
                ?>
        <script>
            alert("Data Updated successfully");
            window.location.href="Product_Fetch_data.php";
        </script>
        <?php
            } else {
                ?>
        <script>
            alert("Data Updated fail  Try Again latter");
            window.location.href="Order_Fetch_data.php";
        </script>
        <?php
            }
        }