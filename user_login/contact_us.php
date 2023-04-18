<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <style>
        .about {
            color: blue;
            font-size: 25px;
        }

        .about::after {
            content: '';
            width: 200px;
            height: 2px;
            background: #63d6b4;
            display: block;
            margin: auto;
        }

        .img {
            height: 60px;
            width: 60px;
        }

        @media only screen and (max-width:1000px) {
            html {
                font-size: 60%;
            }

            ul li {
                display: block;
            }

            font {
                font-size: 10px;
            }

            .img {
                height: 50px;
                width: 50px;
                margin-left: 50px;
                margin-top: -10px;
            }

            .send {
                margin-left: 30px;
            }

            .left {
                margin-left: -50px;
            }
        }
        .aahan{
            height:60px;
        }
    </style>
</head>
<?php 
include('home_nave.php');
?>
<div class="aahan"></div>
<body style="justify-content: center;border: #ffffff solid 2px;background-color: #4a4646;">
    <section class="nav">
       
        <div style="display:flex;flex-direction: column;width: 100%;">
            <div>
                <center>
                    <div class="about"><b>Contact Us</b></div>
                    <div style="padding-top: 5px;color:rgb(255, 255, 255);"><b>
                            Ask freely if you have any doubt or query. You can give us
                            feedback about the website. <br> And you are also allowed to give suggestion to improve the
                            website </b>
                    </div> <br>
                </center>
            </div>
            <div style="display:flex ; flex-direction:row;justify-content: center;" class="left">
                
                <div>
    
                    <div><b>
                            <font style="color:rgb(53, 231, 121); padding-left:20px ;">Address</font>
                            <br>
                            <font style="color: #fff; padding-left:20px ;">RK University,India</font>
                        </b></div><br><br>
                    <div><b>
                            <font style="color:rgb(53, 231, 121); padding-left:20px ;">Phone</font>
                            <br>
                            <font style="color: #fff; padding-left:20px ;">+919100000000</font>
                        </b></div><br><br><br>
                    <div><b>
                            <font style="color:rgb(53, 231, 121); padding-left:20px ;">Email</font>
                            <br>
                            <font style="color: #fff; padding-left:20px ;">aliaahan31@gmail.com</font>
                        </b></div>
                </div>
                <div style="background-color:rgba(255, 255, 255, 0.6); height:100%;width:40%;border-radius: 10px;margin-left: 50px;margin-bottom: 20px;"
                    class="send">
                    <form onsubmit="return validation()" action="" method="post">
                        <div style="color: rgb(139, 11, 165);margin: 20px;">
                            <font size="6px"><b>Send Message</b></font>
                        </div>
                        <div style="margin: 5px 20px; "><input id="name" name="c1" type="text" placeholder="Name" required style="height: 30px; width: 90%; background-color: #fff; border: 0; border-radius: 5px;">
                            <span id="usererror" class="text-danger"></span>

                        </div>
                        <div style="margin: 5px 20px; "> <br> <input id="email" name="c2" type="text" placeholder="E-mail" style="height: 30px; width: 90%; background-color: #fff; border: 0; border-radius: 5px;">
                            <span style="color: red;" id="emailerror" class="text-danger"></span>

                        </div>
                        <div style="margin: 5px 20px; "> <br> <input id="number" name="c3" type="number" maxlength="10" placeholder="Phone_Number" style="height: 30px; width: 90%; background-color: #fff; border: 0; border-radius: 5px;">
                            <span style="color: red;" id="numbererror" class="text-danger"></span>

                        </div>
                        <div style="margin: 5px 20px; "><textarea name="c4" id="message" cols="36" rows="7" style=" background-color: #fff; border: 0; border-radius: 5px;width: 90%;" placeholder="  Type your message..." required></textarea></div>
                        <div style="margin: 5px 20px;"><button name="btn" type="submit" style=" border: 0; border-radius: 10px;background-color: rgb(189, 87, 248);color: #fff;
                                 height: 30px;width:100px;font-size: 20px;">
                                Submit</button></div>

                    </form>
                </div>
    
            </div>
        </div>
    </section><br>
    <?php include_once("footer.php"); ?>
</body>
<script type="text/javascript">
    function validation() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var firstcheck = /^[A-Za-z. ]{3,20}$/;
        // var emailcheck = /^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))*[A-Za-z0-9]+@((\w+\-+)|(\w+\.))*\w{1,63}\.[a-zA-Z]{2,6}$/;
        var emailcheck = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;


        if (firstcheck.test(name)) {
            document.getElementById('usererror').innerHTML = "";
        }
        else {
            document.getElementById('usererror').innerHTML = "**Invalid Name";
            return false;
        }

        if (emailcheck.test(email)) {
            document.getElementById('emailerror').innerHTML = "";
        }
        else {
            document.getElementById('emailerror').innerHTML = "**Invalid Email";
            return false;
        }
    }
</script>
<?php
if (isset($_POST['btn'])) {
    $c1 = @$_POST['c1'];
    $c2 = @$_POST['c2'];
    $c3 = @$_POST['c3'];
    $c4 = @$_POST['c4'];

    $q = "INSERT INTO `contact_us`(`Name`, `Email`, `Phone_Number`, `Message`) VALUES 
('$c1','$c2','$c3','$c4')";
    if (mysqli_query($con, $q)) {
?>
        <script>
            alert("Thanks For Your Suggestion");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("unsuccessful");
        </script>
<?php
    }
}
?>