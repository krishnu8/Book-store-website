<?php
include_once("home_nave.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Detail - Flipkart</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
  .main {
    margin-top: 80px;
  }

  .similar {
    margin-top: 15px;
    /* height: 200px; */
    /* background-color: green; */
  }

  .pro {
    width: 200px;
    height: 300px;
    /* background-color: red; */
  }

  a {
    text-decoration: none;
    color: black;
    transition: 0.5s;
  }

  a:hover {
    text-decoration: none;
    transform: scale(0.9);
  }

  .sab {
    display: flex;
    flex: row;
    justify-content: space-evenly;
  }

  /* http://www.jquery2dotnet.com/ */
  body {
    margin-top: 20px;
  }

  .glyphicon {
    margin-right: 5px;
  }

  .rating .glyphicon {
    font-size: 22px;
  }

  .rating-num {
    margin-top: 0px;
    font-size: 54px;
  }

  .progress {
    margin-bottom: 5px;
  }

  .progress-bar {
    text-align: left;
  }

  .rating-desc .col-md-3 {
    padding-right: 0px;
  }

  .sr-only {
    margin-left: 5px;
    overflow: visible;
    clip: auto;
  }
</style>
<?php
$product_id = @$_GET['product_id'];
$select = "SELECT *FROM `product` WHERE Product_Id='$product_id'";
$result = mysqli_fetch_array(mysqli_query($con, $select));
?>

<body>
  <div class="main">

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="../image/Book_image/<?php echo $result[3] ?>" height="500px" width="350px">
          <hr>
          <h4>Product Description</h4>
          <p><?php echo $result[7] ?></p>

        </div>

        <div class="col-md-6">
          <h1 class="mt-4"><?php echo $result[1] ?></h1>
          <p class="text-muted">BY: <strong><?php echo $result[8] ?></strong></p>
          <p class="text-muted">BOOK ID <strong><?php echo $result[0] ?></strong></p>
          <hr>

          <p class="lead">Price: <span class="text-danger"><?php echo $result[2] ?></span></p>
          <?php
          if ($result[5] > 0) {
          ?>
            <p class="lead">In Stock: <span class="text-success">Yes</span></p>
          <?php
          } else {
          ?>
            <p class="lead">In Stock: <span class="text-success">No</span></p>
          <?php
          }
          ?>
          <form method="post">
            Quantity: <select name="select" id="se" class="form-control" style="width: 150px;">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>

            <hr>
            <?php
            if ($result[5] > 0) {
            ?>
              <button type="" class="btn btn-outline-secondary ml-2" name="buy">Buy Now</button>
              <button type="submit" class="btn btn-primary" name="cart">Add to Cart</button>
            <?php
            } else {
            ?>
              <button type="" class="btn btn-outline-secondary ml-2" name="buy" disabled>Buy Now</button>
              <button type="submit" class="btn btn-primary" name="cart" disabled>Add to Cart</button>
            <?php
            }
            ?>
          </form>
          <div class="similar">
            <h4>New Product</h4>
            <hr>
            <div class="sab">
              <?php
              $similar = "select * from product ORDER BY Category='$result[6]' and product_id !='$product_id' DESC LIMIT 2";
              $roman = mysqli_query($con, $similar);
              while ($jack = mysqli_fetch_array($roman)) {
              ?>
                <a href="product_detail.php?product_id=<?php echo $jack[0] ?>">
                  <div class="pro">
                    <img src="../image/Book_image/<?php echo $jack[3] ?>" alt="Book123" height="250px" width="200px">
                    <h6>Name:<?php echo $jack[1] ?></h6>
                    <h6>Author:<?php echo $jack[8] ?></h6>
                  </div>
                </a>
              <?php
              }
              ?>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-6">
              <div class="well well-sm">
                <div class="row">
                  <div class="col-xs-12 col-md-6 text-center">
                    <h1 class="rating-num">
                      4.0</h1>
                    <div class="rating">
                      <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                      </span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star">
                      </span><span class="glyphicon glyphicon-star-empty"></span>
                    </div>
                    <div>
                      <span class="glyphicon glyphicon-user"></span>1,050,008 total
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <div class="row rating-desc">
                      <div class="col-xs-3 col-md-3 text-right">
                        <span class="glyphicon glyphicon-star"></span>5
                      </div>
                      <div class="col-xs-8 col-md-9">
                        <div class="progress progress-striped">
                          <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 80%; background-color: red;">
                            <!-- <span class="sr-only">80%</span> -->
                          </div>
                        </div>
                      </div>
                      <!-- end 5 -->
                      <div class="col-xs-3 col-md-3 text-right">
                        <span class="glyphicon glyphicon-star"></span>4
                      </div>
                      <div class="col-xs-8 col-md-9">
                        <div class="progress">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 60%; background-color: yellow;">
                            <span class="sr-only">60%</span>
                          </div>
                        </div>
                      </div>
                      <!-- end 4 -->
                      <div class="col-xs-3 col-md-3 text-right">
                        <span class="glyphicon glyphicon-star"></span>3
                      </div>
                      <div class="col-xs-8 col-md-9">
                        <div class="progress">
                          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%; background-color: green;">
                            <span class="sr-only">40%</span>
                          </div>
                        </div>
                      </div>
                      <!-- end 3 -->
                      <div class="col-xs-3 col-md-3 text-right">
                        <span class="glyphicon glyphicon-star"></span>2
                      </div>
                      <div class="col-xs-8 col-md-9">
                        <div class="progress">
                          <div class="progress-bar progress-bar-warning"  role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%; background-color: crimson;">
                            <span class="sr-only">20%</span>
                          </div>
                        </div>
                      </div>
                      <!-- end 2 -->
                      <div class="col-xs-3 col-md-3 text-right">
                        <span class="glyphicon glyphicon-star"></span>1
                      </div>
                      <div class="col-xs-8 col-md-9">
                        <div class="progress">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 15%;background-color: pink;">
                            <span class="sr-only">15%</span>
                          </div>
                        </div>
                      </div>
                      <!-- end 1 -->
                    </div>
                    <!-- end row -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
         <center><h1>Feedback</h1></center>
         
      </div>
    </div>
  </div>
</body>

</html>
<?php
if (isset($_POST['cart'])) {
  $Quantity = @$_POST['select'];
?>
  <script>
    // window.location.href=""
  </script>
<?php
}
if (isset($_POST['buy'])) {
  $Quantity = @$_POST['select'];
?>
  <script>
    window.location.href = "Payment.php?quantity=<?php echo $Quantity ?> && product_id=<?php echo $product_id ?>";
  </script>
<?php
}

if (isset($_POST['cart'])) {
  $Quantity = @$_POST['select'];
?>
  <script>
    window.location.href = "cart_action.php?quantity=<?php echo $Quantity ?> && product_id=<?php echo $product_id ?>";
  </script>
<?php
}
?>