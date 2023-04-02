<?php
include_once("Connection.php");
session_start();
if (isset($_SESSION['Email']) && isset($_SESSION['password'])) {
    $enroll = @$_GET['Enroll'];
    $q = "DELETE FROM `Admin` WHERE ID_NO='$enroll'";
    if (mysqli_query($con, $q)) {
        ?>
    <script>
        alert("Data deleted successfully");
        window.location.href="../Dashboard.php";
    </script>
    <?php
    }
}else{
    header("location:Login.php");
}