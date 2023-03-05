<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <script src="Register.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: url(image/book111.jpg);
            background-repeat: no-repeat;
            background-size:cover;
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
    </style>
</head>
<body style="justify-content: center;border: #ffffff solid 2px;height: 100vh;">
        <div class="form" style="display: flex;justify-content: center;margin-top:40px;">
            <div style="background-color: rgba(0,0,0,0.7);width:400px; height:750px;border-radius: 20px;">
                <center><img src="image/Book1.png" alt="" style="height:50px;width: 160px;border-radius: 10px;margin-top:-35px;"></center>
                <div style="padding: 30px;">
                    <form action="" onsubmit="return validation1()" method="post" enctype=multipart/form-data>
                        <div class="input">
                            <font style="color: #fff; " size="5"><b>Name</b><br>
                                <input id="name" name="name" type="text" placeholder="Enter your Name" required  style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                               <!-- <span id="nameerror" class="text-danger"></span> -->
                        </div>
                        <div class="input">
                            <font style="color: #fff; " size="5"><b>Phone Number</b><br>
                                <input id="number" name="number" type="text" placeholder="Enter your phone Number" required  style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                                <!-- <span id="numbererror" class="text-danger"></span> -->
                        </div>
                        <div class="input">
                            <font style="color: #fff; " size="5"><b>E-mail</b><br>
                                <input id="email" name="email" type="email" placeholder="example@gmail.com"required   style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                                <!-- <span id="emailerror" class="text-danger"></span> -->
                        </div>
                        
                        <div class="input"><b>Password</b> <br>
                            <input id="password" type="password" placeholder="Enter password" required  style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                            <!-- <span id="passworderror" class="text-danger"></span> -->
                        </div>
                        <div class="input"><b>Confirm Password</b> <br>
                            <input id="password1" name="pass" type="password" placeholder="confirm password" required  style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                            <!-- <span id="passworderror1" class="text-danger"></span> -->
                        </div>
                        <div class="input"><b>Profile Picture</b> <br>
                            <input id="pic" name="pic" type="file" placeholder="confirm password" required   style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                            <!-- <label for="pic">Choose Profile Picture</label> -->
                        </div>
                        </font><br>
                        <p id="p1"></p>
                        <center><input type="submit" class="btn1" name="" id="" value="Register"></center>
                    </form>
                    <font color="white"><b>Have an Account?</b> <u><a href="login.php">login</a></u><br></font><br>

                    <center><button style="background-color: rgb(117, 14, 143);width: 150px;height:35px;font-size: 20px;border: 0;border-radius: 10px;">
                            <a href="#" style="color:#fff;"><b>Return BAck</b></a></button></center><br>
                </div>
            </div>
        </div>
</body>
</html>
<script>
    function validation1(){
        var name=document.getElementById("name").value;
        var number=document.getElementById("number").value;
        var password=document.getElementById("password").value;
        var cpass=document.getElementById("password1").value;
         var namecheck=/[A-Za-z]/;
          var numbercheck=/^[0-9]{10}$/;
         var passwordcheck=/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
         if(namecheck.test(name)){

         }
         else{
            
            // document.getElementById('nameerror').innerHTML ="Name Connot contain number";
            alert("Name Connot contain number");
            N="false";
         }
         if(numbercheck.test(number)){

         }
         else{
            
            // document.getElementById('numbererror').innerHTML ="Number must be 10 digit";
            alert("Number must be 10 digit");
            NU="false";
         }
         if(passwordcheck.test(password)){
            if(password===cpass){

            }
            else{
            // document.getElementById('passworderror1').innerHTML ="Enter same as above";
            alert("Enter same as above");
            CP="false";
            }
         }
         else{
            // document.getElementById('passworderror').innerHTML ="Password must contain number symbol and character";
            alert("Password must contain number symbol and character");
            P="false";
         }
         if(N=="false"||NU=="false"||P=="false"||CP=="false"){
            return false;
         }
         
    }
</script>
<?php

$name=@$_POST['name'];
$num=@$_POST['number'];
$pass=@$_POST['pass'];
$em=@$_POST['email'];
$pic=@$_FILES['pic']['name'];
include_once("database/Create_database.php");
// $select="SELECT * FROM user WHERE 1";
// $data=mysqli_query($con,$select);
// $result=mysqli_fetch_array($con,$data);
$q="INSERT INTO user(`Name`, `Email`, `Number`, `password`, `profile_picture`, `Role`) VALUES ('$name','$em','$num','$pass','$pic','USER');";
if(mysqli_query($con,$q)){
?>
<script>
    alert("REgistration completed");
</script>
<?php
}
else{
    ?>
    <script>
        alert("REgistration fail");
    </script>
    <?php
}
