<?php
include_once("database/Create_database.php");
session_start();
?>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
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
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .con {
        background-color: rgba(0, 0, 0, 0.7);
        height: 550px;
        width: 370px;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .font {
        color: #fff;
        font-size: 23px;
        font-weight: bold;
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

    input {
        color: #fff;
        border: 0;
        height: 30px;
        width: 300px;
        border-radius: 5px;
        background-color: rgba(0, 0, 0, 0);
    }

    .btn1 {
        background-color: transparent;
        border-color: blue;
        font-weight: bold;
        font-size: 20px;
        border-radius: 10px;
        height: 40px;
        width: 100px;
        background-color: purple;
        margin-top: 30px;
        margin-left: 100px;
    }

    .btn1:hover {
        background-color: blue;
    }

    .btn {
        background-color: transparent;
        border-color: blue;
        font-weight: bold;
        font-size: 20px;
        border-radius: 10px;
        /* height: 40px; */
        width: 150px;
        background-color: purple;
        text-align: center;
        color: white;
    }

    a {
        text-decoration: none;
        color: white;
    }

    .text {
        font-size: 20px;
        color: white;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .image {
        position: absolute;
        top: 100px;
    }

    .image img {
        height: 50px;
        width: 170px;
        /* position: absolute; */
        border-radius: 10px;

    }

    p.font {
        margin: 0;
    }

    .ale {
        position: absolute;
        top: 30px;
        right: 50px;
    }
</style>
<html>

<body>

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
    <div class="con">
        <div class="image">
            <img src="image/Book1.png" alt="Image Not avilable">
        </div>
        <form action="register_action.php" method="post" class="form" onsubmit="validation1()">
            <div class="input">
                <p class='font'>Name</p>
                <input id="name" name="name" type="text" placeholder="Enter your Name">
            </div>
            <div class="input">
                <p class='font'>Phone Number</p>
                <input id="number" name="number" type="text" placeholder="Enter your Phone Number">
            </div>
            <div class="input">
                <p class='font'>E-Mail</p>
                <input id="email" name="email" onblur="check_email(this)" type="text" placeholder="Example@gmail.com">
            </div>
            <div class="input">
                <p class='font'>Password</p>
                <input id="password" type="password" type="text" placeholder="Enter Password">
            </div>
            <div class="input">
                <p class='font'>Confirm</p>
                <input id="password1" name="cpass" type="text" placeholder="Confirm Password">
            </div>
            <input type="submit" value="Register" class="btn1" name="regi">
            <!-- <button type="submit" class="btn1" name="regi" id="regi">Register</button> -->
        </form>
        <div class="have">
            <p class="text">Have An Account <a href="">Login</a></p>
        </div>
        <button style="background-color: rgb(117, 14, 143);width: 150px;height:35px;font-size: 20px;border: 0;border-radius: 10px; "><a href="home_page.php" style="color:#fff;"><b>Return BAck</b></a></button>

    </div>
</body>
</html>
<script>
    function validation1() {
    var name = document.getElementById("name").value;
    var number = document.getElementById("number").value;
    var password = document.getElementById("password").value;
    var cpass = document.getElementById("password1").value;
    // var email = document.getElementById("em").value;
    var namecheck = /[A-Za-z]/;
    var numbercheck = /^[0-9]{10}$/;
    var passwordcheck = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
    var emailcheck = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    if (namecheck.test(name)) {
        N = "true";
    } else {

        // document.getElementById('nameerror').innerHTML ="Name Connot contain number";
        alert("Name Connot contain number");
        N = "false";
    }
    if (numbercheck.test(number)) {
        NU = "true";
    } else {

        // document.getElementById('numbererror').innerHTML ="Number must be 10 digit";
        alert("Number must be 10 digit");
        NU = "false";
    }
    // if (emailcheck.test(email)) {
    //     EM = "true";
    // } else {

    //     // document.getElementById('numbererror').innerHTML ="Number must be 10 digit";
    //     alert("Enter correct Email Adderess");
    //     EM = "false";
    // }
    if (passwordcheck.test(password)) {
        if (password === cpass) {
            CP = "true";
        } else {
            // document.getElementById('passworderror1').innerHTML ="Enter same as above";
            alert("Enter same as above");
            CP = "false";
        }
    } else {
        // document.getElementById('passworderror').innerHTML ="Password must contain number symbol and character";
        alert("Password must contain number symbol and character");
        P = "false";
    }
    if (N == "false" || NU == "false" || P == "false" || CP == "false") {
        return false;
    }else{
        return true;
    }

}
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
