<?php
include_once("../database/Create_database.php");

$eid = $_REQUEST['emailid'];
$q = "select * from registration where Email='$eid'";
$count = mysqli_num_rows(mysqli_query($con, $q));
if ($count == 1) {
    echo "error";
} else {
    echo "noerror";
}
?>