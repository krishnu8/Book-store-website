<?php
include_once("connection.php");

$q = "create table register
(
User_Id varchar(30) primary key,
User_Name varchar(40),
Date_Of_Birth varchar(40),
Gender char(10),
Role char(10),
City varchar(50),
Email_Id varchar(30),
Mobile_NO varchar(10),
Password varchar(35),
PinCode int(30),
profile_Pic varchar(50)
)";

if(mysqli_query($con,$q)) 
{
    echo "Table is Created";
}
else {
    echo "Error Table is not Created";
}

?>

