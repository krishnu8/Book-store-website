<?php
include_once("Create_database.php");
$q="create table feedback(product_id int(10),user_id int(10),feedback varchar(5000),rating varchar(6))";
if(mysqli_query($con,$q)){
    echo "table created";
}
else{
    echo "table not created";

}