<?php
session_start();
include_once("database/Create_database.php");
$user_id = $_SESSION['User_id'];
$product_id = @$_GET['product_id'];
$quantity = @$_GET['quantity'];
$select = "SELECT * from product WHERE Product_Id='$product_id'";
$product_data = mysqli_fetch_array(mysqli_query($con, $select));

$select = "SELECT * FROM `registration` WHERE User_id='$user_id'";
$user_data = mysqli_fetch_array(mysqli_query($con, $select));
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<Style>
    .bg {
        width: 100%;
        height: auto;
        min-height: 100vh;
        background-color: #cccccc;
        background-size: 100% 100%;
        background-position: top center;
        margin: auto;
    }

    .mainRow {

        margin-left: 10%;
        margin-right: 10%;
    }

    p {
        margin: 0px;
    }

    .desc {
        background-color: #f0edeb;
        margin-top: 5%;
        margin-left: 0;
        margin-right: 50px;
        margin-bottom: 4%;
    }


    .card-body {
        padding: 0;
        margin: 0;
        margin-top: 10%;

    }

    div.card.main {
        margin: 0px !important;
    }


    .card {
        padding: 0 !important;
        margin-top: 40px;
    }




    .quantity,
    .shipping,
    .promocode,
    .subtotal,
    .cardAndExpire,
    .nameAndcvc {
        margin: 5%;
        color: #6c757d !important
    }

    .heading1 {
        margin: 5%;
        font-size: 25px;
    }

    .card-body {
        margin-top: 5;
    }

    .heading2 {
        margin: 5%;
        margin-top: 0%;
        font-size: 20px;
    }

    .payment {
        background-color: #f0edeb;
        padding: 3px;
        margin-top: 15%;
    }

    .text1 {
        color: black;
        font-weight: 700;
    }

    .card-footer {
        background-color: black;
        color: white;
    }

    .purchaseLink {
        text-decoration: none;
    }

    .row1 {
        font-size: 12px;
    }

    .row2 {
        font-weight: 600;
    }

    .subRow {
        margin-left: 10%;
        margin-bottom: 2%;
        margin-top: 5%;
    }

    /* p.cardAndExpireValue,p.nameAndcvcValue{
  margin:5%;
  margin-bottom: 10%;
font-weight: 600;}

p.nameAndcvc,p.cardAndExpire{
  margin-bottom: -10px;
} */

    .total {
        margin: 5%;
    }

    .totalText {
        font-weight: 700;

    }

    .totalText2 {
        font-weight: 700;
        font-size: 30px;
    }

    .card-img-top {
        width: 100%;
        border-top-left-radius: calc(.25rem - 1px);
        border-top-right-radius: calc(.25rem - 1px);
        height: 430px;
    }

    .jo {
        margin-top: 30px;
    }

    .ho {
        margin-top: 8px;
    }

    .dan {
        margin-left: 5px;
        color: red;
    }

    .jjj {
        align-self: center;
    }
</Style>

<!--For Page-->
<div class="bg">


    <!--For Row containing all card-->
    <div class="row mainRow">



        <!--Card 1-->
        <div class="col-sm-7 jjj">
            <div class="card card-cascade wider shadow p-3 mb-5">
                <div class="view view-cascade overlay text-center">
                    <img class="card-img-top" src="https://i.imgur.com/oFDjIvN.png" alt="">
                </div>
            </div>
        </div>
        <!--Card 2-->
        <div class="col-sm-5">
            <div class="card card-cascade card-ecommerce wider shadow p-3 mb-5 ">

                <!--Card Body-->
                <div class="card-body card-body-cascade">

                    <!--Card Description-->
                    <div class="card2decs">

                        <p class="heading1"><strong><?php echo $product_data[1] ?></strong></p>
                        <p class="quantity">Qty <span class="float-right text1"><?php echo $quantity ?></span></p>
                        <p class="subtotal">Price<span class="float-right text1"><?php echo $product_data[2] ?></span></p>
                        <p class="shipping">Shipping<span class="float-right text1">Free</span></p>
                        <!-- <p class="promocode">Promo Code<span class="float-right text1">-$100</span></p> -->
                        <p class="total"><strong>Total</strong><span class="float-right totalText1"><span class="totalText2"><?php echo $quantity * $product_data[2] ?></span></span></p>

                    </div>
                    <form action="" class="jo" onsubmit="return validation()">
                        <div class="payment">
                            <p class="heading2"><strong>Payment Details</strong></p>
                            <p class="cardAndExpire">Order Delivered BY<span class="float-right">Sunday</span></p>
                            <!-- <p class="cardAndExpireValue">161617161816188<span class="float-right">26/11</span></p> -->
                            <p class="nameAndcvc" style="margin-bottom:-10px;">Cash On Delivery<span class="float-right"><i class="fa-regular fa-circle-dot"></i></span></p>
                            <!-- <p class="nameAndcvcValue">Mr. Example<span class="float-right">010</span></p> -->

                            <input type="text" id="state" placeholder="State" class="form-control ho" value="<?php echo $user_data[4]; ?>">
                            <p class="dan" id="stateerr"></p>
                            <input type="text" placeholder="City" id="city" class="form-control ho" value="<?php echo $user_data[5]; ?>">
                            <p class="dan" id="cityerr"></p>

                        </div>

                        <!--Card footer-->
                        <button type="submit" class="card-footer text-center" style="width: 100%;">
                            PURCHASE &#8594;
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function validation() {
        var state = document.getElementById('state').value
        var city = document.getElementById('city').value
        var check = /[A-Za-z]/;

        if (state != '') {
            if (check.test(state)) {
                S = 'true';
            } else {
                document.getElementById('stateerr').innerHTML = "State Cannot Contain Number";
                S = 'false';
            }
        } else {
            document.getElementById('stateerr').innerHTML = "State Cannot Be Empty";
            S = 'false';
        }
        if (city != '') {
            if (check.test(city)) {
                C = 'true';
            } else {
                document.getElementById('cityerr').innerHTML = "City Cannot Contain Number";
                C = 'false';
            }
        } else {
            document.getElementById('cityerr').innerHTML = "City Cannot Be Empty";
            C = 'false';
        }
        if (S == 'false' || C == 'false') {
            return false;
        } else {
            return true;
        }

    }
</script>