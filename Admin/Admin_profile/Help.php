<head>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        form{
            height: 610px;
            width: 150%;
            border: 2px solid rgb(72, 62, 62);
            text-align: center;
            color: #fff;
        }
        form select{
            border-radius: 5px;
            background-color: transparent;
            color: #afa0a0;
            width: 50%;
            height: 4%;
            text-align: center;
        }
        form input{
            background-color: transparent;
            color: #fff;
            border-radius: 5px;
            width: 50%;
            height: 5%;
            text-align: center;
        }
        form .quiry{
            background-color: transparent;
            width: 95%;
            height: 20%;
        }
        form .sub{
            height: 38px;
            font-size: 20px;
            background-color: #fff;
            color: black;
        }
        .col-sm-2{
            height: 675px;
        }
        
        .row .col-sm-2 .full a{
            text-decoration: none;
        }
        .row .col-sm-2 .full a .fa{
            font-size: 30px;
        }
        .row .col-sm-2 .full a button{
            color: black;
        }
    </style>


    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

    <div class="row">
        <div class="col-sm-2 bg-dark funtion_class oi" style="margin-top: 10px;">

            <div class="d-grid gap-3 full">
                <br>
                <a href="+91 7635048675"><button type="button" class="btn btn-secondary btn-block"><i class="fa fa-brands fa-whatsapp" style="color: greenyellow;"></i> With WhatsApp</button></a>
                <br><br>
                <a href="https://www.instagram.com/rameshvai697/"> <button type="button" class="btn btn-secondary btn-block"><i class="fa fa-brands fa-square-instagram" style="color: brown;"></i> With Instagram</button></a>
                <br><br>
                <a href="https://twitter.com"><button type="button" class="btn btn-secondary btn-block"><i class="fa fa-brands fa-square-twitter" style="color: black;"></i> With Twitter</button></a>
                <br><br>
                <a href="https://www.facebook.com/ramesh.vai.9275439"><button type="button" class="btn btn-secondary btn-block"><i class="fa fa-brands fa-facebook" style="color: blue;"></i> With FaceBook</button></a>
                <br><br>
                <a href="https://mail.google.com"><button type="button" class="btn btn-secondary btn-block"><i class="fa fa-solid fa-envelope" style="color: red;"></i> With Gmail_Id</button></a>
                <br><br>
                <a href="login_b.php"><button type="button" class="btn btn-secondary btn-block">Logout</button></a>

                <li><hr class="dropdown-divider"></li>
                <h5 style="color: red;"> Contact Details !</h5>
                <p style="color: #fff;"> +91 7635048675</p>
                <p style="color: #fff;"> rameshweber12@gmail.com</p>
                
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10" style="margin-left: 5px; margin-top: 10px;">
            <form action="" class="bg-dark">
                Enter First Name: <input type="text" name="fn" placeholder="Enter First name:" id="fn1"  required /><br><br>
                Enter Last Name: <input type="text" name="ln" placeholder="Enter Last Name:" id="sn1"  required /><br><br>
                Enter Email_Id: <input type="emial" name="em" placeholder="Enter Emian_Id:" id="em1"  required /><br><br>
                Enter Mobile NO: <input type="number" name="mn" placeholder="Enter Mobile_NO:" id="mn1"  required /><br><br>
                Your Role !
                <select name="rol" id="rol1">
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                    <option value="Student">Student</option>
                    <option value="RG Costomer">RG Costomer</option>
                    <option value="Others">Others</option>
                </select><br><br>
                Enter Address: <input type="text" name="add" placeholder="Enter Your Address" id="ad1"  required /><br><br>
                Problem Name: <input type="text" name="pr" placeholder="Enter Your Ploblem" id="pr1"  required /><br><br>
                Please Enter Your Quiry: <input type="text" name="qry" placeholder="Please Enter Your Quiry Here: !" id="qr1" class="quiry"  required /><br><br>

                <input type="submit" name="btn" value="Submit" id="btn1" class="sub" />
            </form>
        </div>
    </div>

    <?php
include_once("Connection.php");

if(isset($_POST['btn']))
{
$fln = @$_POST['fn'];
$sn = @$_POST['ln'];
$em = @$_POST['em'];
$mn = @$_POST['mn'];
$rol = @$_POST['rol'];
$add = @$_POST['add'];
$pr = @$_POST['pr'];
$qr = @$_POST['qry'];

$q = "INSERT INTO `helps`(`First_Name`, `Last_Name`, `Email_Id`, `Phone_NO`, `Role`, `Address`, `Problem_Name`, `Quiry`) VALUES 
('$fln','$sn','$em','$mn','$rol',,'$add','$pr',,'$qr')";

    if(mysqli_query($con,$q))
    {
        // move_uploaded_file($_FILES['pic']['tmp_name'],'uploads/'.$pic);
        ?>
        <script>
            alert("Your Request is Submitted successfully");

        window.location="Admin_Account.php";
        </script>

<?php
    }
    else{
        ?>
        <script>
            alert("Error please Ckeck! unsuccessful");
        </script>
        <?php
    }
}

?>

    <div class="row">
        <div style="width: 900px; color: black; margin-left: 13%;">
            <p>
                <h2>About BookChor Shop !</h2>
                <img src="pic/Book3..jpg" alt="Book3.img" style="width: 30%; margin-left: 30px; margin-top: 10px;" />
                <img src="pic/Book1..jpg" alt="Book1.img" style="width: 30%; margin-left: 50px; margin-top: 10px;" />
                <img src="pic/Book2..jpg" alt="Book2.img" style="width: 20%; margin-left: 40px; margin-top: 10px;" />

                <br>
                A colorful bookstore with the bookshop logo sits on a bookshelf alongside colorful books 
                <br><br>
Our History
Bookshop.org began as an idea to help support bookstores and their communities as more and more people are buying their books online.
 We saw an opportunity to create an alternative to Our BookChor Web for socially-conscious online shoppers. Our BookChor Web sells 
 over 60% of all books in the US and is growing. That shift threatens the future of bookstores and will hurt readers, authors, and
  publishers who rely on a diverse, healthy ecosystem for books. We had a better idea — give readers the convenience of online shopping 
  while supporting independent bookstores at the same time. <br><br>

‍We launched in January of 2020, with just 88 bookstore partners and a team of four passionate book people.
<br><br>

As the COVID-19 pandemic surged, our growing platform helped our community of independent booksellers survive shutdowns.
 That spring, traffic to Bookshop.org hit 1 million users in a single day. By the end of 2020 we had grown to over 1,000 bookstores and 
 distributed over ten million dollars in profits. Bookshop.org has since expanded internationally, launching in the UK and Spain.

78% of our customers said they regularly bought books from Our BookChor Web before they made the switch.

            </p>
        </div>
    </div>
</div>





