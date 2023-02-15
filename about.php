<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About page</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
    rel="stylesheet">
<script src="js/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .text1 {
            color: #fff;
            font-size: 22px;
        }

        .about {
            color: rgb(240, 111, 36);
            font-size: 30px;
        }

        @media(max-width:1000px) {
            html {
                font-size: 60%;
            }

            .text1 {
                color: #fff;
                font-size: 14px;
            }
        }
.aahan{
    height:70px;
}
    </style>
</head>
<?php include('non-login-nav.php')
?>
<div class="aahan"></div>
<body style="display:flex ;flex-direction: column;flex-wrap: nowrap;word-wrap: none;">
    <section class="nav">
        
    
            <div style="border-bottom: rgb(230, 8, 8);margin-left: 45%;">
                <div class="about"> About Us<br></div>
            </div>
    <br>
        <div class="ab"
            style="display: flex; flex-direction:row;margin:50px;justify-content:center; height:60%;width:100%;margin-left: -10px;">
            <div style="width: 40%; height:110%;margin: 0px 20px ;"><img src="image/a1.jpg" alt="" height="100%"
                    width="100%"></div>
            <di7
                style="width: 40%; height:110%;margin: 0px 20px;background-color: blue;padding: 10px;justify-content: space-evenly;">
                <div class="text1"><br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores delectus aspernatur, inventore aliquid, est, blanditiis quisquam necessitatibus alias non explicabo amet recusandae iure debitis unde obcaecati optio hic dicta error nihil earum! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque rem expedita minima sint eaque fugiat facilis natus nihil esse dignissimos quis maiores odit iste, corporis repellat reprehenderit consectetur, beatae harum, quisquam voluptatum.
                <br><br>
                    Enjoy your day and hope you liked our website</div>
            </div>
        </div>
    </section>
    <?php include_once("footer.php"); ?>
</body>

</html>