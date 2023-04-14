<?php
include_once("../database/Create_database.php");
    
    $u_id = @$_GET['User_id'];
    // echo $u_id;
    $q = "UPDATE `registration` SET `Status`='Inactive' WHERE User_id='$u_id'";
    
    if(mysqli_query($con,$q)){
        ?>
            <script>
                alert("User Cancelled");
                window.location.href = "User.php";
            </script>
        <?php
    }
    else{
        ?>
            <script>
                alert("Failed to cancel User");
                window.location.href = "User.php";
            </script>
        <?php
    }
?>