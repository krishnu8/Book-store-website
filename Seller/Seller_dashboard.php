<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Dashboard</title>
    <style>
        .jack12 {
            height:70px;
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

        /* .feed {
            margin-top: 8px;
            text-align: center;
            font-size: 30px;
            font-weight: bold;
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

        .box {
            margin: 50px;
            padding: 5px;
            border: 7px solid #074c8d;
            background-color: #55d0cc;
            border-radius: 15px;
            height: 300px;
            width: 350px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            transition: 0.5s ease-in-out;
        }
        /* .box:hover{
            transform: scale(1.1)
        } */
        .contain {
            margin-top: 20px;
            width: 80%;
            height: 80%;
            /* background-color: yellow; */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contain p {
            font-size: 30px;
        }
        .da{
            margin-left: 40px !important;
        }
        @media only screen and (max-width: 500px) {
            .da{
                margin-left:-25px !important;
            }
        }
    </style>
</head>

<body>
    <?php include_once("seller_nave.php");
    $seller_id= $_SESSION['seller_id'];
    $sel="SELECT count( `Total_Quantity`) FROM `product` WHERE seller_id='$seller_id' and status='Active'";
    $tpro =mysqli_fetch_array(mysqli_query($con,$sel));
    $sel="select count('oders.Deliver_date') FROM Oders INNER JOIN product ON Oders.product_id = product.product_id WHERE product.seller_id='$seller_id'";
    $rpro=mysqli_fetch_array(mysqli_query($con,$sel));
    $sel="SELECT count( `Renaining_Quantity`) FROM `product` WHERE seller_id='$seller_id' and `Renaining_Quantity`='0' and status='Active'";
    $ostock=mysqli_fetch_array(mysqli_query($con,$sel));
    $sel="SELECT oders.Deliver_date FROM Oders INNER JOIN product ON Oders.product_id = product.product_id WHERE product.seller_id='$seller_id'";
    $rel=mysqli_query($con,$sel);
    $date=date('Y/m/d');
    $count=0;
    while($a=mysqli_fetch_array($rel)){
        if($a[0]>$date){
            $count++;
           
        }
    }
    ?>
    <div class="jack12"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 " style="text-align: center; background-color:white;">
                <h2><b> <u>Dashboard</u> </b> </h2>
            </div>
        </div>

        <div class="row da">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="box">
                            <div class="contain">
                                <p>Total Product</p> <br>
                                <p> <?php echo $tpro[0] ?></p>
                            </div>
                            <a href="seller_product.php"><button  class="btn btn-info">View Product</button></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box">
                            <div class="contain">
                                <p>Orders</p> <br>
                                <p><?php echo $rpro[0] ?>  </p>
                            </div>
                            <a href="seller_orders.php"><button  class="btn btn-info">View Orders</button></a>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box">
                            <div class="contain">
                                <p>Out Of Stock</p> <br>
                                <p> <?php echo $ostock[0] ?></p>
                            </div>
                            <a href="out_of_stock.php"><button  class="btn btn-info">View product</button></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="box">
                            <div class="contain">
                                <p>Undelivered</p> <br>
                                <p> <?php echo $count ?></p>
                            </div>
                            <a href="undelivered_product.php"><button class="btn btn-info">View Orders</button></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box">
                            <div class="contain">
                                <p>Feedbacks</p> <br>
                                <p> 1111 </p>
                            </div>
                            <a href="seller_rating.php"><button  class="btn btn-info">View Feedback</button></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box">
                            <div class="contain">
                                <p>Total Income</p> <br>
                                <p> RS.578 </p>
                            </div>
                         </div>
                    </div>
                </div>
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
<?php include_once("seller_change_password.php") ?>