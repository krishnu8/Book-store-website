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

        .hu {
            background-color: wheat;
        }
        .form-group{
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <?php include("nave.php")?> 
    <div class="jack12"> </div>
   <div class="container-fluid hu">
        <div class="row">
            <div class="col-sm-12" style="text-align: center; background-color:white;">
                <h2>Change Password </h2>
            </div>
        </div>

        <form action="" method="post">
            <div class="row">
                <div class="col-sm-2" style="background-color: rgb(76, 122, 188);">
                    <div class="d-grid gap-3 full">
                        <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">My
                            Orders</a>
                        <a href="#" class="btn btn-primary btn-lg active" role="button"
                            aria-pressed="true">Notification</a>
                        <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Change
                            password</a>
                        <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Delete
                            Account</a>
                        <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Logout</a>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Change Password</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group">
                                    <label for="inputPasswordOld">Current Password</label>
                                    <input type="password" class="form-control" id="inputPasswordOld" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNew">New Password</label>
                                    <input type="password" class="form-control" id="inputPasswordNew" required="">
                                    <span class="form-text small text-muted">
                                        The password must be 8-20 characters, and must <em>not</em> contain spaces.
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNewVerify">Verify</label>
                                    <input type="password" class="form-control" id="inputPasswordNewVerify" required="">
                                    <span class="form-text small text-muted">
                                        To confirm, type the new password again.
                                    </span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right">Change</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div> 

</body>

</html>