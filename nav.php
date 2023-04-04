<?php
include_once("database/Create_database.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <style type="text/css">

    .navbar {
      position: fixed;
      z-index: 1;
      width: 100%;
    }

    ul {
      align-items: center;
      margin-left: 50px;
    }

    li {
      margin-left: 45px;
      margin-right: 45px;
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
        padding-left: 5px;
        padding-right: 15px;
        display: flex;
        align-items: center;
        width: 80%;
        height: 40px;
        background-color: white;
        border-radius: 5px;
      }
      ul {
      align-items: center;
    }
    }

    .btn1 {
      height: 30px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .more {
      width: 150px;
      background-color: #36454F;
      border: none;
    }

    .more:hover {
      background-color: #36454F;
    }

    .dropdown-menu {
      width: 150px;
      z-index: 1;
    }

    .dropdown-item {
      margin: 0;
      padding: 0;
      text-align: center;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid jack">
      <a class="navbar-brand" href="#">
        <img src="image/Book1.png" alt="BOOK CHOR" style="width:150px; opacity:90%;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <form class="d-flex all">
          <input class="form-control me-2" style="height:30px; text-align:center;" ; type="text" placeholder="Search">
          <button class="btn1 btn-primary btn" type="button2">Search</button>
        </form>

        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="home_page.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact_us.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Log In</a>
          </li>

      </div>
    </div>
  </nav>
  <script src="user_login/custom_js/bootstrap.bundle.min.js"></script>
</body>

</html>