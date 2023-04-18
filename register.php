<?php
include_once("database/Create_database.php");
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
   <script src="non_login/validation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: url(image/book111.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .input::after {
            content: '';
            width: 300px;
            height: 3px;
            background: #ffffff;
            display: block;
            margin: 2px;
            margin-left: -0px;
        }

        a {
            text-decoration: none;
            color: #fff;
        }

        input {
            color: #fff;
        }

        span {
            font-size: 10px;
            color: red;
            height: 10px;
        }

        .btn1 {
            background-color: transparent;
            border-color: blue;
            font-weight: bold;
            font-size: 20px;
            border-radius: 10px;
            height: 40px;
            width: 100px;
        }

        .btn1:hover {
            background-color: blue;
        }

        /* .text-danger{
            font-size: 10px;
            margin-top: -50px;
            background-color: blue;
            margin: 0;

        } */
        input::-webkit-input-placeholder {
            /* color: blue; */
            font-size: 15px;
        }
        input{
            font-size: 15px;
        }
        .ale {
            position: absolute;
            top: 30px;
            right: 50px;
        }
        .re{
            position: absolute;
            bottom: 80px;
            right:45%;
        }
    </style>
</head>
<body style="justify-content: center;border: #ffffff solid 2px; height: 100vh;">
        
<?php
if (isset($_SESSION['reg_msg_err'])) {
?>

    <div class="ale">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Alert!</strong> <br><?php echo $_SESSION['reg_msg_err'] ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>


    <Script>
        setTimeout("", 5000);
    </Script>
<?php
    unset($_SESSION['reg_msg_err']);
}

if (isset($_SESSION['reg_msg'])) {
?>

    <div class="ale">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Alert!</strong> <br> <?php echo $_SESSION['reg_msg'] ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>


    <Script>
        setTimeout("", 5000);
    </Script>
<?php
    unset($_SESSION['reg_msg']);
}

?>
    
    <div class="form" style="display: flex;justify-content: center;margin-top:40px;">
        <div style="background-color: rgba(0,0,0,0.7);width:400px; height:670px;border-radius: 20px;">
            <center><img src="image/Book1.png" alt="" style="height:50px;width: 160px;border-radius: 10px;margin-top:-35px;"></center>
            <div style="padding: 30px;">
                <form  action="register_action.php" onsubmit="return(validation1())" method="post">
                    <div class="input">
                        <font style="color: #fff; " size="5"><b>Full Name</b><br>
                            <input id="name" name="name" type="text" placeholder="Enter your Name"  style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                            <!-- <span id="nameerror" class="text-danger"></span> -->
                    </div>
                    <div class="input">
                        <font style="color: #fff; " size="5"><b>Phone Number</b><br>
                            <input id="number" name="number" type="text" placeholder="Enter your phone Number"  style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                            <!-- <span id="numbererror" class="text-danger"></span> -->
                    </div>
                    <div class="input">
                        <font style="color: #fff; " size="5"><b>E-mail</b><br>
                            <input id="email" name="email" type="email" onblur="check_email(this)" placeholder="example@gmail.com"  style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                            <!-- <span id="emailerror" class="text-danger"></span> -->
                    </div>

                    <div class="input"><b>Password</b> <br>
                        <input id="password" type="password" placeholder="Enter password"  style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                        <!-- <span id="passworderror" class="text-danger"></span> -->
                    </div>
                    <div class="input"><b>Confirm Password</b> <br>
                        <input id="password1" name="pass" type="password" placeholder="confirm password"  style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                        <!-- <span id="passworderror1" class="text-danger"></span> -->
                    </div>
                    </font><br>
                    <p id="p1"></p>
                    <center><input type="submit" class="btn1" name="regi" id="regi" value="Register"></center>
                </form>
                <font color="white"><b>Have an Account?</b> <u><a href="login.php">login</a></u><br></font><br>
            </div>
        </div>
    </div>
    <div class="re">
        <center>
            <button style="background-color: rgb(117, 14, 143);width: 150px;height:35px;font-size: 20px;border: 0;border-radius: 10px; ">
                            <a href="home_page.php" style="color:#fff;"><b>Return BAck</b></a></button>
            </center><br>
    </div>
</body>

</html>
<script>
    function check_email(y) {
        var url = "check_mail.php?emailid=" + y.value;

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.open("GET", url, false);
        xmlhttp.send(null);

        // alert(xmlhttp.responseText);
        if (xmlhttp.responseText != "noerror") {
            alert("Email ID is Already registered Please Enter a new Email address");
            document.getElementById("email").value = "";
            document.getElementById("email").focus();
        }
    }
</script>
