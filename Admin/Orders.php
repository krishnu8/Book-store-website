

<head>
    <?php
include_once("navbar.php")
?>
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
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
</head>

<body style="background-color: #212529; color: white;">
    

<div class="container">
Insert New Record<a href="Orders_insert_data.php" style="text-decoration: none; color: #fff;"><button style="background: green; color: #fff; width: 15%; font-size: 15px; border-radius: 5px;">Insert</a></button> <br>
<table border="1">
<tr>
    <td>Order_Id</td>
    <td>Product_Id</td>
    <td>Quantity</td>
    <td>Price</td>
    <td>User_id</td>
    <td>Ordered_Date</td>
    <td>Deliver_Date</td>
    <td>My Order</td>
    <td>Status</td>
    <td>Operation</td>
    <td>Edit</td>
    <td>Delete</td>
</tr>
<?php
include_once("../database/Create_database.php");

$q = "select * from Oders";
$result = mysqli_query($con, $q);
while($a=mysqli_fetch_array($result))
{
    ?>
    <tr>
        <td><?php echo"$a[0]"?></td>
        <td><?php echo"$a[1]"?></td>
        <td><?php echo"$a[2]"?></td>
        <td><?php echo"$a[3]"?></td>
        <td><?php echo"$a[6]"?></td>
        <td><?php echo"$a[4]"?></td>
        <td><?php echo"$a[5]"?></td>
        <td><img src='image/<?php echo$a[7]?> 'alt="No Pic" height="110px" width="110px"></td>
        <td><?php echo"$a[8]"?></td>

        <?php
        if( $a['order_status']=="Cancelled"){
            ?>
            <td align="center"><a href="order_active.php?id=<?php echo $a[0] ?>" style="color: #fff; text-decoration: none;"><button style="background: green;">Active</a></button></td>
            <?php
        }else{
            ?>
            <td align="center"><a href="order_cancel.php?id=<?php echo $a[0] ?>" style="text-decoration: none;"><button style="background: yellow;">Cancelled</a></button></td>
            <?php
        }
        ?>
                
        <td><a href="Order_Edit.php?Order_Id=<?php echo"$a[0]"?>"><input type="button" value="Edit" class="btns" style="background: blue;"></a></td>
        <td><a href="Order_Delete.php?Order_Id=<?php echo"$a[0]"?>"><input type="button" value="Delete" class="btns"></a></td>
    </tr>
    <?php
}
?>
</div>

</body>
