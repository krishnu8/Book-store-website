
<head>
    <style>
        form img{
            width: 180px;
            height: 170px;
            border-radius: 100px;
           
        }
        form{
            width: 380px;
            padding: 10px;
            margin: 10px;
            border: 10px solid #505050;
            background-color: #505050;
            text-align: center;
            color: black;
            margin-left: 35%;
            border-radius: 10px;
        }
        form h3{
            width: 40%;
            margin-left: 30px;
            transition: 0.6s;
        }
        form h3:hover{
          color: white;
          transform: translate(1.1);
          transition: 0.6s;
        }
        form p{
            color: #fff;
            width: 40%;
            margin-left: 50%;
            margin-top: -10%;
            transition: 0.6s;
        }
        form p:hover{
            color: black;
            transform: translate(1.1);
            transition: 0.6s;
        }
        
        form button a{
            text-decoration: none;
            font-size: 110%;
        }
        form .button{
            background-color: transparent;
            text-decoration: none;
        }
        form .button, a{
            width: 80%;
            height: 40px;
            color: white;
            border-radius: 5px;
            transition: 0.5s;
        }
        form .button:hover{
            color: white;
            background-color: green;
            transition: 0.5s;
            transform: translate(1.0s);
        }
        form .buttone{
            width: 38%;
            height: 35px;
            text-align: center;
            background-color: green;
            border-radius: 10px;
            /* margin-left: -1%; */
        }
        form .buttond{
            width: 40%;
            height: 35px;
            text-align: center;
            background-color: red;
            border-radius: 10px;
            margin-left: 1%;
        }
        .btn-success{
            height: 35px;
            text-align: center;
            background-color: green;
            border-radius: 5px; 
        }
        .btnr{
        margin-left: 35.5%;
        }
        form h2{
            font-size: 30px;
            margin-top: 5px;
            width: 30%;
            margin-left: 35%;
            color: green;
            transition: 0.5s;
        }
        form h2:hover{
            color: red;
            transition: 0.5s;
            transform: translate(1.1);
        }

    </style>
</head>
<a href="Register_page.php">
    <input type="button" value="Insert new Record" class="btnr btn-success" />
</a>
<a href="login.php" >
    <input type="button" value="Logout" class="btnl btn-success" />
</a>

<?php
include_once("con_profile1.php");
$q="select * from register";
$result=mysqli_query($con,$q);
?>


<?php
while($a=mysqli_fetch_array($result))
{ ?>

<form action="Profile1.php">
    <!-- <img src="uploads/pic-2.png" alt="my-img"> -->
    <img src='uploads/<?php echo$a[7]?> 'alt="No Pic" height="170px" width="180px"></td>
    <h2>Admin</h2>
    <h3>Admin ID:</h3><p><?php echo$a[0]?></p>

    <h3>Your Name:</h3><p><?php echo$a[1]?></p>
    
    <h3>Your Email-ID:</h3><p><?php echo$a[2]?></p>
    
    <h3>Your Password:</h3><p><?php echo$a[3]?></p>
    
    <h3>Your Mobile NO:</h3><p><?php echo$a[4]?></p>

    <h3>Register Date:</h3><p><?php echo$a[6]?></p>
   
    <button class="buttone"><a href="Update_profile.php?aid='<?php echo $a[0]?>' & fln=<?php echo $a[1]?>
        & em=<?php echo $a[2]?> & pwd=<?php echo $a[3]?> & mn=<?php echo $a[4]?> & dt=<?php echo $a[6]?>">Edit Account</a>
    </button>
    <button class="buttond"><a href="Profile1_delete.php ?aid='<?php echo $a[0]?>'">Delete Account</a></button>
    <br><br>
    <button class="button"><a href="Admin_Account.php">Return back to Home</a></button>
    
    
    <?php 
}
?>
</form>