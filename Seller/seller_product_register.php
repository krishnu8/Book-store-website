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

    .image {
        position: absolute;
        top: 80px;
    }

    .image img {
        height: 50px;
        width: 170px;
        /* position: absolute; */
        border-radius: 10px;

    }

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
    <div class="con">
        <div class="image">
            <img src="../image/Book1.png" alt="Image Not avilable">
        </div>
        <form action="" method="post" class="form" onsubmit="return check1()">
            <div class="input">
                <p class='font'>Product Name</p>
                <input id="name" name="name" type="text" placeholder="Enter Book Name" required >
            </div>
            <div class="input">
                <p class='font'>Auther</p>
                <input id="auther" name="number" type="text" placeholder="Enter Auther Name"  required>
            </div>
            <div class="input">
                <p class='font'>Category</p>
                <select name="" id="" style="width:200px; text-align: center; background-color: transparent; color: white;">
                    <option value=""></option>
                    <option value="" style=" color: black;">Math</option>
                    <option value=""  style=" color: black;">physic</option>
                    <option value=""  style=" color: black;">Science</option>
                    <option value=""  style=" color: black;">social</option>
                </select>
            </div>
            <div class="input">
                <p class='font'>Quantity</p>
                <input type="number" id="quantity" placeholder="Number of Book"  required>
            </div>
            <div class="input">
                <p class='font'>Price</p>
                <input id="price"  type="number" placeholder="Enter Price of each Book"  required>
            </div>

            <div class="input">
                <p class='font'>Description</p>
                <textarea name="" id="description" cols="39" rows="1" style="background-color: transparent; color: white;" placeholder="Something About book" required ></textarea>
            </div>
            <div class="input">
                <p class='font'>product Image</p>
                <input type="file" name="" id=""  required>
            </div>
            <input type="submit" value="Register" class="btn1" name="regi">
        </form>
    </div>
</body>
</html>
<script>
    function check1(){
        var product_name=document.getElementById('name').value;
        var auther=document.getElementById('auther').value;
        var quantity=document.getElementById('quantity').value;
        var price=document.getElementById('price').value;
        var namecheck = /^[a-zA-Z]$/;
        var numbercheck = /^[0-9]{10}$/;
        if (namecheck.test(product_name)){
            P='true';
        }else{
            alert("Product Name cannot contain number");
            P='false';
        }
        if (namecheck.test(auther)){
            A='true';
        }else{
            alert("Auther name cannot contain number");
            A='false';
        }
        if (numbercheck.test(quantity)){
            Q='true';
        }else{
            alert('Quantity cannot contain character');
            Q='false';
        }
        if (numbercheck.test(price)){
            PR='true';
        }else{
            alert("Price cannot contain character or it cannot contain 5 digit");
            PR='false';
        }
        
        if(P=='false'||A=='false'||Q=='false'||PR=='false'){
            return false;
        }else{
            return true;
        }
    }
</script>