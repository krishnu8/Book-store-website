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
    <?php include("seller_nave.php") ?>
    <div class="jack12"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" style="text-align: center; background-color:white;">
                <h2><b> <u>Review & Rating</u> </b> </h2>
            </div>
        </div>
        <?php
        $seller_id=$_SESSION['seller_id'];
        $select="SELECT * FROM review INNER JOIN product ON review.product_id = product.product_id WHERE product.seller_id='$seller_id'";
        $a=mysqli_query($con,$select);
        while($review=mysqli_fetch_array($a)){
            $user_info="Select * from registration where user_id='$review[1]'";
            $user=mysqli_fetch_array(mysqli_query($con,$user_info));
        ?>
        <div class="row" style="margin-bottom: 3px;">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card card-inner">
                        <div class="card-body" >
                            <div class="row">
                                <div class="col-md-2" style="text-align: center;">
                                    <img src="../image/Book_image/<?php echo $review[7] ?>" style="height: 100px; " />
                                </div>
                                <div class="col-md-10">
                                    <p>
                                        <strong><?php echo $user[0] ?></strong>
                                        <?php
                                        for($i=0;$i<$review[3];$i++){
                                        ?>
                                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                        <?php
                                        }
                                        ?>
                                    </p>
                                    <div class="clearfix"></div>
                                    <p style="height: 45px;overflow-y: hidden;"><?php echo $review[2] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>




</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</html>
<?php include_once("seller_change_password.php") ?>