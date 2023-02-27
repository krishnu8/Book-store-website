<head>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script  src="js/bootstrap.js"></script>
</head>
<style>
  
    .tables_class{
        background-color: ;
        margin-top: -23px;
      }
  .btn1{

    width: 60px;
    font-size: 10px;
    border-radius: 5px;
  }
  .login{
    margin-left: 10px;
  }
  
</style>

<?php
include_once("header_nav.php")
?>

<div class="tables_class container"><br>
<?php
include_once("connection.php");

$q="select * from register";
$result=mysqli_query($con,$q);
?>

<from class="form row">
<a href="User_insert_form.php" class="insert">
    <input type="button" value="Insert new Record" class="btn btn-success" />
</a>
<a href="login_b.php" class="login">
    <input type="button" value="Logout" class="btn btn-success" />
</a>
<table border="1px">

    <tr>
        <td style="color: green;"><h5>User Id</h5></td>
        <td style="color: green;"><h5>Full Name</h5></td>
        <td style="color: green;"><h5>Date Of Birth</h5></td>
        <td style="color: green;"><h5>Gender</h5></td>
        <td style="color: green;"><h5>User Role</h5></td>
        <td style="color: green;"><h5>Address</h5></td>
        <td style="color: green;"><h5>Email_Id</h5></td>
        <td style="color: green;"><h5>Mobile_NO</h5></td>
        <td style="color: green;"><h5>Password</h5></td>
        <td style="color: green;"><h5>PinCOde</h5></td>
        <td style="color: green;"><h5>profile_pic:</h5></td>
        <td style="color: red;"><h5>Edit</h5></td>
        <td style="color: red;"><h5>Delet</h5></td>
    </tr>
</from>
    <?php
while($a=mysqli_fetch_array($result))
{ ?>
     <tr>
        <td style="color: black;"><?php echo$a[0]?></td>
        <td style="color: black;"><?php echo$a[1]?></td>
        <td style="color: black;"><?php echo$a[2]?></td>
        <td style="color: black;"><?php echo$a[3]?></td>
        <td style="color: black;"><?php echo$a[4]?></td>
        <td style="color: black;"><?php echo$a[5]?></td>
        <td style="color: black;"><?php echo$a[6]?></td>
        <td style="color: black;"><?php echo$a[7]?></td>
        <td style="color: black;"><?php echo$a[8]?></td>
        <td style="color: black;"><?php echo$a[9]?></td>

        <td><img src='uploads/<?php echo$a[10]?> 'alt="No Pic" height="50px" width="95px"></td>
        <td><a href="Edit_user_form.php?uid='<?php echo $a[0]?>' & fln=<?php echo $a[1]?> & dob=<?php echo $a[2]?> 
        & gen=<?php echo $a[3]?> & rol=<?php echo $a[4]?> & city=<?php echo $a[5]?> & em=<?php echo $a[6]?> & mn=<?php echo $a[7]?> 
        & pwd=<?php echo $a[8]?> & pin=<?php echo $a[9]?>"><button class="btn1 btn btn-success">Edit</button></a></td>
        <td><a href="Delet_user_data.php?uid='<?php echo $a[0]?>'">
        <input name="btn1"type="button" value="delet" class="btn1 btn btn-success"></td>
      </tr>
   <?php 
}  
?>
</table>
</div>