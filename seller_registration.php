<script>
    function validate123() {
        //alert("welcome to js");
        var fn = document.getElementById('fname1').value;
        var email = document.getElementById('emailid1').value;
        var pwd = document.getElementById('pass').value;
        var pwd1 = document.getElementById('password1').value;
        var no = document.getElementById('mobile1').value;
        //alert("welcome to js");
        if (fn == "") {
            //alert("error");
            document.getElementById('fn1').innerHTML = "Full name field cannot be empty";
            document.getElementById('fn1').style.color = "red";
            document.getElementById('fname1').style.borderColor = "red";
            var vfn = "false";
        } else {
            var fn123 = /^[a-zA-Z ]*$/;
            //alert ("demooooooooooo");
            var e = fn123.test(fn);
            // alert(e);
            if (e == false) {
                document.getElementById('fname1').focus();
                document.getElementById('fn1').innerHTML = "Full name must contain only letters";
                document.getElementById('fn1').style.color = "red";
                document.getElementById('fname1').style.borderColor = "red";
                vfn = "false";
            } else {
                document.getElementById('fn1').innerHTML = "";
                document.getElementById('fname1').style.borderColor = "green";
                vfn = "true";
            }
        }
        if (email == "") {
            document.getElementById('mail1').innerHTML = "Email Address field cannot be empty";
            document.getElementById('mail1').style.color = "red";
            document.getElementById('emailid1').style.borderColor = "red";
            var vemail = "false";
        } else {
            var em = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
            var a = em.test(email);
            if (a == false) {
                document.getElementById('emailid1').focus();
                document.getElementById('mail1').innerHTML = "Invalid Email address";
                document.getElementById('mail1').style.color = "red";
                document.getElementById('emailid1').style.borderColor = "red";
                vemail = "false";
            } else {
                document.getElementById('mail1').innerHTML = "";
                document.getElementById('emailid1').style.borderColor = "green";
                vemail = "true";
            }
        }
        if (no == "") {
            document.getElementById('mno').innerHTML = "Mobile  number cannot be empty";
            document.getElementById('mno').style.color = "red";
            document.getElementById('mobile1').style.borderColor = "red";
            var vno = "false";
        } else {
            var mn = /^[0-9]{10}$/;
            var b = mn.test(no);
            if (b == false) {
                document.getElementById('mobile1').focus();
                document.getElementById('mno').innerHTML = "Invalid Mobile Number";
                document.getElementById('mno').style.color = "red";
                document.getElementById('mobile1').style.borderColor = "red";
                vno = "false";
            } else {

                document.getElementById('mno').innerHTML = "";
                document.getElementById('mobile1').style.borderColor = "green";
                vno = "true";
            }
        }
        if (pwd == "") {
            document.getElementById('passw').innerHTML = "Password field cannot be empty";
            document.getElementById('passw').style.color = "red";
            document.getElementById('pass').style.borderColor = "red";
            var vpwd = "false";
        } else {
            re = /[0-9]/;
            re1 = /[a-z]/;
            re2 = /[A-Z]/;
            re3 = /[!@#\$%\^\&*+=._-]/;
            var a1 = pwd.length < 6;
            var a2 = pwd.length > 15;
            var a3 = re.test(pwd);
            var a4 = re1.test(pwd);
            var a5 = re2.test(pwd);
            var a6 = re3.test(pwd);
            if (a1 == true || (a2 == true) || (a3 == false) || (a4 == false) || (a5 == false) || (a6 == false)) {
                document.getElementById('pass').focus();
                var msgpwd = "Please choose Strong Password";
                document.getElementById('passw').innerHTML = msgpwd;
                document.getElementById('passw').style.color = "red";
                document.getElementById('pass').style.borderColor = "red";
                var vpwd = "false";
                //alert(vpwd);
            } else {
                var msgpwd = "";
                document.getElementById('passw').innerHTML = msgpwd;
                document.getElementById('pass').style.borderColor = "green";
                vpwd = "true";
            }
        }
        if (pwd1 == "") {
            document.getElementById('passw1').innerHTML = "Confirm Password field cannot be empty";
            document.getElementById('passw1').style.color = "red";
            document.getElementById('password1').style.borderColor = "red";
            var vpwd1 = "false";
        } else {
            if (pwd1 != pwd) {
                document.getElementById('password1').focus();
                document.getElementById('passw1').innerHTML = "Password and Confirm Password must be same";
                document.getElementById('passw1').style.color = "red";
                document.getElementById('password1').style.borderColor = "red";
                vpwd1 = "false";
            } else {
                document.getElementById('passw1').innerHTML = "";
                document.getElementById('password1').style.borderColor = "green";
                vpwd1 = "true";
            }
        }

        if (vemail == "true" && vno == "true" && vpwd == "true" && vpwd1 == "true" && vfn == "true") {
            return true;
        } else {
            return false;
        }
    }
</script>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            /* font-family: 'Poppins', sans-serif; */
            /* background-color: grey; */
            /* height: 100vj; */
        }
        body{
            height: 100vh;
        }
        nav {
            display: flex;
            flex-direction: row;
            padding: 2% 6%;
            justify-content: space-between;
            align-items: center;

        }

        input {
            color: #fff;
            /* border-color:blue; */
            border-radius: 6px;
            background-color: rgba(0, 0, 0, 0);
            height: 30px;
            width: 300px;
        }
        /* input:focus{
            border-color: blue;
        } */
        .nav {
            min-height: 130vh;
            background-image: url(image/book111.jpg);
            background-position: center;
            background-size: cover;
            position: relative;
            border: #61d394 solid 2px;
        }

        a {
            text-decoration: none;
        }

        form div {
            padding: 20px;
        }

        .home {
            height: 35px;
            width: 100px;
            border-color: red;
            color: #fff;
            font-size: 20px;
            background-color: transparent;
        }

        .home:hover {
            background-color: red;
        }
    </style>
</head>

<body style="justify-content: center;border: #ffffff solid 2px;">
    <section class="nav">
        <!-- <nav>
            <a href="register.php"><img src="pic/hen.png" height="40px" width="100px">
            </a>
            <div style="font-size: 20px;"><a href="index.php"><button class="home">Home</button></a></div>
        </nav> -->
        <!-- <center>
            <font size="6" color="white">Sign Up Here</font>
        </center><br> -->
        <div style="display: flex;justify-content: center; margin-top:80px;">
            <div style="background-color: rgba(0,0,0,0.7);width:350px;height:fit-content;border-radius: 10px;color: #fff;">
                <form onSubmit="return(validate123());" method="post" enctype="multipart/form-data" action="Seller_dashboard.php">

                <div class="form-group">
                                    <label for="email">Full Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter Name" id="fname1"value="krishnu Gupta" name="fn1">
                                    <p id="fn1"></p>
                                </div>
                                   
                <div class="form-group">
                        <label for="email">Full Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Name" id="fname1" name="fn1">
                        <p id="fn1"></p>
                    </div>

                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter Email" id="emailid1" name="eid" onblur="demo(this)">
                        <p id="mail1"></p>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter Password" id="pass" name="pwd">
                        <p id="passw"></p>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Confirm Password:</label>
                        <input type="password" class="form-control" placeholder="Re-Enter Password" id="password1" name="repwd">
                        <p id="passw1"></p>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Mobile Number:</label>
                        <input type="text" class="form-control" placeholder="Enter Mobile Number" id="mobile1" name="mobile">
                        <p id="mno"> </p>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Profile Picture:</label>
                        <input type="file" class="form-control" name="p_pic">

                    </div>

                    <center><input type="submit" class="btn btn-primary" value="Register" name="sub" /></center>
                </form>
                <br>
                <font color="white"><b>Already have an account ? <a href="seller_login.php" style="text-decoration:none;color: white;"><u>Login</u></a></b><br></font><br>
                        
                <center><button style="background-color: rgb(117, 14, 143);width: 150px;height:35px;font-size: 20px;border: 0;border-radius: 20px;">
                        <a href="login-home-page.php" style="color:#fff;"><b>Return Back</b></a></button></center><br>
            </div>
        </div>
        </div>
    </section>

</body>

</html>