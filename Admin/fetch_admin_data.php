<style>
    *{
      /* background-color: hsl(240, 0%, 10%); */
      /* margin-top: 0.3%;
      padding: 0;
      margin: 0; */
    /* margin-bottom: 0.3%;  */

    }

    .table_class{
        margin-left: 20px;
        margin-top: 1px;
        
    }

    /* .form_class {
      
        text-align: center;
        width: 300px;
        border: 15px solid green;
        padding: 40px;
        margin: 20px;
        border-radius: 5%;
    }  */



</style>

<?php
    include_once("header_nav.php")
  ?>

<div class="table_class">

<a href="Admin_data_insert.php">
    <input type="button" value="Insert new Record" class="btn btn-success" />
</a>
<a href="login_b.php" >
    <input type="button" value="Logout" class="btn btn-success" />
</a>

<?php
include_once("connection1.php");
$q="select * from register";
$result=mysqli_query($con,$q);
?>

<from class="form_class container">
<table border="1px">

    <tr>
        <td style="color: green;"><h5>Admin_Id NO:</h5></td>
        <td style="color: green;"><h5>Full Name:</h5></td>
        <td style="color: green;"><h5>Admin Branch:</h5></td>
        <td style="color: green;"><h5>Experience:</h5></td>
        <td style="color: green;"><h5>Date Of Birth:</h5></td>
        <td style="color: green;"><h5>Gender:</h5></td>
        <td style="color: green;"><h5>Address:</h5></td>
        <td style="color: green;"><h5>Admin_Email_Id:</h5></td>
        <td style="color: green;"><h5>Mobile_NO:</h5></td>
        <td style="color: green;"><h5>Password:</h5></td>
        <td style="color: green;"><h5>Card_NO:</h5></td>
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
        <td style="color: black;"><?php echo$a[10]?></td>

        <td><img src='uploads/<?php echo$a[11]?> 'alt="No Pic" height="60px" width="100px"></td>
        <td><a href="Edit_Admin_form.php?idn='<?php echo $a[0]?>' & fln=<?php echo $a[1]?>
        & br=<?php echo $a[2]?> & exp=<?php echo $a[3]?> & dob=<?php echo $a[4]?> 
        & gen=<?php echo $a[5]?> & add=<?php echo $a[6]?> & em=<?php echo $a[7]?> & mn=<?php echo $a[8]?> 
        & pass=<?php echo $a[9]?> & cno=<?php echo $a[10]?>"><button class="btn btn-success">Edit</button></a></td>
        <td><a href="Delete_Admin_data.php?idn='<?php echo $a[0]?>'">
        <input name="btn1"type="button" value="delet" class="btn btn-success"></td>
      </tr>
   <?php 
}
?>
</table>

</div>