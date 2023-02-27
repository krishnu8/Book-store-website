<?php
include_once("con_profile1.php");

$aid=@$_GET['aid'];
$q="DELETE FROM `register` WHERE Admin_Id=$aid";
// echo $q;
if (mysqli_query($con,$q))
{
    // echo"Your data will be deleted";
    ?>
<script>
  alert("Your Data will be Deleted");
  window.location = "Profile1.php";
  </script>
    <?php
}
else{
    echo"<h2 style='color: red;'> Somthing went wrong </h2>";
    echo"<h1 style='color: green;'> Please Check Out the Error!";
}
?>
