
<?php
$con=mysqli_connect("localhost","root","")or die("Conection fail");

// $q = "create database Admin_Account";

// if(mysqli_query($con,$q)) {

//     echo "Database Created";
// }
// else {
//     echo "There was Error Database Not Created";
// }
 
mysqli_select_db($con,"Admin_Account");

?>

