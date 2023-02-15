<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Edit profile</title>
    <style>
        .jack12 {
            height: 80px;
        }

        html {
            scroll-behavior: smooth;
        }

        /* body {
            height: 200vh;
        } */

        .profile {
            border-radius: 50%;
            background-color: rgb(255, 153, 0);
            margin-top: 15px;
            margin-left: 35%;
        }

        .full {
            margin-top: 20px;
        }

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

        .oi {
            position: fixed;
            height: 80%;
            /* display: none; */
            background-color: #9ec5c6;
            /* border-radius: 10px; */
        }

        .feed {
            margin-top: 8px;
            text-align: center;
            font-size: 30px;
            font-weight: bold;
        }

        .btn-custom {
            background-color: #128680 !important;
            color: #f3f3f3 !important;
            transition: 0.5s ease-in-out;
        }

        .btn-custom:hover {
            background-color: #169f98 !important;
            /* color: #c7c6c6 !important; */
            transform: scale(0.9);
            transition: 0.5s ease-in-out;
        }

        .btn-custom-1 {
            background-color: #689abf !important;
            color: #f3f3f3 !important;
            transition: 0.7s ease-in-out;
        }

        .btn-custom-1:hover {
            background-color: #169f98 !important;
            /* color: #c7c6c6 !important; */
            transform: scale(1.1);
            transition: 0.5s ease-in-out;
        }

        .fade {
            width: 1000px;
            height: 800px;
        }
    </style>
</head>

<body>
    <?php include("nave.php") ?>
    <div class="jack12"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" style="text-align: center; background-color:white;">
                <h2><b>Edit Profile</b> </h2>
            </div>
        </div>

        <form onSubmit="return(validate123());" method="post" enctype="multipart/form-data" action="user_profile.php">
            <div class="row">
                <div class="col-sm-2 oi">
                    <div class="d-grid gap-3 full">
                        <a href="My_order.php" class="btn btn-custom btn-lg active btn3" role="button" aria-pressed="true">My
                            Orders</a>
                        <a href="user_notifiication.php" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true">Notification</a>
                        <a href="#" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true" data-toggle="modal" data-target="#modalRegisterForm">Change Password</a>
                        <a href="#" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true" data-toggle="modal" data-target="#exampleModalCenter">Delete Account</a>

                        <a href="user.feedback.php" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true">Feedback</a>
                        <a href="login.php" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true">Logout</a>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <div class="hu">
                        <img src="image/Book.png" alt="Profile_picture" width="150px" class="profile"><br>
                        <div class="row row1">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label for="email">Full Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter Name" id="fname1"value="krishnu Gupta" name="fn1">
                                    <p id="fn1"></p>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email address:</label>
                                    <input type="email" class="form-control" placeholder="Enter Email" id="emailid1" name="eid" value="Krishnu593@gmail.com" onblur="demo(this)">
                                    <p id="mail1"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row row1">
                            <div class="col-sm-6 con">
                                <div class="form-group">
                                    <label for="pwd">Contact Number:</label>
                                    <input type="text" class="form-control" placeholder="Number" id="mobile1" value="9811111111" name="mobile">
                                    <p id="mno"> </p>
                                </div>
                            </div>
                            <div class="col-sm-6 con">
                                <div class="form-group">
                                    <label for="email">State:</label>
                                    <input type="text" class="form-control" placeholder="Enter State" id="st" value="Gujrat" name="fn1">
                                    <p id="st1"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row row1">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">City:</label>
                                    <input type="text" class="form-control" placeholder="Enter City" id="ct"value="Rajkot" name="fn1">
                                    <p id="ct1"></p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <span>
                                    Bio: <br>
                                    <textarea name="" id="" cols="25" rows="2" placeholder="Bio"></textarea> <br>
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
        <!-- <div class="container-fluid" id="feedback">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10 ">
                    <div class="col-sm-12 feed">
                        Feedback
                    </div>
                </div>
            </div>
        </div> -->

        <!-- delete account form -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                            <input type="password" class="form-control" id="inputPasswordOld" required="">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" value="Delete" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Change password -->
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="" method="post">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Chnage Password</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="fas fa-user prefix grey-text"></i>
                            <input type="text" id="orangeForm-name" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="orangeForm-name">Current
                                Password</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="email" id="orangeForm-email" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="orangeForm-email">New Pasword</label>
                        </div>

                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input type="password" id="orangeForm-pass" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="orangeForm-pass">verify</label>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <input type="submit" value="Change" class=" btn btn-secondary">
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    function validate123() {
        //alert("welcome to js");
        var fn = document.getElementById('fname1').value;
        var email = document.getElementById('emailid1').value;
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
                document.getElementById('mail1').innerHTML = "Invalid Email address Please Enter Valid Email Address";
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
                document.getElementById('mno').innerHTML = "Invalid Mobile Number Please Enter Valid Mobile Number";
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
            document.getElementById('st1').innerHTML = "state name field cannot be empty";
            document.getElementById('st1').style.color = "red";
            document.getElementById('st1').style.borderColor = "red";
            var vst = "false";
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
            document.getElementById('ct1').innerHTML = "city name field cannot be empty";
            document.getElementById('ct1').style.color = "red";
            document.getElementById('ct1').style.borderColor = "red";
            var vct = "false";
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
        if (vemail == "true" && vno == "true" && vfn == "true" && vst == "true" && vct == "true") {
            return true;
        } else {
            return false;
        }
    }
</script>

</html>