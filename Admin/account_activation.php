<?php
include_once("../database/Create_database.php");

session_start();
$em = $_GET['email'];
//echo $em;
$q1 = "select * from registration where email='$em' and status='Active'";
$result = mysqli_num_rows(mysqli_query($con, $q1));
if ($result == 0) {
    $q = "update registration set status='Active' where email='$em'";
    if (mysqli_query($con, $q)) {
        $_SESSION['Activation_succ'] = "Account activated succesfully. Please Log in to your account.";
    } else {
        $_SESSION['Activation_err'] = "Account activation Failed";
    }
} else {
    $_SESSION['Activation_err'] = "Account is already activated. Log in to your account";
}
?>
<script>
    window.location = "login.php";
</script>