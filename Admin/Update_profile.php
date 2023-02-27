
<head>
    <style>
        form img{
            width: 200px;
            height: 200px;
            border-radius: 150px;
        }
        form{
            width: 400px;
            padding: 10px;
            margin: 10px;
            border: 10px solid #505050;
            background-color: #505050;
            text-align: center;
            color: white;
            margin-left: 35%;
            border-radius: 10px;
        }
        form h3{
            color: black;
            width: 40%;
            margin-left: 30px;
        }
        form input{
            font-size: 20px;
            border-radius: 5px;
            width: 40%;
            margin-left: 47%;
            margin-top: -10%;
        }
        form .button2 a{
            color: white;
        }
        form .button2{
            background: black;
            width: 40%;
            height: 40px;
            border-radius: 20px; 
          
            transition: 0.5s;
        }
        form .button2:hover{
            background: green;
            transition: 0.5s;
            transform: translate(1.1s);
        }
            form .button2 a{
                color: white;
            }
            form .button{
                background: black;
                width: 40%;
                height: 40px;
                border-radius: 20px; 
                
                transition: 0.5s;
            }
            form .button:hover{
                background: green;
                transition: 0.5s;
                transform: translate(1.1s);
            }
            form button a{
                text-decoration: none;
            }
           form .button a{
            color: #fff;
           }

    </style>
</head>
<?php
include_once("con_profile1.php");
$aid = @$_POST['aid'];
$fname = @$_POST['fln'];
$emialid = @$_POST['em'];
$pwd = @$_POST['pwd'];
$mobile = @$_POST['mn'];
$pic = @$_POST['pic']['name'];
$dt = @$_POST['dt'];

?>
<form action="Profile1.php">
    <img src="uploads/Profile_logo.png" alt="img">
    <h3>Your Admin_Id:</h3><input type="num" value="<?php echo $aid?>" name="aid" id="aid1" />

    <h3>Your Name:</h3><input type="text" value="<?php echo $fname?>" name="fln" id="fname1" />
    
    <h3>Your Email-ID:</h3><input type="email" value="<?php echo $emialid?>" name="em" id="emailid1" />
    
    <h3>Your Password:</h3><input type="password" value="<?php echo $pwd?>" name="pwd" id="pass1" />
    
    <h3>Your Mobile NO:</h3><input type="number" value="<?php echo $mobile?>" name="mn" id="mobile1" />
    
    <h3>Your Profile Pic:</h3><input type="file" value="<?php echo $pic?>" name="pic" id="pic1" />
    
    <h3>Register Date:</h3><input type="date" value="<?php echo $dt?>" name="dt" id="dt1" />
    <br>
   
    <button class="button2"><a href="Admin_Account.php">Go to Home Page</a></button>
    <button class="button" name="btn" id="btn1"><a href="Profile1.php">Update Profile</a></button>

</form>


<?php
include_once("con_profile1.php");
$aid = @$_POST['aid'];
$fname = @$_POST['fln'];
$emialid = @$_POST['em'];
$pwd = @$_POST['pwd'];
$mobile = @$_POST['mn'];
$pic = @$_POST['pic']['name'];
$dt = @$_POST['dt'];

if(isset($_POST['btn1']))
{
   $q="UPDATE register SET `Admin_Id`='$aid',`Full_Name`='$fname',`Email_Id`='$emailid',
   `Password`='$pwd',`Mobile_NO`='$mobile',`Profile_Pic`='$pic',`Reg_Date`='$dt' WHERE Email_Id='$emailid';";
   
   if(mysqli_query($con,$q))
   {
    move_uploaded_file($_FILES['pic']['name'],'uploads/'.$pic);
    echo '<script>alert("UPDATE COMPLETED")</script>';
    echo"<h1 style='color: red; width: 18%; margin-left: 40.2%; margin-top: -10%;'> Data Updated</h1>.<br>";
    echo" <a href='Profile1.php'>.<input type='button' value='View Data' class='btn-success'>.</a>";
   }
}
