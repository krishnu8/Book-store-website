<?php
$con=mysqli_connect("localhost","root","")or die("Conection fail");

mysqli_select_db($con,"BOOK_CHOR");

// $q="create database Data_Base";

// if(mysqli_query($con,$q))
// {
//     echo "Database create";
// }
// else{
//     echo "Database not create";
// }