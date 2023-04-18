<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$location = $components[3];
?>
<title>Offers</title>
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
        width: 80px;
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
        padding: 20px;
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
<?php
if (isset($_SESSION['Deliver_order'])) {
?>

    <div class="ale">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Alert!</strong> <?php echo $_SESSION['Deliver_order'] ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>


    <Script>
        setTimeout("", 5000);
    </Script>
<?php
    unset($_SESSION['Deliver_order']);
}
?>
<div class="container-fluid">
    <div class="table-wrap">
        <div style="text-align: center;">
            <h2><u>Offers</u></h2>
        </div>
        <table class="table table-responsive table-borderless" style="text-align: center;">

            <thead>
                <th style="width:1%;">&nbsp;</th>
                <th>Cupon </th>
                <th>Discount %</th>
                <th>Category</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Min Price</th>
                <th colspan="2">Operator</th>
            </thead>
            <tbody>
                <tr>
                    <td colspan="8" style="text-align: start;"> <a href="seller_add_offer.php"><button class="btn btn-secondary ">Add offer</button></a> </td>
                </tr>
                <?php
                $seller_id = $_SESSION['seller_id'];
                $sel = "SELECT * FROM `offer` WHERE seller_id='$seller_id'";
                $rel = mysqli_query($con, $sel);
                while ($offer = mysqli_fetch_array($rel)) {
                ?>
                    <tr>
                        <td><img src="../image/offer_image/<?php echo $offer[6] ?>" alt="no image found" height="50px" width="100px"></td>
                        <td><?php echo $offer[1] ?></td>
                        <td><?php echo $offer[2] ?></td>
                        <td><?php echo $offer[3] ?></td>
                        <td><?php echo $offer[4] ?></td>
                        <td><?php echo $offer[5] ?></td>
                        <td><?php echo $offer[7] ?></td>
                        <td>
                            <div class="btn">
                                <a href="delete_offer.php?offer_id=<?php echo $offer[0] ?>"><button class="btn btn-danger">Delete</button></a>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>