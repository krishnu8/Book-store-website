

<?php
include_once("../database/Create_database.php");

$p_id=@$_GET['Product_Id'];
$q="DELETE FROM `Products` WHERE Product_Id='$p_id'";
// echo $q;
if (mysqli_query($con,$q))
{
    ?>
    <script>
            alert("Data Deleted successfully");
            window.location.href="Product.php";
        </script>
        <?php
}
else{
    ?>
    <script>
    alert("Data Can't Delete please chech ERROR");
    window.location.href="Product.php";
</script>
<?php
}
?>