<?php
include_once("../database/Create_database.php");
session_start();
$email=$_SESSION['email'];
if(isset($_POST['change_pic'])){
$old_image=@$_GET['img'];
$max_file_size =4*1024*2048; 
$allowed_file_types = array('image/jpeg', 'image/png', 'image/jpg');

if(isset($_FILES['fgd']) && $_FILES['fgd']['error'] == UPLOAD_ERR_OK){

  // Get the uploaded file's details
  $file_name = $_FILES['fgd']['name'];
  $file_size = $_FILES['fgd']['size'];
  $file_tmp = $_FILES['fgd']['tmp_name'];
  $file_type = $_FILES['fgd']['type'];

  // Check if the file size and type are valid
  if(!in_array($file_type, $allowed_file_types)){
    $_SESSION['Image_error']="Invalid file type (only JPEG, PNG, and JPG files are allowed)";
    ?>
    <script>
      window.location.href="user_profile.php";
    </script>
    <?php
  }elseif($file_size > $max_file_size ){
    $_SESSION['Image_error']="The uploaded file is too large 6MB";
    ?>
    <script>
      window.location.href="user_profile.php";
    </script>
    <?php
  }else{
    $file_name=uniqid().$file_name;
    if($old_image=="Default.png"){
      move_uploaded_file($file_tmp, "../image/user_image/$file_name");
      $update="UPDATE `registration` SET`profile_picture`='$file_name' WHERE email='$email'";
      if(mysqli_query($con,$update)){
        $_SESSION['Image_succ']="Profile Picture Update Successfully";
      }else{
        $_SESSION['Image_error']="Failed To update profile picture ";
      }
    }else{
      unlink("../image/user_image/".$old_image);
      move_uploaded_file($file_tmp, "../image/user_image/$file_name");
      $update="UPDATE `registration` SET`profile_picture`='$file_name' WHERE email='$email'";
      if(mysqli_query($con,$update)){
        $_SESSION['Image_succ']="Profile Picture Update Successfully";
      }else{
        $_SESSION['Image_error']="Fail To update profile picture ";
      }
    }
    ?>
    <script>
      window.location.href="user_profile.php";
    </script>
    <?php
  }
}else{
  $_SESSION['Image_error']="Select Picture to update profile picture ";
  ?>
    <script>
      window.location.href="user_profile.php";
    </script>
    <?php
}
}
?>

