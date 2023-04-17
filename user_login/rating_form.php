<?php
include_once("../database/Create_database.php");
session_start();
$pid = @$_GET['product_id'];
// $pid=71;
$se="SELECT* FROM `product` WHERE Product_Id='$pid'";
$product=mysqli_fetch_array(mysqli_query($con,$se));
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

    fieldset,
    label {
        margin: 0;
        padding: 0;
    }

    body {
        margin: 20px;
    }

    h1 {
        font-size: 1.5em;
        margin: 10px;
    }

    /****** Style Star Rating Widget *****/

    .rating {
        border: none;
        float: left;
        font-size: 20px;
    }

    .rating>input {
        display: none;
    }

    .rating>label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    .rating>.half:before {
        content: "\f089";
        position: absolute;
    }

    .rating>label {
        color: #ddd;
        float: right;
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating>input:checked~label,
    /* show gold star when clicked */
    .rating:not(:checked)>label:hover,
    /* hover current star */
    .rating:not(:checked)>label:hover~label {
        color: #FFD700;
    }

    /* hover previous stars in list */

    .rating>input:checked+label:hover,
    /* hover current star when changing rating */
    .rating>input:checked~label:hover,
    .rating>label:hover~input:checked~label,
    /* lighten current selection */
    .rating>input:checked~label:hover~label {
        color: #FFED85;
    }
    body{
        height: 100vh;
        width: 90%;
        background-color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .all{
        /* background-color: green; */
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .photo{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    img{
        height: 400px;
        width: 300px;
    }
</style>

<body>
<h1 style="margin-top:-100px;">Review & Rating</h1><br>
    <div class="all">
        <form action="" method="POST">
            <div class="pho">
                <img src="../image/Book_image/<?php echo $product[3] ?>" alt="">
            </div>
            <p style="font-weight: bold; font-size:20px;">Name:<?php echo $product[1] ?></p>
            <fieldset class="rating">
                <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
            </fieldset>
            <br>
            <textarea name="des" id="" cols="38" rows="2" name="des"></textarea> <br>
            <input type="submit" name="btn" value="Submit" style="margin-top: 15px;" class="btn btn-out btn-secondary">
        </form>
    </div>
</body>
<?php
if (isset($_POST['btn'])) {
    $id=$_SESSION['User_id'];
    $des = @$_POST['des'];
    $rating = @$_POST['rating'];
    $update = "INSERT INTO `review`(`product_id`, `user_id`, `feedback`, `rating`) VALUES ('$pid','$id','$des','$rating')";
    if (mysqli_query($con, $update)) {
?>
        <script>
            alert("Thanks for your feedback");
        </script>
    <?php
    } ?>
    <script>
        window.location.href = "user_home.php";
    </script>
<?php

}
?>