<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Feedback</title>
    <style>
        .jack12 {
            height: 80px;
        }

        html {
            scroll-behavior: smooth;
        }

        .profile {
            border-radius: 50%;
            background-color: rgb(255, 153, 0);
            margin-top: 15px;
            margin-left: 35%;
        }
/* 
        .full {
            margin-top: 20px;
        } */

        .full .btn2 {
            margin-top: 35px;
        }

        .full .btn3 {
            margin-top: 10px;
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
            background-color: #9ec5c6;
            background-image: linear-gradient( #0692CF , #F16238  );
            border-radius: 10px;
            display: none;
        } */

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

        .data1 {
            background-color: #D5EAF5;
            text-align: center;
            border-radius: 10px;
        }

        .data {
            background-color: rgba(245, 222, 179, 0.736);
            text-align: center;
            border-radius: 10px;
        }

        .data1:hover {
            background-color: #CAC2FF;
            border: red 1px solid;
        }

        .data:hover {
            background-color: #E9ECF1;
            border: red 1px solid;
        }
    </style>
</head>

<body>
    <?php include("nave.php") ?>
    <div class="jack12"> </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" style="text-align: center; background-color:white;">
                <h2><b>Feedback</b> </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" style="text-align: center; background-color:white;">
                <h2><b></b> </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 oi">
                <div class="d-grid gap-3 full">
                    <a href="My_order.php" class="btn btn-custom btn-lg active btn3" role="button" aria-pressed="true">My
                        Orders</a>
                        <a href="cart.php" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true">Cart</a>
                    <a href="user_notifiication.php" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true">Notification</a>
                    <a href="#" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true" data-toggle="modal" data-target="#modalRegisterForm">Change Password</a>
                    <a href="#" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true" data-toggle="modal" data-target="#exampleModalCenter">Delete Account</a>
                    <a href="user.feedback.php" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true">Feedback</a>
                    <a href="login.php" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true">Logout</a>
                </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-10 noti">
                <div class="row ">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 data1" style="margin-top: 15px;">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="image/a1.jpg" class="img img-rounded img-fluid" />
                            </div>
                            <div class="col-md-10">
                                <p>
                                    <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Mamjad </strong></a>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                </p>
                                <div class="clearfix"></div>
                                <p>this product was good as i expected. i recommend everyone to buy this if you want</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row " style="margin-top: 10px;">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 data1" style="margin-top: 15px;">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="image/a1.jpg" class="img img-rounded img-fluid" />
                            </div>
                            <div class="col-md-10">
                                <p>
                                    <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Mamjad </strong></a>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                </p>
                                <div class="clearfix"></div>
                                <p>this product was good as i expected. i recommend everyone to buy this if you want</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row " style="margin-top: 10px;">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 data1" style="margin-top: 15px;">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="image/a1.jpg" class="img img-rounded img-fluid" />
                            </div>
                            <div class="col-md-10">
                                <p>
                                    <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Mamjad </strong></a>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                </p>
                                <div class="clearfix"></div>
                                <p>this product was good as i expected. i recommend everyone to buy this if you want</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php include("user_change_password.php") ?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>