<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background-image: url(../image/book111.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .con {
        margin-top: 25px;
        background-color: rgba(0, 0, 0, 0.7);
        height: 450px;
        width: 370px;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .font {
        color: #fff;
        font-size: 23px;
        font-weight: bold;
    }

    .input::after {
        content: '';
        width: 300px;
        height: 3px;
        background: #ffffff;
        display: block;
        margin: 2px;
        margin-left: -0px;
    }

    input {
        color: #fff;
        border: 0;
        height: 30px;
        width: 300px;
        border-radius: 5px;
        background-color: rgba(0, 0, 0, 0);
    }

    .btn1 {
        background-color: transparent;
        border-color: blue;
        font-weight: bold;
        font-size: 20px;
        border-radius: 10px;
        height: 40px;
        width: 100px;
        background-color: purple;
        margin-top: 30px;
        margin-left: 100px;
    }

    .btn1:hover {
        background-color: blue;
    }

    .btn {
        background-color: transparent;
        border-color: blue;
        font-weight: bold;
        font-size: 20px;
        border-radius: 10px;
        /* height: 40px; */
        width: 150px;
        background-color: purple;
        text-align: center;
        color: white;
    }

    a {
        text-decoration: none;
        color: white;
    }

    .text {
        font-size: 20px;
        color: white;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    /* .image {
        position: absolute;
        top: 80px;
    }

    .image img {
        height: 50px;
        width: 170px;
        position: absolute;
        border-radius: 10px;

    } */

    p.font {
        margin: 0;
    }

    .ale {
        position: absolute;
        top: 30px;
        right: 50px;
    }
</style>
<html>

<body>
    <?php
    include_once("seller_nave.php");
    ?>
    <div class="row">
            <div class="col-sm-12">
                <h4><b>Add Order</b></h4>
            </div>
        </div>
    <div class="con">
        <form action="" method="post" class="form" onsubmit="return check()" enctype="multipart/form-data">
          
            <div class="input">
                <p class='font'>Product Id</p>
                <input id="product_id" name="product_id" type="text" placeholder="Enter Product Id"  >
            </div>
           
            <div class="input">
                <p class='font'>User Id</p>
                <input type="text" name="User_id" id="User_id" placeholder="Enter User Id"  >
            </div>
            <div class="input">
                <p class='font'>Quantity</p>
                <input id="quantity" name="quantity" type="text" placeholder="Enter Quantity"  >
            </div>
            <input type="submit" value="Add" class="btn1" name="btn">
        </form> <br>
        <button style="background-color: rgb(117, 14, 143);width: 150px;height:35px;font-size: 20px;border: 0;border-radius: 10px; "><a href="Seller_orders.php" style="color:#fff;"><b>Return BAck</b></a></button>

    </div>
</body>

</html>
<script>
    function check() {
        var product_id = document.getElementById('product_id').value;
        var User_id = document.getElementById('User_id').value;
        var quantity = document.getElementById('quantity').value;

        var numbercheck = /^\d{1,3}(?:\.\d{1,5})?$/;
        
        
        if (numbercheck.test(product_id)) {
            P = 'true';
        } else {
            alert("Price of product must be less than 1k");
            P = 'false';
        }
        if (numbercheck.test(User_id)) {
            U = 'true';
        } else {
            alert("Price of product must be less than 1k");
            U = 'false';
        }
        if (numbercheck.test(quantity)) {
            Q = 'true';
        } else {
            alert("Price of product must be less than 1k");
            Q = 'false';
        }

        if (P == 'false' || U == 'false' || Q == 'false') {
            return false;
        } else {
            return true;
        }
    }
</script>
<?php
if(isset($_POST['btn'])){
    $product_id=@$_POST['product_id'];
    $User_id=@$_POST['User_id'];
    $quantity=@$_POST['quantity'];
    $path=@$_GET['path'];
    $sel="SELECT * FROM `registration` WHERE User_id='$User_id'";
    $userow=mysqli_num_rows(mysqli_query($con,$sel));
    $sel="SELECT * FROM `product` WHERE Product_Id='$product_id'";
    $prorow=mysqli_num_rows(mysqli_query($con,$sel));
    if($userow==1 && $prorow==1){

        $order_date = date('Y/m/d');
        $Deliver_date=date('Y/m/d', strtotime(date('Y/m/d'). ' + 2 days'));
        $order="INSERT INTO `oders`(`Product_Id`, `Quantity`, `Order_date`, `Deliver_date`, `User_id`, `Status`) VALUES ('$product_id','$quantity','$order_date','$Deliver_date','$User_id','Active')";
        if(mysqli_query($con,$order)){
            $product_update="UPDATE `product` SET`Renaining_Quantity`=Renaining_Quantity-$quantity WHERE Product_Id='$product_id'";
            mysqli_query($con,$product_update);
        $_SESSION["order_add"]="Your Order has been confirmed";
        }else{
        $_SESSION["order_add"]="Something Went Wrong Please try Again";
        }
        ?>
        <script>
           window.location.href="<?php echo $path ?>";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Enter valid Product_id and user_id");
        </script>
        <?php
    }
   
}
?>
