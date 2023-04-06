<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        .nav {
            min-height: 100vh;
            background-image: url(image/book111.jpg);
            background-position: center;
            background-size: cover;
            position: relative;
            border: #61d394 solid 2px;
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
            font-size: 15px;
            color: red;
        }

        .btn1 {
            background-color: transparent;
            border-color: blue;
            font-size: 20px;
            border-radius: 10px;
            height: 40px;
            width: 200px;
        }

        .btn1:hover {
            background-color: blue;
        }
    </style>
</head>
<?php
$email=$_GET['Email'];
?>
<body style="justify-content: center;border: #ffffff solid 2px;height: 100%;">
    <section class="nav">
        
        <div class="form" style="display: flex;justify-content: center;margin-top:100px;">
            <div style="background-color: rgba(0,0,0,0.7);width:380px; border-radius: 20px;">
                <center><img src="image/Book1.png" alt="" style="height:50px;width: 160px;border-radius: 10px;margin-top:-35px;"></center>
                <div style="padding: 30px;">
                    <center><b style="color: #fff;">Reset Password</b></center><br> <br>
                    <form onsubmit="return verifyPassword()" action="forgetpass_action.php" method="post">
                        <div class="input">
                            <font style="color: #fff; "><b>New Password</b><br>
                                <input id="pswd" type="password" placeholder="Enter New Password" name="pass" required style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                                <span id = "message" style="color:red"> </span>
                        </div>
                        <br>
                        <div class="input"><b>Confirm Password</b> <br>
                            <input id="confirm" type="password"  placeholder="Enter password"  required style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                            <span id="passworderror" class="text-danger"></span>
                        </div>
                        <input type="hidden" name="email" id="" vlaue="<?php echo $email?>">
                        </font><br>
                        <p id="p1"></p>
                        <center><button type="submit" class="btn1"  name="btn">
                                <a href="index.php" class="btn1"><b>Update Password</b></a></button></center>
                    </form>
                    <br>
                    </div>
            </div>
        </div>
    </section>
</body>

</html>
<script type="text/javascript">
function verifyPassword() {  
    var pw = document.getElementById("pswd").value;
    //check empty password field  
    if(pw == "") {  
       document.getElementById("message").innerHTML = "**Fill the password please!";  
       return false;  
    }  
     
   //minimum password length validation  
    if(pw.length < 8) {  
       document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
       return false;  
    }  
    
  //maximum length of password validation  
    if(pw.length > 15) {  
       document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
       return false;  
    } else {  
       alert("Password is correct");  
    }  
  }  
  </script> 
  
 