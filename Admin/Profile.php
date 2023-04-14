<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-grid.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>My-profile</title>

    <style>
        .funtion_class .full a:hover{
            text-decoration: none;
        }
        .funtion_class .d-grid button i{
            margin-left: -20px;
        }
        .funtion_class .d-grid li a i{
            color: #fff;
            font-size: 25px;
        }
        .funtion_class .d-grid li a:hover{
            background-color: transparent;
        }
        li .dropdown-item:hover{
            background-color: transparent;
        }
    </style>
</head>
<?php
include_once('Header.php');
    ?>

<div class="row">
    <div class="col-sm-3 bg-dark funtion_class oi" style="margin-top: -10px; height: 60%; margin-left: -17%;">

            <div class="d-grid gap-3 full">
                <br>
                <a href="Admin_profile/Admin.php"><button type="button" class="btn btn-secondary btn-block"><i class="fa fa-solid fa-id-badge"></i> My Profile</button></a>
                <br><br>
                <a href="Admin_profile/Admin_Edit.php"> <button type="button" class="btn btn-secondary btn-block"><i class="fa fa-solid fa-pen-to-square"></i> Update Profile</button></a>
                <br><br>
                <a href="Admin_profile/Change_password.php"><button type="button" class="btn btn-secondary btn-block"><i class="fa fa-light fa-lock"></i> Change Password</button></a>
                <br><br>
                <a href="Admin_profile/Help.php"><button type="button" class="btn btn-secondary btn-block"><i class="fa fa-duotone fa-phone"></i>Help & Support</button></a>
                <br><br>
                <a href="Admin_profile/Admin_Delete.php"><button type="button" class="btn btn-secondary btn-block"><i class="fa fa-solid fa-trash"></i>Remove Account</button></a>
                <br><br>
                <a href="Admin_profile/Logout.php"><button type="button" class="btn btn-secondary btn-block">Logout</button></a>
        </div>

        <li><hr class="dropdown-divider"></li>
        <p style="color: red; text-align: center; font-size: 20px;">Contact Links</p>
        <li style="font-size: 50px; color: #fff;"><a class="dropdown-item" href="https://www.facebook.com/ramesh.vai.9275439" style="margin-top: -30%; width: 10%;"><i class="fa fa-brands fa-facebook" style="color: #fff;"></i></a></li>
        <li style="font-size: 50px; color: #fff;"><a class="dropdown-item" href="https://www.instagram.com/rameshvai697/" style="margin-left: 20%; margin-top: -41%; width: 10%;"><i class="fa fa-brands fa-square-instagram" style="color: #fff;"></i></a></li>
        <li style="font-size: 50px; color: #fff;"><a class="dropdown-item" href="https://twitter.com"style="margin-left: 38%; margin-top: -41%; width: 10%;"><i class="fa fa-brands fa-square-twitter" style="color: #fff;"></i></a></li>
        <li style="font-size: 50px; color: #fff;"><a class="dropdown-item" href="https://www.youtube.com" style="margin-left: 55%; margin-top: -41%; width: 10%;"><i class="fa fa-brands fa-youtube" style="color: #fff;"></i></a></li>
        <li style="font-size: 50px; color: #fff;"><a class="dropdown-item" href="https://mail.google.com" style="margin-left: 75%; margin-top: -41%; width: 10%;"><i class="fa fa-solid fa-envelope" style="color: #fff;"></i></a></li>
    </div> 
</div>  