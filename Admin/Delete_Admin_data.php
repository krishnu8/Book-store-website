<?php
include_once("connection1.php");

$idn=@$_GET['idn'];
$q="DELETE FROM `register` WHERE Admin_Id=$idn";
// echo $q;
if (mysqli_query($con,$q))
{
    echo"Data deleted";
}
else{
    echo"Data not deleted";
}
?>
