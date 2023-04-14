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
  /* .dropdown{
    margin-left: 15px;
  } */
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
// include_once("check_after_login.php");
include_once("../database/Create_database.php");

$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[3];
// echo $first_part;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/validation.js"></script>
    <script type="text/javascript" src="js/jquery.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/validation.js"></script>

    <link rel="stylesheet" href="css/mystyle.css">
</head>

<body style="margin-top: -25px;">
    <?php
    if (isset($_SESSION['success'])) {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="alertmsg">
            <strong>Success!!! </strong> <?php echo $_SESSION['success']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <script>
            setTimeout("", 5000);
        </script>
    <?php
        unset($_SESSION['success']);
    }

    if (isset($_SESSION['error'])) {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alertmsg">
            <strong>Error!!!</strong> <?php echo $_SESSION['error']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <script>
            setTimeout("", 5000);
        </script>

    <?php
        unset($_SESSION['error']);
    }
    ?>
    <div class="container m-auto">
        <div class="row m-4">
            <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-dark">
                    <a class="navbar-brand" href="#"><img src=" image/Admin.jpeg" class="img-fluid" height="300%" width="70%"/></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="bg-dark fa-sharp fa-solid fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link <?php if ($first_part == "manage_users.php") {
                                                        echo "active1";
                                                    } ?>" href="Dashboard.php"><i class="fa fa-solid fa-house"></i> HOME </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  <?php if ($first_part == "manage_events.php") {
                                                        echo "active1";
                                                    } ?>" href="Orders.php"><i class="fa fa-brands fa-jedi-order"></i> MANAGE ORDERS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  <?php if ($first_part == "manage_students.php") {
                                                        echo "active1";
                                                    } ?>" href="Product.php"><i class="fa fa-brands fa-product-hunt"></i> MANAGE PRODUCTS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  <?php if ($first_part == "admin_change_pwd.php") {
                                                        echo "active1";
                                                    } ?>" href="User.php"><i class="fa fa-solid fa-users"></i> MANAGE USERS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  <?php if ($first_part == "admin_change_profile.php") {
                                                        echo "active1";
                                                    } ?>" href="Notification.php"><i class="fa fa-sharp fa-solid fa-bell"></i> NOTIFFICATIONS </a>
                            </li>
                            <li class="nav-item  ">
                                <a class="nav-link  <?php if ($first_part == "logout.php") {
                                                        echo "active1";
                                                    } ?>" href="logout.php"><i class="fa fa-solid fa-right-from-bracket"></i> Logout </a>
                            </li>
                        </ul>
                    </div>
  <div class="dropdown">
  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  MORE
  </button>
  <ul class="dropdown-menu dropdown-menu-dark">
    <li><a class="dropdown-item" href="User.php"><i class="fa fa-solid fa-users"></i><h6>Users</h6></a></li>
    <li><a class="dropdown-item" href="Seller.php"><i class="fa fa-solid fa-user-secret"></i><h6>Selles Man</h6></a></li>
    <li><a class="dropdown-item" href="Product.php"><i class="fa fa-brands fa-product-hunt"></i><h6>Products</h6></a></li>
    <li><a class="dropdown-item" href="Orders.php"><i class="fa fa-brands fa-jedi-order"></i><h6>Orders</h6></a></li>
    <li><a class="dropdown-item" href="Notification.php"><i class="fa fa-solid fa-circle-exclamation"></i><h6>Notification</h6></a></li>
    <li><a class="dropdown-item" href="Cart.php"><i class="fa fa-solid fa-cart-shopping"></i><h6>Carts</h6></a></li>
    <li><a class="dropdown-item" href="Offers.php"><i class="fa fa-regular fa-face-laugh-beam"></i><h6>Offers</h6></a></li>
    <li><a class="dropdown-item" href="Review.php"><i class="fa fa-regular fa-star"></i><h6>Feedback Review</h6></a></li><br>
    <li><a class="dropdown-item" href="Login.php"><h6>Logout</h6></a></li>

    <li><hr class="dropdown-divider"></li>
    <p style="color: red; text-align: center; font-size: 20px;">Contact Links</p>
    <li><a class="dropdown-item" href="https://www.facebook.com/ramesh.vai.9275439" style="width: 10px; margin-left: -15px;"><i class="fa fa-brands fa-facebook"></i></a></li>
    <li><a class="dropdown-item" href="https://www.instagram.com/rameshvai697/" style="width: 10px; margin-left: 11%; margin-top: -14%;"><i class="fa fa-brands fa-square-instagram"></i></a></li>
    <li><a class="dropdown-item" href="https://twitter.com"style="width: 10px; margin-left: 30%; margin-top: -14%;"><i class="fa fa-brands fa-square-twitter"></i></a></li>
    <li><a class="dropdown-item" href="https://www.youtube.com" style="width: 10px; margin-left: 50%; margin-top: -14%;"><i class="fa fa-brands fa-youtube"></i></a></li>
    <li><a class="dropdown-item" href="https://mail.google.com" style="width: 10px; margin-left: 70%; margin-top: -14%;"><i class="fa fa-solid fa-envelope"></i></a></li>
  </ul>
</div>
      
<a href="Profile.php" style="text-decoration: none; color: black; margin-left: 20px; margin-top: -10px;">My Profile
  <i class="fa fa-light fa-user" style="color: black;"></i>
 </a>
</nav>
  </div>
    </div>


