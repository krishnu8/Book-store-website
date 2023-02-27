<?php
include_once("connection1.php");

$q = "create table register
(
Admin_Id varchar(30) primary key,
Admin_Name varchar(40),
Admin_Branch varchar(40),
Experience int(5),
Date_Of_Birth varchar(40),
Gender char(10),
Adress varchar(50),
Email_Id varchar(30),
Mobile_NO varchar(10),
Password varchar(25),
Card_No varchar(20),
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

