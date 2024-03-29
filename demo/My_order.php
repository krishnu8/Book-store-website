<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>My-Order</title>
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

        /* .full {
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
        .collapsed{
            display: none;
        }
        .oi{
            position: fixed;
        }
        @media only screen and (max-width: 600px) {
           
            *{
                background-color: green;
            }
            .collapsed{
                display: block;
            }
           
           
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

        .data {
            background-color: #D5EAF5;
            border-radius: 10px;

        }

        .data1 {
            background-color: rgba(245, 222, 179, 0.736);
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

        /* Remove border from toggler */
        .navbar-toggler {
            border: 0 !important;
        }

        .navbar-toggler:focus,
        .navbar-toggler:active,
        .navbar-toggler-icon:focus {
            outline: none !important;
            box-shadow: none !important;
            border: 0 !important;
        }

        /* Lines of the Toggler */
        .toggler-icon {
            width: 30px;
            height: 3px;
            background-color: #e74c3c;
            display: block;
            transition: all 0.2s;
        }

        /* Adds Space between the lines */
        .middle-bar {
            margin: 5px auto;
        }

        /* State when navbar is opened (START) */
        .navbar-toggler .top-bar {
            transform: rotate(45deg);
            transform-origin: 10% 10%;
        }

        .navbar-toggler .middle-bar {
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .navbar-toggler .bottom-bar {
            transform: rotate(-45deg);
            transform-origin: 10% 90%;
        }

        /* State when navbar is opened (END) */

        /* State when navbar is collapsed (START) */
        .navbar-toggler.collapsed .top-bar {
            transform: rotate(0);
        }

        .navbar-toggler.collapsed .middle-bar {
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .navbar-toggler.collapsed .bottom-bar {
            transform: rotate(0);
        }

        /* State when navbar is collapsed (END) */

        /* Color of Toggler when collapsed */
        .navbar-toggler.collapsed .toggler-icon {
            background-color: #777777;
        }
    
    </style>
</head>
<?php include("nave.php") ?>

<body>
    <div class="jack12"> hu</div>
    <div class="container-fluid">
        <div class="row hem">
            <div class="col-sm-12" style=" background-color:white;">
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" style="text-align: center; background-color:white;">
                <h2><b>ORDERS</b> </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2 oi collapse navbar-collapse" id="navbarSupportedContent">
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
            <div class="col-sm-10">
                <div class="row data" style="margin-top: 10px; display: flex; align-items: center; margin-left: 100px; margin-right: 100px; margin-bottom: 15px;">
                    <div class="col-sm-3"><img src="image/Book.png" height="80px" style="border-radius: 50%;" alt=""></div>
                    <div class="col-sm-3">Science book</div>
                    <div class="col-sm-2">RS-200</div>
                    <div class="col-sm-2">Delivered on 26 feb</div>
                </div>
                <div class="row data1" style="margin-top: 10px; display: flex; align-items: center; margin-left: 100px; margin-right: 100px; margin-bottom: 15px;">
                    <div class="col-sm-3"><img src="image/Book.png" height="80px" style="border-radius: 50%;" alt=""></div>
                    <div class="col-sm-3">Science book</div>
                    <div class="col-sm-2">RS-200</div>
                    <div class="col-sm-2">Delivered on 26 feb</div>
                </div>
                <div class="row data" style="margin-top: 10px; display: flex; align-items: center; margin-left: 100px; margin-right: 100px; margin-bottom: 15px;">
                    <div class="col-sm-3"><img src="image/Book.png" height="80px" style="border-radius: 50%;" alt=""></div>
                    <div class="col-sm-3">Science book</div>
                    <div class="col-sm-2">RS-200</div>
                    <div class="col-sm-2">Delivered on 26 feb</div>
                </div>
                <div class="row data1" style="margin-top: 10px; display: flex; align-items: center; margin-left: 100px; margin-right: 100px; margin-bottom: 15px;">
                    <div class="col-sm-3"><img src="image/Book.png" height="80px" style="border-radius: 50%;" alt=""></div>
                    <div class="col-sm-3">Science book</div>
                    <div class="col-sm-2">RS-200</div>
                    <div class="col-sm-2">Delivered on 26 feb</div>
                </div>
            </div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>