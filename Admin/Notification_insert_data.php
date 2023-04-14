

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
        <td colspan="2" style="font-size: 30px;">Notification Form !</td>
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
        <td>Notification Pic:</td>
        <td><input type="file" name="pic" required></td>
    </tr>
    <tr>
        <td>Messages:</td>
        <td><input type="text" name="qntt" required></td>
    </tr>
   
    <tr>
        <td colspan="2"><input type="submit" value="Add To Cart" name="btn"  style="font-size: 20px; width: 50%; margin-left: 27%;"></td>
    </tr>
    <tr>
        <td colspan="2" style="font-size: 20px;">Return Back To Previous Page? <a href="Notification.php" style="text-decoration: none; color: green;">Return</a></td>
    </tr>
</table>
</form>
<?php
include_once("../database/Create_database.php");

if(isset($_POST['btn']))
{
$o_id = @$_POST['uid'];
$p_id = @$_POST['pid'];
$pic = @$_POST['pic']['name'];
$c_name = @$_POST['qntt'];

$q = "INSERT INTO `Notification`(`User_Id`, `Product_Id`, `Notification_pic`, `Messages`) VALUES ('$o_id','$p_id','$pic','$c_name')";

    if(mysqli_query($con,$q))
    {
        move_uploaded_file($_FILES['pic']['tmp_name'],'image/'.$pic);
        ?>
        <script>
            alert("Add To Cart successful");
            window.location.href="Notification.php";
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
