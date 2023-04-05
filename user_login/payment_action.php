<?php
include_once("../database/Create_database.php");
session_start();
if(isset($_POST['bttn'])){
    $quantity=$_POST['quantity'];
    $product_id=$_POST['product_id'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $user_id=$_SESSION['User_id'];
    $update="UPDATE `registration` SET `State`='$state',`City`='$city' WHERE User_id='$user_id'";
    mysqli_query($con,$update);
    ?>
    <script>
       window.location.href="Buy.php?quantity=<?php echo $quantity ?> && product_id=<?php echo $product_id ?>";
    </script>
    <?php
}


?>