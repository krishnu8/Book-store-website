
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
        
        .jack12 {
            height: 80px;
            /* background-color: green; */
        }
        .profile {
            border-radius: 50%;
            background-color: rgb(255, 153, 0);
            margin-top: 5px;
            margin-left: 35%;
        }

        .full {
            margin-top: 20px;
        }

        .full .btn {
            margin-bottom: 20px;
        }
        .hu{
            background-color: wheat;
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
    <?php include("nave.php")?>
    <div class="jack12"> hu</div>
    <div class="container-fluid hu">
        <div class="row">
            <div class="col-sm-12" style="text-align: center; background-color:white;">
                <h2>MY Profile </h2>
            </div>
        </div>

        <form action="" method="post">
            <div class="row">
                <div class="col-sm-2" style="background-color: rgb(76, 122, 188);">
                    <div class="d-grid gap-3 full">
                        <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">My Orders</a>
                        <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Notification</a>
                        <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Change password</a>
                        <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Delete Account</a>
                        <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Logout</a>
                    </div>
                </div>
                <div class="col-sm-10">
                    <img src="image/Book.png" alt="Profile_picture" width="120px" class="profile"> <br>
                    <div class="row row1">
                        <div class="col-sm-6">
                            <span>First Name: <br>
                                <input type="password" class="form-control" id="#" placeholder="First Name">
                            </span>
                        </div>
                        <div class="col-sm-6">
                            <span>
                                Last Name: <br>
                                <input type="password" class="form-control" placeholder="Last name">
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
                                <input type="password" class="form-control" placeholder="Email"> <br>
                            </span>
                        </div>
                        <div class="col-sm-6">
                           <span>
                            Contact Number: <br>
                            <input type="tel" name="num" placeholder="Number"class="form-control"    id=""> <br>
                           </span>
                        </div>
                    </div>
                    <div class="row row1">
                        <div class="col-sm-6">
                           <span>
                            State: <br>
                            <input type="text" class="form-control" placeholder="State" name="" id=""> <br>
                           </span>
                        </div>
                        <div class="col-sm-6">
                            <span>
                                City: <br>
                            <input type="text" class="form-control" placeholder="City" name="" id=""> <br>
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
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </div>
                    
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-sm-2">
                FeedBacks
            </div>
            <div class="col-sm-10">
                No FeedBacks yet
            </div>
          </div>
    </div>
    
</body>

</html>