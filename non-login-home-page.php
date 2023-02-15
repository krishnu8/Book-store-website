<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <link rel="stylesheet" href="css/product.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Home Page</title>
</head>

<body>
    <style>
        .carousel-control-next,
        .carousel-control-prev {
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 15%;
            padding: 0;
            color: #fff;
            text-align: center;
            background: 0 0;
            border: 0;
            height: 50px;
            opacity: .5;
            transition: opacity .15s ease;
            height: 50px;
            margin-top: 25%;
        }
    </style>
    </head>

    <body>
        <?php include_once("nave.php"); ?>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/a1.jpg" alt="Los Angeles" width="100%" height="680px">
                    <div class="carousel-caption">
                        <h3>The Best</h3>
                        <p>Books Shop Ever</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/a1.jpg" alt="Chicago" width="100%" height="680px">
                    <div class="carousel-caption">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/a1.jpg" alt="New York" width="100%" height="680px">
                    <div class="carousel-caption">
                        <h3>We Provide Best</h3>
                        <p>Book Compare Books Stall</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <section class="product">
            <h2 class="product-category">
                <center>best selling
            </h2>
            </center>

            <div class="product-container">
                <div class="product-card">
                    <div class="product-image">
                        <span class="discount-tag">50% off</span>
                        <a href="product_info.php"><img src="image/book1.jpg" class="product-thumb" alt=""></a>
                        <a href="login.php">
                            <button class="card-btn">Buy Now</button>
                        </a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">brand</h2>
                        <p class="product-short-des">Best ADVENTURE BOOK</p>
                        <span class="price">520</span><span class="actual-price">1040</span>
                    </div>
                </div>
                <div class="product-container">
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="image/book2.jpeg" class="product-thumb" alt="">
                            <button class="card-btn">Buy Now</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">Best For Cute Girl..</p>
                            <span class="price">520</span><span class="actual-price">1040</span>
                        </div>
                    </div>
                </div>
                <div class="product-container">
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="image/book3.jpeg" class="product-thumb" alt="">
                            <button class="card-btn">add to whislist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">Best For Cute Girl..</p>
                            <span class="price">520</span><span class="actual-price">1040</span>
                        </div>

                    </div>
        </section>
        <section class="product">
            <h2 class="product-category">best selling</h2>

            <div class="product-container">
                <div class="product-card">
                    <div class="product-image">
                        <span class="discount-tag">50% off</span>
                        <img src="image/book4.jpg" class="product-thumb" alt="">
                        <button class="card-btn">add to whislist</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">brand</h2>
                        <p class="product-short-des">Best For Cute Girl..</p>
                        <span class="price">520</span><span class="actual-price">1040</span>
                    </div>

                </div>
                <div class="product-container">
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="image/book5.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to whislist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">Best For Cute Girl..</p>
                            <span class="price">520</span><span class="actual-price">1040</span>
                        </div>
                    </div>
                </div>
                <div class="product-container">
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="image/book6.jpeg" class="product-thumb" alt="">
                            <button class="card-btn">add to whislist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">Best For Cute Girl..</p>
                            <span class="price">520</span><span class="actual-price">1040</span>
                        </div>

                    </div>
        </section>
        <section class="product">
            <h2 class="product-category">best selling</h2>

            <div class="product-container">
                <div class="product-card">
                    <div class="product-image">
                        <span class="discount-tag">50% off</span>
                        <img src="image/book7.jpeg" class="product-thumb" alt="">
                        <button class="card-btn">add to whislist</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">brand</h2>
                        <p class="product-short-des">Best For Cute Girl..</p>
                        <span class="price">520</span><span class="actual-price">1040</span>
                    </div>
                </div>
                <div class="product-container">
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="image/book8.webp" class="product-thumb" alt="">
                            <button class="card-btn">add to whislist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">Best For Cute Girl..</p>
                            <span class="price">520</span><span class="actual-price">1040</span>
                        </div>
                    </div>
                </div>
                <div class="product-container">
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="image/book9.webp" class="product-thumb" alt="">
                            <button class="card-btn">add to whislist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">Best For Cute Girl..</p>
                            <span class="price">520</span><span class="actual-price">1040</span>
                        </div>

                    </div>
        </section>
        <?php include_once("footer.php"); ?>
    </body>


</html>