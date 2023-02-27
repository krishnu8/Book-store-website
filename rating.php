<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>rating</title>
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
                <h2><b>Rating</b> </h2>
            </div>
        </div>

        <form action="" method="post">
            <div class="row">
                <div class="col-sm-2 oi">
                    <div class="d-grid gap-3 full">
                        <a href="My_order.php" class="btn btn-custom btn-lg active btn3" role="button"
                            aria-pressed="true">My
                            Orders</a>
                        <a href="cart.php" class="btn btn-custom btn-lg active btn2" role="button"
                            aria-pressed="true">Cart</a>
                        <a href="user_notifiication.php" class="btn btn-custom btn-lg active btn2" role="button"
                            aria-pressed="true">Notification</a>
                        <a href="#" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true"
                            data-toggle="modal" data-target="#modalRegisterForm">Change Password</a>
                        <a href="#" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true"
                            data-toggle="modal" data-target="#exampleModalCenter">Delete Account</a>
                        <a href="user.feedback.php" class="btn btn-custom btn-lg active btn2" role="button"
                            aria-pressed="true">Feedback</a>
                        <a href="login.php" class="btn btn-custom btn-lg active btn2" role="button"
                            aria-pressed="true">Logout</a>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-4">he</div>
                        <div class="col-sm-8" style="text-align:end;"> <img src="image/a1.jpg" alt="" width="200px" height="125px" > </div>
                        <div class="col-sm-12">
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <?php include("user_change_password.php") ?>

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