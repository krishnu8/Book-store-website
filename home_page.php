<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="non_login/aahan.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
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

        .aahan {
            height: 50px;

        }

        .an {
            text-decoration: none;
            color: black;

        }

        a:hover {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <?php include('nav.php'); ?>
    <div class="aahan"></div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner " style="height:600px;">
            <div class="carousel-item active ">
                <img src="image/Book_image/book5.jpg" alt="Los Angeles" width="100%" class="img-fluid">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/Book_image/book2.jpeg" alt="Chicago" width="100%" height="700px">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/Book_image/a2.jpg" alt="New York" width="100%" height="700px">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
        </div>
        <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a> -->
    </div>

    <!-- Product Card fetching from databse -->
    <div class="container ">
        <div class="row bg-white py-5 ">
            <?php
            $select_query = "select * from `product`";
            $result_query = mysqli_query($con, $select_query);
            while ($row = mysqli_fetch_array($result_query)) {
                $Product_Name = $row[1];
                $Price = $row[2];
                $Product_Image = $row[3];
                $auther = $row[8];
                $product_id = $row[0];
            ?>

                <div class='col-xl-3 col-md-4 col-sm-6 mt-5'>
                    <a href="product_detail.php?product_id=<?php echo $product_id ?>" class="an">
                        <img class='card-image-top' src='image/Book_image/<?php echo $Product_Image ?>' alt='$Product_Name' width='100%' height='350px'>
                        <div class='card-body'>
                            <h3 class='card-titel '><?php echo $Product_Name ?></h3>
                            <h5>By <?php echo $auther ?></h5>
                            <h5>Price:<?php echo $Price ?></h5>
                            <!-- &nbsp<strike>12</strike> &nbsp&nbsp&nbsp&nbsp&nbsp  -->
                    </a>
                    <form action="" method="post">
                        <h5>Quantity:<h5>
                             <select name="select" id="se" class="form-control" style="width: 150px;">
                                    <?php
                                    if ($row[5] <= 5) {
                                        $i = 1;
                                        while ($i <= $row[5]) {
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
                                <input type="hidden" name="product_id" value="<?php echo $row[0] ?>">
                                <div class='antima'>
                                    <?php
                                    if ($row[5] > 0) {
                                    ?>
                                        <button type='' name='buy'>Buy Now</button>
                                    <?php
                                    }
                                    ?>
                                    <br>
                                    <button type='submit' name='cart'>Add To Cart</button>
                                </div>
                    </form>
                </div>

        </div>

    <?php
            }
    ?>

    </div>
    </div>
<?php
include_once("footer.php")
?>
</body>

</html>
<?php
if(isset($_POST['cart'])){
?>
<script>
  window.location.href="login.php";
</script>
<?php
}
if(isset($_POST['buy'])){
  $Quantity=@$_POST['select'];
  ?>
  <script>
    window.location.href="login.php";
  </script>
  <?php
  }
?>