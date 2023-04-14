<head>
    <style>
        form{
            text-align: center;
            margin-left: 35%;
            margin-top: 50px;
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

<!-- <link rel="stylesheet" href="../style.css"> -->
<?php
include_once("Connection.php");

// session_start();
// if (isset($_SESSION['Email_Id']) && isset($_SESSION['password'])) {

    $rol = @$_GET['Seller'];
    $q = "SELECT * FROM `registration` WHERE role='Seller'";
    $result = mysqli_query($con, $q);
    $a = mysqli_fetch_array($result);
    ?>
<form action="" method="post"enctype="multipart/form-data">
<table >
    <tr class="a1">
        <td colspan="2" style="font-size: 30px;">Update Profile</td>
    </tr>
    <tr class="a1">
        <td>Seller Id:</td>
        <td> <input type="text" name="sid" value="<?php echo "$a[10]"; ?>"></td>
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
    <tr class="a0">
        <td>password:</td>
        <td> <input type="password" name="pwd" value="<?php echo "$a[3]"; ?>"></td>
    </tr>
    <tr class="a0">
        <td>State:</td>
        <td> <input type="text" name="state"value="<?php echo "$a[4]"; ?>"></td>
    </tr>
    <tr class="a0">
        <td>City:</td>
        <td> <input type="text" name="city"value="<?php echo "$a[5]"; ?>"></td>
    </tr>
    <tr class="a0">
        <td>About:</td>
        <td> <input type="text" name="about"value="<?php echo "$a[7]"; ?>"></td>
    </tr>



    <tr class="a1">
        <td colspan="2"><input type="submit" value="Update" name="btn"  style="font-size: 20px; width: 30%; border-radius: 5px;"></td>
    </tr>
    <tr class="a0">
        <td colspan="2" style="font-size: 20px;">Return Backt To Previous Page? <a href="../Seller.php" style="text-decoration: none; color: green;">Return</a></td>
    </tr>
</table>
</form>
<?php
        if (isset($_POST['btn'])) {
            $s_id = @$_POST['sid'];
            $name = @$_POST['name'];
            $em = @$_POST['em'];
            $phone = @$_POST['phone'];
            $pwd = @$_POST['pwd'];
            $st = @$_POST['state'];
            $ct = @$_POST['city'];
            $ab = @$_POST['about'];

            $update = "UPDATE `registration` SET `Fullname`='$name',`Email`='$em',`mobile`='$phone',`password`='$pwd',
            `State`='$st',`City`='$ct',`About`='$ab',`User_id`='$s_id'WHERE role='Seller'";
            if (mysqli_query($con, $update)) {
                ?>
        <script>
            alert("Data Updated successfully");
            window.location.href="../Seller.php?Email_Id=<?php echo $em ?>";
        </script>
        <?php
            } else {
                ?>
        <script>
            alert("Data Updated fail  Try Again latter");
            window.location.href="../Seller.php?Email_Id=<?php echo $em ?>";
        </script>
        <?php
            }
        }
// }
// else
// {
//     header("location:Login.php");
// }