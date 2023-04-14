<?php
include_once("Connection.php");

$u_id = @$_GET['User_id'];
// echo $u_id;
$q = "UPDATE `registration` SET `Status`='Active' WHERE User_id='$u_id'";

    if(mysqli_query($con,$q)){
        ?>
            <script>
                alert("Seller Ativated");
                window.location.href = "../Seller.php";
            </script>
        <?php
    }
    else{
        ?>
            <script>
                alert("Failed to Activate Seller");
                window.location.href = "../Seller.php";
            </script>
        <?php
    }
?>