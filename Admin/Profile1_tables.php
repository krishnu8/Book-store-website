<?php
include_once("con_profile1.php");

$q = "create table register
(
Admin_Id varchar(30),
Full_Name varchar(40),
Email_Id varchar(40) primary key,
Password varchar(30),
Mobile_NO int(10),
Profile_Pic varchar(50),
Reg_Date date(20) 
)";

if(mysqli_query($con,$q)) 
{
    echo "Table is Created";
}
else {
    echo "Error Table is not Created";
}

?>

