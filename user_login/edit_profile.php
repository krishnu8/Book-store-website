<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My-Profile</title>
    <?php include_once("nave.php") ?>
    <style>
      

        @media (max-width: 992px) {
            main {
                padding-top: 30px;
            }
        }
        .profile {
            border-radius: 50%;
            background-color: rgb(255, 153, 0);
            margin-top: 15px;
            margin-left: 35%;
        }

        /* .full {
            margin-top: 20px;
        } */

        .full .btn2 {
            margin-top: 35px;
        }

        .full .btn3 {
            margin-top: 10px;
        }

        .hu {
            background-color: #e2e0d4;
        }

        .row1 .col-sm-6 {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 20px;
        }

        /* .oi {
            position: fixed;
            height: 80%;
            display: none;
            background-color: #9ec5c6;
            border-radius: 10px;
        } */

        .feed {
            margin-top: 8px;
            text-align: center;
            font-size: 30px;
            font-weight: bold;
        }
    </style>
</head>
<?php
$email = $_SESSION['email'];
$data = "SELECT * FROM `registration` WHERE email='$email'";
$a = mysqli_fetch_array(mysqli_query($con, $data));
?>
<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" style="text-align: center; background-color:white;">
                    <h2><b>Edit Profile</b> </h2>
                </div>
            </div>
            <form onSubmit="return(validate123());" method="post" enctype="multipart/form-data" action="">
            <div class="row">
                    <div class="hu">
                        <img src="../image/user_image/<?php echo $a[6] ?>" alt="Profile_picture" height="150px" width="150px" class="profile"><br>
                        <div class="row row1">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label for="email">Full Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter Name"  id="fname1" value="<?php echo $a[0] ?>" name="fn1">
                                    <p id="fn1"></p>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input type="email" readonly class="form-control" value="<?php echo $a[1] ?>" >
                                    <p id="mail1"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row row1">
                            <div class="col-sm-6 con">
                                <div class="form-group">
                                    <label for="pwd">Contact Number:</label>
                                    <input type="text" class="form-control" placeholder="Number" id="mobile1" value="<?php echo $a[2] ?>" name="mobile">
                                    <p id="mno"> </p>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 con">
                                <div class="form-group">
                                    <label for="email">State:</label>
                                    <input type="text" class="form-control" placeholder="Enter State" id="st" value="<?php echo $a[4] ?>" name="state">
                                    <p id="st1"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row row1">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">City:</label>
                                    <input type="text" class="form-control" placeholder="Enter City" id="ct" value="<?php echo $a[5] ?>" name="city">
                                    <p id="ct1"></p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <span>
                                    About: <br>
                                    <textarea name="about" id="" cols="25" rows="2" placeholder="Bio"></textarea> <br>
                                </span>
                            </div>
                        </div>
                        <div class="row row1">
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-6">
                                <br>
                                <input type="submit" class="btn btn-custom" value="Update" name="sub" />
                            </div>
                            <div class="col-sm-3">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
        </div>
    </main>
</body>
</html>
<script>
    function validate123() {
        //alert("welcome to js");
        var fn = document.getElementById('fname1').value;
        var state = document.getElementById('st').value;
        var city = document.getElementById('ct').value;
        var no = document.getElementById('mobile1').value;
        // alert("welcome to js");
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
                document.getElementById('mno').innerHTML = "Invalid Mobile Number ";
                document.getElementById('mno').style.color = "red";
                document.getElementById('mobile1').style.borderColor = "red";
                vno = "false";
            } else {

                document.getElementById('mno').innerHTML = "";
                document.getElementById('mobile1').style.borderColor = "green";
                vno = "true";
            }
        }
        if (state == "") {
            //alert("error");
            // document.getElementById('st1').innerHTML = "state name field cannot be empty";
            // document.getElementById('st1').style.color = "red";
            // document.getElementById('st1').style.borderColor = "red";
            var vst = "true";
        } else {
            var fn123 = /^[a-zA-Z ]*$/;
            //alert ("demooooooooooo");
            var c = fn123.test(state);
            // alert(e);
            if (c == false) {
                document.getElementById('st1').focus();
                document.getElementById('st1').innerHTML = "State name must contain only letters";
                document.getElementById('st1').style.color = "red";
                document.getElementById('st1').style.borderColor = "red";
                vst = "false";
            } else {
                document.getElementById('st1').innerHTML = "";
                document.getElementById('st1').style.borderColor = "green";
                vst = "true";
            }
        }
        if (city == "") {
            //alert("error");
            // document.getElementById('ct1').innerHTML = "city name field cannot be empty";
            // document.getElementById('ct1').style.color = "red";
            // document.getElementById('ct1').style.borderColor = "red";
            var vct = "true";
        } else {
            var fn123 = /^[a-zA-Z ]*$/;
            //alert ("demooooooooooo");
            var c = fn123.test(city);
            // alert(e);
            if (c == false) {
                document.getElementById('ct1').focus();
                document.getElementById('ct1').innerHTML = "city name must contain only letters";
                document.getElementById('ct1').style.color = "red";
                document.getElementById('ct1').style.borderColor = "red";
                vct = "false";
            } else {
                document.getElementById('ct1').innerHTML = "";
                document.getElementById('ct1').style.borderColor = "green";
                vct = "true";
            }
        }
        if ( vno == "true" && vfn == "true" && vst == "true" && vct == "true") {
            return true;
        } else {
            return false;
        }
    }
</script>
<?php
if(isset($_POST['sub'])){
    $name=@$_POST['fn1'];
    $email=$_SESSION['email'];
    $number=@$_POST['mobile'];
    $state=@$_POST['state'];
    $city=@$_POST['city'];
    $about=@$_POST['about'];
    if($about==""){
        $about=$a[7];
    }
    $update="UPDATE `registration` SET `Fullname`='$name',`mobile`='$number',`State`='$state',`City`='$city',`About`='$about' WHERE Email='$email'";
    if(mysqli_query($con,$update)){
        $_SESSION['pass_profile']="Profile Updated";
        ?>
        <script>
            window.location.href="user_profile.php";
        </script>
        <?php
    }else{
        $_SESSION['fail_profile']="Profile Updated Failed";
        header("location:user_profile.php");
        ?>
        <script>
            window.location.href="user_profile.php";
        </script>
        <?php
    }
}
?>