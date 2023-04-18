
<?php
include_once("database/Create_database.php");

$output = "";

// if(isset($_POST['search'])){
//   $input = $_POST['input'];

//   if(!empty($input)){
    $query = "SELECT * FROM Product WHERE Product_Id ='Product_Id'";
    $res = mysqli_query($con,$query);

    $output .="
      <table class='table table-bordered table-striped' border='1px'>
      <tr>
      <th>Product_Id</th>
      <th>Product_Name</th>
      <th>Price</th>
      <th>Product Pic</th>
      <th>Total Quantity</th>
      <th>Remainung Quantity</th>
      <th>Category</th>
      <th>Description</th>
      <th>Author</th>
      <th>User Id</th>
    ";

    if(mysqli_num_rows($res) < 1){
      $output .="
      <tr>
      <td colspan='6' class='text-center'>NO Data Found</td>
      </tr>
      ";
    }else{
      while($row = mysqli_fetch_array($res)) {

        $output .="
        <tr>
        <td>".$row[0]."</td>
        <td>".$row[1]."</td>
        <td>".$row[2]."</td>
        <td>".$row[3]."</td>
        <td>".$row[4]."</td>
        <td>".$row[5]."</td>
        <td>".$row[6]."</td>
        <td>".$row[7]."</td>
        <td>".$row[8]."</td>
        <td>".$row[9]."</td>
        </tr>
        ";
      }
    }

//   }
// }
?>
<!-- <form action="" method="post">
    <input type="text" name="input" placeholder="search...." />
    <button name="search">Search</button>
</form> -->


<?php
echo $output;
?>