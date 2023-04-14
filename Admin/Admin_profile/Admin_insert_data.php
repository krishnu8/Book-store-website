<style>
    tr td input{
        background: black;
        color: #fff;
    }
</style>

<link rel="stylesheet" href="style.css">

<form action="" method="post"enctype="multipart/form-data">
<table border="1">
    <tr>
        <td colspan="2" style="font-size: 30px;">Registration form</td>
    </tr>
    <tr>
        <td>Admin ID_NO:</td>
        <td><input type="text" name="Enroll" required></td>
    </tr>
    <tr>
        <td>Name:</td>
        <td> <input type="text" name="name" required></td>
    </tr>
    <tr>
        <td>Branch</td>
        <td> <select name="branch" id="" required>
             <option value="CV">Civil</option>
             <option value="CE">Compuer</option>
             <option value="ME">Mechanical</option>
             <option value="EE">Electrical</option>
            </select>  
        </td>
    </tr>
    <tr>
        <td>Your ROLE:</td>
        <td> <select name="Sem" id="" required>
            <option value="User">User</option>
            <option value="Admin">Admin</option>
            <option value="Student">Student</option>
            <option value="Others">Others</option>
            </select> 
        </td>
    </tr>
    <tr>
        <td>Date Of Birth: </td>
        <td><input type="date" name="dob" required></td>
    </tr>
    <tr>
        <td>Gender:</td>
        <td> <input type="radio" name="gen" value="Male">Male
             <input type="radio" name="gen" value="Female"> Female
        </td>
    </tr>
    <tr>
        <td>Address:</td>
        <td> <input type="text" name="add" required></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><input type="email" name="em"> <br required></td>
    </tr>
    <tr>
        <td>Phone Number:</td>
        <td><input type="number" name="phone" required></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td> <input type="password" name="pwd" required></td>
    </tr>
    <tr>
        <td>Profile picture:</td>
        <td><input type="file" name="pic" required></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="Register" name="btn"  style="font-size: 20px; width: 30%; "></td>
    </tr>
    <tr>
        <td colspan="2" style="font-size: 20px;">Have an account? <a href="Login.php" style="text-decoration: none; color: green;">Login</a></td>
    </tr>
</table>
</form> 
<?php
include_once("Connection.php");

if(isset($_POST['btn']))
{
$name = @$_POST['name'];
$Enroll = @$_POST['Enroll'];
$branch = @$_POST['branch'];
$sem = @$_POST['Sem'];
$dob = @$_POST['dob'];
$gen = @$_POST['gen'];
$add = @$_POST['add'];
$em = @$_POST['em'];
$phone = @$_POST['phone'];
$pwd = @$_POST['pwd'];
$pic = @$_FILES['pic']['name'];
$q = "INSERT INTO `register`(`ID_NO`, `Name`, `Branch`, `Role`,`DOB`, `Gender`, `Address`, `Email`, `Phone_Number`, `Password`, `profile_pic`) VALUES 
('$Enroll','$name','$branch','$sem','$dob','$gen','$add','$em',$phone,'$pwd','$pic')";

    if(mysqli_query($con,$q))
    {
        move_uploaded_file($_FILES['pic']['tmp_name'],'pic/'.$pic);
        ?>
        <script>
            alert("Registration successful");
        </script>
        <?php

        ?>
<tr>
<td><a href="Admin.php" style="text-decoration: none; color: green; width: 50%; text-align: center; 
font-size: 25px; background: transparent; border-radius: 5px; border:2px solid black;">View Data</a></td>
</tr>
<?php
    }
    else{
        ?>
        <script>
            alert("Registration unsuccessful");
        </script>
        <?php
    }
}

