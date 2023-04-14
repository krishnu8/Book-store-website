<?php
include_once("../database/Create_database.php");

$u_id = @$_GET['User_id'];
// echo $u_id;
$q = "UPDATE `registration` SET `Status`='Active' WHERE User_id='$u_id'";

    if(mysqli_query($con,$q)){
        ?>
            <script>
                alert("User Ativated");
                window.location.href = "User.php";
            </script>
        <?php
    }
    else{
        ?>
            <script>
                alert("Failed to Activate User");
                window.location.href = "User.php";
            </script>
        <?php
    }
?>