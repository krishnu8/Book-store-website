<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <title>My-profile</title>
    <style>
        

        .jack1{
            height: 280px;
            /* text-align: center; */
        }
        .hu{
            height: 70px;
            /* margin-top: 100px; */
        }

    .all_admin h3{
         /* display: flex; */
        /* text-align: center; */
        /* justify-content: center; */
        width: 350px;
        height: 230px;
        border: 15px solid hsl(240, 0%, 25%);
        padding: 40px;
        margin: 20px;
        border-radius: 5%;
        margin-left: 38%;
        background-color: hsl(240, 0%, 25%);
        transition: 0.5s;
    }

    .all_admin h3:hover{
        transition: 0.5s;
        transform: scale(1.1);
    }

     .all_admin .current{
        margin-left: 150px;
    } 

    .All_btns{
        margin-top: 12.5%;
        width: 130%;
        margin-left: -15%;
    }
    .all_admin .row .below_row{
        margin-top: -15px;
    }

    .jack1 .View_class{
        background-color: hsl(240, 0%, 35%);
        color: black;
        width: 120%;
        height: 40%;
        margin-top: 15%;
        margin-left: -10%;
        font-size: 30px;
        border-radius: 12px;
        text-align: center;
    }
    .jack1 p{
        color: black;
        text-align: center;
        margin-top: -10%;
    }
    .all_admin{
        margin-top: -41%;
        margin-left: 16.5%;
    }

    .all_admin .row{
        margin-left: -11.5%;
        width:104%;
    }
    .funtion_class{
        text-decoration: none;
        margin-top: -3%;
        background-color: hsl(240, 0%, 25%);
        color: hsl(240, 10%, 35%);
        width: 16.7%;
        height: 95%;
        transition: 0.6s;
    }
    .funtion_class .full .btn-block:hover{
        border: 1px solid #fff;
        transform: translate(1.1);
        transition: 0.5s;
        text-decoration: none;
        color: black;
        background-color: transparent;
    } 
    .funtion_class .full a:hover{
        text-decoration: none;
    }
    </style>
</head>


  <?php
    include_once("header_nav.php")
  ?>


<h1 style="color: green; text-align: center; width: 30%; margin-left: 35%; margin-top: 1%;">DASHBORD</h1>

<div class="col-sm-2 funtion_class">
    <div class="d-grid gap-3 full">
        <br>
        <a href="Profile1.php"><button type="button" class="btn btn-secondary btn-block">Your Profile</button></a>
        <br><br>
        <a href="User_insert_form.php"> <button type="button" class="btn btn-secondary btn-block">Users</button></a>
        <br><br>
        <a href="Product_insrt_form.php"><button type="button" class="btn btn-secondary btn-block">Products</button></a>
        <br><br>
        <a href="Order_insert_form.php"><button type="button" class="btn btn-secondary btn-block">Orders</button></a>
        <br><br>
        <a href="#"><button type="button" class="btn btn-secondary btn-block">Notification</button></a>
        <br><br>
        <a href="#"><button type="button" class="btn btn-secondary btn-block">Contact Detail</button></a>
        <br><br>
        <a href="#"><button type="button" class="btn btn-secondary btn-block">Feedback Review</button></a>
        <br><br>
        <a href="login_b.php"><button type="button" class="btn btn-secondary btn-block">Logout</button></a>
    </div>
</div>

<div class="col-sm-10 all_admin">
                    <div class="row">
                        <div class="col-sm-4 jack1">
                        <h3>
                            <p> 2 </p> 
                            <div class="View_class"> View Admin </div>

                            <a href="fetch_admin_data.php">
                            <input type="submit" name="btn_1" value="See Details" id="btn1" class="All_btns btn btn-secondary" />
                            </a>
                        </h3>
                        </div>

                        <div class="col-sm-4 jack1">
                          <h3>
                              <p> 400 </p> 
                              <div class="View_class"> View Users </div>
  
                              <a href="Fetch_users_data.php">
                              <input type="submit" name="btn_1" value="See Details" id="btn1" class="All_btns btn btn-secondary" />
                              </a>
                          </h3>
                          </div>

                        <div class="col-sm-4 jack1">
                        <h3 class="current"> 
                            <p> 700 </p> 
                            <div class="View_class"> View Review </div>
                        <a href="#">
                            <input type="submit" name="sbtn" value="See Datails" id="sbtn1" class="All_btns btn btn-secondary" />
                        </a>
                        </h3>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-sm-4 jack1 below_row">
                        <h3> 
                            <p> $700 </p> 
                            <div class="View_class"> View Orders </div>
                            <a href="fetch_order_data.php">
                            <input type="submit" name="sbtn" value="See detais" id="sbtn1" class="All_btns btn btn-secondary" />
                            </a>
                        </h3>
                        </div>

                        <div class="col-sm-4 jack1 below_row">
                          <h3> 
                              <p> $700 </p> 
                              <div class="View_class"> View Products </div>
                              <a href="fetch_product_data.php">
                              <input type="submit" name="sbtn" value="See detais" id="sbtn1" class="All_btns btn btn-secondary" />
                              </a>
                          </h3>
                          </div>

                        <div class="col-sm-4 jack1 below_row">
                        <h3 class="current"> 
                            <p> $0/- </p> 
                            <div class="View_class"> Total Pendings  </div>
                            <a href="#">
                            <input type="submit" name="sbtn" value="See detais" id="sbtn1" class="All_btns btn btn-secondary" />
                            </a>
                        </h3>

                        </div>

                    </div>
                </div>
