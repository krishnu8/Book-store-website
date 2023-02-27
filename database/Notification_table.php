<?php
include_once("Create_database.php");

$q = "create table Notification(Message varchar(5000),User_id int(10),Product_id int(10))";
if (mysqli_query($con, $q)) {
    echo "Table created";
} else {
    echo "Table not created";
}
