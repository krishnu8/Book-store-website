
<style type="text/css">
body{
    background-color:#212529;
    color: white;
    display: flex;
    justify-content: center;
    font-size: 30px;
}
input{
    background-color: red;
    color: white;
    font-size: 25px;
}
table{
    font-size: 25px;
}   
input:hover{
    background-color: green;
    color:red;
}
/* .Active{
    text-decoration: none;
    border-radius: 5px;
    color: green;
}
.Deactive{
    text-decoration: none;
    border-radius: 5px;
    color: red;
} */
</style>
<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
<!-- <script src="js/bootstrap.js"></script> -->

<div class="container">
Insert more data<a href="User_insert_data.php"><button style="background: green; color: #fff; width: 20%; font-size: 20px; border-radius: 10px;">Insert</button></a> <br>
<table border="1">
<tr>
    <th>Full Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>State</th>
    <th>Status</th>
    <th>ID NO</th>
    <th>Role</th>
    <th>View</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>
<?php
include_once("Connection.php");

$q = "SELECT * FROM `registration` WHERE role='User'";
$result = mysqli_query($con, $q);
while($a=mysqli_fetch_array($result))
{
    ?>
    <tr>
        <td><?php echo"$a[0]"?></td>
        <td><?php echo"$a[1]"?></td>
        <td><?php echo"$a[2]"?></td>
        <td><?php echo"$a[5]"?></td>
        <td><?php echo"$a[8]"?></td>
        <td><?php echo"$a[10]"?></td>
        <td><?php echo"$a[9]"?></td>
        <td><a href="User_view.php?Enroll=<?php echo"$a[10]"?>"><input type="button" value="View" style="background: green;"></a></td>
        <td><a href="User_Edit.php?Enroll=<?php echo"$a[10]"?>"><input type="button" value="Edit" style="background: blue;"></a></td>
        <td><a href="User_Delete.php?Enroll=<?php echo"$a[10]"?>"><input type="button" value="Delete"></a></td>
       
    </tr>
    <?php
}
?>
</div>
