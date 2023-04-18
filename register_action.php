
<?php
include_once("database/Create_database.php");
session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    //Load Composer's autoloader
    require('PHPMailer\PHPMailer.php');
    require('PHPMailer\SMTP.php');
    require('PHPMailer\Exception.php');
    
    if (isset($_POST['regi'])) {
        $name = @$_POST['name'];
        $num = @$_POST['number'];
        $pass = @$_POST['pass'];
        $em = @$_POST['email'];
        $role=@$_POST['role'];
        $date=date('Y/m/d');
        $q = "INSERT INTO registration(`Fullname`, `Email`, `mobile`, `password`, `profile_picture`,`Status`, `role`,`Register_date`) VALUES ('$name','$em','$num','$pass','Default.png','Inactive','$role','$date');";
        if (mysqli_query($con, $q)) {
            $link = "http://localhost/Group-16/account_activation.php?email=$em";
            $mail = new PHPMailer();
            $headers = 'From: Book Chor  Website <kgupta750@rku.ac.in>' . "\r\n";
            $headers .= 'Reply-To: <kgupta750@rku.ac.in>' . "\r\n";
            $headers .= 'X-Mailer: PHP/' . phpversion();
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
            $to = $em;
            $subject = "Account Activation link";
            $body = 'Your account is created successfully. Please click on the activation link to activate your account. <br> <br>' .
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
            $mail->Subject    = "Account activation link for Ecommerce Website";
            $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
            $mail->MsgHTML($body);
            $address = $em; //to
            $mail->AddAddress($address, "Book Chor");
            if (!$mail->Send()) {
                $_SESSION['reg_msg_err'] = "Account created successfully. Error in sending activation link. Please try again.";
    ?>
                <script>
                    window.location = "register.php";
                </script>
            <?php
            } else {
                $_SESSION['reg_msg'] = "Account created successfully. An activation link is sent to your registered email address. click on the link to activate your account.";
            ?>
                <script>
                    window.location = "register.php";
                </script>
            <?php
            }
        } else {
            $_SESSION['reg_msg_err'] = "Error in creating account. Please try again.";
            ?>
            <script>
                window.location = "register.php";
            </script>
    <?php
        }
    }
    ?>
    <script>
    window.location = "register.php";
</script>
?>