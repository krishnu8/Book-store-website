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
        padding:30px;
        font-size: 14px;
        color: white;
    }

    .table tbody td input[type="checkbox"] {
        appearance: none;
        width: 20px;
        height: 20px;
        background-color: #eee;
        position: relative;
        border-radius: 3px;
        cursor: pointer;
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

    .table>:not(caption)>*>* {
        padding: 2rem 0.5rem;
    }

    .input {
        width: 30px;
        height: 30px;
        color: black;
        font-weight: 600;
        outline: none;
        padding: 8px;
    }

    ::placeholder {
        color: black;
        font-weight: 600;
    }

    .table tbody td input[type="checkbox"]:after {
        position: absolute;
        width: 100%;
        height: 100%;
        font-family: "Font Awesome 5 Free";
        font-weight: 600;
        content: "\f00c";
        color: #fff;
        font-size: 15px;
        display: none
    }

    .table tbody td input[type="checkbox"]:checked,
    .table tbody td input[type="checkbox"]:checked:hover {
        background-color: #21cf95;
    }

    .table tbody td input[type="checkbox"]:checked::after {
        display: flex;
        align-items: center;
        justify-content: center;
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

    .table tbody tr td:nth-of-type(3) {
        min-width: 320px;
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
        if (isset($_SESSION['product_upp'])) {
        ?>

            <div class="ale">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Successfully!</strong> <?php echo $_SESSION['product_upp'] ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


            <Script>
                setTimeout("", 5000);
            </Script>
        <?php
            unset($_SESSION['product_upp']);
        }
        if (isset($_SESSION['update'])) {
            ?>
    
                <div class="ale">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Successfully!</strong> <?php echo $_SESSION['update'] ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
    
    
                <Script>
                    setTimeout("", 5000);
                </Script>
            <?php
                unset($_SESSION['update']);
            }
?>

<div class="container-fluid">
    <div class="table-wrap">
        <div style="text-align: center;">
            <h2><u>Out of stock</u></h2>
        </div>
        <table class="table table-responsive table-borderless" style="text-align: center;">

            <thead>
                <th>&nbsp;</th>
                <th>Product</th>
                <th>Category</th>
                <!-- <th>Description</th> -->
                <th>Price</th>
                <th>Total Quantity</th>
                <th> Remaining Quantity</th>
                <th colspan="2"></th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
                <tr>
                    <td colspan="8" style="text-align: start;"> <a href="seller_product_register.php"><button class="btn btn-secondary ">Add product</button></a> </td>
                </tr>
                <?php
                $id = $_SESSION['seller_id'];
                // $id=10;
                $select = "SELECT * FROM `product` WHERE seller_id='$id' and status='Active' and  `Renaining_Quantity`='0'";
                $result=mysqli_query($con, $select);
                while ($product = mysqli_fetch_array($result)) {
                ?>
                    <tr class="align-middle alert border-bottom" role="alert">

                        <td class="text-center">
                            <img class="pic" src="../image/Book_image/<?php echo $product[3] ?>" alt="">
                        </td>
                        <td>
                            <div>
                                <p class="m-0 fw-bold"><?php echo $product[1] ?></p>
                                <p class="m-0 text-muted"> BY <?php echo $product[8] ?></p>
                            </div>
                        </td>
                        <td>
                        <?php echo $product[6] ?>
                        </td>
                        <!-- <td>
                           <p style="height: 75px; width: 200px; overflow: auto;">
                                ?php echo $product[7] ?>
                            </p>
                        </td> -->
                        <td>
                            <div class="fw-600">RS.<?php echo $product[2] ?></div>
                        </td>
                        <td class="d-">
                        <?php echo $product[4] ?>
                        </td>
                        <td class="d-">
                        <?php echo $product[5] ?>
                        </td>
                        <td>
                            <div class="btn">
                                <a href="edit_product.php?product_id=<?php echo $product[0]?>&&path=<?php echo $location ?>"><button class="btn btn-danger">Edit</button></a>
                            </div>
                        </td>
                        <td>
                            <div class="btn">
                                <a href="Delete_product.php?product_id=<?php echo $product[0] ?>&&path=<?php echo $location ?>"><button class="btn btn-danger">Delete</button></a>
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