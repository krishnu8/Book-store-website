<?php
include_once("Connection.php");
    
    $u_id = @$_GET['User_id'];
    // echo $u_id;
    $q = "UPDATE `registration` SET `Status`='Inactive' WHERE User_id='$u_id'";
    
    if(mysqli_query($con,$q)){
        ?>
            <script>
                alert("Seller Inactivated");
                window.location.href = "../Seller.php";
            </script>
        <?php
    }
    else{
        ?>
            <script>
                alert("Failed to Inactivate Seller");
                window.location.href = "../Seller.php";
            </script>
        <?php
    }
?>