<?php
include_once("Connection.php");

$Enroll = $_GET['ID_NO'];
$status = $_GET['Status'];
$update = "UPDATE `registeration` SET `Status`='$status'WHERE ID_NO='$Enroll'";

mysqli_query($con,$update);

header('location:fetch_data.php');

?>