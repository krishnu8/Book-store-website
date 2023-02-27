<?php
include_once("connection.php");

$uid=@$_GET['uid'];
$q="DELETE FROM `register` WHERE User_Id=$uid";
// echo $q;
if (mysqli_query($con,$q))
{
    echo"Data deleted";
}
else{
    echo"Data not deleted";
}
?>
