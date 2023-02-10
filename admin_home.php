<?php include("nave.php")?>
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
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12" style="text-align: center;">
                <h2>Dasboard</h2>
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
                        <button type="button" class="btn btn-primary btn-block">Queary</button>
                        <button type="button" class="btn btn-primary btn-block">Feedback Review</button>
                        <button type="button" class="btn btn-primary btn-block">Logout</button>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-6 jack1" style="background-color: red;">

                        </div>
                        <div class="col-sm-6 jack1" style="background-color: rgb(71, 41, 41);">
                            dai
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 jack1" style="background-color: rgb(147, 224, 24);">

                        </div>
                        <div class="col-sm-6 jack1" style="background-color: rgb(77, 37, 255);">
                            dai
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</body>

</html>