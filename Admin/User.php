

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
$q = "SELECT * FROM  Registration WHERE role='User'";
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
                    <a href="../register.php" style="margin-left: 160px;"><button class="btn btn-danger">Add New User</button></a>
                </div>
            </div>

        </div>


<br>
<table class="table table-striped" border="1" id="myTable">
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone NO</th>
        <th>State</th>
        <th>City</th>
        <th>About</th>
        <th>Status</th>
        <th>Role</th>
        <th>Profile Pic</th>
        <th>User Id</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Operation</th>

    </tr>
    <?php
    while ($r = mysqli_fetch_array($result)) {
    ?>
        <tr>
            <td><?php echo $r[0]; ?></td>
            <td><?php echo $r[1]; ?></td>
            <td><?php echo $r[2]; ?></td>
            <td><?php echo $r[4]; ?></td>
            <td><?php echo $r[5]; ?></td>
            <td><?php echo $r[7]; ?></td>
            <td><?php echo $r[8]; ?></td>
            <td><?php echo $r[9]; ?></td>
            <td><img src="uploads/<?php echo $r[6]; ?>" alt="No profile picture" style="height: 75px; width: 75px; border-radius: 100%;"></td>
            <td><?php echo $r[10]; ?></td>

            <td> 
                <a href="Users/User_Edit.php?User-id=<?php echo $r[0]; ?>"><button class="btn btn-info" style="width:70px">Edit</button></a>
            </td>
            <td> 
                <a href="Users/User_Delete.php?User-id=<?php echo $r[0]; ?>"><button class="btn btn-danger" style="width:100px">Delete</button></a>
            </td>
            
            <td>
            <?php
                if($r['Status']=='Inactive'){
                    echo '<p><a href="Users/User_active.php?User_id='.$r[10].'& Status=Active" style=" text-decoration: none; color: #fff; margin-top: 5px;">
                    <button class="btn btn-success" style="width:100px">Activate</button></a></p>';
                }else{
                    echo '<p><a href="Users/User_inactive.php?User_id='.$r[10].'& Status=Inactive" style=" text-decoration: none; color: #fff; margin-top: 5px;">
                    <button class="btn btn-warning" style="width:100px">Deactivate</button></a></p>';
                }

            ?>
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
            $q1 = "SELECT * FROM Registration WHERE role='User'";
            $result = mysqli_num_rows(mysqli_query($con, $q1));

            $total_pages = ceil($result / $results_per_page); // calculate total pages with results
            $pagLink = "";

            if ($page >= 2) {
                echo "<a href='User.php?page=" . ($page - 1) . "'>  Prev </a>";
            }

            for ($i = 1; $i <= $total_pages; $i++) {
                if ($i == $page) {
                    $pagLink .= "<a class = 'active' href='User.php?page="
                        . $i . "'>" . $i . " </a>";
                } else {
                    $pagLink .= "<a href='User.php?page=" . $i . "'>   
                                                " . $i . " </a>";
                }
            };
            echo $pagLink;

            if ($page < $total_pages) {
                echo "<a href='User.php?page=" . ($page + 1) . "'>  Next </a>";
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
<br>
