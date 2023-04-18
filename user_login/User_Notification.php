<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Notification</title>
    <?php include_once("nave.php") ?>
    <style>
        @media (max-width: 992px) {
            main {
                padding-top: 30px;
            }
        }

        .data {
            background-color: #D5EAF5;
            border-radius: 10px;
            /* height:80px; */
        }

        .data1 {
            background-color: rgba(245, 222, 179, 0.736);
            border-radius: 10px;
            height: 80px;

        }

        .data1:hover {
            background-color: #CAC2FF;
            border: red 1px solid;
        }

        .data:hover {
            background-color: #E9ECF1;
            border: red 1px solid;
        }

        .table {
            width: 95%;
            margin-left: 2%;
            padding-right: 20px;
            justify-content: center;
            align-items: center;
        }

        tr {
            border-radius: 5px;
        }

        .row1 {
            display: flex;
            width: 95%;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
            margin-left: 2.5%;
            margin-top: 10px;
        }

        .aa {
            background-color: blue;
            color: white;
            border-radius: 8px;
            padding: 5px;
        }

        .aa:hover {
            background-color: white;
            color: black;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" style="text-align: center; background-color:white;">
                    <h2><b>Notification</b></h2>
                </div>
            </div>
            <?php
            $user_id = $_SESSION['User_id'];
            $select = "SELECT * FROM `notification` WHERE 1";
            $data = mysqli_query($con, $select);
            $usel = "select * from registration where user_id='$user_id'";
            $user_data = mysqli_fetch_array(mysqli_query($con, $usel));
            $b=0;
            while ($a = mysqli_fetch_array($data)) {
                $product = "SELECT * FROM `product` WHERE Product_Id='$a[2]'";
                $product_info = mysqli_fetch_array(mysqli_query($con, $product));
                if ($user_data[11] < $a[3]) {
                    if ($b == 0) {
                        $b=1;
            ?>
                        <div class="row1 data">
                            <div style="width:10%"><img src="../image/Book_image/<?php echo $product_info[3] ?>" height="80px" width="80px" style="border-radius: 50%; background-color: red;" alt="img"></div>
                            <div style="width:20%">
                                <h5> <?php echo $product_info[1], " By:", $product_info[8] ?></h5>
                            </div>

                            <div style="width:40%">
                                <h5>Hurry Up!! A brand new product has just become available.</h5>
                            </div>
                            <div><a href=""><button class="aa">Check it out</button></a></div>
                        </div>
                    <?php
                    } else {
                        $b=0;
                    ?>
                        <div class="row1 data1">
                            <div style="width:10%"><img src="../image/Book_image/<?php echo $product_info[3] ?>" height="80px" width="80px" style="border-radius: 50%; background-color: red;" alt="img"></div>
                            <div style="width:20%">
                                <h5> <?php echo $product_info[1], " By:", $product_info[8] ?></h5>
                            </div>

                            <div style="width:40%">
                                <h5>Hurry Up!! A brand new product has just become available.</h5>
                            </div>
                            <div><a href=""><button class="aa">Check it out</button></a></div>
                        </div>
            <?php
                    }
                }
            }

            ?>
        </div>
    </main>
</body>

</html>