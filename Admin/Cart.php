<head>
<link rel="stylesheet" href="css/bootstrap.css">
</head>

<?php
include_once("../database/Create_database.php");

?>

<?php
$results_per_page = 4;
if (isset($_GET["page"])) {
    $page  = $_GET["page"];
} else {
    $page = 1;
};
$start_from = ($page - 1) * $results_per_page;
$q = "SELECT * FROM Carts";
$result = mysqli_query($con, $q);
?>
<div class="container">
<?php
include_once("Header.php");
?>

    <div class="row">

        <div class="col-sm-4">
            <form>
                <div class="row">
                    <div class="col">
                        <b>Search: </b> <input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Here">
                    </div>
                </div>
            </form>
        </div>
        <div class=" offset-sm-6 col-sm-2">
            <div class="row">
                <div class="col">
                    <a href="Cart_insert_data.php" style="margin-left: -34px;"><button class="btn btn-danger">Add New Carts</button></a>
                </div>
            </div>

        </div>


<br>
<table class="table table-striped" border="1" id="myTable">
    <tr>
        <th>Product Id</th>
        <th>User Id</th>
        <th>Cart Pic</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
        <th>Edit</th>
        <th>Delete</th>

    </tr>
    <?php
    while ($r = mysqli_fetch_array($result)) {
    ?>
        <tr>
            <td><?php echo $r[0]; ?></td>
            <td><?php echo $r[1]; ?></td>
            <td><img src="uploads/<?php echo $r[2]; ?>" alt="No profile picture" style="height: 50px; width: 50px; border-radius: 100%;"></td>
            <td><?php echo $r[3]; ?></td>
            <td><?php echo $r[4]; ?></td>
            <td><?php echo $r[5]; ?></td>

            <td> 
                <a href="Cart_Edit.php?Product_Id=<?php echo $r[0]; ?>"><button class="btn btn-info" style="width:70px">Edit</button></a>
            </td>
            <td> 
                <a href="Cart_Delete.php?Product_Id=<?php echo $r[0]; ?>"><button class="btn btn-danger" style="width:100px">Delete</button></a>
            </td>
            


        </tr>
    <?php
    }
    ?>
</table>
<!-- </div>
</div>

<div class="container">
    <div class="row"> -->
        <div class="col-sm-4 pagination" style="text-align:center">
            <?php
            $q1 = "SELECT * FROM Carts";
            $result = mysqli_num_rows(mysqli_query($con, $q1));

            $total_pages = ceil($result / $results_per_page); // calculate total pages with results
            $pagLink = "";

            if ($page >= 2) {
                echo "<a href='Cart.php?page=" . ($page - 1) . "'>  Prev </a>";
            }

            for ($i = 1; $i <= $total_pages; $i++) {
                if ($i == $page) {
                    $pagLink .= "<a class = 'active' href='Cart.php?page="
                        . $i . "'>" . $i . " </a>";
                } else {
                    $pagLink .= "<a href='Cart.php?page=" . $i . "'>   
                                                " . $i . " </a>";
                }
            };
            echo $pagLink;

            if ($page < $total_pages) {
                echo "<a href='Cart.php?page=" . ($page + 1) . "'>  Next </a>";
            }
            ?>
        </div>
        <div class="offset-sm-4 col-sm-4 inline">
            <form>
                <div class="row">
                    <div class="col">
                        <input id="page" class="form-control" type="number" min="1" max="<?php echo $total_pages ?>" placeholder="<?php echo $page . "/" . $total_pages; ?>" required />
                    </div>
                    <div class="col">
                        <input type="button" onClick="go2Page(<?php echo $total_pages; ?>);" value="Go" class="btn btn-danger" />
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
</center>
</div>
</div>
<br>
