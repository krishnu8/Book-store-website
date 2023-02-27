<?php
include_once("Create_database.php");

$q = "create table cart
(Product_id int(10),User_id int(10),Price int(10),Quantity int(50))";
if (mysqli_query($con, $q)) {
    echo "Table created";
} else {
    echo "Table not created";
}
