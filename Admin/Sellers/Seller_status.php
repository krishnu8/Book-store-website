<?php
include_once("../database/Create_database.php");

$s_id = $_GET['Seller'];
$status = $_GET['Status'];
$update = "UPDATE `Registration` SET `Status`='$status'WHERE role='Seller'";

mysqli_query($con,$update);

header('location:Seller.php');

?>