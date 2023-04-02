
<link rel="stylesheet" href="Github-killu/style.css">
<?php
include_once("../database/Create_database.php");

    $p_id = @$_GET['Product_Id'];

    $q = "SELECT * FROM `Offers` WHERE Product_Id='$p_id'";

    $result = mysqli_query($con, $q);
    $a = mysqli_fetch_array($result);
    ?>
<form action="" method="post"enctype="multipart/form-data">
<table >
    <tr class="a1">
        <td colspan="2" style="font-size: 30px;">Update Offers Details !</td>
    </tr>

    <tr class="a1">
        <td>Discount:</td>
        <td> <input type="text" name="disc" value="<?php echo "$a[0]"; ?>"></td>
    </tr>
    <tr class="a1">
        <td>Category:</td>
        <td> <input type="text" name="cat" value="<?php echo "$a[1]"; ?>"></td>
    </tr>
    <tr class="a0">
        <td>Start Date:</td>
        <td> <input type="date" name="startdt" value="<?php echo "$a[2]"; ?>"></td>
    </tr>
    <tr class="a0">
        <td>End Date:</td>
        <td> <input type="date" name="enddt" value="<?php echo "$a[3]"; ?>"></td>
    </tr>
    <tr class="a0">
        <td>Coupen:</td>
        <td> <input type="date" name="cup" value="<?php echo "$a[4]"; ?>"></td>
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
            $dis = @$_POST['disc'];
            // $cat = @$_POST['cat'];
            $sdt = @$_POST['startdt'];
            $edt = @$_POST['enddt'];
            $cup = @$_POST['cup'];

            $update = "UPDATE `Offers` SET `Discount`='$dis',`Category`='$cat',
            `Start_date`='$sdt',`End_date`='$edt',`Coupon`='$cup'WHERE Category='$cat'";
            if (mysqli_query($con, $update)) {
                ?>
        <script>
            alert("Data Updated successfully");
            window.location.href="Offers.php";
        </script>
        <?php
            } else {
                ?>
        <script>
            alert("Data Updated fail  Try Again latter");
            window.location.href="Offers.php";
        </script>
        <?php
            }
        }