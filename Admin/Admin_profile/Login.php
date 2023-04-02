<style>
        form{
            margin-left: 35%;
            border: 2px solid black;
            background: #212529;
            color: #fff;
            width: 30%;
            height: 47%;
            text-align: center;
        }
        form input{
            font-size: 20px;
            width: 50%;
            background: transparent;
            color: #fff;

        }
        @media only screen and (max-width: 900px) {
            form{
            margin-left: 35%;
            border: 2px solid black;
            background: #212529;
            color: #fff;
            width: 30%;
            height: 50%;
            text-align: center;
        }
      }
    </style>

<?php
include_once("Connection.php");
?>
<form action="" method="post">
   <h1>Email_Id: </h1><input type="text" name="name" id="">
    <h1>Password: </h1><input type="password" name="pwd"><br><br>
    <input type="submit" value="Login" name="btn" style=" background: green;"><br><br>
    <button style="background: transparent; color: #fff; font-size: 17px;">Don't havr an account <a href="Admin_insert_data.php" style="text-decoration: none; color: green;">SignIn</a></button>
</form>
<?php

$em = @$_POST['name'];
$pwd = @$_POST['pwd'];
session_start();
if(isset($_POST['btn']))
{
$q = "SELECT * FROM `Admin` WHERE Email='$em'AND Password='$pwd';";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
$_SESSION['Email'] = $em;
$_SESSION['password'] = $pwd;
if($num==1)
{
    ?>
    <script>
        window.location.href="../Dashboard.php?Email=<?php echo$em?>";
    </script>
    <?php
}else{
    echo "Invalid user name or password";
}
}

