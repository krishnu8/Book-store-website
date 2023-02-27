

<head>
<link rel="stylesheet" href="css/bootstrap.css">
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<style>
    /* *{
      /* background-color: violet;
      margin-left: 20%;
    } */

    .login_form{
      
        /* display: flex; */
        text-align: center;
        /* justify-content: center; */
        width: 450px;
        height: 110%;
        border: 15px solid 	#505050;
        padding: 40px;
        margin: 20px;
        border-radius: 20px;
        margin-left: 37%;
        background-color: 	#505050;
    }

    form h3{
      margin-left: -15%;
      width: 130%;
        color: black;
        margin-top: -5%;
    } 

    form h4{
      margin-left: -10%;
        width: 60%;
      color: gainsboro;
      font-size: 20px;
    }

    form .btn_class{
     width:200px; 
     height:32px; 
     outline:none;  
     font-weight:bold; 
     border:1px solid #27a465; 
     text-shadow: 0px 0.5px 0.5px green;	
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
    form .input-group-text{
      background-color: #E7E6DD;
        margin-left: 45%;
        font-size: 15px;
        border-radius: 15px;
        margin-top: -11%;
    }
    .btn-success{
      margin-left: 43%;
      width: 11%;
      height: 5%;
      border-radius: 10px;
    }

</style>

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

?>


<form action="Edit_user_form.php" method="POST" enctype="multipart/form-data" class="login_form">
<h3>Updated your details here !</h3><br>
<h4>Your User Id:</h4><input type="number" value="<?php echo $uid?>" class="input-group-text"  name="uid" id="uid1" placeholder="You can't any change" readonly />
<br> 
<h4>Your full Name:</h4><input type="text" value="<?php echo $fln?>" class="input-group-text"  name="fln" id="fn12" placeholder="Enter your full name here"  required />
<br> 
<h4>Date Of Birth:</h4><input type="date" value="<?php echo $dob?>" class="input-group-text"  name="dob" id="dob1" placeholder="Enter your DOB hare"  required />
<br> 
<h4 style="width: 75%;">Select the Gender::</h4>
<select value="<?php echo $gen?>" name="gen" id="gen1" style="margin-left: 40%; width: 30%; margin-top: -13%; border-radius: 10px;
   background-color: gainsboro;">
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Custom">Custom</option>
</select>
<h4 style="width: 70%;">Select Your Role::</h4>
<select value="<?php echo $rol?>" name="rol" id="rol1" style="margin-left: 40%; width: 30%; margin-top: -10%; 
  background-color: gainsboro; border-radius: 10px;">
  <option value="user">User</option>
  <option value="admin">Admin</option>
</select><br><br>
<h4>Your City Name:</h4><input type="text" value="<?php echo $city?>" class="input-group-text" name="city" id="city1" placeholder="Enter City Name hare"  required />
<br>
<h4>Your Email-Id:</h4><input type="email" value="<?php echo $em?>" class="input-group-text" name="em" id="em1" placeholder="Enter your email-Id"  required />
<br>
<h4>Your Mobile_NO:</h4><input type="number" value="<?php echo $mn?>" class="input-group-text" name="mn" id="mn1" placeholder="Enter your Mobile_NO"  required />
<br>
<h4>Your password:</h4><input type="password" value="<?php echo $pwd?>" class="input-group-text" name="pwd" id="pwd1" placeholder="Enter your password"  required />
<br> 
<h4>Stay PinCOde:</h4><input type="number" value="<?php echo $pin?>"  class="input-group-text" ame="pin" id="pin1" placeholder="Enter Pin code here"  required />
<br>  
<h4>Select Profile-Pic:</h4><input type="file" name="pic" id="pic1" style="color: white;"  required />
<br><br>
    <input type="submit" value="Update Data" name="btn" id="btn1" class="btn_class" required />
    
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
$pic=@$_FILES['pic1']['name'];

if(isset($_POST['btn']))
{
   $q="UPDATE register SET `User_Name`='$fln',`Date_Of_Birth`='$dob',`Gender`='$gen',`Role`='$rol',`City`='$city',
   `Email_Id`='$em',`Mobile_No`='$mn',`Password`='$pwd',`PinCode`='$pin',`profile_Pic`='$pic' WHERE User_Id='$uid';";
   
   if(mysqli_query($con,$q))
   {
    move_uploaded_file($_FILES['pic']['name'],'uploads/'.$pic);
    echo '<script>alert("UPDATE COMPLETED")</script>';
    echo"<h1 style='color: red; width: 18%; margin-left: 40.2%; margin-top: -10%;'> Data Updated</h1>.<br>";
    echo" <a href='Fetch_users_data.php'>.<input type='button' value='View Data' class='btn-success'>.</a>";
   }
}