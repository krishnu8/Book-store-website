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

session_start();
if (isset($_SESSION['Email']) && isset($_SESSION['password'])) {

    $email = $_SESSION['Email'];
    $q = "Select * from Admin where Email='$email'";
    // echo $q;
    $result = mysqli_query($con, $q);
    $a = mysqli_fetch_array($result);
    ?>
<div class="stu">Your All Details</div>
<div class="fam">
<h3><a href="Admin_Edit.php"><i class="fa fa-solid fa-pen-to-square"></i>Edit</a></h3>
</div>
<div class="profile" style="background-color: #212529; width: 50%; margin-left: 25%; margin-top: -10px;">
    <img src="pic/<?php echo $a[10]; ?>" alt="No profile picture"height='155px;' width='150px'>
</div>
<table>
  <tbody>
    <tr>
        <td>Your ID_NO:</td>
        <td><?php echo "$a[0]" ?></td>
    </tr>
    <tr>
        <td>Name:</td>
        <td><?php echo "$a[1]" ?></td>
    </tr>
    <tr>
        <td>Branch:</td>
        <td><?php echo "$a[2]" ?></td>
    </tr>
    <tr>
        <td>Your ROLE:</td>
        <td><?php echo "$a[3]" ?></td>
    </tr>
    <tr>
        <td>Date of birth</td>
        <td><?php echo "$a[4]" ?></td>
    </tr>
    <tr>
        <td>Gender:</td>
        <td><?php echo "$a[5]" ?></td>
    </tr>
    <tr> 
        <td>Address:</td>
        <td><?php echo "$a[6]" ?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><?php echo "$a[7]" ?></td>
    </tr>
    <tr>
        <td>phone Number:</td>
        <td><?php echo "$a[8]" ?></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><?php echo "$a[9]" ?></td>
    </tr>
    <tr>
        <td colspan="2"><a href="../Dashboard.php?Email=<?php echo $a[7] ?>"><button style=" width: 30%;">Return Back</button></a><td>
    </tr>
  </tbody>
</table>
<?php
}
else{
    header("location:Login.php");
}