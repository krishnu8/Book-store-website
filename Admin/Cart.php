

<head>

<style>
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
</style>
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
</head>

<body style="background-color: #212529; color: white;">
    

<div class="container">
Add To New Cart<a href="Cart_insert_data.php"><button style="background: green; color: #fff; width: 15%; font-size: 15px; border-radius: 5px;">Insert</button></a> <br>
<table border="1">
<tr>
    <td>Product_Id</td>
    <td>User_Id</td>
    <td>Quantity</td>
    <td>Price</td>
    <td>Total</td>
    <td>View</td>
    <td>Edit</td>
    <td>Delete</td>
</tr>
<?php
include_once("../database/Create_database.php");

$q = "select * from Carts";
$result = mysqli_query($con, $q);
while($a=mysqli_fetch_array($result))
{
    ?>
    <tr>
        <td><?php echo"$a[0]"?></td>
        <td><?php echo"$a[1]"?></td>
        <td><?php echo"$a[2]"?></td>
        <td><?php echo"$a[3]"?></td>
        <td><?php echo"$a[4]"?></td>

        <td><a href="#?Product_Id=<?php echo"$a[0]"?>"><input type="button" value="View" class="btns" style="background: green;"></a></td>
        <td><a href="Cart_Edit.php?Product_Id=<?php echo"$a[0]"?>"><input type="button" value="Edit" class="btns" style="background: blue;"></a></td>
        <td><a href="Cart_Delete.php?Product_Id=<?php echo"$a[0]"?>"><input type="button" value="Delete" class="btns"></a></td>
    </tr>
    <?php
}
?>
</div>

</body>
