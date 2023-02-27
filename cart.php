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
            height: 100%;
            background-color: #9ec5c6;
            border-radius: 10px;
            padding-top: -20px;
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

        body {
            background-color: #eeeeee;
            font-family: 'Open Sans', serif;
            font-size: 14px;
            /* height: 300vh; */
        }

        .james {
            padding-top: 110px
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
            /* z-index: 1; */
            /* display: flex;
        justify-content: flex-start;
        flex-direction: column; */
            position: fixed;
            right: 0;
        }
    </style>
</head>

<body>
    <?php include("nave.php") ?>
    <div class="jack12"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" style="text-align: center; background-color:white;">
                <h2><b>Cart</b> </h2>
            </div>
        </div>

        <form action="" method="post">
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
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-8">
                            <div class="table-responsive">
                                <table class="table table-borderless table-shopping-cart">
                                    <thead class="text-muted">
                                        <tr class="small text-uppercase">
                                            <th scope="col">Product</th>
                                            <th scope="col" width="120">Quantity</th>
                                            <th scope="col" width="120">Price</th>
                                            <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <figure class="itemside align-items-center">
                                                    <div class="aside"><img src="image/Book.png" class="img-sm"></div>
                                                    <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">Absalom</a>
                                                        <p class="text-muted small">By:William Faulkner<br> CAtegory: Timepass</p>
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td> <select class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select> </td>
                                            <td>
                                                <div class="price-wrap"> <var class="price">RS.10.00</var> <small class="text-muted"> RS.9.20 each </small> </div>
                                            </td>
                                            <td class="text-right d-none d-md-block"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light" data-abc="true"> Remove</a> </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <figure class="itemside align-items-center">
                                                    <div class="aside"><img src="image/Book.png" class="img-sm"></div>
                                                    <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">Absalom</a>
                                                        <p class="text-muted small">By:William Faulkner<br> CAtegory: Timepass</p>
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td> <select class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select> </td>
                                            <td>
                                                <div class="price-wrap"> <var class="price">RS.10.00</var> <small class="text-muted"> RS.9.20 each </small> </div>
                                            </td>
                                            <td class="text-right d-none d-md-block"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light" data-abc="true"> Remove</a> </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <figure class="itemside align-items-center">
                                                    <div class="aside"><img src="image/Book.png" class="img-sm"></div>
                                                    <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">Absalom</a>
                                                        <p class="text-muted small">By:William Faulkner<br> CAtegory: Timepass</p>
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td> <select class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select> </td>
                                            <td>
                                                <div class="price-wrap"> <var class="price">RS.10.00</var> <small class="text-muted"> RS.9.20 each </small> </div>
                                            </td>
                                            <td class="text-right d-none d-md-block"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light" data-abc="true"> Remove</a> </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <figure class="itemside align-items-center">
                                                    <div class="aside"><img src="image/Book.png" class="img-sm"></div>
                                                    <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">Absalom</a>
                                                        <p class="text-muted small">By:William Faulkner<br> CAtegory: Timepass</p>
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td> <select class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select> </td>
                                            <td>
                                                <div class="price-wrap"> <var class="price">RS.10.00</var> <small class="text-muted"> RS.9.20 each </small> </div>
                                            </td>
                                            <td class="text-right d-none d-md-block"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light" data-abc="true"> Remove</a> </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <figure class="itemside align-items-center">
                                                    <div class="aside"><img src="image/Book.png" class="img-sm"></div>
                                                    <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">Absalom</a>
                                                        <p class="text-muted small">By:William Faulkner<br> CAtegory: Timepass</p>
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td> <select class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select> </td>
                                            <td>
                                                <div class="price-wrap"> <var class="price">RS.10.00</var> <small class="text-muted"> RS.9.20 each </small> </div>
                                            </td>
                                            <td class="text-right d-none d-md-block"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light" data-abc="true"> Remove</a> </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <figure class="itemside align-items-center">
                                                    <div class="aside"><img src="image/Book.png" class="img-sm"></div>
                                                    <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">Absalom</a>
                                                        <p class="text-muted small">By:William Faulkner<br> CAtegory: Timepass</p>
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td> <select class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select> </td>
                                            <td>
                                                <div class="price-wrap"> <var class="price">RS.10.00</var> <small class="text-muted"> RS.9.20 each </small> </div>
                                            </td>
                                            <td class="text-right d-none d-md-block"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light" data-abc="true"> Remove</a> </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <figure class="itemside align-items-center">
                                                    <div class="aside"><img src="image/Book.png" class="img-sm"></div>
                                                    <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">Absalom</a>
                                                        <p class="text-muted small">By:William Faulkner<br> CAtegory: Timepass</p>
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td> <select class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select> </td>
                                            <td>
                                                <div class="price-wrap"> <var class="price">RS.10.00</var> <small class="text-muted"> RS.9.20 each </small> </div>
                                            </td>
                                            <td class="text-right d-none d-md-block"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="" class="btn btn-light" data-abc="true"> Remove</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- <div class="col-sm-3 con"></div> -->
                        <div class="col-sm-3 con">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group"> <label>Have coupon?</label>
                                            <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Coupon code"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <dl class="dlist-align">
                                        <dt>Total price:</dt>
                                        <dd class="text-right ml-3">RS.69.97</dd>
                                    </dl>
                                    <dl class="dlist-align">
                                        <dt>Discount:</dt>
                                        <dd class="text-right text-danger ml-3">- RS.10.00</dd>
                                    </dl>
                                    <dl class="dlist-align">
                                        <dt>Total:</dt>
                                        <dd class="text-right text-dark b ml-3"><strong>RS.59.97</strong></dd>
                                    </dl>
                                    <hr>
                                    <a href="#" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Make Purchase </a>
                                    <a href="#" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continue Shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
        <?php include("user_change_password.php") ?>
</body>
</html>