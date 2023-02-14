
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <title>My-profile</title>
    <style>
       .container {
            max-width: 100%;
            padding-top: 20px;
            /* background-color: red; */
            padding-bottom: 0;
            margin-bottom: 0;
        }
        .full {
            margin-top: 20px;
        }

        .full .btn {
            margin-bottom: 20px;
        }
        .jack1{
            height: 350px;
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
        border: 15px solid  #00008B;
        padding: 40px;
        margin: 20px;
        border-radius: 5%;
        margin-left: 20%;
        background-color: #00008B;
        transition: 0.5s;
    }

    .all_admin h3:hover{
        transition: 0.7s;
        transform: scale(1.2);
    }

     .all_admin .current{
      /* 
      width: 320px;
        height: 200px;
        border: 15px solid violet;
        padding: 40px;
        margin: 20px;
        border-radius: 5%; */
        margin-left: -5px;
    } 

    .All_btns{
        margin-top: 12.5%;
        width: 130%;
        margin-left: -15%;
    }
    .all_admin .row .below_row{
        margin-top: -30px;
    }

    .jack1 .View_class{
        background-color: blue;
        color: green;
        width: 120%;
        height: 40%;
        margin-top: 15%;
        margin-left: -10%;
        font-size: 35px;
        border-radius: 12px;
        text-align: center;
    }
    .jack1 p{
        color: white;
        text-align: center;
        margin-top: -10%;
    }
    </style>
</head>

<body>
<?php include("nave.php")?>
        <div class="hu"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" style="text-align: center;">
                <h2 style="color: blue; font-size: 40px; margin-left: 120px;">Dasboard</h2>
            </div>
        </div>

        <form action="" method="post">
            <div class="row">
                <div class="col-sm-2" style="background-color: blue;">
                    <div class="d-grid gap-3 full">
                        <button type="button" class="btn btn-primary btn-block">Users</button>
                        <button type="button" class="btn btn-primary btn-block">Products</button>
                        <button type="button" class="btn btn-primary btn-block">Orders</button>
                        <button type="button" class="btn btn-primary btn-block">Notification</button>
                        <button type="button" class="btn btn-primary btn-block">Contact Detail</button>
                        <button type="button" class="btn btn-primary btn-block">Feedback Review</button>
                        <button type="button" class="btn btn-primary btn-block">Logout</button>
                    </div>
                </div>
                <div class="col-sm-10 all_admin">
                    <div class="row">
                        <div class="col-sm-6 jack1">
                        <h3>
                            <p> 2 </p> 
                            <div class="View_class"> View Admin </div>

                            <a href="Admin_data_insert.php">
                            <input type="submit" name="btn_1" value="See Details" id="btn1" class="All_btns btn btn-success" />
                            </a>
                        </h3>
                        </div>

                        
                        <div class="col-sm-6 jack1">
                        <h3 class="current"> 
                            <p> 100 </p> 
                            <div class="View_class"> View User </div>
                        <a href="fetch_admin_data.php">
                            <input type="submit" name="sbtn" value="See Datas" id="sbtn1" class="All_btns btn btn-success" />
                            </a>
                        </h3>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-sm-6 jack1 below_row">
                        <h3> 
                            <p> $700 </p> 
                            <div class="View_class"> View Orders </div>
                            <a href="#">
                            <input type="submit" name="sbtn" value="See detais" id="sbtn1" class="All_btns btn btn-success" />
                            </a>
                        </h3>


                        </div>
                        <div class="col-sm-6 jack1 below_row">
                        <h3 class="current"> 
                            <p> 400 </p> 
                            <div class="View_class"> View Products </div>
                            <a href="#">
                            <input type="submit" name="sbtn" value="See detais" id="sbtn1" class="All_btns btn btn-success" />
                            </a>
                        </h3>

                        </div>


                    </div>
                </div>
            </div>
        </form>

    </div>
</body>

</html>