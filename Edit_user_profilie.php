<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>My-profile</title>
    <style>
        .jack12 {
            height: 80px;
        }

        html {
            scroll-behavior: smooth;
        }
        /* body{
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
                <h2><b>MY Profile</b> </h2>
            </div>
        </div>

        <form action="" method="post"
            <div class="row">
                <div class="col-sm-2 oi">
                    <div class="d-grid gap-3 full">
                        <a href="My_order.php" class="btn btn-custom btn-lg active btn3" role="button" aria-pressed="true">My
                            Orders</a>
                        <a href="user_notifiication.php" class="btn btn-custom btn-lg active btn2" role="button"
                            aria-pressed="true">Notification</a>
                        <a href="#" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true"
                            data-toggle="modal" data-target="#modalRegisterForm">Change Password</a>
                        <a href="#" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true"
                            data-toggle="modal" data-target="#exampleModalCenter">Delete Account</a>

                        <a href="#feedback" class="btn btn-custom btn-lg active btn2" role="button"
                            aria-pressed="true">Feedback</a>
                        <a href="#" class="btn btn-custom btn-lg active btn2" role="button"
                            aria-pressed="true">Logout</a>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <div class="hu">
                        <img src="image/Book.png" alt="Profile_picture" width="150px" class="profile"><br>
                        <div class="row row1">
                            <div class="col-sm-6">
                                <span>First Name: <br>
                                    <input type="text" class="form-control" id="#" placeholder="First Name" value="krishnu">
                                </span>
                            </div>
                            <div class="col-sm-6">
                                <span>
                                    Last Name: <br>
                                    <input type="text" class="form-control" placeholder="Last name" value="Gupta"> <br>
                                </span>
                            </div>
                        </div>
                        <div class="row row1">
                            <div class="col-sm-6 con">
                                <span>
                                    Contact Email: <br>
                                    <input type="text" class="form-control" placeholder="Email" valu="Krishnugupta593@gmail.com" readonly> <br>
                                </span>
                            </div>
                            <div class="col-sm-6 con">
                                <span>
                                    Contact Number: <br>
                                    <input type="tel" name="num" placeholder="Number" class="form-control" id="" value="+91********"> <br>
                                </span>
                            </div>
                        </div>
                        <div class="row row1">
                            <div class="col-sm-6">
                                <span>
                                    State: <br>
                                    <input type="text" class="form-control" placeholder="State" name="" id="" value="Gujarat"> <br>
                                </span>
                            </div>
                            <div class="col-sm-6">
                                <span>
                                    City: <br>
                                    <input type="text" class="form-control" placeholder="City" name="" id="" value="Rajkot"> <br>
                                </span>
                            </div>
                        </div>
                        <div class="row row1">
                            <div class="col-sm-6">
                                <span>
                                    Bio: <br>
                                    <textarea name="" id="" cols="25" rows="2" placeholder="Bio"></textarea> <br>
                                </span>
                            </div>
                            <div class="col-sm-6">
                                <br>
                                <button type="submit" class="btn btn-custom-1">Update Profile</button>
                            </div>
    
                        </div>
    
                    </div>
                </div>
            </div>
        </form>
        <div class="container-fluid" id="feedback">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10 ">
                    <div class="col-sm-12 feed">
                        Feedback
                    </div>
                </div>
            </div>
        </div>

        <!-- delete account form -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</html>