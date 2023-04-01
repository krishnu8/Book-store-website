

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- CSS Links -->
  <link rel="stylesheet" href="custom_css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="custom_css/style.css" />

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
      margin-left:50%;
    }

    li {
      /* margin-left: 45px;
      margin-right: 20px; */
      display: flex;
      /* margin-left: 50px; */
      margin-right: 100px;
      font-size: 20px;
    }

    @media only screen and (max-width: 500px) {

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
        <div>
          <img src="../image/Book1.png" alt="BOOK CHOR" style="width:150px; opacity:90%;">
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
        <i class="bi bi-three-dots-vertical" style="font-size: 25px; background-color: none;"></i>
      </button>
      <div class="collapse navbar-collapse" id="topNavBar">
       
        <ul class="navbar-nav navbar-nav1">
          <li class="nav-item">
            <a class="nav-link" href="">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i> Start selling</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              
              More
            </a>
            <ul class="dropdown-menu dropdown-menu-end dro">
            <li>
                <a class="dropdown-item" href="user_profile.php">View product</a>
              </li>
              <li>
                <a class="dropdown-item" href="user_profile.php">My Profile</a>
              </li>
              <li>
                <a class="dropdown-item" href="user_profile.php">Change Password</a>
              </li>
              <li>
                <a class="dropdown-item" href="user_profile.php">Delete Account</a>
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
         
        </ul>
      </div>
    </div>
  </nav>
  <script src="custom_js/bootstrap.bundle.min.js"></script> 