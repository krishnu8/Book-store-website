<?php
include_once("Create_database.php");

$q = "create table Offer(Discount int(5),Offer_price int(5),Start_date varchar(25),End_date varchar(25),Coupen varchar(25))";
if (mysqli_query($con, $q)) {
    echo "Table created";
} else {
    echo "Table not created";
}
