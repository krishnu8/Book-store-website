<head>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<style>
    /* *{
      /* background-color: violet;
      margin-left: 20%;
    } */

    .insert_form{
      
        /* display: flex; */
        text-align: center;
        /* justify-content: center; */
        width: 480px;
        border: 15px solid #505050;
        padding: 40px;
        margin: 20px;
        border-radius: 20px;
        margin-left: 35%;
        background: #505050;
        color: gainsboro;
    
    }
    form .input_class{
      background-color: #E7E6DD;
      margin-left: 50%;
      margin-top: -35px;
      font-size: 18px;
      border-radius: 5px;
    }

    form h2{
        width: 350px;
        color: black;
        margin-top: -10%;
    } 

    form h4{
      margin-left: -15%;
      width: 70%;
      color: black;
      font-size: 20px;
      
    }

    form .btn_class{
     width:200px; 
     height:32px; 
     outline:none;  
     font-weight:bold; 
     border:1px solid #27a465; 
     text-shadow: 0px 0.5px 0.5px #fff;	
     border-radius: 10px; 
     font-weight: 600; 
     color: green; 
     letter-spacing: 1px; 
     font-size:14px; 
     -webkit-transition: 1s; 
     -moz-transition: 1s; 
     transition: 1s;
    }
    
    form .btn_class:hover {
     background-color:green; 
     outline:none;  
     border-radius: 10px; 
     color:#f1f1f1; 
     border:1px solid #f1f1f1;
    } 
    .insert_form h5, p {
      width: 100px;
      color: steelblue;
    }
    .insert_form h5{
      margin-left: 45%;
      margin-top: -17%;
    }
    .insert_form p{
      font-size: 20;
      width: 80px;
      margin-left: 10%;
    }

    .insert_form .input-group-text{
      height: 35px;
      margin-left: 25px;
      border-radius: 10px;
    }

</style>

<?php
include_once("header_nav.php")
?>

<form action="User_insert_form.php" method="post" enctype="multipart/form-data" class="insert_form">
    
<h2>Enter Your Details Here.</h2>
<br>
<h4>Enter User Id:</h4><input type="number" class="input_class" name="uid" id="uid1" placeholder="Enter your User Id here" required /> 
<br><br>
<h4>Your full Name:</h4><input type="text" class="input_class" name="fln" id="fn1" placeholder="Enter your full name here" required /> 
<br><br>
<h4>your Date Of Birth:</h4><input type="date" class="input_class" name="dob" id="dob1" placeholder="Enter your DOB hare" required /> 
<br><br>
<h4 style="width: 75%; margin-left: -15%;">Select the Gender::</h4>
<select name="gen" id="gen1" style="margin-left: 60%; margin-top: -8%; border-radius: 10px; background-color: #E7E6DD;">
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Custom">Custom</option>
</select>
<br><br>
<h4 style="width: 70%; margin-left: -15%;">Select Your Role::</h4>
<select name="rol" id="rol1" style="margin-left: 60%; margin-top: -8%; background-color: #E7E6DD; border-radius: 10px;">
  <option value="user">User</option>
  <option value="admin">Admin</option>
</select>
<br><br>
<h4>Enter your City Name:</h4><input type="text" class="input_class" name="city" id="city1" placeholder="Enter City Name hare" required />
<br><br>
<h4>Enter Your Email-Id:</h4><input type="email" class="input_class" name="em" id="em1" placeholder="Enter your email-Id" required />
<br><br>
<h4>Enter Your Mobile_NO:</h4><input type="number" class="input_class" name="mn" id="mn1" placeholder="Enter your Mobile_NO" required />
<br><br>
<h4>Enter Your password:</h4><input type="password" class="input_class" name="pwd" id="pwd1" placeholder="Enter your password" required />
<br><br> 
<h4>Your Stay PinCOde:</h4><input type="number" class="input_class" name="pin" id="pin1" placeholder="Enter Pin code here" required />
<br><br>  
<h4>Select Profile-Pic:</h4><input type="file" name="pic" id="pic1" style="color: white;" required />
<br><br>
<input type="submit" name="btn" value="Data Register" class="btn_class" required /> 
    
</form>

<?php

  include_once("connection.php");

  $uid=@$_POST['uid'];
  $fln=@$_POST['fln'];
  $dob=@$_POST['dob'];
  $gen=@$_POST['gen'];
  $rol=@$_POST['rol'];
  $city=@$_POST['city'];
  $em=@$_POST['em'];
  $mn=@$_POST['mn'];
  $pwd=@$_POST['pwd'];
  $pin=@$_POST['pin'];
  $pic=@$_FILES['pic']['name'];


if(isset($_POST['btn']))
{
  $q="insert into register values('$uid','$fln','$dob','$gen','$rol','$city','$em','$mn','$pwd','$pin','$pic')";
    
   if( mysqli_query($con,$q))
   {
    move_uploaded_file($_FILES['pic']['tmp_name'],'uploads/'.$pic);
    echo "<h2 style='color: green;'>"."Registeration will be completed"."</h2>";
    echo "<h3>". "Your files are uploaded to the server"."</h3>";
?>
   <script>
  alert("Registration SuccessFull");
  window.location = "Fetch_users_data.php";
  </script>   

   <?php
   }
   else{
    echo "<h2 style='color: red;'>"."ERROOR Registeration not  complete"."</h2>";
    echo "<h3 style='color: red;'>"."Your file was can not upload"."</h3>";

   }

}

?> 

