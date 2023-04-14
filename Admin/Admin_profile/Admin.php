<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .fam{
        background: #212529;
        color: #fff;
        width: 50%;
        margin-left: 25%;
    }
    .fam i{
        margin-left: 60%;
        margin-top: 10px;
    }
    .fam h3 a:hover{
        color: green;
    }
    .fam h3 a{
        text-decoration: none;
        color: yellow;
    }
</style>
</head>

<link rel="stylesheet" href="style.css">
<?php
include_once("Connection.php");

// session_start();
// if (isset($_SESSION['Email']) && isset($_SESSION['password'])) {

    // $email = $_SESSION['Email'];
    $q = "Select * from registration where role='Admin'";
    // echo $q;
    $result = mysqli_query($con, $q);
    $a = mysqli_fetch_array($result);
    ?>
<div class="stu">Your All Details</div>
<div class="fam">
<h3><a href="Admin_Edit.php"><i class="fa fa-solid fa-pen-to-square"></i>Edit</a></h3>
</div>
<div class="profile" style="background-color: #212529; width: 50%; margin-left: 25%; margin-top: -10px;">
    <img src="pic/<?php echo $a[6]; ?>" alt="No profile picture"height='155px;' width='150px'>
</div>
<table>
  <tbody>
    <tr>
        <td>Your ID_NO:</td>
        <td><?php echo "$a[10]" ?></td>
    </tr>
    <tr>
        <td>Full Name:</td>
        <td><?php echo "$a[0]" ?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><?php echo "$a[1]" ?></td>
    </tr>
    <tr>
        <td>phone Number:</td>
        <td><?php echo "$a[2]" ?></td>
    </tr>
    <tr>
        <td>Date Of Birth:</td>
        <td>25-05-2001</td>
    </tr>
    <tr>
        <td>Branch:</td>
        <td>Diploma CE</td>
    </tr>
    <tr>
        <td>State:</td>
        <td><?php echo "$a[4]" ?></td>
    </tr>
    <tr>
        <td>City:</td>
        <td><?php echo "$a[5]" ?></td>
    </tr>
    <tr>
        <td>Status:</td>
        <td><?php echo "$a[8]" ?></td>
    </tr>
    <tr>
        <td>Role:</td>
        <td><?php echo "$a[9]" ?></td>
    </tr>
    
    <tr>
        <td colspan="2"><a href="../Dashboard.php"><button style=" width: 30%;">Return Back To Home</button></a><td>
    </tr>
  </tbody>
</table>
<?php
// }
// else{
//     header("location:Login.php");
// }