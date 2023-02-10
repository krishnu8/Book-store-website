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
        body{
            /* background-image: url("image/wallpaper.jpg"); */
            /* background-size: cover; */
        }
        .container {
            max-width: 100%;
            padding-top: 20px;
            /* background-color: red; */
            padding-bottom: 0;
            margin-bottom: 0;
        }
        .profile {
            border-radius: 50%;
            /* background-color: aqua; */
            margin-top: 5px;
            margin-left: 35%;
        }

        .full {
            margin-top: 20px;
        }

        .full .btn {
            margin-bottom: 20px;
        }

        .row1 .col-sm-6 {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 20px;
        }
        .gen{
            margin-top: 10px;
            margin-bottom:10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12" style="text-align: center;">
                <h2>MY Profile </h2>
            </div>
        </div>

        <form action="" method="post">
            <div class="row">
                <div class="col-sm-2" style="background-color: blue;">
                    <div class="d-grid gap-3 full">
                        <button type="button" class="btn btn-primary btn-block">My order</button>
                        <button type="button" class="btn btn-primary btn-block">Change Password</button>
                        <button type="button" class="btn btn-primary btn-block">Delete Account</button>
                        <button type="button" class="btn btn-primary btn-block">Logout</button>
                    </div>
                </div>
                <div class="col-sm-10">
                    <img src="image/Book.png" alt="Profile_picture" width="120px" class="profile"> <br>
                    <div class="row row1">
                        <div class="col-sm-6">
                            <span>First Name: <br>
                                <input type="text" name="fname" id="">
                            </span>
                        </div>
                        <div class="col-sm-6">
                            <span>
                                Last Name: <br>
                                <input type="text" name="lname" id="">
                            </span>
                        </div>
                    </div>
                    <div class="row row1">
                        <div class="col-sm-6">
                            <span class="gen">
                                Gender:
                                <input type="radio" name="gen" id=""> Male
                                <input type="radio" name="gen" id="">Female
                            </span>
                        </div>
                    </div>

                    <div class="row row1">
                        <div class="col-sm-6">
                            <span>
                                Contact Email: <br>
                                <input type="email" name="em" id=""> <br>
                            </span>
                        </div>
                        <div class="col-sm-6">
                           <span>
                            Contact Number: <br>
                            <input type="tel" name="num" id=""> <br>
                           </span>
                        </div>
                    </div>
                    <div class="row row1">
                        <div class="col-sm-6">
                           <span>
                            State: <br>
                            <input type="text" name="" id=""> <br>
                           </span>
                        </div>
                        <div class="col-sm-6">
                            <span>
                                City: <br>
                            <input type="text" name="" id=""> <br>
                            </span>
                        </div>
                    </div>
                    <div class="row row1">
                        <div class="col-sm-6">
                           <span>
                            Bio: <br>
                            <textarea name="" id="" cols="25" rows="2" placeholder="Bio"></textarea> <br>
                           </span>
                        </div>
                        <div class="col-sm-6">
                            <br>
                            <input type="submit" value="Update" name="upt" style="width: 100px; height: 50px;">
                        </div>

                    </div>
                </div>
            </div>
        </form>

    </div>
</body>

</html>