<?php
include_once("Create_database.php");

$q = "create table User
(User_id int(10) AUTO_INCREMENT primary key,Name char(50),Email varchar(50) ,Number int(10),password varchar(50),profile_picture varchar(50),Address varchar(25),Role char(25))";
if (mysqli_query($con, $q)) {
    echo "Table created";
} else {
    echo "Table not created";
}
