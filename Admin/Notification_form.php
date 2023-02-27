<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    

<style>

.Form_class{
    width: 400px;
    text-align: center;
    padding: 10px;
    margin: 10px;
    border: 10px solid 	#505050;
    background-color: 	#505050;
    margin-left: 35%;
    color: white;
    border-radius: 20px;
}

form .input{
    border-radius: 10px;
    margin-top: 10px;
    margin-left: 15px;
}

form .btn1{
    width: 30%;
}
</style>
</head>

<?php
include_once("header_nav.php")
?>


<form action="Notification_form.php" method="post" class="Form_class">
    <h2 style="color: green;">NOTIFICATIONS</h2>

    Product Id: <input type="number" name="pd" id="pd1" class="input" placeholder="product id" required/>
    <br><br>
    User Id: <input type="number" name="uid" id="uid1" class="input" placeholder="User id here" required/>
    <br><br>
    massage: <input type="text" name="msg" id="msg1" class="input" placeholder="Massage here" required/>
    <br><br>

    <input type="submit" name="btn" value="Submit" id="btn1" class="btn1 btn btn-success" required/>

</form>