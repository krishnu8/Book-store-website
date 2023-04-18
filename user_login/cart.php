<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <?php include_once("nave.php"); ?>
    <style type="text/css">
        body {
            background-color: #eeeeee;
            /* height: 300vh; */
        }

        @media (max-width: 992px) {
            main {
                padding-top: 30px;
            }
        }



        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.40rem
        }

        .img-sm {
            width: 80px;
            height: 80px
        }

        .itemside .info {
            padding-left: 15px;
            padding-right: 7px
        }

        .table-shopping-cart .price-wrap {
            line-height: 1.2
        }

        .table-shopping-cart .price {
            font-weight: bold;
            margin-right: 5px;
            display: block
        }

        .text-muted {
            color: #969696 !important
        }

        a {
            text-decoration: none !important
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 0px
        }

        .itemside {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%
        }

        .dlist-align {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        [class*="dlist-"] {
            margin-bottom: 5px
        }

        .coupon {
            border-radius: 1px
        }

        .price {
            font-weight: 600;
            color: #212529
        }

        .btn.btn-out {
            outline: 1px solid #fff;
            outline-offset: -5px
        }

        .btn-main {
            border-radius: 2px;
            text-transform: capitalize;
            font-size: 15px;
            padding: 10px 19px;
            cursor: pointer;
            color: #fff;
            width: 100%
        }

        .btn-light {
            color: #ffffff;
            background-color: #F44336;
            border-color: #f8f9fa;
            font-size: 12px
        }

        .btn-light:hover {
            color: #ffffff;
            background-color: #F44336;
            border-color: #F44336
        }

        .btn-apply {
            font-size: 11px
        }

        .con {
            /* z-index: 1;
        display: flex;
        justify-content: flex-start;
        flex-direction: column; */
            position: fixed;
            right: 0;
        }

        @media (max-width: 992px) {
            .con {
                position: relative;
                bottom: 0;
            }

            .cart {
                width: 100%;
                z-index: 1;
            }
        }

        .cart {
            width: 70%;
        }
    </style>
</head>

<body>
    <?php

    if (isset($_SESSION['cart'])) {
    ?>
        <div class="ale">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Alert!</strong> <?php echo $_SESSION['cart'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <script>
            setTimeout("", 5000);
        </script>
    <?php
        unset($_SESSION['cart']);
    }

    if (isset($_SESSION['cart_order'])) {
    ?>
        <div class="ale">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Alert!</strong> <?php echo $_SESSION['cart_order'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <script>
            setTimeout("", 5000);
        </script>
    <?php
        unset($_SESSION['cart_order']);
    }

    ?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" style="text-align: center; background-color:white;">
                    <h2><b>Cart</b></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-11 cart">
                            <div class="table-responsive">
                                <table class="table table-borderless table-shopping-cart" style="width: 100%;">
                                    <thead class="text-muted">
                                        <tr class="small text-uppercase">
                                            <th scope="col">Product</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Price</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $user_id = $_SESSION['User_id'];
                                        $selectcart = "SELECT * FROM `cart` WHERE user_id='$user_id'";
                                        $a = mysqli_query($con, $selectcart);
                                        while ($cart = mysqli_fetch_array($a)) {
                                            $prode = "SELECT * FROM `product` WHERE Product_Id='$cart[0]' and Status='Active'";
                                            $product_detail = mysqli_fetch_array(mysqli_query($con, $prode));
                                        ?>
                                            <tr>
                                                <td>
                                                    <figure class="itemside align-items-center">
                                                        <div class="aside"><img src="../image/Book_image/<?php echo $product_detail[3] ?>" class="img-sm">
                                                        </div>
                                                        <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">
                                                                <?php echo $product_detail[1] ?>
                                                            </a>
                                                            <p class="text-muted small">By:
                                                                <?php echo $product_detail[8] ?><br> Category:
                                                                <?php echo $product_detail[6] ?>
                                                            </p>
                                                        </figcaption>
                                                    </figure>
                                                </td>
                                                <td>
                                                    <?php
                                                        $nam = strtok($product_detail[1], " ");
                                                    ?>
                                                    <select class="form-control" oninput="<?php echo $nam ?>()" id='<?php echo $product_detail[0] ?>'>
                                                        <option value="<?php echo $cart[1] ?>"><?php echo $cart[1] ?></option>
                                                        <?php
                                                        if ($product_detail[5] <= 5) {
                                                            $i = 1;
                                                            while ($i <= $product_detail[5]) {
                                                        ?>
                                                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                            <?php
                                                                $i++;
                                                            }
                                                        } else {
                                                            ?>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="price-wrap"> <var class="price" id='<?php echo $product_detail[1] ?>'>RS.
                                                            <?php echo $cart[2] ?>
                                                        </var> <small class="text-muted"> RS.
                                                            <?php echo $product_detail[2] ?> each
                                                        </small> </div>
                                                </td>
                                                <td class="text-right d-none d-md-block"> <a href="remove_cart.php?product_id=<?php echo $cart[0] ?>&& user_id=<?php echo $cart[3] ?>" class="btn btn-light" data-abc="true"> Remove</a>
                                                </td>

                                                <script>
                                                    function <?php echo $nam ?>() {
                                                        var sel = document.getElementById('<?php echo $product_detail[0] ?>').value;
                                                        var each_price = "<?php echo $product_detail[2] ?>";
                                                        var total = sel * each_price;
                                                        document.getElementById('<?php echo $product_detail[1] ?>').innerHTML = 'RS. ' + total;
                                                        var y = "<?php echo $cart[0]; ?>"
                                                        var url = "update_cart.php?product_id=" + y + "&&quantity=" + sel + "&&total=" + total;

                                                        if (window.XMLHttpRequest) {
                                                            // code for IE7+, Firefox, Chrome, Opera, Safari
                                                            xmlhttp = new XMLHttpRequest();
                                                        } else {
                                                            // code for IE6, IE5
                                                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                                        }
                                                        xmlhttp.open("GET", url, false);
                                                        xmlhttp.send(null);
                                                    }
                                                </script>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php

                        ?>
                        <div class="col-sm-3 con">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group"> <label>Have coupon?</label>
                                            <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Coupon code" onblur="check_cupon()" id="cupon"> <span class="input-group-append">
                                                    <!-- <button class="btn btn-primary btn-apply coupon" name="cupon">Apply</button> -->
                                                </span> </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <form action="" method="post">
                                <div class="card">
                                    <div class="card-body">
                                        <dl class="dlist-align">
                                            <dt>Price:</dt>
                                            <dd class="text-right ml-3" id="total_price"></dd>
                                        </dl>
                                        <dl class="dlist-align">
                                            <dt>Offer Discount:</dt>
                                            <dd class="text-right text-danger ml-3" id="discount">0%</dd>
                                        </dl>
                                        <dl class="dlist-align">
                                            <dt>Total:</dt>
                                            <dd class="text-right text-dark b ml-3"><strong id="tttol">RS.59.97</strong></dd>
                                        </dl>
                                        <hr>
                                        <button type="" name="total" class="btn btn-out btn-secondary btn-square btn-main">Show Total</button>
                                        <a href="cart_order.php" class="btn btn-out btn-primary btn-square btn-main mt-2" data-abc="true"> Make Purchase </a>
                                        <a href="user_home.php" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continue Shopping</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
<script>
    function check_cupon() {
        var cupon = document.getElementById('cupon').value;
        var url = "check_cupon.php?cupon="+cupon;

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.open("GET", url, false);
        xmlhttp.send(null);
        alert(xmlhttp.responseText);
        // if (xmlhttp.responseText != "noerror") {
        //     alert("Email ID is Already registered Please Enter a new Email address");
        //     document.getElementById("email").value = "";
        //     document.getElementById("email").focus();
        // }
    }
</script>




<?php
if(isset($_SESSION['Discount'])){
    $dis=$_SESSION['Discount'];
}else{
    $dis=0;
}
unset($_SESSION['Discount']);
$Discount =$dis;
if (isset($_POST['total'])) {
    $sum = 0;
    $selectprice = "SELECT * FROM `cart` WHERE User_id='$user_id'";
    $pro = mysqli_query($con, $selectprice);
    while ($total_price = mysqli_fetch_array($pro)) {
        $sum = $sum +  $total_price[2];
    }
    $discountamt = $Discount * $sum / 100;
?>
    <script>
        document.getElementById('total_price').innerHTML = "RS.<?php echo $sum ?>";
        document.getElementById('tttol').innerHTML = "RS.<?php echo $sum - $discountamt ?>";
        document.getElementById('discount').innerHTML = "<?php echo $Discount ?>%";
    </script>
<?php
}
?>