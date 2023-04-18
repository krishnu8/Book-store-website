<<<<<<< HEAD

<style>
    form{
        text-align: center;
        margin-top: 10px;
        margin-left: 30%;
=======
<style>
    tr td input {
        color: black;
>>>>>>> b2f6d433f098cf3dd5db28f3ffe6b1126219cf61
    }
    tr td{
        font-size: 25px;
    }
    tr td input{
        font-size: 17px;
    }
    
</style>

<!-- <link rel="stylesheet" href="style.css"> -->

<?php
include_once('Header.php');
?>

<<<<<<< HEAD
<form action="" method="post"enctype="multipart/form-data">
<table border="1">
    <tr>
        <td colspan="2" style="font-size: 30px;">Product Insert Form !</td>
    </tr>
    <tr>
        <td>Product_Id:</td>
        <td> <input type="text" name="pid" required></td>
    </tr>
    <tr>
        <td>Product_Name:</td>
        <td> <input type="text" name="p_name" required></td>
    </tr>
    <tr>
        <td>Price:</td>
        <td><input type="text" name="price" required></td>
    </tr>
    <tr>
        <td>Product Pic:</td>
        <td><input type="file" name="pic" required></td>
    </tr>
    <tr>
        <td>Quantity:</td>
        <td><input type="text" name="qntt" required></td>
    </tr>
    <tr>
        <td>Category:</td>
        <td><input type="text" name="c_name" required></td>
    </tr>
    <tr>
        <td>Description:</td>
        <td><input type="text" name="des    " required></td>
    </tr>
    <tr>
        <td>Author:</td>
        <td><input type="text" name="athr" required></td>
    </tr>
    <tr>
        <td>User Id:</td>
        <td> <input type="text" name="sid" required></td>
    </tr>

    <tr>
        <td colspan="2"><input type="submit" value="Upload" name="btn"  style="font-size: 20px; width: 70%; margin-left: 15%;"></td>
    </tr>
    <tr>
        <td colspan="2" style="font-size: 20px;">Return Back To Privious Page? <a href="Product.php" style="text-decoration: none; color: green;">Return</a></td>
    </tr>
</table>
=======
<form action="" method="post" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td colspan="2" style="font-size: 30px;">Product Insert Form !</td>
        </tr>
        <tr>
            <td>Book:</td>
            <td> <input type="text" name="book" id="" required> </td>
        </tr>
        <tr>
            <td>Auther:</td>
            <td> <input type="text" name="auther" id="" required></td>
        </tr>
        <tr>
            <td>Seller_Id:</td>
            <td> <input type="text" name="seller" required></td>
        </tr>
        <tr>
            <td>category: </td>
            <td> <select name="select" id="">
                    <option value="Adventure stories">Adventure stories</option>
                    <option value="Classics">Classics</option>
                    <option value="Crime">Crime</option>
                    <option value="Horror">Horror</option>
                    <option value="Humour and satire">Humour and satire</option>
                    <option value="Mystery">Mystery</option>
                    <option value="Literary fiction">Literary fiction</option>
                </select></td>
        </tr>
        <tr>
            <td>Description:</td>
            <td> <textarea name="des" id="" cols="80" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>price:</td>
            <td><input type="number" name="price" id=""></td>
        </tr>
        <tr>
            <td>Quantity:</td>
            <td><input type="number" name="quantity" id=""></td>
        </tr>
        <tr>
            <td colspan="2"><input type="file" name="photo"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="submit" name="btn"></td>
        </tr>
        <!-- <tr>
        <td colspan="2" style="font-size: 20px;">Have an account? <a href="Login.php" style="text-decoration: none; color: green;">Login</a></td>
    </tr> -->
    </table>
>>>>>>> b2f6d433f098cf3dd5db28f3ffe6b1126219cf61
</form>
<?php
include_once("../database/Create_database.php");

<<<<<<< HEAD
if(isset($_POST['btn']))
{
$p_id = @$_POST['pid'];
$p_name = @$_POST['p_name'];
$price = @$_POST['price'];
$pic = @$_FILES['pic']['name'];
$q_name = @$_POST['qntt'];
$cname = @$_POST['c_name'];
$des = @$_POST['des'];
$author = @$_POST['athr'];
$u_id = @$_POST['uid'];

$q = "INSERT INTO `Product`(`Product_Id`, `Product_Name`, `Price`, Product_Image, `Total_Quantity`,
 `Category`, `Description`, `Author`, `User_id`) VALUES 
('$p_id','$p_name','$price','$pic','$q_name','$cname','$des','$author','$u_id')";

    if(mysqli_query($con,$q))
    {
        move_uploaded_file($_FILES['pic']['tmp_name'],'image/'.$pic);
        ?>
        <script>
            alert("Pruduct Uploaded successful");
            window.location.href="Product.php";
        </script>

<?php
    }
    else{
=======
if(isset($_POST['btn'])){
    $Book=@$_POST['book'];
    $Auther=@$_POST['auther'];
    $select=@$_POST['select'];
    $description =@$_POST['des'];
    $price=@$_POST['price'];
    $quantity=@$_POST['quantity'];
    $file_name = $_FILES['photo']['name'];
    $file_temp = $_FILES['photo']['tmp_name'];
    $target_dir = "../image/Book_image/";
    $target_file = $target_dir . basename($file_name);
    $seller_id=@$_POST['seller'];

    // INSERT INTO `product`(`Product_Name`, `Price`, `Product_Image`, `Total_Quantity`, `Renaining_Quantity`, `Category`, `Description`, `Auther`, `User_id`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]')
    $update="INSERT INTO `product`(`Product_Name`, `Price`, `Product_Image`, `Category`, `Description`, `Auther`, `User_id`, `Total_Quantity`, `Renaining_Quantity`) VALUES ('$Book','$price','$file_name','$select','$description','$Auther','$seller_id','$quantity','$quantity')";
    if(mysqli_query($con,$update)){
    if(move_uploaded_file($file_temp, $target_file)){
        ?>
        <script>
            alert("fail in Product Insersion ");
            window.location.href="Product.php";
        </script>
        <?php
    }else{
>>>>>>> b2f6d433f098cf3dd5db28f3ffe6b1126219cf61
        ?>
        <script>
            alert("Product Inserted");
            window.location.href="Product.php";
        </script>
        <?php
    }
    }
}