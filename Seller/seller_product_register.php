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
        height: 580px;
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
                <h4><b>Product Register</b></h4>
            </div>
        </div>
    <div class="con">
        <form action="" method="post" class="form" onsubmit="return check()" enctype="multipart/form-data">
            <div class="input">
                <p class='font'>Product Name</p>
                <input id="name" name="book" type="text" placeholder="Enter Book Name"  required>
            </div>
            <div class="input">
                <p class='font'>Auther</p>
                <input id="auther" name="auther" type="text" placeholder="Enter Auther Name"  required>
            </div>
            <div class="input">
                <p class='font'>Category</p>
                <select name="select" id="" style="width:200px; text-align: center; background-color: transparent; color: white;">
                    <option value="Adventure stories" style="color: black;">Adventure stories</option>
                    <option value="Classics" style="color: black;">Classics</option>
                    <option value="Crime" style="color: black;">Crime</option>
                    <option value="Horror" style="color: black;">Horror</option>
                    <option value="Humour and satire" style="color: black;">Humour and satire</option>
                    <option value="Mystery" style="color: black;">Mystery</option>
                    <option value="Literary fiction" style="color: black;">fiction</option>
                </select>
            </div>
            <div class="input">
                <p class='font'>Quantity</p>
                <input type="number" name="quantity" id="quantity" placeholder="Number of Book"  required>
            </div>
            <div class="input">
                <p class='font'>Price</p>
                <input id="price" name="price" type="number" placeholder="Enter Price of each Book" required >
            </div>

            <div class="input">
                <p class='font'>Description</p>
                <textarea name="des" id="description" cols="39" rows="1" style="background-color: transparent; color: white;" placeholder="Something About book" required ></textarea>
            </div>
            <div class="input">
                <p class='font'>product Image</p>
                <input type="file" name="photo" id="" required >
            </div>
            <input type="submit" value="Register" class="btn1" name="btn">
        </form>
    </div>
</body>

</html>
<script>
    function check() {
        var product_name = document.getElementById('name').value;
        var auther = document.getElementById('auther').value;
        var quantity = document.getElementById('quantity').value;
        var price = document.getElementById('price').value;
        var namecheck = /^[A-Za-z\s]*$/;
        var numbercheck = /^\d{1,3}(?:\.\d{1,5})?$/;
        // var ho=namecheck.test(product_name);
        // alert(ho);
        
        if (namecheck.test(product_name)) {
            P = 'true';
        } else {
            alert("Product Name cannot contain number");
            P = 'false';
        }
        if (namecheck.test(auther)) {
            A = 'true';
        } else {
            alert("Auther name cannot contain number");
            A = 'false';
        }
        if (numbercheck.test(quantity)) {
            Q = 'true';
        } else {
            alert('Quantity must be less than 1k');
            Q = 'false';
        }
        if (numbercheck.test(price)) {
            PR = 'true';
        } else {
            alert("Price of product must be less than 1k");
            PR = 'false';
        }

        if (P == 'false' || A == 'false' || Q == 'false' || PR == 'false') {
            return false;
        } else {
            return true;
        }
    }
</script>
<?php
if(isset($_POST['btn'])){
    $Book=@$_POST['book'];
    $Auther=@$_POST['auther'];
    $select=@$_POST['select'];
    $description =@$_POST['des'];
    $price=@$_POST['price'];
    $quantity=@$_POST['quantity'];
    $file_name = @$_FILES['photo']['name'];
    $file_temp = @$_FILES['photo']['tmp_name'];
    $target_dir = "../image/Book_image/";
    $target_file = $target_dir . basename($file_name);
    $seller_id=$_SESSION['seller_id'];
    $update="INSERT INTO `product`(`Product_Name`, `Price`, `Product_Image`, `Category`, `Description`, `Auther`, `seller_id`, `Total_Quantity`, `Renaining_Quantity`) VALUES ('$Book','$price','$file_name','$select','$description','$Auther',$seller_id,'$quantity','$quantity')";
    if(mysqli_query($con,$update)){
    if(move_uploaded_file($file_temp, $target_file)){
        $_SESSION['product_upp']="Product Added to the Book Chor";
    }else{
        $_SESSION['product_upp']="Fail to Add  the product";
    }
    $get="SELECT `Product_Id` FROM `product` WHERE Product_Name='$Book' AND Category='$select' AND Product_Image='$file_name'";
    $data=mysqli_fetch_array(mysqli_query($con,$get));
    $date = date('Y/m/d');
    $insert="INSERT INTO `notification`( `Message`, `Product_id`, `Date`) VALUES ('New product Arrived','$data[0]','$date')";
    mysqli_query($con,$insert);
    
    }
    ?>
    <script>
     window.location.href="seller_product.php";
    </script>
    <?php
}
?>
