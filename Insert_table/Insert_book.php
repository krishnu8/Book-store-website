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
    <option value="Fairy tales, fables, and folk tales">Fairy tales, fables, and folk tales</option>
    <option value="Fantasy"></option>
    <option value="Historical fiction">Historical fiction</option>
    <option value="Horror">Horror</option>
    <option value="Humour and satire">Humour and satire</option>
    <option value="Mystery">Mystery</option>
    <option value="Literary fiction">Literary fiction</option>
    <option value="Women’s fiction">Women’s fiction</option>
    </select>  <br>
    Description: <textarea name="des" id="" cols="30" rows="10"></textarea> <br>
    price: <input type="number" name="price" id=""> <br>
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
    $file_name = $_FILES['photo']['name'];
    $file_temp = $_FILES['photo']['tmp_name'];
    $target_dir = "../image/Book_image/";
    $target_file = $target_dir . basename($file_name);

    // $update="INSERT INTO `product`( `Product_Name`, `Price`, `Product_Image`, `Category`, `Description`, `Auther`, `User_id`) VALUES ('$Book','$price','$file_name','$select','$description','$Auther','6')";
    $update="INSERT INTO `product`(`Product_Name`, `Price`, `Product_Image`, `Category`, `Description`, `Auther`, `User_id`) VALUES ('$Book','$price','$file_name','$select','$description','$Auther',10)";
    if(mysqli_query($con,$update)){
    if(move_uploaded_file($file_temp, $target_file)){
        echo "File uploaded successfully and moved to target directory.";
    }else{
        echo "Error uploading file.";
    }
    }
}
?>