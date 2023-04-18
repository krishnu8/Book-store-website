<?php
include_once("../database/Create_database.php");
?>
<form action="" method="post"  enctype="multipart/form-data">
    Book:<input type="text" name="book" id=""> <br>
    Auther: <input type="text" name="auther" id=""> <br>
    category: 
    <select name="select" id="">
    <option value="Adventure stories">Adventure stories</option>
    <option value="Classics">Classics</option>
    <option value="Crime">Crime</option>
    <option value="Horror">Horror</option>
    <option value="Humour and satire">Humour and satire</option>
    <option value="Mystery">Mystery</option>
    <option value="Literary fiction">Literary fiction</option>
    </select>  <br>
    Description: <textarea name="des" id="" cols="30" rows="10"></textarea> <br>
    price: <input type="number" name="price" id=""> <br>
    Quantity: <input type="number" name="quantity" id="">
    <input type="file" name="photo"> <br>
    <input type="submit" value="submit" name="btn">     
</form>
<?php
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

    // INSERT INTO `product`(`Product_Name`, `Price`, `Product_Image`, `Total_Quantity`, `Renaining_Quantity`, `Category`, `Description`, `Auther`, `User_id`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]')
    $update="INSERT INTO `product`(`Product_Name`, `Price`, `Product_Image`, `Category`, `Description`, `Auther`, `User_id`, `Total_Quantity`, `Renaining_Quantity`) VALUES ('$Book','$price','$file_name','$select','$description','$Auther',10,'$quantity','$quantity')";
    if(mysqli_query($con,$update)){
    if(move_uploaded_file($file_temp, $target_file)){
        echo "File uploaded successfully and moved to target directory.";
    }else{
        echo "Error uploading file.";
    }
    }
}
?>