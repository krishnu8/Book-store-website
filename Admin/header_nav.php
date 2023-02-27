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

<!-- A grey horizontal navbar that becomes vertical on small screens -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
<a class="navbar-brand" href="#">
    <h1 class="logo_class">Admin Panel</h1>
  </a>

  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="Admin_Account.php">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="fetch_admin_data.php">ADMINS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="fetch_order_data.php">ORDERS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="massages.php">MESSAGES</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="fetch_product_data.php">PRODUCTS</a>
    </li>
  </ul>

  <form class="form-inline" >
    <input class="form-control mr-sm-2" type="text" placeholder="Search here!">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
<!-- Drop Down -->
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    more
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="Profile1.php">
    <i class="fa fa-solid fa-id-badge"></i><h6>Your Profile</h6></a></li>

    <li><a class="dropdown-item" href="Update_profile.php">
      <i class="fa fa-solid fa-pen-to-square"></i><h6>Update Profile</h6></a></li>

    <li><a class="dropdown-item" href="Change_profile1_password.php">
      <i class="fa fa-light fa-lock"></i><h6>Change Password</h6></a></li>

    <li><a class="dropdown-item" href="#">
    <i class="fa fa-duotone fa-gear"></i><h6>Setting & Privacy</h6></a></li>

    <li><a class="dropdown-item" href="#">
    <i class="fa fa-duotone fa-phone"></i><h6>Help & Support</h6></a></li>

    <li><a class="dropdown-item" href="login_b.php">
      <i class="fa fa-duotone fa-user-minus"></i><h6>Log Out</h6></a></li>
  </ul>
</div>

  <a href="login.php">
  <i class="fa fa-light fa-user"></i>
  </a>
</nav>
