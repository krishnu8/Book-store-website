<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <title>My-profile</title>
    <style>
    
    .funtion_class .full a:hover{
        text-decoration: none;
    }
    .funtion_class .d-grid button i{
        margin-left: -20px;
    }
    .funtion_class .d-grid li a i{
        color: #fff;
        font-size: 25px;
    }
    .funtion_class .d-grid li a:hover{
        background-color: transparent;
    }
    .all_admin{
        margin-left: 20px;
    }
.all_admin h3 p{
    margin-top: -20px;
    background-color: transparent;
    width: 50%;
    text-align: center;
    margin-left: 40px;
}
.all_admin h3{
         /* display: flex; */
        /* text-align: center; */
        /* justify-content: center; */
        width: 270px;
        height: 260px;
        border: 2px solid hsl(0, 2%, 28%);
        padding: 40px;
        margin: 20px;
        border-radius: 5%;
        background-color: hsl(0, 1%, 45%); 
        transition: 0.5s;
    }
    .all_admin h3:hover{
        transform: scale(1.03);
        transform: translate(1.1);
        transition: 0.5s;
        border-color: transparent;
    }
    .all_admin h3 a{
        color: #fff;
    }
    .all_admin h3 a:hover{
        text-decoration: none;
    }
    .jack1{
        height: 280px;
        /* text-align: center; */
    }
    .all_admin{
      margin-left: 30px;
    }
    .All_btns{
        margin-top: 9%;
        width: 135%;
        margin-left: -17.5%;
    }
    .jack1 .View_class{
        /* border: 1px solid hsl(240, 0%, 35%); */
        background-color: transparent;
        color: hsl(0, 2%, 24%);;
        width: 150%;
        height: 55%;
        margin-top: 20%;
        margin-left: -25%;
        font-size: 20px;
        border-radius: 5px;
        text-align: center;
    }
    .jack1 .View_class:hover{
        text-decoration: 1.3px solid underline;
    }
    .all_admin h1 i{
        margin-top: 10px;
        font-size: 50px;
    }
    .all_admin h1{
        text-decoration: 1.5px solid underline;
        color: black;
        text-align: center;
         width: 30%;
    }
</style>
</head>

  <?php
    include_once("navbar.php")
  ?>

<div class="row">
    <div class="col-sm-2 bg-dark funtion_class oi">

            <div class="d-grid gap-3 full">
                <br>
                <a href="Admin_profile/Admin.php"><button type="button" class="btn btn-secondary btn-block"><i class="fa fa-solid fa-id-badge"></i> My Profile</button></a>
                <br><br>
                <a href="Admin_profile/Admin_Edit.php"> <button type="button" class="btn btn-secondary btn-block"><i class="fa fa-solid fa-pen-to-square"></i> Update Profile</button></a>
                <br><br>
                <a href="Admin_profile/Change_password.php"><button type="button" class="btn btn-secondary btn-block"><i class="fa fa-light fa-lock"></i> Change Password</button></a>
                <br><br>
                <a href="Admin_profile/Help.php"><button type="button" class="btn btn-secondary btn-block"><i class="fa fa-duotone fa-phone"></i>Help & Support</button></a>
                <br><br>
                <a href="Admin_profile/Admin_Delete.php"><button type="button" class="btn btn-secondary btn-block"><i class="fa fa-solid fa-trash"></i>Remove Account</button></a>
                <br><br>
                <a href="Admin_profile/Logout.php"><button type="button" class="btn btn-secondary btn-block">Logout</button></a>

            <li><hr class="dropdown-divider"></li>
            <p style="color: red; text-align: center; font-size: 20px;">Contact Links</p>
            <li><a class="dropdown-item" href="https://www.facebook.com/ramesh.vai.9275439" style="width: 10px; margin-left: 1px; margin-top: -10%;"><i class="fa fa-brands fa-facebook"></i></a></li>
            <li><a class="dropdown-item" href="https://www.instagram.com/rameshvai697/" style="width: 10px; margin-left: 25%; margin-top: -24.5%;"><i class="fa fa-brands fa-square-instagram"></i></a></li>
            <li><a class="dropdown-item" href="https://twitter.com"style="width: 10px; margin-left: 50%; margin-top: -24.5%;"><i class="fa fa-brands fa-square-twitter"></i></a></li>
            <!-- <li><a class="dropdown-item" href="https://www.youtube.com" style="width: 10px; margin-left: 59%; margin-top: -24.9%;"><i class="fa fa-brands fa-youtube"></i></a></li> -->
            <li><a class="dropdown-item" href="https://mail.google.com" style="width: 10px; margin-left: 73%; margin-top: -25%;"><i class="fa fa-solid fa-envelope"></i></a></li>
                
        </div>
    </div>

    <div class="col-sm-9 all_admin">
        
        <h1><i class="fa-solid fa-gauge"></i> DASHBOARD</h1>

        <div class="row row1">
            <div class="col-sm-3 jack1">
                <h3>
                    <p> 2 </p> 
                    <div class="View_class"> <h4 style="width: 50%; margin-left: 20px;">Welcom To !</h4> If Your are See <b><i>User Details</i></b>
                    Please Click on View Button
                    </div>
                    <a href="Users/User.php">
                     <button name="btn_1" id="btn1" class="All_btns btn btn-secondary">View Details </a></button>
                </h3>
            </div>
    
            <!-- <div class="col-sm-3 jack1">
                <h3>
                    <p> 3 </p> 
                    <div class="View_class"> If you want to See <u><i>User <br> Details</i></u> then Click on the following View button.</div>
    
                    <a href="Github-Killu/fetch_data.php">
                    <button name="btn_1" id="btn1" class="All_btns btn btn-secondary">View User</a></button>
                    </a>
                </h3>
            </div> -->
    
            <div class="col-sm-3 jack1">
                <h3>
                    <p> 3 </p> 
                    <div class="View_class"> If you want to See <u><i>Sellers Details</i></u> then Click on the following View button.</div>
    
                    <a href="Sellers/Seller.php">
                    <button name="btn_1" id="btn1" class="All_btns btn btn-secondary">View Sellers</a></button>
                    </a>
                </h3>
            </div>

            <div class="col-sm-3 jack1">
                <h3>
                    <p> 10/- </p> 
                    <div class="View_class"> If you want to See <u><i>Review Details</i></u> then Click on the following View button.</div>
    
                    <a href="Review.php">
                    <button name="btn_1" id="btn1" class="All_btns btn btn-secondary">View Review</a></button>
                    </a>
                </h3>
            </div>

            <div class="col-sm-3 jack1">
                <h3 class="current "> 
                    <p> 0 </p> 
                  <div class="View_class"> If you want to See <u><i>All Notifications</i></u> then Click on <br> the following View button.</div>
                    <a href="Notification.php">
                    <button name="btn_1" id="btn1" class="All_btns btn btn-secondary">View Notification</a></button>
                    </a>
                </h3>
                </div>
    
        </div>
<!-- Eding of first row -->



<div class="row" class="row2">
    <div class="col-sm-3 jack1">
    <h3> 
        <p> $700 </p> 
        <div class="View_class"> If you want to <u><i>See Orders</i></u> Details then Click on the following View button.</div>
        <a href="Order.php">
        <button name="btn_1" id="btn1" class="All_btns btn btn-secondary">View Orders</a></button>
        </a>
    </h3>
    </div>

    <div class="col-sm-3 jack1">
      <h3> 
          <p> $700 </p> 
          <div class="View_class"> If you want to See <u><i>Product Details</i></u> then Click on the following View button.</div>
          <a href="Product.php">
            <button name="btn_1" id="btn1" class="All_btns btn btn-secondary">View Products</a></button>
          </a>
      </h3>
      </div>

    <!-- <div class="col-sm-3 jack1">
    <h3 class="current "> 
        <p> 0 </p> 
      <div class="View_class"> If you want to See <u><i>All Notifications</i></u> then Click on <br> the following View button.</div>
        <a href="#">
        <button name="btn_1" id="btn1" class="All_btns btn btn-secondary">View Notification</a></button>
        </a>
    </h3>
    </div> -->

    <div class="col-sm-3 jack1">
        <h3 class="current "> 
            <p> $0/- </p> 
          <div class="View_class"> If you want to See <u><i>Offers Details</i></u> then Click on the following View button.</div>
            <a href="Offers.php">
            <button name="btn_1" id="btn1" class="All_btns btn btn-secondary">View Offers</a></button>
            </a>
        </h3>
        </div>

    </div>

</div>
