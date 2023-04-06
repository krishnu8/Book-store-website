
<?php
include_once("../database/Create_database.php");

$o_id=@$_GET['User_Id'];
$q="DELETE FROM `Notification` WHERE User_Id='$o_id'";
// echo $q;
if (mysqli_query($con,$q))
{
    ?>
    <script>
            alert("Data Deleted successfully");
            window.location.href="Notification.php";
        </script>
        <?php
}
else{
    ?>
    <script>
    alert("Data Can't Delete please chech ERROR");
    window.location.href="Notification.php";
</script>
<?php
}
?>