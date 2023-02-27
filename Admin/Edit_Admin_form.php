
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
        width: 500px;
        height: 125%;
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
      color: black;
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
     margin-top: 20px;
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
        margin-left: 50%;
        font-size: 15px;
        border-radius: 5px;
        margin-top: -9.5%;
    }
    .btn-success{
      margin-left: 43%;
      width: 11%;
      height: 5%;
      border-radius: 10px;
    }

</style>

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

?>


<form action="Edit_Admin_form.php" method="post" enctype="multipart/form-data" class="login_form">
<h3>Update Your Details here !</h3>
<br>
<h4>Your User Id:</h4><input type="number" value="<?php echo $idn?>" class="input-group-text input_class"  name="idn" id="idn11" placeholder="You can't any change" readonly />
<br>
<h4>Your full Name:</h4><input type="text" value="<?php echo $fln?>" class="input-group-text input_class" name="fln" id="fn1" placeholder="your full name here" required/> 
<br>
<h4>Enter your Branch:</h4><input type="text" value="<?php echo $br?>" class="input-group-text input_class" name="br" id="br1" placeholder="your branch name" required/> 
<br>
<h4>your Year Experience:</h4><input type="number" value="<?php echo $exp?>" class="input-group-text input_class" name="exp" id="exp1" placeholder="your Experience " required/> 
<br>
 <h4>your Date Of Birth:</h4><input type="date" value="<?php echo $dob?>" class="input-group-text input_class" name="dob" id="dob1" placeholder="your DOB hare" required/> 
 <br>
<h4>Select the Gender::</h4><select value="<?php echo $gen?>" class="input-group-text input_class" name="gen" id="gen1">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
<br>
<h4>Enter your Adderess:</h4><input type="text" value="<?php echo $ad?>" class="input-group-text input_class" name="ad" id="ad1" placeholder="your address" required/>
<br>
<h4>Enter Your Email-Id:</h4><input type="email" value="<?php echo $em?>" class="input-group-text input_class" name="em" id="em1" placeholder="your email-Id" required/>
<br>
<h4>Enter Mobile_NO:</h4><input type="number" value="<?php echo $mn?>" class="input-group-text input_class" name="mn" id="mn1" placeholder="your Mobile_NO" required/>
<br>
<h4>Enter Your password:</h4><input type="password" value="<?php echo $pwd?>" class="input-group-text input_class" name="pwd" id="pwd1" placeholder="your password" required/>
<br> 
<h4>Enter Card NO:</h4><input type="number" value="<?php echo $cno?>" class="input-group-text input_class" name="cno" id="sno1" placeholder="Your Card NO ">
<br>
<h4>Select Profile-Pic:</h4><input type="file" name="pic" id="pic1" required/>
<br>
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
   $q="UPDATE register SET `Admin_Name`='$fln',`Admin_Branch`='$br',`Experience`='$exp',
   `Date_Of_Birth`='$dob',`Gender`='$gen',`Adredd`='$ad',`Email_Id`='$em',`Mobile_NO`='$mn',
   `Password`='$pwd',`Card_No`='$pin',`profile_Pic`='$pic' WHERE Admin_Id='$idn';";
   
   if(mysqli_query($con,$q))
   {
    move_uploaded_file($_FILES['pic']['name'],'uploads/'.$pic);
    echo '<script>alert("UPDATE COMPLETED")</script>';
    echo"<h1 style='color: red; width: 18%; margin-left: 40.2%; margin-top: -10%;'> Data Updated</h1>.<br>";
    echo" <a href='fetch_admin_data.php'>.<input type='button' value='View Data' class='btn-success'>.</a>";
   }
}