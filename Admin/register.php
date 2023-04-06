<?php
include_once("../database/Create_database.php");

session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <script src="check_email.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
            font-size: 10px;
            color: red;
            height: 10px;
        }

        .btn1 {
            background-color: transparent;
            border-color: blue;
            font-weight: bold;
            font-size: 20px;
            border-radius: 10px;
            height: 40px;
            width: 100px;
        }

        .btn1:hover {
            background-color: blue;
        }

        .text-danger{
            font-size: 10px;
            margin-top: -50px;
            background-color: blue;
            margin: 0;

        }
        input::-webkit-input-placeholder {
            /* color: blue; */
            font-size: 15px;
        }
        input{
            font-size: 15px;
        }
        .ale {
            position: absolute;
            top: 30px;
            right: 50px;
        }

    </style>
</head>
<body style="justify-content: center;border: #ffffff solid 2px; height: 100vh;">
        
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
    
    <body style="justify-content: center;border: #ffffff solid 2px;height: 100vh;">
        <div class="form" style="display: flex;justify-content: center;margin-top:5px;">
            <div style="background-color: rgba(0,0,0,0.7);width:400px; height:1008px;border-radius: 20px;">
                <!-- <center><img src="../image/Book1.png" alt="" style="height:50px;width: 160px;border-radius: 10px;margin-top:-35px;"></center> -->
                <div style="padding: 30px;">
                    <form onsubmit="return validation1()" action="">
                        <div class="input">
                            <font style="color: #fff; " size="5"><b>Full Name</b><br>
                                <input id="name" name="fln" type="text" placeholder="Enter your Name" required  style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                               <span id="nameerror" class="text-danger"></span>
                        </div>
                        <div class="input">
                            <font style="color: #fff; " size="5"><b>ID NO</b><br>
                                <input id="number" name="idn" type="number" placeholder="Enter Id_NO" required  style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                               <span id="nameerror" class="text-danger"></span>
                        </div>
                        <div class="input">
                            <font style="color: #fff; " size="5"><b>E-mail</b><br>
                                <input name="em" id="email" type="email" placeholder="example@gmail.com"required   style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                                <span id="emailerror" class="text-danger"></span>
                        </div>
                        <div class="input">
                            <font style="color: #fff; " size="5"><b>Phone Number</b><br>
                                <input name="mn" id="number" type="text" placeholder="Enter your phone Number" required  style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                                <span id="numbererror" class="text-danger"></span>
                        </div>
                        <div class="input"><b>Password</b> <br>
                            <input name="pwd" id="password" type="password" placeholder="Enter password" required  style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                            <span id="passworderror" class="text-danger"></span>
                        </div>
                        <div class="input"><b>Confirm Password</b> <br>
                            <input name="" id="password1" type="password" placeholder="confirm password" required  style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                            <span id="passworderror1" class="text-danger"></span>
                        </div>
                        <div class="input">
                            <font style="color: #fff; " size="5"><b>State</b><br>
                                <input name="st" id="name" type="text" placeholder="Enter State Detail"required   style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                                <span id="nameerror" class="text-danger"></span>
                        </div>
                        <div class="input">
                            <font style="color: #fff; " size="5"><b>City</b><br>
                                <input name="ct" id="name" type="text" placeholder="Enter City Name"required   style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                                <span id="nameerror" class="text-danger"></span>
                        </div>
                        <div class="input">
                            <font style="color: #fff; " size="5"><b>Role</b><br>
                                <select name="role" id="name" style="width: 110px;">
                                    <option value="Admin">Admin</option>
                                    <option value="Admin">User</option>
                                    <option value="Admin">Seller</option>
                                    <option value="Admin">Normal</option>
                                </select>
                                <span id="nameerror" class="text-danger"></span>
                        </div>
                        <div class="input"><b>Profile Picture</b> <br>
                            <input name="pic" id="pic" type="file" placeholder="confirm password" required   style="border: 0;background-color:rgba(0,0,0,0); height:30px;width: 300px;border-radius: 5px;">
                            <label for="pic">Choose Profile Picture</label>
                        </div>
                        </font><br>
                        <p id="p1"></p>
                        <center><input name="btn" type="submit" class="btn1" id="" value="Register"></center>
                    </form>
                    <font color="white"><b>Have an Account?</b> <u><a href="../login.php">login</a></u><br></font><br>

                    <!-- <center><button style="background-color: rgb(117, 14, 143);width: 400px;height:35px;
                        font-size: 20px;border: 0;border-radius: 10px; margin-left: -30px;">
                            <a href="../Dashboard.php" style="color:#fff;"><b>Return BAck To Home</b></a></button>
                        </center><br> -->
                </div>
            </div>
        </div>
</body>

</html>
<script>
    function validation1() {
        var name = document.getElementById("name").value;
        var number = document.getElementById("number").value;
        var password = document.getElementById("password").value;
        var cpass = document.getElementById("password1").value;
        var email = document.getElementById("em").value;
        var namecheck = /[A-Za-z]/;
        var numbercheck = /^[0-9]{10}$/;
        var passwordcheck = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
        var emailcheck = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        if (namecheck.test(name)) {
            N = "true";
        } else {

            document.getElementById('nameerror').innerHTML ="Name Connot contain number";
            alert("Name Connot contain number");
            N = "false";
        }
        if (numbercheck.test(number)) {
            NU = "true";
        } else {

            document.getElementById('numbererror').innerHTML ="Number must be 10 digit";
            alert("Number must be 10 digit");
            NU = "false";
        }
        if (emailcheck.test(email)) {
            EM = "true";
        } else {

            document.getElementById('numbererror').innerHTML ="Number must be 10 digit";
            alert("Enter correct Email Adderess");
            EM = "false";
        }
        if (passwordcheck.test(password)) {
            if (password === cpass) {
                CP = "true";
            } else {
                document.getElementById('passworderror1').innerHTML ="Enter same as above";
                alert("Enter same as above");
                CP = "false";
            }
        } else {
            document.getElementById('passworderror').innerHTML ="Password must contain number symbol and character";
            alert("Password must contain number symbol and character");
            P = "false";
        }
        if (N == "false" || NU == "false" || P == "false" || CP == "false" || EM == "false") {
            return false;
        }

    }

    function check_email(y) {
        var url = "check_mail.php?emailid=" + y.value;

        if (window.XMLHttpRequest) {
            code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.open("GET", url, false);
        xmlhttp.send(null);

        alert(xmlhttp.responseText);
        if (xmlhttp.responseText != "noerror") {
            alert("Email ID is Already registered Please Enter a new Email address");
            document.getElementById("email").value = "";
            document.getElementById("email").focus();
        }
    }
</script>


<?php
    include_once("Connection.php");

if(isset($_POST['btn']))
{
$fn = @$_POST['fln'];
$id = @$_POST['idn'];
$em = @$_POST['em'];
$phone = @$_POST['phone'];
$st = @$_POST['st'];
$ct = @$_POST['ct'];
$rol = @$_POST['role'];
$pwd = @$_POST['pwd'];
$pic = @$_FILES['pic']['name'];
$q = "INSERT INTO `registration`(`Fullname`, `Email`, `Mobile`, `Password`, `State`, `City`, `profile_pic`, `role`,User_id) VALUES 
('$fn','$em','$phone','$pwd','$st',$ct,'$pic','$rol',$id)";

    if(mysqli_query($con,$q))
    {
        move_uploaded_file($_FILES['pic']['tmp_name'],'images/'.$pic);
        ?>
        <script>
            alert("Data Uploded successfully");
            window.location.href="register.php?Email_Id=<?php echo $em ?>";
        </script>
        <?php
            } else {
                ?>
        <script>
            alert("Data Uploaded fail  Try Again latter");
            window.location.href="register.php?Email_Id=<?php echo $em ?>";
        </script>
        <?php
            }
        }