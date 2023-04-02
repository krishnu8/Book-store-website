<link rel="stylesheet" href="style.css">
<?php
include_once("Connection.php");
session_start();
if (isset($_SESSION['Email']) && isset($_SESSION['password'])) {
    $email = $_SESSION['Email'];
    $q = "Select * from Admin where Email='Email'";
    $result = mysqli_query($con, $q);
    $a = mysqli_fetch_array($result);
    ?>
<form action="" method="post"enctype="multipart/form-data">
<table >
    <tr class="a1">
        <td colspan="2" style="font-size: 30px;">Update Profile</td>
    </tr>
    <tr class="a0">
        <td>Your ID_NO:</td>
        <td><input type="text" name="Enroll" value="<?php echo "$a[0]"; ?>" readonly> </td>
    </tr>
    <tr class="a1">
        <td>Name:</td>
        <td> <input type="text" name="name" value="<?php echo "$a[1]"; ?>"></td>
    </tr>
    <tr class="a0">
        <td>Branch</td>
        <td> <select name="branch" id="">
             <option value="CV">Civil</option>
             <option value="CE">Compuer</option>
             <option value="ME">Mechanical</option>
             <option value="EE">Electrical</option>
            </select>  
        </td>
    </tr>
    <tr class="a1">
        <td>Your ROLE:</td>
        <td> <select name="Sem" id="">
            <option value="User">User</option>
            <option value="Admin">Admin</option>
            <option value="Student">Student</option>
            <option value="Others">Others</option>
            </select> 
        </td>
    </tr>
    <tr class="a1">
        <td>Address:</td>
        <td> <input type="text" name="add"value="<?php echo "$a[6]"; ?>"></td>
    </tr>
    <tr class="a0">
        <td>Email:</td>
        <td><input type="email" name="em" value="<?php echo "$a[7]"; ?>" readonly> <br></td>
    </tr>
    <tr class="a1">
        <td>Phone Number:</td>
        <td><input type="number" name="phone" value="<?php echo "$a[8]"; ?>"></td>
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
            $branch = @$_POST['branch'];
            $sem = @$_POST['Sem'];
            $add = @$_POST['add'];
            $em = @$_POST['em'];
            $phone = @$_POST['phone'];

            $update = "UPDATE `Admin` SET `Name`='$name',`Branch`='$branch',`Role`='$sem',`Address`='$add',`Email`='$em',`Phone_Number`='$phone'WHERE ID_NO='$Enroll'";
            if (mysqli_query($con, $update)) {
                ?>
        <script>
            alert("Data Updated successfully");
            window.location.href="../Dashboard.php?Email=<?php echo $em ?>";
        </script>
        <?php
            } else {
                ?>
        <script>
            alert("Data Updated fail  Try Again latter");
            window.location.href="../Dashboard.php?Email=<?php echo $em ?>";
        </script>
        <?php
            }
        }
}
else
{
    header("location:Login.php");
}