<?php
include_once("Connection.php");

$rol=@$_GET['User'];
$q="DELETE FROM `registration` WHERE role='User'";
// echo $q;
if (mysqli_query($con,$q))
{
    ?>
     <script>
            alert("Data Deleted successfully");
            window.location.href="User.php?User_Id=<?php echo $rol ?>";
        </script>
    <?php
}
else{
    ?>
     <script>
            alert("Can't Delete Please CheckOut the Error");
            window.location.href="User.php?User_Id=<?php echo $rol ?>";
        </script>
    <?php
}
?>