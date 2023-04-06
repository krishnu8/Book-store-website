<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="Register.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        .nav {
            min-height: 100vh;
            background-position: center;
            background-size: cover;
            position: relative;
            /* border: #61d394 solid 2px; */
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            background-image: url(image/book111.jpg);
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
            font-size: 15px;
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
            width: 100px;
        }

        .btn1:hover {
            background-color: blue;
            color: white;
            text-decoration: none;
        }

        input::-webkit-input-placeholder {
            /* color: blue; */
            font-size: 15px;
        }

        .ale {
            position: absolute;
            top: 30px;
            right: 50px;
        }

        .c:hover {
            color: white;
        }
    </style>
</head>

<body>

    <section class="nav">
        <?php
        session_start();
        if (isset($_SESSION['login'])) {
        ?>

            <div class="ale">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Alert!</strong> <?php echo $_SESSION['login'] ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


            <Script>
                setTimeout("", 5000);
            </Script>
        <?php
            unset($_SESSION['login']);
        }
        if (isset($_SESSION['Activation_err'])) {
        ?>

            <div class="ale">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong> <?php echo $_SESSION['Activation_err'] ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


            <Script>
                setTimeout("", 5000);
            </Script>
        <?php
            unset($_SESSION['Activation_err']);
        }

        if (isset($_SESSION['Activation_succ'])) {
            ?>
                
                    <div class="ale">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Alert!</strong> <?php echo $_SESSION['Activation_succ'] ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    </div>
    
                <Script>
                    setTimeout("",5000);
                </Script>
            <?php
            unset($_SESSION['Activation_succ']);
            }

        ?>
        <div class="form" style="display: flex;justify-content: center;margin-top:100px;">
            <div style="background-color: rgba(0,0,0,0.7);width:380px; height:520px;border-radius: 20px;">
                <center><img src="image/Book1.png" alt="" style="height:50px;width: 160px;border-radius: 10px;margin-top:-35px;"></center>
                <div style="padding: 30px;">
                    <form onsubmit="return validation1()" action="" method="post">
                        <div class="input">
                            <font style="color: #fff; " size="5"><b>E-mail</b><br>
                                <input id="email" type="text" placeholder="example@gmail.com" name="email" required style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                                <span id="emailerror" class="text-danger"></span>
                        </div>
                        <br>
                        <div class="input"><b>Password</b> <br>
                            <input id="password" type="password" placeholder="Enter password" name="pass" required style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                            <span id="passworderror" class="text-danger"></span>
                        </div>
                        </font><br>
                        <p id="p1"></p>
                        <center>
                            <button type="submit" class="btn1" type="submit" name="log">
                                <a href="index.php" class="btn1"><b>Log In</b></a></button>
                        </center>
                    </form>
                    <br>
                    <font color="white">forgot password ?<br></font><br>
                    <font color="white"><b>Don't have?</b> <u><a href="register.php" class="c">Create Account</a></u><br></font><br>

                    <center><button style="background-color: rgb(117, 14, 143);width: 150px;height:35px;font-size: 20px;border: 0;border-radius: 10px; ">
                            <a href="home_page.php" style="color:#fff;"><b>Return BAck</b></a></button></center><br>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<!-- <script>
    function validation1() {
        var email = document.getElementById("email").value;
        var emailcheck = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        if (emailcheck.test(email)) {

        } else {
            alert("Enter valid Email");
            return false;
        }
    }
</script> -->

<?php
if (isset($_POST['log'])) {

    $pass = @$_POST['pass'];
    $em = @$_POST['email'];
    include_once("database/Create_database.php");
    $select = "SELECT * FROM registration WHERE email='$em' and password='$pass'";
    $count = mysqli_num_rows(mysqli_query($con, $select));
    // echo "$count";
    if ($count == 1) {
        $select = "SELECT * FROM registration WHERE email='$em'";
        $role = mysqli_fetch_array(mysqli_query($con, $select));
        if ($role[8] == 'Active') {
            if ($role[9] == 'Normal') {
                session_start();
                $_SESSION['User_id'] = "$role[10]";
                $_SESSION['email'] = "$em";
                $_SESSION['password'] = "$pass";
?>
                <script>
                    window.location.href = "user_login/user_home.php";
                </script>
            <?php
            } elseif ($role[9] == "Admin") {
                session_start();
                $_SESSION['Admin_email'] = "$em";
                $_SESSION['Admin_password'] = "$pass";
            ?>
                <script>
                    window.location.href="Admin/Dashboard.php";
                </script>
            <?php
            } else {
                echo "Seller";
            ?>
                <script>
                    window.location.href="seller.php";
                </script>
            <?php
            }
        } else {
            $_SESSION['login'] = " Your account is not activated please click the link sent to your registed email";
            ?>
            <script>
                window.location.href = "login.php";
            </script>
        <?php
        }
    } else {
        $_SESSION['login'] = "Incorrect Email or Password";
        ?>
        <script>
            window.location.href = "login.php";
        </script>
<?php
    }
}
?>