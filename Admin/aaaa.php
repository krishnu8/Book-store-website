
<?php
include_once("../database/Create_database.php");

$output = "";

if(isset($_POST['search'])){
  $input = $_POST['input'];

  if(!empty($input)){
    $query = "SELECT * FROM search WHERE id LIKE '%$input%'";
    $res = mysqli_query($con,$query);

    $output .="
      <table class='table table-bordered table-striped' border='1px'>
      <tr>
      <th>ID_NO</th>
      <th>Fullnanme</th>
      <th>Email</th>
      <th>Mobile</th>
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
        <td>".$row['id']."</td>
        <td>".$row['fullname']."</td>
        <td>".$row['email']."</td>
        <td>".$row['mobile']."</td>
        </tr>
        ";
      }
    }

  }
}
?>
<form action="" method="post">
    <input type="text" name="input" placeholder="search...." />
    <button name="search">Search</button>
</form>


<?php
echo $output;
?>