
<style>

    .Form_class
    {
      width: 30%;
      text-align: center;
      margin: 10px;
      padding: 10px;
      border: 10px solid 	#505050;
      margin-left: 35%;
      background-color: 	#505050;
      border-radius: 20px;
      color: gainsboro;      
    }
    form h4{
      color: black;
      width: 55%;
    }

    form .input_class{
      color: #fff;
      /* background-color: black; */
      font-size: 17px;
      border-radius: 5px;
      margin-left: 52%;
      margin-top: -8.7%;
    }
   
    form h1{
        color: black;
    }

    form .btn_class{
     width:80px; 
     height:32px; 
     outline:none;  
     font-weight:bold; 
     border:1px solid #27a465; 
     text-shadow: 0px 0.5px 0.5px #fff;	
     border-radius: 5px; 
     font-weight: 600; 
     color: red; 
     letter-spacing: 1px; 
     font-size:14px; 
     -webkit-transition: 1s; 
     -moz-transition: 1s; 
     transition: 1s;
    }
    
    form .btn_class:hover {
     background-color:#27a465; 
     outline:none;  
     border-radius: 5px; 
     color:#f1f1f1; 
     border:1px solid #f1f1f1;
    } 


</style>

 <?php
 include_once("header_nav.php")
?>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<form action="Admin_data_insert.php" method="post" enctype="multipart/form-data" class="Form_class">
    
<h1>Enter Your Details !</h1>
<br>
<h4>Enter Admin Id:</h4><input type="text" class="input_class" name="idn" id="idn1" placeholder="Enter your Admin-Id Number" /> 
<br><br>
<h4>Your full Name:</h4><input type="text" class="input_class" name="fln" id="fn1" placeholder="Enter your full name here" required/> 
<br><br>
<h4>Enter your Branch:</h4><input type="text" class="input_class" name="br" id="br1" placeholder="Enter your branch name" required/> 
<br><br>
<h4>Year Experience:</h4><input type="number" class="input_class" name="exp" id="exp1" placeholder="Enter your Experience " required/> 
<br><br>
<h4> your Date Of Birth:</h4><input type="date" class="input_class" name="dob" id="dob1" placeholder="Enter your DOB hare" required/> 
<br><br>
<h4>Select the Gender::</h4><select class="input_class" name="gen" id="gen1" style="width: 35%; font-size: 120%;">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
<br><br>
<h4>Enter Adderess:</h4><input type="text" class="input_class" name="ad" id="ad1" placeholder="Enter your address hare" required/>
<br><br>
<h4>Enter Email-Id:</h4><input type="email" class="input_class" name="em" id="em1" placeholder="Enter your email-Id" required/>
<br><br>
<h4>Enter Mobile_NO:</h4><input type="number" class="input_class" name="mn" id="mn1" placeholder="Enter your Mobile_NO" required/>
<br><br>
<h4>Enter password:</h4><input type="password" class="input_class" name="pwd" id="pwd1" placeholder="Enter your password" required/>
<br><br> 
<h4>Password/Card NO:</h4><input type="number" class="input_class" name="cno" id="cno1" placeholder="Enter Password or card NO:" required/>  
<br><br>
<h4>Select Profile-Pic:</h4><input type="file" name="pic" id="pic1" required/>
<br><br>
<input type="submit" name="btn" value="Register" class="btn_class" required/> 
    
</form>

<?php

include_once("connection1.php");
  $idn=@$_POST['idn'];
  $fln=@$_POST['fln'];
  $br=@$_POST['br'];
  $exp=@$_POST['epx'];
  $dob=@$_POST['dob'];
  $gen=@$_POST['gen'];
  $ad=@$_POST['ad'];
  $em=@$_POST['em'];
  $mn=@$_POST['mn'];
  $pwd=@$_POST['pwd'];
  $cno=@$_POST['cno'];
  $pic=@$_FILES['pic']['name'];


if(isset($_POST['btn']))
{
  $q="insert into register values('$idn','$fln','$br','$exp','$dob','$gen','$ad','$em','$mn','$pwd','$cno','$pic')";
    
   if( mysqli_query($con,$q))
   {
    move_uploaded_file($_FILES['pic']['tmp_name'],'uploads/'.$pic);
    echo "<h2 style='color: green;'>"."Registeration will be completed"."</h2>";
    echo "<h3>". "Your files are uploaded to the server"."</h3>";
?>
   <script>
  alert("Registration SuccessFull");
  window.location = "fetch_admin_data.php";
  </script>   

   <?php
   }
   else{
    echo "<h2 style='color: red;'>"."ERROOR Registeration not  complete"."</h2>";
    echo "<h3 style='color: red;'>"."Your file was can not upload"."</h3>";

   }

}

?> 
