<?php include_once("user_change_password.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSS Links -->
  <link rel="stylesheet" href="css/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="css/css/style.css" />
  <title>Navegation-Bar</title>

  <style type="text/css">
    body {
      background-color: rgb(220, 220, 220);
      font-family: 'Open Sans', serif;    
        font-size: 14px;
    }

    table,
    th,
    td {
      color: black;
      padding: 10px;
      border: 0px solid #000;
    }

    .navbar-nav1 {
      margin-left: 200px;
    }

    li {
      margin-left: 45px;
      margin-right: 20px;
      font-size: 20px;
    }

    .all {
      background-color: black;
      padding-left: 5px;
      padding-right: 15px;
      display: flex;
      align-items: center;
      width: 30%;
      height: 40px;
      background-color: white;
      border-radius: 5px;
      margin-left: 10%;
    }

    @media only screen and (max-width: 500px) {
      .all {
        background-color: black;
        margin-top: 10px;
        padding-left: 5px;
        padding-right: 15px;
        display: flex;
        align-items: center;
        width: 80%;
        height: 40px;
        background-color: white;
        border-radius: 5px;
      }

      .navbar-nav1 {
        margin: 0;
        text-align: center;
      }

      .dro {
        margin-right: 0;
        width: 100%;
        text-align: center;
      }
    }

    td {
      padding: 5px;
      border: 0px solid #000;
    }

    .textt {
      font-family: Vampire Wars;
      font-weight: bold;
      font-size: 20px;
      -webkit-text-stroke: 0.8px white;
      color: #fff0;
      letter-spacing: 7px;
      transition: 0.3s;
    }

    .textt:hover {
      -webkit-text-stroke: 0.8px blue;
      color: red;
    }

    .offcanvas {
      margin-top: 6px;
      width: 250px;
      background-color: #9ec5c6;
      ;
    }

    .offcanvas ul li {
      margin-left: 22px;
    }

    .dro {
      margin-right: -30px;
      /* background-color:black; */
      border-radius: 2px;
    }

    .dro li {
      margin: 0;
    }

    .btn-custom {
      background-color: #128680 !important;
      color: #f3f3f3 !important;
      transition: 0.5s ease-in-out;
      width: 205px;
      margin-bottom: 30px;
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
  </style>
</head>

<body>

  <!-- top navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">
        <div class="textt">
          <img src="image/Book1.png" alt="BOOK CHOR" style="width:150px; opacity:90%;">
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
        <i class="bi bi-three-dots-vertical" style="font-size: 25px; background-color: none;"></i>
      </button>
      <div class="collapse navbar-collapse" id="topNavBar">
        <form class="d-flex all">
          <input class="form-control me-2" style="height:30px; text-align:center;" ; type="text" placeholder="Search">
          <button class="btn1 btn-primary btn" type="button">Search</button>
        </form>
        <ul class="navbar-nav navbar-nav1">
          <li class="nav-item">
            <a class="nav-link" href="" style="width:80px;">Name</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <!-- <i class="bi bi-person-fill"></i> -->
              <!-- <img src="image/Book1.png" class="img-fluid" style="height:25px; width:25px; border-radius:50%;"> -->
              More
            </a>
            <ul class="dropdown-menu dropdown-menu-end dro">
              <li>
                <a class="dropdown-item" href="user_profile.php">My Profile</a>
              </li>
              <li>
                <a class="dropdown-item" href="">About Us</a>
              </li>
              <li>
                <a class="dropdown-item" href="">Contact Us</a>
              </li>
              <li>
                <a class="dropdown-item" href="" onclick="return confirm('Are you sure you want to logout?')">Logout</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
          </li>
        </ul>
      </div>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
      <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
    </button>
  </nav>
  <!-- top navigation bar -->
  <div class="offcanvas offcanvas-start sidebar-nav" tabindex="-1" id="sidebar">
    <div class="offcanvas-body p-0">
      <nav class="navbar-dark">
        <ul class="navbar-nav">
          <li>
            <div class="das" style="text-align: center;font-size:30px; margin-bottom:-45px;color:white">
              <span class="me-2"><i class="bi bi-speedometer2"></i></span> <br>
              <span style="font-family: JetBrains Mono;">Dashboard</span>
            </div>
          </li>

          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>

          <li>
            <a href="" class="btn btn-custom btn-lg active btn3" role="button" aria-pressed="true">Home</a>
          </li>
          <li>
            <a href="user_order.php" class="btn btn-custom btn-lg active btn3" role="button" aria-pressed="true">Orders</a>
          </li>

          <li>
            <a href="cart.php" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true">Cart</a>
          </li>
          <li>
            <a href="User_Notification.php" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true">Notification</a>
          </li>
          <li>
          <a href="#" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true" data-toggle="modal" data-target="#cppp">Change Password</a>
          </li>
          <li>
          <a href="#" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true" data-toggle="modal" data-target="#delete_acc">Delete Account</a>
          </li>
          <li>
            <a href="user_feedback.php" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true">Feed Back</a>
          </li>
          <li>
            <a href="" onclick="return confirm('Are you sure you want to logout?')" class="btn btn-custom btn-lg active btn2" role="button" aria-pressed="true">Logout</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>