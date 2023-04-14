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

<link rel="stylesheet" href="../style.css">
</head>

<?php
// session_start();
// if (isset($_SESSION['Email_Id']) && isset($_SESSION['password'])) {

    include_once("Connection.php");

    $rol = @$_GET['User'];
    $q = "SELECT * FROM `registration` WHERE role='User'";
    $result = mysqli_query($con, $q);
    $a = mysqli_fetch_array($result);
    ?>
<div class="stu">User Details !</div>
<div class="fam">
<h3><a href="User_Edit.php"><i class="fa fa-solid fa-pen-to-square"></i>Edit</a></h3>
</div>
<div style="background-color: #212529; width: 50%; margin-left: 25%; text-align: center;">
    <img src="uploads/<?php echo $a[6]; ?>" alt="No profile picture"height='150px;' width='150px' >
</div>
<table>
  <tbody>
    <tr>
        <td>Name:</td>
        <td><?php echo "$a[0]" ?></td>
    </tr>
    <tr>
        <td>Email_Id:</td>
        <td><?php echo "$a[1]" ?></td>
    </tr>
    <tr>
        <td>phone Number:</td>
        <td><?php echo "$a[2]" ?></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><?php echo "$a[3]" ?></td>
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
        <td>About:</td>
        <td><?php echo "$a[7]" ?></td>
    </tr>
    <tr>
        <td>Role:</td>
        <td><?php echo "$a[9]" ?></td>
    </tr>
    <tr>
        <td>User_Id:</td>
        <td><?php echo "$a[10]" ?></td>
    </tr>
    <tr>
        <td colspan="2"><a href="User.php?Email_Id=<?php echo $a[1] ?>"><button style=" width: 30%;">Return Back</button></a><td>
    </tr>
  </tbody>
</table>
<?php
// }
// else{
//     header("location:Login.php");
// }