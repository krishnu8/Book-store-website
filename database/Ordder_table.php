<?php
include_once("Create_database.php");

$q = "create table ordder(Product_id int(10) ,Email varchar(255),Price int(10),Quantity int(50),date varchar(25))";
if (mysqli_query($con, $q)) {
    echo "Table created";
} else {
    echo "Table not created";
}
