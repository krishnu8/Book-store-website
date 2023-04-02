
<?php
include_once("../database/Create_database.php");

$o_id=@$_GET['Order_Id'];
$q="DELETE FROM `Oders` WHERE Order_Id='$o_id'";
// echo $q;
if (mysqli_query($con,$q))
{
    ?>
    <script>
            alert("Data Deleted successfully");
            window.location.href="Order.php";
        </script>
        <?php
}
else{
    ?>
    <script>
    alert("Data Can't Delete please chech ERROR");
    window.location.href="Order.php";
</script>
<?php
}
?>