<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <script src="Register.js"></script>
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
            width:  300px;
        }

        .btn1:hover {
            background-color: blue;
        }
       

        .btn2:hover {
            background-color: blue;
        }
    </style>
</head>

<body style="justify-content: center;border: #ffffff solid 2px;height: 100%;">
    <section class="nav">
        <div class="form" style="display: flex;justify-content: center;margin-top:100px;">
            <div style="background-color: rgba(0,0,0,0.7);width:380px; height:;border-radius: 20px;">
                <center><img src="image/Book1.png" alt="" style="height:50px;width: 160px;border-radius: 10px;margin-top:-35px;"></center>
                <div style="padding: 30px;">
                    <form onsubmit="return validation1()" action="" method="post">
                        <div class="input">
                            <font style="color: #fff; " size="3"><b>Enter Your Registered Email</b><br> <br>
                                <input id="email" type="text" placeholder="example@gmail.com" name="email" required style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                                <span id="emailerror" class="text-danger"></span>
                        </div>
                        <br>
                       
                        </font><br>
                        <center><button type="submit" class="btn1"  name="submit">
                                <a href="#" class="btn1"><b>Send Verification Email</b></a></button></center>
                    </form>
                    <br>
                    <font color="white" size="2"> <b> Don't have an Account?</b> <u style="text-decoration: none;"><a href="register.php">Create Account</a></u><br></font><br>
                    <font color="white"><b>Already have Account !!</b> <u style="text-decoration: none;"><a href="login.php">Log in</a></u><br></font><br>

                    <center><button style="background-color: rgb(117, 14, 143);width: 150px;height:35px;font-size: 20px;border: 0;border-radius: 10px;">
                            <a href="home.php" style="color:#fff;"><b>Return BAck</b></a></button></center><br>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<script>
    function validation1() {
        var email = document.getElementById("email").value;
        var emailcheck = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        if (emailcheck.test(email)) {

        } else {
            alert("Enter valid Email");
            return false;
        }
    }
</script>

<?php
include_once("database/Create_database.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('PHPMailer\PHPMailer.php');
require('PHPMailer\SMTP.php');
require('PHPMailer\Exception.php');
?>
<?php
if (isset($_POST['submit'])) {
    $em = @$_POST['email'];

//   $email = mysqli_real_escape_string($con,$_POST['email']);
  
  $emailquery = "select * from registration where Email='$em' ";
  $query = mysqli_query($con,$emailquery);

  $emailcount = mysqli_num_rows($query);
  if($emailcount==1){
    $link = "http://localhost/group-16/reset_pwd.php?Email=$em";
    //echo $link;
    $mail = new PHPMailer();
            $headers = 'From: Book Chor  Website <kgupta750@rku.ac.in>' . "\r\n";
            $headers .= 'Reply-To: <kgupta750@rku.ac.in>' . "\r\n";
            $headers .= 'X-Mailer: PHP/' . phpversion();
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
            $to = $em;
            $subject = "Account Password reset link";
            $body = '.Please click on the activation link to Reset your account password. <br> <br>' .
                $link;
    
            $mail->IsSMTP(); // telling the class to use SMTP
            // $mail->Mailer = "smtp";
            $mail->SMTPDebug  = 2;                // enables SMTP debug information (for testing)
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );                                             // 1 = errors and messages
            // 2 = messages only
            $mail->SMTPAuth   = true;                  // enable SMTP authentication
            $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
            $mail->Host       = 'smtp.gmail.com';      // sets GMAIL as the SMTP server
            $mail->Port       = 587;                   // set the SMTP port for the GMAIL server
            $mail->Username   = "kgupta750@rku.ac.in";  // GMAIL username(from)
            $mail->Password   = "KRISHNU.GUPTA";            // GMAIL password(from)
            $mail->SetFrom('kgupta750@rku.ac.in', 'Book Chor'); //from
            $mail->AddReplyTo($em, "Book chor"); //to
            $mail->Subject    = "Account activation link for Book chor";
            $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
            $mail->MsgHTML($body);
            $address = $em; //to
            $mail->AddAddress($address, "Book Chor");
    if (!$mail->Send()) {
        ?>
        <script>
            alert('Failed to reset the password please try again after sometime');
        </script>
      <?php
    } else {
        ?>
        <script>
            alert(' Activation link sent to your register email');
        </script>
      <?php
     }
}

else {
?>
<script>
        alert('Enter Registerd Email');
        </script>

<?php
?>

<script>
window.location = "forget.php";
</script>
<?php
} }
?>
