

<head>

<style>
    /* body{
    background-color:#212529;
    color: white;
    display: flex;
    justify-content: center;
    font-size: 30px;
} */
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
</style>
<?php
include_once("navbar.php")
?>

    
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
</head>

<body style="background-color: #212529; color: white;">
    
<div class="container">
<!-- Insert New Record<a href="Notification_insert_data.php" style="text-decoration: none; color: #fff;">
<button style="background: green; color: #fff; width: 15%; font-size: 15px; border-radius: 5px;">Insert</a></button><br> -->
<br>
<table border="1">
<tr>
    <th>User_Id</th>
    <th>Product_Id</th>
    <th>Product Pic</th>
    <th>Messages</th>
    <!-- <th>View</th> -->
    <th>Edit</th>
    <th>Delete</th>
</tr>
<?php
include_once("../database/Create_database.php");
$q = "select * from Notification";
$result = mysqli_query($con, $q);
while($a=mysqli_fetch_array($result))
{
    ?>
    <tr>
        <td><?php echo"$a[0]"?></td>
        <td><?php echo"$a[1]"?></td>
        <td><img src='image/book.png'alt="No Pic" height="120px" width="150px"></td>
        <td><?php echo"$a[3]"?></td>

        <!-- <td><a href="#?User_Id=<?php echo"$a[0]"?>"><input type="button" value="View" class="btns" style="background: green;"></a></td> -->
        <td><a href="Notification_Edit.php?User_Id=<?php echo"$a[0]"?>"><input type="button" value="Edit" class="btns" style="background: blue;"></a></td>
        <td><a href="Notification_Delete.php?User_Id=<?php echo"$a[0]"?>"><input type="button" value="Delete" class="btns"></a></td>
    </tr>
    <?php
}
?>
</div>

</body>
