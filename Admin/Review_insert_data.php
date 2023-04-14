
<style>
    tr td input{
        color: black;
    }
    form{
        text-align: center;
        margin-left: 30%;
        margin-top: 10px;
    }
    tr td input{
        font-size: 17px;
        /* border-radius: 5px; */
    }
    tr td{
        font-size: 25px;
    }
</style>
<?php
include_once('Header.php');
?>

<!-- <link rel="stylesheet" href="style.css"> -->

<form action="" method="post"enctype="multipart/form-data">
<table border="1">
    <tr>
        <td colspan="2" style="font-size: 30px;">Review/Feedback Form !</td>
    </tr>
    <tr>
        <td>Uer_Id:</td>
        <td> <input type="text" name="uid" required></td>
    </tr>
    <tr>
        <td>Product_Id_NO:</td>
        <td><input type="text" name="pid" required></td>
    </tr>
    <tr>
        <td>Feedback:</td>
        <td><input type="text" name="feed" required></td>
    </tr>
    <tr>
        <td>Rating:</td>
        <td><input type="text" name="price" required></td>
    </tr>
    <tr>
        <td>Review Pic</td>
        <td><input type="file" name="pic" required></td>
    </tr>
   
    <tr>
        <td colspan="2"><input type="submit" value="Add To Cart" name="btn"  style="font-size: 20px; width: 50%; margin-left: 27%;"></td>
    </tr>
    <!-- <tr>
        <td colspan="2" style="font-size: 20px;">Have an account? <a href="Login.php" style="text-decoration: none; color: green;">Login</a></td>
    </tr> -->
</table>
</form>
<?php
include_once("../database/Create_database.php");

if(isset($_POST['btn']))
{
$u_id = @$_POST['uid'];
$p_id = @$_POST['pid'];
$feed = @$_POST['feed'];
$ret = @$_POST['price'];
$pic = @$_FILES['pic']['name'];

$q = "INSERT INTO `Review`(`User_Id`, `Product_Id`, `Feedback`, `Rating`, `Review_pic`) VALUES 
('$u_id','$p_id','$feed','$ret','$pic')";

    if(mysqli_query($con,$q))
    {
        move_uploaded_file($_FILES['pic']['tmp_name'],'image/'.$pic);
        ?>
        <script>
            alert("Add To Cart successful");
            window.location.href="Review.php";
        </script>

<?php
    }
    else{
        ?>
        <script>
            alert("Error please Ckeck! unsuccessful");
        </script>
        <?php
    }
}
