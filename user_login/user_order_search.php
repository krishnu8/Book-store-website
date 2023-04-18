
<?php
include_once("../database/Create_database.php");

$output = "";

// if(isset($_POST['search'])){
//   $input = $_POST['input'];

//   if(!empty($input)){
    $query = "SELECT * FROM oders WHERE Order_Id LIKE 'Order_Id'";
    $res = mysqli_query($con,$query);

    $output .="
      <table class='table table-bordered table-striped' border='1px'>
      <tr>
      <th>Order Id</th>
      <th>Product Id</th>
      <th>Quantity</th>
      <th>Order Date</th>
      <th>Deliver Date</th>
      <th>User Id</th>
      <th>Status</th>
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
        <td>".$row['Order_Id']."</td>
        <td>".$row['Product_Id']."</td>
        <td>".$row['Quantity']."</td>
        <td>".$row['Order_date']."</td>
        <td>".$row['Deliver_date']."</td>
        <td>".$row['User_id']."</td>
        <td>".$row['Status']."</td>
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