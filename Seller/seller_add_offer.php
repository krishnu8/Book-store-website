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
                <h4><b>Add Offer</b></h4>
            </div>
        </div>
    <div class="con">
        <form action="" method="post" class="form" enctype="multipart/form-data">
            <div class="input">
                <p class='font'>Cupon</p>
                <input id="name" name="Cupon" type="text" placeholder="Enter Cupon Code"  required>
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
                <p class='font'>Discount</p>
                <input type="number" name="Discount" id="quantity" placeholder="Enter Discount percent"  required>
            </div>
            <div class="input">
                <p class='font'>Min Price</p>
                <input id="price" name="price" type="number" placeholder="Enter minimum price to be valid for offer" required >
            </div>
            <div class="input">
                <p class='font'>Start Date</p>
                <input id="auther" name="Start" type="date" placeholder="Enter Auther Name"  required>
            </div>
            <div class="input">
                <p class='font'>End Date</p>
                <input type="date" name="End">
            </div>
            <div class="input">
                <p class='font'>Offer Image</p>
                <input type="file" name="photo" id="" required >
            </div>
            <input type="submit" value="Register" class="btn1" name="btn">
        </form>
    </div>
</body>

</html>
<?php
if(isset($_POST['btn'])){
    $Cupon=@$_POST['Cupon'];
    $Discount=@$_POST['Discount'];
    $category=@$_POST['select'];
    $min_price=@$_POST['price'];
    $Start=@$_POST['Start'];
    $End=@$_POST['End'];
    $file_name = @$_FILES['photo']['name'];
    $file_temp = @$_FILES['photo']['tmp_name'];
    $target_dir = "../image/offer_image/";
    $target_file = $target_dir . basename($file_name);

    $seller_id=$_SESSION['seller_id'];
    $update="INSERT INTO `offer`( `coupon`, `discount`, `category`, `Start_date`, `End_date`, `Offer_image`, `minimum_price`, `seller_id`) VALUES ('$Cupon','$Discount','$category','$Start','$End','$file_name','$min_price','$seller_id')";
   
    if(mysqli_query($con,$update)){
    if(move_uploaded_file($file_temp, $target_file)){
       ?>
       <script>
        alert("Offer Added to database");
       </script>
       <?php
    }else{
        ?>
       <script>
        alert("Something Went Wrong try again!");
       </script>
       <?php
    }    
    }
    ?>
    <script>
     window.location.href="seller_offer.php";
    </script>
    <?php
}
?>
