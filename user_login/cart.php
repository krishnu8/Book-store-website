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
            .cart{
                width: 100%;
                z-index: 1; 
            }
        }
        .cart{
            width:70%;
        }
    </style>
</head>

<body>

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
                                        <tr>
                                            <td>
                                                <figure class="itemside align-items-center">
                                                    <div class="aside"><img src="../image/Book.png" class="img-sm">
                                                    </div>
                                                    <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">Absalom</a>
                                                        <p class="text-muted small">By:William Faulkner<br> CAtegory:
                                                            Timepass</p>
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td>
                                                <select class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="price-wrap"> <var class="price">RS.10.00</var> <small class="text-muted"> RS.9.20 each </small> </div>
                                            </td>
                                            <td class="text-right d-none d-md-block"> <a href="" class="btn btn-light" data-abc="true"> Remove</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <figure class="itemside align-items-center">
                                                    <div class="aside"><img src="../image/Book.png" class="img-sm">
                                                    </div>
                                                    <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">Absalom</a>
                                                        <p class="text-muted small">By:William Faulkner<br> CAtegory:
                                                            Timepass</p>
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td>
                                                <select class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="price-wrap"> <var class="price">RS.10.00</var> <small class="text-muted"> RS.9.20 each </small> </div>
                                            </td>
                                            <td class="text-right d-none d-md-block"> <a href="" class="btn btn-light" data-abc="true"> Remove</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-3 con">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group"> <label>Have coupon?</label>
                                            <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Coupon code"> <span class="input-group-append">
                                                    <button class="btn btn-primary btn-apply coupon">Apply</button>
                                                </span> </div>
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
                                    <a href="#" class="btn btn-out btn-primary btn-square btn-main" data-abc="true">
                                        Make Purchase </a>
                                    <a href="#" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continue Shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>