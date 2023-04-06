
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
Add New Product<a href="Product_insert_data.php" style="text-decoration: none; color: #fff;">
<button style="background: green; color: #fff; width: 15%; font-size: 15px; border-radius: 5px;">Insert</a></button><br>
<table border="1">
<tr>
    <td>Product_Id</td>
    <td>Product_Name</td>
    <td>Seller_Id</td>
    <td>Price</td>
    <td>Quantity</td>
    <td>Author</td>
    <td>Category</td>
    <td>My Product</td>
    <td>Edit</td>
    <td>Delete</td>
</tr>
<?php
include_once("../database/Create_database.php");

$q = "select * from Products";
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
        <td><?php echo"$a[5]"?></td>
        <td><?php echo"$a[6]"?></td>
        <td><img src='image/<?php echo$a[7]?> 'alt="No Pic" height="120px" width="125px"></td>
    
        <td><a href="Product_Edit.php?Product_Id=<?php echo"$a[0]"?>"><input type="button" value="Edit" class="btns" style="background: blue;"></a></td>
        <td><a href="Product_Delete.php?Product_Id=<?php echo"$a[0]"?>"><input type="button" value="Delete" class="btns"></a></td>
    </tr>
    <?php
}
?>
</div>

</body>
