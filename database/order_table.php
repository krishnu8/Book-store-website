<?php
include_once("Create_database.php");

$q = "create table order
(Product_id int(10),email varchar(255),Price int(10),Quantity int(50),Order_id int(10) AUTO_INCREMENT primary key,date varchar(255))";
if (mysqli_query($con, $q)) {
    echo "Table created";
} else {
    echo "Table not created";
}
