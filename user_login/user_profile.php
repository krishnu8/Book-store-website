<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My-Profile</title>
    <?php include_once("nave.php") ?>
    <style>
        main {
            margin-top: 75px;
        }

        @media (max-width: 992px) {
            main {
                padding-top: 30px;
            }
            .bu{
                position: absolute  ;
                margin-top: 225px;
                margin-left:250px;
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

        .profile-img img {
            width: 70%;
            height: 100%;
        }

        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 70%;
            border: none;
            border-radius: 0;
            font-size: 15px;
            background: #212529b8;
        }

        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }

        .profile-head h5 {
            color: #333;
        }

        .profile-head h6 {
            color: #0062cc;
        }

        .profile-edit-btn {
            border: none;    
            border-radius:5px;
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
    </style>
</head>

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
                                        <img src="image/a3.jpg" alt="Profile picture"/>
                                        <!-- <div class="file btn btn-lg btn-primary">
                                                Change Photo
                                                <input type="file" name="file" />
                                            </div> -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="profile-head">
                                        <h5>
                                            Krishnu Gupta
                                        </h5>
                                        <h6>
                                            Web Developer and Designer
                                        </h6>
                                        <!-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> -->
                                        <br>
                                        <br>
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" style="display: flex; flex-direction: column; margin-bottom: 0px;">
                                                <h4 style="margin: 0;">About</h4>
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
                                        printf("Hello world");
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="tab-content profile-tab" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>User Id</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Krishnu</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Name</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Krishnu Gupta</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>krishnugupta593@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Phone</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>123 456 7890</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>City State</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Rajkot,Gujrat</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Number of Book Bought</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>128</p>
                                                </div>
                                            </div>
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