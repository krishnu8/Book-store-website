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

    .table tbody td input[type="checkbox"]:hover {
        background-color: #ddd;
    }

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
</style>
<?php include("seller_nave.php") ?>
<div class="container-fluid">

    <div class="table-wrap">
        <div style="text-align: center;">
            <h2><u>MY Product</u></h2>
        </div>
        <table class="table table-responsive table-borderless">

            <thead>
                <th>&nbsp;</th>
                <th>Product</th>
                <th>Category</th>
                <th>Price</th>
                <th>Total Quantity</th>
                <th> Remaining Quantity</th>
                <th colspan="2"></th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
            <tr>
                <td colspan="8"> <a href="seller_product_register.php"><button class="btn btn-secondary ">Add product</button></a> </td>
            </tr>
                <tr class="align-middle alert border-bottom" role="alert">

                    <td class="text-center">
                        <img class="pic" src="../image/Book_image/book1.jpg" alt="">
                    </td>
                    <td>
                        <div>
                            <p class="m-0 fw-bold">Anand Math</p>
                            <p class="m-0 text-muted"> BY Bankim Chandra Chatterjee</p>
                        </div>
                    </td>
                    <td>
                        Fairy tales
                    </td>
                    <td>
                        <div class="fw-600">RS.544.99</div>
                    </td>
                    <td class="d-">
                        12
                    </td>
                    <td class="d-">
                        7
                    </td>
                    <td>
                        <div class="btn">
                            <button class="btn btn-danger">Edit</button>
                        </div>
                    </td>
                    <td>
                        <div class="btn">
                            <button class="btn btn-danger">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>