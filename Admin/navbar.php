<?php 
session_start();
include_once("../database/Create_database.php");

if(!isset($_SESSION['Admin_email'])&& !isset($_SESSION['Admin_password'])){
  ?>
  <script>
    window.location.href="../login.php";
  </script>
  <?php
}

?>

<head>
<link rel="stylesheet" href="css/bootstrap.css">
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" 
integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
  .fa{
    margin-left: 40px;
    font-size: 20px;
    color: black;
    margin-left: -8%;
  }
  .fa-bars{
    margin-left: 40px;
    font-size: 30px;
  }
  .fa-id-badge{
    font-size: 25px;
  }
  .fa-user{
    margin-left: 40px;
    font-size: 30px;
    color: white;
  }
  .form-inline{
    margin-top: 1%;
    margin-left: 1%;
  }
  .dropdown{
    margin-left: 15px;
  }
  .logo_class{
    color: red; 
    margin-left: -30%;
    width: 110%;
    transition: 0.5s;
  }
  .logo_class:hover{
    transition: 0.5s;
    transform: scale(1.1);
  }

  .dropdown-item{
    color: green;
  }
  .dropdown-item h6{
    margin-left: 20px;
    margin-top: -19px;
  }
</style>
<head>  
      
<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[3];
// echo $first_part;
?>

<!-- A grey horizontal navbar that becomes vertical on small screens -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
<a class="navbar-brand" href="#">
    <h1 class="logo_class">Admin Panel</h1>
  </a>

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link <?php if ($first_part == "Admin_Account.php") {
        echo "active1";
        } ?>" href="Dashboard.php">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php if ($first_part == "Order_Fetch_data.php") {
        echo "active1";
        } ?>" href="Orders.php">ORDERS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php if ($first_part == "massages.php") {
        echo "active1";
        } ?>" href="Message.php">MESSAGES</a>
    </li>
     <li class="nav-item">
      <a class="nav-link <?php if ($first_part == "Product_Fetch_data.php") {
        echo "active1";
        } ?>" href="product.php">PRODUCTS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php if ($first_part == "Notification_Fetch_data.php") {
        echo "active1";
        } ?>" href="Notification.php">NOTIFFICATIONS</a>
    </li>
  </ul>

  <form class="form-inline" >
    <input class="form-control mr-sm-2" type="text" placeholder="Search here!">
    <button class="btn btn-success" type="submit">Search</button>
 
 <!-- <a href="login.php">
  <i class="fa fa-light fa-user"></i>
 </a> -->

  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  More
  </button>
  <ul class="dropdown-menu dropdown-menu-dark">
    <li><a class="dropdown-item" href="Users/User.php"><i class="fa fa-solid fa-users"></i><h6>Users</h6></a></li>
    <li><a class="dropdown-item" href="Sellers/Seller.php"><i class="fa fa-solid fa-user-secret"></i><h6>Selles Man</h6></a></li>
    <li><a class="dropdown-item" href="Product.php"><i class="fa fa-brands fa-product-hunt"></i><h6>Products</h6></a></li>
    <li><a class="dropdown-item" href="Orders.php"><i class="fa fa-brands fa-jedi-order"></i><h6>Orders</h6></a></li>
    <li><a class="dropdown-item" href="Notification.php"><i class="fa fa-solid fa-circle-exclamation"></i><h6>Notification</h6></a></li>
    <li><a class="dropdown-item" href="Cart.php"><i class="fa fa-solid fa-cart-shopping"></i><h6>Carts</h6></a></li>
    <li><a class="dropdown-item" href="Offers.php"><i class="fa fa-regular fa-face-laugh-beam"></i><h6>Offers</h6></a></li>
    <li><a class="dropdown-item" href="Review.php"><i class="fa fa-regular fa-star"></i><h6>Feedback Review</h6></a></li><br>
    <li><a class="dropdown-item" href="../logout"><i class="fa "></i><h6>Logout</h6></a></li>

    <li><hr class="dropdown-divider"></li>
    <p style="color: red; text-align: center; font-size: 20px;">Contact Links</p>
    <li><a class="dropdown-item" href="https://www.facebook.com/ramesh.vai.9275439" style="width: 10px; margin-left: -15px;"><i class="fa fa-brands fa-facebook"></i></a></li>
    <li><a class="dropdown-item" href="https://www.instagram.com/rameshvai697/" style="width: 10px; margin-left: 11%; margin-top: -14%;"><i class="fa fa-brands fa-square-instagram"></i></a></li>
    <li><a class="dropdown-item" href="https://twitter.com"style="width: 10px; margin-left: 30%; margin-top: -14%;"><i class="fa fa-brands fa-square-twitter"></i></a></li>
    <li><a class="dropdown-item" href="https://www.youtube.com" style="width: 10px; margin-left: 50%; margin-top: -14%;"><i class="fa fa-brands fa-youtube"></i></a></li>
    <li><a class="dropdown-item" href="https://mail.google.com" style="width: 10px; margin-left: 70%; margin-top: -14%;"><i class="fa fa-solid fa-envelope"></i></a></li>
  </ul>
</div>
</nav>
