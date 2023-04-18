<?php
include_once("../database/Create_database.php");
        session_start();
        if (isset($_POST['change'])) {
            $pass1 = @$_POST['pass1'];
            $spass = $_SESSION['password'];
            $semail = $_SESSION['email'];
            $check = $_POST['cp1'];
            if ($check == $spass) {
                $change = "UPDATE `registration` SET `password`='$pass1' WHERE email='$semail' and password ='$spass'";
                if (mysqli_query($con, $change)) {
                    $_SESSION['PASSWORDWRONG'] = "Password Change Successfully";
                    $_SESSION['password'] = "$pass1";
                } else {
                    $_SESSION['PASSWORDWRONG'] = "Password Change Failed Enter New Password";
                }
            } else {
                $_SESSION['PASSWORDWRONG'] = "Password Change Failed Enter Correct Password";
            }
        }
        ?>
        <script>
            window.location.href="<?php echo$_SESSION['path']?>";
        </script>