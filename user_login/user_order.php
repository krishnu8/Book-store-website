<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <?php 
    // include_once("../database/Create_database.php");
    // session_start();
    include_once("nave.php");
     ?>
    <style>
        @media (max-width: 992px) {
            main {
                padding-top: 30px;
                /* background-color: black; */
            }
            .row1 {
            display: flex;
            flex-direction:column;
            /* width: 95%; */
            /* height: auto; */
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
<?php
if (isset($_SESSION['Order_cancle_succ'])) {
    ?>
    <div class="ale">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Alert!</strong> <?php echo $_SESSION['Order_cancle_succ'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <script>
        setTimeout("", 5000);
    </script>
<?php
    unset($_SESSION['Order_cancle_succ']);
}

if (isset($_SESSION['Order_cancle_err'])) {
    ?>
    <div class="ale">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Alert!</strong> <?php echo $_SESSION['Order_cancle_err'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <script>
        setTimeout("", 5000);
    </script>
<?php
    unset($_SESSION['Order_cancle_err']);
}

if (isset($_SESSION['order_succ'])) {
    ?>
    <div class="ale">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Alert!</strong> <?php echo $_SESSION['order_succ'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <script>
        setTimeout("", 5000);
    </script>
<?php
    unset($_SESSION['order_succ']);
}

if (isset($_SESSION['order_err'])) {
    ?>
    <div class="ale">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Alert!</strong> <?php echo $_SESSION['order_err'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <script>
        setTimeout("", 5000);
    </script>
<?php
    unset($_SESSION['order_err']);
}
?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" style="text-align: center; background-color:white;">
                    <h2><b>Orders</b></h2>
                </div>
            </div>
            <?php
            $user_id = $_SESSION['User_id'];
            // echo $user_id;
            $select = "SELECT * FROM `oders` WHERE User_id='$user_id' and (status='Active' or status='Delivered')";
            $data = mysqli_query($con, $select);
            $b = 0;
            // $date = date('Y/m/d');
            while ($a = mysqli_fetch_array($data)) {
                $product = "SELECT * FROM `product` WHERE Product_Id='$a[1]'";
                $product_info=mysqli_fetch_array(mysqli_query($con,$product));
                if ($b == 0) {
                    ?>
                    <div class="row1 data">
                        <div style="width:10%"><img src="../image/Book_image/<?php echo$product_info[3] ?>" height="80px" width="80px" style="border-radius: 50%; background-color: red;" alt="img"></div>
                        <div style="width:30%">
                        <h5> <?php echo $product_info[1]," By:",$product_info[8] ?></h5>
                        </div>
                        <?php
                        if($a[6]=="Delivered"){
                            ?>
                            <div style="width:40%">
                            <h5>Delivered</h5>
                            Can you please share your feedback with us? It will help us improve our services and ensure that we are meeting your expectations.
                            </div>
                            <div><a href=""><button class="aa">Review and Rating</button></a></div>
                            <?php
                        }else{
                            $day=date('l', strtotime($a[4]));
                            ?>
                                 <div style="width:40%">
                                    <h5>Your Order will be delivered till <?php echo"$day" ?></h5>
                                </div>
                                <div><a href="cancle_order.php?order_id=<?php echo $a[0];?>"><button class="aa">Cancle order</button></a></div>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $b = 1;
                } else {
                    ?>
                     <div class="row1 data1">
                        <div style="width:10%"><img src="../image/Book_image/<?php echo$product_info[3] ?>"  width="80px" height="80px" style="border-radius: 50%; background-color: red;" alt="img"></div>
                        <div style="width:30%">
                            <h5><?php echo $product_info[1]," By:",$product_info[8] ?></h5>
                        </div>
                        <?php
                        if($a[6]=="Delivered"){
                            ?>
                            <div style="width:40%">
                            <h5>Delivered</h5>
                            Can you please share your feedback with us? It will help us improve our services and ensure that we are meeting your expectations.
                            </div>
                            <div><a href=""><button class="aa">Review and Rating</button></a></div>
                            <?php
                        }else{
                            $day=date('l', strtotime($a[4]));
                            ?>
                                 <div style="width:40%">
                                    <h5>Your Order will be delivered till <?php echo"$day" ?></h5>
                                </div>
                                <div><a href="cancle_order.php?order_id=<?php echo $a[0];?>"><button class="aa">Cancle Order</button></a></div>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                    $b = 0;
                }
            }
            ?>
        </div>
    </main>
</body>

</html>