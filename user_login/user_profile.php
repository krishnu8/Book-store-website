<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My-Profile</title>
    <?php include_once("nave.php") ?>
    <style>
        @media (max-width: 992px) {
            main {
                padding-top: 30px;
            }

            .bu {
                position: absolute;
                margin-top: 225px;
                margin-left: 250px;
            }
        }


        .box {
            margin: 50px;
            padding: 5px;
            border: 7px solid #074c8d;
            background-color: #55d0cc;
            border-radius: 15px;
            height: 250px;
            width: 300px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            transition: 0.5s ease-in-out;
        }

        .box:hover {
            transform: scale(1.1)
        }

        .contain {
            margin-top: 20px;
            width: 80%;
            height: 80%;
            /* background-color: yellow; */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contain p {
            font-size: 30px;
        }

        .emp-profile {
            /* padding: 3%; */
            padding-left: 100px;
            margin-top: 6%;
            border-radius: 0.5rem;
            background: #fff;
        }

        .profile-img {
            text-align: center;
        }

        .profile-img .im {
            width: 70%;
            height: 100%;
        }

        .profile-head h5 {
            color: #333;
        }

        .profile-head h6 {
            color: #0062cc;
        }

        .profile-edit-btn {
            border: none;
            border-radius: 5px;
            padding: 2%;
            font-weight: 600;
            color: white;
            background-color: #128680;
            cursor: pointer;
        }

        .proile-rating {
            font-size: 12px;
            color: #818182;
            margin-top: 5%;
        }

        .proile-rating span {
            color: #495057;
            font-size: 15px;
            font-weight: 600;
        }

        .profile-head .nav-tabs {
            margin-bottom: 5%;
        }

        .profile-head .nav-tabs .nav-link {
            font-weight: 600;
            border: none;
        }

        .profile-head .nav-tabs .nav-link.active {
            border: none;
            border-bottom: 2px solid #0062cc;
        }

        .profile-work {
            padding: 14%;
            margin-top: -15%;
        }

        .profile-work p {
            font-size: 12px;
            color: #818182;
            font-weight: 600;
            margin-top: 10%;
        }

        .profile-work a {
            text-decoration: none;
            color: #495057;
            font-weight: 600;
            font-size: 14px;
        }

        .profile-work ul {
            list-style: none;
        }

        .profile-tab label {
            font-weight: 600;
        }

        .profile-tab p {
            font-weight: 600;
            color: #0062cc;
        }

        .ju {
            width: 180px;
            font-size: 18px;
        }

        .up {
            position: relative;
            z-index: 1;
            left: -120px;
            top: 80px;
            cursor: pointer;
            height: 80px;
            opacity: 0%;
        }

        .up:hover {
            opacity: 60%;
        }
        .change{
            position: relative;
            z-index: 1;
            bottom: -250px;
            left: -110px;
        }
    </style>
</head>
<?php
$email = $_SESSION['email'];
$data = "SELECT * FROM `registration` WHERE email='$email'";
$a = mysqli_fetch_array(mysqli_query($con, $data));

if (isset($_SESSION['fail_profile'])) {
    ?>
    <div class="ale">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Sorry!</strong> <?php echo $_SESSION['fail_profile'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <script>
        setTimeout("",5000);
    </script>
<?php
    unset($_SESSION['fail_profile']);
}

if (isset($_SESSION['pass_profile'])) {
    ?>
    <div class="ale">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Alert!</strong> <?php echo $_SESSION['pass_profile'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <script>
        setTimeout("",5000);
    </script>
<?php
    unset($_SESSION['pass_profile']);
}

if (isset($_SESSION['Image_error'])) {
    ?>
    <div class="ale">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> <?php echo $_SESSION['Image_error'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <script>
        setTimeout("",5000);
    </script>
<?php
    unset($_SESSION['Image_error']);
}

if (isset($_SESSION['Image_succ'])) {
    ?>
    <div class="ale">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Alert!</strong> <?php echo $_SESSION['Image_succ'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <script>
        setTimeout("",5000);
    </script>
<?php
    unset($_SESSION['Image_succ']);
}
?>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" style="text-align: center; background-color:white;">
                    <h2><b>Profile</b> </h2>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-sm-12">
                    <div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-img">
                                    <img class="im" src="../image/user_image/<?php echo $a[6] ?>" alt="Profile picture" />
                                    <label for="image1"><img class="up" src="../image/edit.png"></label>
                                    <form action="user_profilepicture_action.php?img=<?php echo $a[6]?>" method="post" enctype="multipart/form-data">
                                         <input type="file" name="fgd" id="image1" style="display: none; ">
                                         <input type="submit" id="change_pic" class="change profile-edit-btn" name="change_pic" value="Change Profile Picture">
                                    </form>
                                <!-- <label for="sub"><p class="profile-edit-btn" style="cursor: pointer;">Change password</p></label> -->
                                </div>
                               </div>
                            <div class="col-md-6">
                                <div class="profile-head">
                                    <h5>
                                        <?php echo $a[0] ?>
                                    </h5>
                                    <h6>
                                        <?php
                                        if ($a[9] == "Normal") {
                                        ?>
                                            Customer
                                        <?php
                                        } elseif ($a[9] == "Admin") {
                                        ?>
                                            Admin
                                        <?php
                                        } else {
                                        ?>
                                            Seller
                                        <?php
                                        }
                                        ?>
                                    </h6>
                                    <br>
                                    <br>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" style="display: flex; flex-direction: column; margin-bottom: 0px;">
                                            <h4 style="margin-top: 80px;">About</h4>
                                            <hr style="height: 2px; background-color: red; margin: 0;">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2 bu">
                                <a href="edit_profile.php"><input type="button" name="btnAddMore" class="profile-edit-btn" value="Edit Profile" /></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-work">
                                    <p>
                                    <h5>About Your Self</h5>
                                    <div class="ju"><?php echo $a[7] ?></div>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content profile-tab" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $a[0] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $a[1] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $a[2] ?></p>
                                            </div>
                                        </div>
                                        <?php
                                        if ($a[4] != "" && $a[5] != "") {
                                        ?>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>City State</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $a[5] ?>,<?php echo $a[4] ?></p>
                                                </div>
                                            </div>
                                            <?php
                                        } else {
                                            if ($a[4] != "") {
                                            ?>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>State</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p><?php echo $a[4] ?></p>
                                                    </div>
                                                </div>
                                            <?php
                                            } elseif ($a[5] != "") {
                                            ?>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>City</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p><?php echo $a[5] ?></p>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <label>Number of Book Bought</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>128</p>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </main>
</body>

</html>
