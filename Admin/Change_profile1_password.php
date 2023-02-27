
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="javascript" src="js/bootstrap.js"></style>
    <style>
        form{
            width: 380px;
            padding: 10px;
            margin: 10px;
            border: 10px solid #505050;
            background-color: #505050;
            text-align: center;
            color: white;
            margin-left: 35%;
            border-radius: 10px;
            margin-top: 6%;
        }
        form h3{
            color: black;
            width: 40%;
            margin-left: 30px;
        }
        form h1{
            color: red;
        }
        form input{
            font-size: 20px;
            border-radius: 5px;
            width: 40%;
            margin-left: 40%;
            margin-top: -12%;
        }
        form .button2 a{
            color: white;
        }
        form .button2{
            background: black;
            width: 40%;
            height: 40px;
            border-radius: 20px; 
          
            transition: 0.5s;
        }
        form .button2:hover{
            background: green;
            transition: 0.5s;
            transform: translate(1.1s);
        }
            form .button2 a{
                color: white;
            }
            form .button{
                background: black;
                width: 40%;
                height: 40px;
                border-radius: 20px; 
                transition: 0.5s;
            }
            form .button:hover{
                background: green;
                transition: 0.5s;
                transform: translate(1.1s);
            }
            form .button a{
                color: white;
            }
            form button a{
                text-decoration: none;
            }
            form button a:hover{
                text-decoration: none;
            }
            form .button3 a{
                color: #fff;
            }
            form .button3 {
                margin-top: 10px;
                background: green;
                width: 85%;
                height: 40px;
                border-radius: 10px; 
                transition: 0.5s;
            }
            form .button3:hover{
                background-color: black;
                transform: translate(1.1);
                transition: 0.8s;
            }
    </style>
</head>

<form action="Profile1.php" class="col-4">
    <h1>Change Passwor Form1!</h1><br>
    <h3>Your Old Password:</h3><input type="password" name="pwd" id="pwd1" placeholder="Old Password" />
    <br><br>
    <h3>Your New Password:</h3><input type="password" name="pwd2" id="pwd3" placeholder="New Password" />
    <br><br>
    <h3>Re-Enter Password:</h3><input type="password" name="rpwd3" id="rpwd4" placeholder="Re_password" />
    <br><br>
    
    <button class="button2"><a href="Admin_Account.php">Go to Home Page</a></button>
    <button class="button"><a href="Profile1.php">Update Paswowrd</a></button>

    <button class="button3"><a href="Profile1.php">View My-Profile</a></button>

</form>