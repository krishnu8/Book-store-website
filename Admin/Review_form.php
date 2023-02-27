
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    
<style>
    .Form{
        width: 400px;
        margin: 10px;
        padding: 10px;
        border: 10px solid #505050;
        background-color: #505050;
        margin-left: 35%;
        border-radius: 20px;
        margin-top: 3%;
        text-align: center;
        color: gainsboro;
    }
    form .input{
        border-radius: 10px;
        font-size: 17px;
    }
    form h1{
        color: black;
    }
    form .btn1{
        width: 60%;
    }
</style>

</head>

<?php
include_once("header_nav.php")
?>

<form action="Review_form.php" method="post" class="Form">
    <h1>Give Feedback</h1>
    <br>
    <h4>Product-Id:</h4><input type="number" class="input" name="pd" id="pd1" placeholder="Product Id" required/>
    <br>
    <h4>User Id:</h4><input type="number" class="input" name="uid" id="uid1" placeholder="User Id here" required/>
    <br>
    <h4>Review:</h4><input type="text" class="input" name="rvw" id="rvw1" placeholder="Review here" required/>
    <br>
    <h4>Ratting:</h4><input type="text" class="input" name="rt" id="rt1" placeholder="Rating here" required/>
    <br><br>
    <input type="submit" name="btn" id="btn1" value="submit" class="btn1 btn btn-success" />
</form>
