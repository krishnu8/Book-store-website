<style>
    .oi {
        position: fixed;
        height: 100%;
        background-color: #9ec5c6;
        border-radius: 10px;
        padding-top: -20px;
    }

    .ale {
        position: absolute;
        top: 100px;
        right: 50px;
        z-index: 1;
        /* width: 500px; */
        font-size: 18px;
    }
    .alert.alert-warning.alert-dismissible.fade.show {
    height: 50px !important;
  }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
include_once("../database/Create_database.php");

if (isset($_POST['delete'])) {
    $spass = $_SESSION['seller_password'];
    $semail = $_SESSION['seller_email'];
    $pass = $_POST['ppass'];
    if ($spass != $pass) {
        $_SESSION['PASSWORDWRONG'] = "Enter Correct Password";
    } else {
        $deactivate = "UPDATE `registration` SET `Status`='Deleted' WHERE email='$semail' and password ='$spass'";
        if (mysqli_query($con, $deactivate)) {
            unset($_SESSION['seller_email']);
            unset($_SESSION['seller_password']);
            $_SESSION['login'] = "Account deleted successfully";
            header("location:../login.php");
        } else {
?>
            <script>
                alert("Please Leave you problem here!");
                // contact page link
                // window.location.href="";
            </script>
    <?php
        }
    }
}

if (isset($_SESSION['PASSWORDWRONG'])) {
    ?>
    <div class="ale">
        <div class="alert alert-warning alert-dismissible  fade show" role="alert">
            <strong>Alert!</strong> <?php echo $_SESSION['PASSWORDWRONG'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <script>
        setTimeout("", 200);
    </script>
<?php
    unset($_SESSION['PASSWORDWRONG']);
}
?>

<!-- delete account -->
<div class="modal fade" id="delete_acc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Conform its You</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <label for="inputPasswordOld">Enter Password</label>
                    <input type="password" class="form-control" id="inputPasswordOld" required="" onblur="checkpass4()" name="ppass">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" value="Delete" class="btn btn-primary" name="delete">
                </div>
            </form>
        </div>
    </div>
</div>

</div>
</div>

<!-- Change password -->
<div class="modal fade" id="cppp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="seller_change_password_action.php" method="post" onsubmit="return validation1()">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Chnage Password</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-lock prefix grey-text"></i>
                         <label data-error="wrong" data-success="right" for="orangeForm-name">Current Password</label>
                        <input type="password" id="orangeForm-name" class="form-control" required name="cp1" onblur="checkpass1()">
                        <p id="checkpasserr" style="color:red;"></p>

                    </div>
                    <div class="md-form mb-5">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="orangeForm-email">New Pasword</label>
                        <input type="password" id="pass" class="form-control " required onblur="check3()">
                        <p id="passerr" style="color:red;"></p>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="orangeForm-pass">verify</label>
                        <input type="password" name="pass1" id="cpass" required class="form-control" onblur="check2()">
                        <p id="cpasserr" style="color:red;"></p>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <input type="submit" value="Change" name="change" style="width:100px;" class="btn-custom">
                </div>
            </div>
        </form>

        <script>
            function validation1() {
                var pass = document.getElementById("pass").value;
                var cpass = document.getElementById("cpass").value;
                var passwordcheck = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
                if (passwordcheck.test(pass)) {
                    if (pass !== cpass) {
                        // alert("Enter same password as above");
                        CP = "false";
                    } else {
                        CP = "true"
                    }
                    P = "true";
                } else {
                    // alert("password must contain number character special symbol");
                    P = "false";
                }
                if (P == "false" || CP == "false") {
                    return false;
                } else {
                    return true;
                }

            }
        </script>
        <?php

        ?>
        <script>
            function checkpass1() {
                <?php
                $jo = $_SESSION['seller_password'];
                // $_SESSION['path']=$first_path;
                $directoryURI = $_SERVER['REQUEST_URI'];
                $path = parse_url($directoryURI, PHP_URL_PATH);
                $components = explode('/', $path);
                $first_part = $components[3];
                $_SESSION['path']="$first_part";
                ?>
                var pass = document.getElementById("orangeForm-name").value;
                var cpass = "<?php echo $jo ?>";
                if (pass != "") {
                    if (pass == cpass) {
                        document.getElementById("orangeForm-name").style.boxShadow = "4px 4px 1px 1px green";
                        document.getElementById("checkpasserr").innerHTML="";
                    } else {
                        document.getElementById("orangeForm-name").style.boxShadow = "4px 4px 1px 1px red";
                        document.getElementById("checkpasserr").innerHTML='Enter Correct Password';
                    }
                }else{
                    document.getElementById("orangeForm-name").style.boxShadow = "none";
                    document.getElementById("checkpasserr").innerHTML='Current Password Cannot Be Empty';
                }
            }

            function check3() {
                var pass = document.getElementById("pass").value;
                var passwordcheck = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
                if (pass != "") {
                    if (passwordcheck.test(pass)) {
                        document.getElementById("pass").style.boxShadow = "4px 4px 1px 1px green";
                        document.getElementById("passerr").innerHTML='';
                    } else {
                        document.getElementById("pass").style.boxShadow = "4px 4px 1px 1px red";
                        document.getElementById("passerr").innerHTML='Password must Contain 8 Character With Special Symbol And Number';
                    }
                }else{
                    document.getElementById("pass").style.boxShadow = "none";
                    document.getElementById("passerr").innerHTML='Password Cannot Be Empty';
                }
            }

            function check2() {
                var pass = document.getElementById("pass").value;
                var cpass = document.getElementById("cpass").value;
                if (cpass != "") {
                    if (pass == cpass) {
                        document.getElementById("cpass").style.boxShadow = "4px 4px 1px 1px green";
                        document.getElementById("cpasserr").innerHTML='';
                    } else {
                        document.getElementById("cpass").style.boxShadow = "4px 4px 1px 1px red";
                        document.getElementById("cpasserr").innerHTML='Enter Same Password As Above';
                    }
                }else{
                    document.getElementById("cpass").style.boxShadow = "none";
                    document.getElementById("cpasserr").innerHTML='Password Cannot Be Empty';

                }
            }
            function checkpass4() {
                <?php
                $jo = $_SESSION['seller_password'];
                ?>
                var pass = document.getElementById("inputPasswordOld").value;
                var cpass = "<?php echo $jo ?>";
                if (pass !="") {
                    if (pass == cpass) {
                        document.getElementById("inputPasswordOld").style.boxShadow = "4px 4px 1px 1px green";
                    } else {
                        document.getElementById("inputPasswordOld").style.boxShadow = "4px 4px 1px 1px red";
                    }
                }
            }
        </script>
       
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>