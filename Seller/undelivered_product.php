<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$location = $components[3];
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

    /* 
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif
    }

    */
    .pic {
        width: 50px;
        height: 50px;
        object-fit: contain;
    }

    .table thead {
        background-color: #3b6967;
    }

    .table thead th {
        padding: 30px;
        font-size: 14px;
        color: white;
    }



    .container-fluid .table-wrap {

        /* margin: 20px auto; */
        margin-top: 80px;
        overflow-x: auto
    }

    .container .table-wrap::-webkit-scrollbar {
        height: 5px;
    }

    .container .table-wrap::-webkit-scrollbar-thumb {
        border-radius: 5px;
        background-image: linear-gradient(to right, #5D7ECD, #0C91E6);
    }


    /* .table tbody td input[type="checkbox"]:hover {
        background-color: #ddd;
    } */

    .table tbody td {
        padding: 30px;
        margin: 0;
        font-size: 14.5px;
        font-weight: 600;
    }

    .table tbody td .fa-times {
        color: #D32F2F;
    }


    .text-muted {
        font-size: 12.5px;
    }


    @media(min-width: 992px) {
        .container .table-wrap {
            overflow: hidden;
        }
    }

    .ale {
        position: absolute;
        top: 30px;
        right: 50px;
    }
</style>
<?php include("seller_nave.php") ?>
<?php
if (isset($_SESSION['order_in'])) {
?>

    <div class="ale">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Alert!</strong> <?php echo $_SESSION['order_in'] ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>


    <Script>
        setTimeout("", 5000);
    </Script>
<?php
    unset($_SESSION['order_in']);
}
?>
<?php
if (isset($_SESSION['order_add'])) {
?>

    <div class="ale">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Alert!</strong> <?php echo $_SESSION['order_add'] ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>


    <Script>
        setTimeout("", 5000);
    </Script>
<?php
    unset($_SESSION['order_add']);
}
?>

<div class="container-fluid">
    <div class="table-wrap">
        <div style="text-align: center;">
            <h2><u>Undelivered Order</u></h2>
        </div>
        <table class="table table-responsive table-borderless" style="text-align: center;">

            <thead>
                <th>&nbsp;</th>
                <th>Name </th>
                <th>Email</th>
                <th>Location</th>
                <th>Product Name</th>
                <th> Quantity</th>
                <th>Price</th>
                <th>Status</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?php
                $seller_id = $_SESSION['seller_id'];
                $date = date('Y/m/d');
                $sel = "SELECT oders.* FROM Oders INNER JOIN product ON Oders.product_id = product.product_id WHERE product.seller_id='$seller_id'";
                $rel = mysqli_query($con, $sel);
                ?>
                <tr>
                    <td colspan="8" style="text-align: start;"> <a href="seller_add_order.php?path=<?php echo $location ?>"><button class="btn btn-secondary ">Add Order</button></a> </td>
                </tr>
                <?php
                while ($order = mysqli_fetch_array($rel)) {
                    $select_product = "SELECT * FROM `product` WHERE Product_Id='$order[1]'";
                    $product_info = mysqli_fetch_array(mysqli_query($con, $select_product));
                    $select_user = "SELECT * FROM `registration` WHERE User_id='$order[5]'";
                    $user_info = mysqli_fetch_array(mysqli_query($con, $select_user));
                    if ($order[4] > $date && $order[6]=="Active") {
                ?>
                        <tr class="align-middle alert border-bottom" role="alert">

                            <td class="text-center">
                                <img class="pic" src="../image/user_image/<?php echo $user_info[6] ?>" alt="">
                            </td>
                            <td>
                                <?php echo $user_info[0] ?>
                            </td>
                            <td>
                                <?php echo $user_info[1] ?>
                            </td>
                            <td>
                                <?php echo $user_info[5] . ',' . $user_info[4] ?>
                            </td>
                            <td class="d-">
                                <div>
                                    <p class="m-0 fw-bold"><?php echo $product_info[1] ?></p>
                                    <p class="m-0 text-muted"> BY <?php echo $product_info[8] ?></p>
                                </div>
                            </td>
                            <td><?php echo $order[2] ?> </td>
                            <td>
                                <div>
                                    <p class="m-0 fw-bold">Rs <?php echo $product_info[2] ?></p>
                                    <p class="m-0 text-muted">For each</p>
                                </div>


                            </td>
                            <td>
                                <?php
                                $date = date('Y/m/d');
                                if ($date > $order[4]) {
                                    echo "Delivered";
                                } else {
                                    echo "Yet to deliver";
                                }
                                ?>
                            </td>
                            <!-- <td>
                            <div class="btn">
                                <a href="edit_product.php?product_id="><button class="btn btn-danger">Edit</button></a>
                            </div>
                        </td> -->
                            <td>
                                <?php
                                if ($order[6] == "Active") {
                                ?>
                                    <div class="btn">
                                        <a href="seller_cancle_order.php?order_id=<?php echo $order[0] ?> &&path=<?php echo $location ?>"><button class="btn btn-danger">Cancle</button></a>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="btn">
                                        <a href="seller_active_order.php?order_id=<?php echo $order[0] ?> &&path=<?php echo $location ?>"><button class="btn btn-danger">Reorder</button></a>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                            </td>
                        </tr>
                    <?php
                }
                    ?>

            </tbody>
        </table>
    </div>
</div>