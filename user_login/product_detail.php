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
</style>
<?php
$product_id=@$_GET['product_id'];
$select="SELECT *FROM `product` WHERE Product_Id='$product_id'";
$result=mysqli_fetch_array(mysqli_query($con,$select));
?>
<body>
  <div class="main">

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="../image/Book_image/<?php echo $result[3]?>" height="500px" width="350px">
          <hr>
          <h4>Product Description</h4>
          <p><?php echo $result[7]?></p>

        </div>

        <div class="col-md-6">
          <h1 class="mt-4"><?php echo $result[1]?></h1>
          <p class="text-muted">BY: <strong><?php echo $result[8]?></strong></p>
          <p class="text-muted">BOOK ID <strong><?php echo $result[0]?></strong></p>
          <hr>

          <p class="lead">Price: <span class="text-danger"><?php echo $result[2]?></span></p>
          <?php
            if($result[5]>0){
              ?>
                <p class="lead">In Stock: <span class="text-success">Yes</span></p>
              <?php
            }else{
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
            <button type="submit" class="btn btn-primary" name="cart">Add to Cart</button>
            <?php
            if($result[5]>0){
              ?>
              <button type="" class="btn btn-outline-secondary ml-2" name="buy">Buy Now</button>
              <?php
            }
            ?>
          </form>
          <div class="similar">
            <h4>New Product</h4>
            <hr>
            <div class="sab">
            <?php
            $similar="select * from product ORDER BY Category='$result[6]' and product_id !='$product_id' DESC LIMIT 2";
            $roman=mysqli_query($con,$similar);
            while($jack = mysqli_fetch_array($roman)){
              ?>
              <a href="product_detail.php?product_id=<?php echo $jack[0]?>">
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
      </div>
    </div>
  </div>
</body>
</html>
<?php
if(isset($_POST['cart'])){
  $Quantity=@$_POST['select'];
?>
<script>
  // window.location.href=""
</script>
<?php
}
if(isset($_POST['buy'])){
  $Quantity=@$_POST['select'];
  ?>
  <script>
    window.location.href="Payment.php?quantity=<?php echo $Quantity ?> && product_id=<?php echo $product_id ?>";
  </script>
  <?php
  }
?>
