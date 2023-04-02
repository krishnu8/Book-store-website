
<?php
include_once("../database/Create_database.php");

$cat=@$_GET['Category'];
$q="DELETE FROM `Offers` WHERE Category='$cat'";
// echo $q;
if (mysqli_query($con,$q))
{
    ?>
    <script>
            alert("Data Deleted successfully");
            window.location.href="Offers.php";
        </script>
        <?php
}
else{
    ?>
    <script>
    alert("Data Can't Delete please chech ERROR");
    window.location.href="Offers.php";
</script>
<?php
}
?>