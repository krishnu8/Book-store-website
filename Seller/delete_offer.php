<?php
include_once("../database/Create_database.php");
session_start();
$offer_id=@$_GET['offer_id'];
$update="DELETE FROM `offer` WHERE offer_id='$offer_id'";
if(mysqli_query($con,$update)){
   ?>
   <script>
    alert("Offer Deleted Successfully");
   </script>
   <?php
}else{
    ?>
   <script>
    alert("Something Went Wrong.Please Try Again");
   </script>
   <?php
}
?>
<script>
    window.location.href="seller_offer.php";
</script>