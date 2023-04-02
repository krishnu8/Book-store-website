<?php
include_once("Connection.php");

$q = "create table Helps
(
First_Name char(155),
Last_Name char(120),
Email_Id varchar(255) primary key,
Phone_NO int(10),
Role char(50),
Address varchar(350),
Problem_Name varchar(350),
Quiry varchar(400)
)";

if(mysqli_query($con,$q)) 
{
    echo "Table is Created";
}
else {
    echo "Error! Table is not Created";
}

?>