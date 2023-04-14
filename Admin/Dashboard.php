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
        width: 270px;
        height: 260px;
        padding: 40px;
        margin: 20px;
        border-radius: 5px;
       /* border: 2px solid hsl(0, 2%, 28%);
        background-color: hsl(0, 1%, 45%); */
        transition: 0.5s;
    }
   /* .all_admin h3:hover{
        transform: scale(1.03);
        transform: translate(1.1);
        transition: 0.5s;
        border-color: transparent;
    } */
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
        width: 130%;
        margin-left: -15%;
    }
    .jack1 .View_class{
        text-decoration: none;
        /* border: 1px solid hsl(240, 0%, 35%); */
        background-color: transparent;
        color: #fff;
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
    .all_admin h2{
        font-size: 35px;
        margin-left: -15px;
        margin-top: -20px;
        text-decoration: 1.5px solid underline;
        color: black;
        text-align: left;
        width: 102%;
    }
</style>
</head>

<div class="row">
    
    <!-- <div class="col-sm-2 bg-dark funtion_class oi" style="margin-top: 1px; height: 60%;">

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
        </div>
    </div>  --> 

    <?php
    include_once("Header.php")
  ?>
    <div class="col-sm-12 all_admin">

        <h2><i class="fa-solid fa-gauge"></i> DASHBOARD</h2>

        <div class="row row1" style="margin-top: -20px;">
            <div class="col-sm-3 jack1" style="margin-left: -40px;">
                <h3 style="background-color: blue; color: #fff;">
                    <p> 2 </p> 
                    <div class="View_class"> <h4 style="width: 50%; margin-left: 20px;">Welcom To !</h4> View Users 
                    </div>
                    <a href="User.php">
                     <button name="btn_1" id="btn1" class="All_btns btn btn-secondary">View Details </a></button>
                </h3>
            </div>

            <!-- <div class="col-sm-3 jack1">
                <h3 style="background-color: blue; color: #fff;">
                    <p> 3 </p> 
                    <div class="View_class"> If you want to See <u><i>User <br> Details</i></u> then Click on the following View button.</div>
    
                    <a href="Github-Killu/fetch_data.php">
                    <button name="btn_1" id="btn1" class="All_btns btn btn-secondary">View User</a></button>
                    </a>
                </h3>
            </div> -->
    
            <div class="col-sm-3 jack1"style="margin-left: 10px;">
                <h3 style="background-color: OrangeRed; color: #fff;">
                    <p> 3 </p> 
                    <div class="View_class"><h4 style="width: 50%; margin-left: 20px;">Welcom To !</h4>View Sellers Details</div>
    
                    <a href="Seller.php">
                    <button name="btn_1" id="btn1" class="All_btns btn btn-secondary">View Sellers</a></button>
                    </a>
                </h3>
            </div>

            <div class="col-sm-3 jack1"style="margin-left: 10px;">
                <h3 style="background-color: ForestGreen; color: #fff;">
                    <p> 10/- </p> 
                    <div class="View_class"><h4 style="width: 50%; margin-left: 20px;">Welcom To !</h4>View Review Details</div>
    
                    <a href="Review.php">
                    <button name="btn_1" id="btn1" class="All_btns btn btn-secondary">View Review</a></button>
                    </a>
                </h3>
            </div>

            <div class="col-sm-3 jack1"style="margin-left: 10px;">
                <h3 class="current" style="background-color: DeepPink; color: #fff;"> 
                    <p> 0 </p> 
                  <div class="View_class"><h4 style="width: 50%; margin-left: 20px;">Welcom To !</h4>View All Notifications</div>
                    <a href="Notification.php">
                    <button name="btn_1" id="btn1" class="All_btns btn btn-secondary">View Notification</a></button>
                    </a>
                </h3>
                </div>
    
        </div>
<!-- Eding of first row -->



<div class="row" class="row2">
    <div class="col-sm-3 jack1"style="margin-left: -40px;">
    <h3 style="background-color: RoyalBlue; color: #fff;"> 
        <p> $700 </p> 
        <div class="View_class"><h4 style="width: 50%; margin-left: 20px;">Welcom To !</h4>View See Orders</div>
        <a href="Orders.php">
        <button name="btn_1" id="btn1" class="All_btns btn btn-secondary">View Orders</a></button>
        </a>
    </h3>
    </div>

    <div class="col-sm-3 jack1"style="margin-left: 10px;">
    <h3 style="background-color: DarkMagenta; color: #fff;"> 
          <p> $700 </p> 
          <div class="View_class"><h4 style="width: 50%; margin-left: 20px;">Welcom To !</h4>View Product Details</div>
          <a href="Product.php">
            <button name="btn_1" id="btn1" class="All_btns btn btn-secondary">View Products</a></button>
          </a>
      </h3>
      </div>

    <div class="col-sm-3 jack1"style="margin-left: 10px;">
    <h3 class="current" style="background-color: red; color: #fff;"> 
        <p> 0 </p> 
      <div class="View_class"><h4 style="width: 50%; margin-left: 20px;">Welcom To !</h4>View All Carts </div>
        <a href="Cart.php">
        <button name="btn_1" id="btn1" class="All_btns btn btn-secondary">View Carts</a></button>
        </a>
    </h3>
    </div>

    <div class="col-sm-3 jack1"style="margin-left: 10px;">
        <h3 class="current" style="background-color: DeepSkyBlue; color: #fff;"> 
            <p> $0/- </p> 
          <div class="View_class"><h4 style="width: 50%; margin-left: 20px;">Welcom To !</h4>View Offers Details</div>
            <a href="Offers.php">
            <button name="btn_1" id="btn1" class="All_btns btn btn-secondary">View Offers</a></button>
            </a>
        </h3>
        </div>

    </div>

</div>
