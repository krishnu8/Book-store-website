<?php
include_once("Create_database.php");

$q = "create table Product
(Product_id int(10) AUTO_INCREMENT primary key,User_id int(10),Price int(10),Quantity int(50) ,Author char(10),category char(10),P_Name char(25),Product_picture varchar(50))";
if (mysqli_query($con, $q)) {
    echo "Table created";
} else {
    echo "Table not created";
}
