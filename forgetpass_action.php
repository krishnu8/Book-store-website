<?php
include_once("database/Create_database.php");
  if(isset($_POST['btn'])){
    $Email=@$_POST['Email'];
    $password=@$_POST['pass'];
    $update="UPDATE `registration` SET `password`='[value-4]' WHERE Email='$Email'";
    if(mysqli_query($con,$update)){
        ?>
        <script>
            alert("Password change successful");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Fail to update password");
        </script>
        <?php
    }
    ?>
    <script>
    window.location.href="login.php";
  </script>
  <?php
  }
  ?>
 