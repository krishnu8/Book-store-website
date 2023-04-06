<?php
include_once("Connection.php");

$rol=@$_GET['Seller'];
$q="DELETE FROM `registration` WHERE role='Seller'";
// echo $q;
if (mysqli_query($con,$q))
{
    ?>
     <script>
            alert("Data Deleted successfully");
            window.location.href="Seller.php?Seller_Id=<?php echo $rol ?>";
        </script>
    <?php
}
else{
    ?>
     <script>
            alert("Can't Delete Please CheckOut the Error");
            window.location.href="Seller.php?Seller_Id=<?php echo $rol ?>";
        </script>
    <?php
}
?>