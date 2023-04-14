<?php
include_once("Connection.php");

$rol=@$_GET['Admin'];
$q="DELETE FROM `registration` WHERE role='Admin'";
// echo $q;
if (mysqli_query($con,$q))
{
    ?>
     <script>
            alert("Data Deleted successfully");
            window.location.href="Admin.php?Admin_Id=<?php echo $rol ?>";
        </script>
    <?php
}
else{
    ?>
     <script>
            alert("Can't Delete Please CheckOut the Error");
            window.location.href="Admin.php?Admin_Id=<?php echo $rol ?>";
        </script>
    <?php
}
?>