<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <script src="Register.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        .nav{
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
        .btn1{
            background-color: transparent;
            border-color: blue;
            font-size: 20px;
            border-radius: 10px;
            height: 40px;
            width: 100px;
        }
        .btn1:hover{
            background-color: blue;
        }
    </style>
</head>

<body style="justify-content: center;border: #ffffff solid 2px;height: 100%;">
    <section class="nav">
        <!-- <nav>
            <a href="login.php"><img src="./pic/hen.png" height="40px" width="100px"></a>
            <div style="font-size: 20px;"><a href="index.php"><button class="home">Home</button></a></div>
        </nav><br> -->
        <div class="form" style="display: flex;justify-content: center;margin-top:100px;">
            <div style="background-color: rgba(0,0,0,0.7);width:380px; height:500px;border-radius: 20px;">
                <center><img src="image/Book1.png" alt="" style="height:50px;width: 160px;border-radius: 10px;margin-top:-35px;"></center>
                <div style="padding: 30px;">
                    <form onsubmit="return validation1()" action="login-home-page.php">
                        <div class="input">
                            <font style="color: #fff; " size="5"><b>E-mail</b><br>
                                <input id="email" type="email" placeholder="example@gmail.com" required style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                                <span id="emailerror" class="text-danger"></span>
                        </div>
                        <br>
                        <div class="input"><b>Password</b> <br>
                            <input id="password" type="password" placeholder="Enter password" required style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                            <span id="passworderror" class="text-danger"></span>
                        </div>
                        </font><br>
                        <p id="p1"></p>
                        <center><button type="submit" class="btn1"  type="submit">
                                <a href="index.php" class="btn1"><b>Log In</b></a></button></center>
                    </form>
                    <br>
                    <font color="white">forgot password ?<br></font><br>
                    <font color="white"><b>Don't have?</b> <u><a href="">Create Account</a></u><br></font><br>
                   
                    <center><button style="background-color: rgb(117, 14, 143);width: 150px;height:35px;font-size: 20px;border: 0;border-radius: 10px;">
                            <a href="#" style="color:#fff;"><b>Return BAck</b></a></button></center><br>
                </div>
            </div>
        </div>
    </section>
</body>

</html>