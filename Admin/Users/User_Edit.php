<link rel="stylesheet" href="../style.css">
<?php
include_once("Connection.php");

// session_start();
// if (isset($_SESSION['Email_Id']) && isset($_SESSION['password'])) {

    $rol = @$_GET['User'];
    $q = "SELECT * FROM `registration` WHERE role='User'";
    $result = mysqli_query($con, $q);
    $a = mysqli_fetch_array($result);
    ?>
<form action="" method="post"enctype="multipart/form-data">
<table >
    <tr class="a1">
        <td colspan="2" style="font-size: 30px;">Update Profile</td>
    </tr>
    <tr class="a1">
        <td>Full Name:</td>
        <td> <input type="text" name="name" value="<?php echo "$a[0]"; ?>"></td>
    </tr>
    <tr class="a1">
        <td>Email ID:</td>
        <td><input type="email" name="em" value="<?php echo "$a[1]"; ?>" readonly> <br></td>
    </tr>
    <tr class="a0">
        <td>Phone Number:</td>
        <td><input type="tel" name="phone" value="<?php echo "$a[2]"; ?>"></td>
    </tr>
    <tr class="a1">
        <td>password:</td>
        <td> <input type="password" name="pwd" value="<?php echo "$a[3]"; ?>"></td>
    </tr>
    <tr class="a0">
        <td>State:</td>
        <td> <input type="text" name="state"value="<?php echo "$a[4]"; ?>"></td>
    </tr>
    <tr class="a1">
        <td>City:</td>
        <td> <input type="text" name="city"value="<?php echo "$a[5]"; ?>"></td>
    </tr>
    <tr class="a0">
        <td>About:</td>
        <td> <input type="text" name="about"value="<?php echo "$a[7]"; ?>"></td>
    </tr>
    <tr class="a1">
        <td>Your Id NO:</td>
        <td> <input type="text" name="uid"value="<?php echo "$a[10]"; ?>"></td>
    </tr>



    <tr class="a1">
        <td colspan="2"><input type="submit" value="Update" name="btn"  style="font-size: 20px; width: 30%; border-radius: 5px;"></td>
    </tr>
    <tr class="a0">
        <td colspan="2" style="font-size: 20px;">Have an account? <a href="Login.php" style="text-decoration: none; color: green;">Login</a></td>
    </tr>
</table>
</form>
<?php
        if (isset($_POST['btn'])) {
            $name = @$_POST['name'];
            $em = @$_POST['em'];
            $phone = @$_POST['phone'];
            $pwd = @$_POST['pwd'];
            $st = @$_POST['state'];
            $ct = @$_POST['city'];
            $ab = @$_POST['about'];
            $id = @$_POST['uid'];

            $update = "UPDATE `registration` SET `Fullname`='$name',`Email`='$em',`mobile`='$phone',`password`='$pwd',
            `State`='$st',`City`='$ct',`About`='$ab',`User_id`='$id'WHERE role='User'";
            if (mysqli_query($con, $update)) {
                ?>
        <script>
            alert("Data Updated successfully");
            window.location.href="User.php?Email_Id=<?php echo $em ?>";
        </script>
        <?php
            } else {
                ?>
        <script>
            alert("Data Updated fail  Try Again latter");
            window.location.href="User.php?Email_Id=<?php echo $em ?>";
        </script>
        <?php
            }
        }
// }
// else
// {
//     header("location:Login.php");
// }