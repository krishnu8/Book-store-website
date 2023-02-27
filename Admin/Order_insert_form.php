<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Insert Page</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            /* font-family: 'Poppins', sans-serif; */
            /* background-color: grey; */
            /* height: 100vj; */
        }
        body{
            height: 100vh;
        }
        nav {
            display: flex;
            flex-direction: row;
            padding: 2% 6%;
            justify-content: space-between;
            align-items: center;
        }
        input {
            color: #fff;
            /* border-color:blue; */
            border-radius: 6px;
            background-color: rgba(0, 0, 0, 0);
            height: 30px;
            width: 300px;
        }
        input:focus{
            border-color: blue;
        }
        .nav {
            min-height: 120vh;
            background-position: center;
            background-size: cover;
            position: relative;
            border: #61d394 solid 2px;
        }
        a {
            text-decoration: none;
        }
        form div {
            padding: 20px;
        }
        body .nav div .Return_class{
            background-color: rgb(117, 14, 143);
            width: 300px;
            height:35px;
            font-size: 20px;
            border: 0;
            border-radius: 10px;
            transition: 0.6s;
        }
        body .nav div .Return_class:hover{
            background-color: black;
            transform: translate(1.1);
            transition: 0.9s;
        }
        body .nav div form center button{
            background-color: black;
            width: 300px;
            height: 35px;
            align-items: center;
            border-radius: 10px;
            transition: 0.6s;
            color: white;
            font-size: 25px;
        }
        body .nav div form center button:hover{
            background-color: rgb(117, 14, 143);
            transform: translate(1.1);
            transition: 0.6s;
        }
        body .nav h1{
            margin-top: 30px;
            text-align: center;
            background-color: #fff;
        }
    </style>
</head>
<body style="justify-content: center;border: #ffffff solid 2px;">
    <section class="nav">
        <!-- <nav>
            <a href="register.php"><img src="pic/hen.png" height="40px" width="100px">
            </a>
            <div style="font-size: 20px;"><a href="index.php"><button class="home">Home</button></a></div>
        </nav> -->
        <!-- <center>
            <font size="6" color="white">Sign Up Here</font>
        </center><br> -->
        <h1>Order Insert Form</h1>
        <div style="display: flex;justify-content: center; margin-top:20px;">
            <div style="background-color: rgba(0,0,0,0.7);width:350px;height:fit-content;border-radius: 10px;color: #fff;">
                <form method="post" enctype="multipart/form-data" action="index.php">
                   
                <div class="form-group">
                        <label for="id">Enter Order Id:</label>
                        <input type="number" class="form-control" placeholder="Enter Order Id" id="ord1" name="ord" required />
                        <p id="fn1"></p>
                    </div>
                    <div class="form-group">
                        <label for="id1">Enter Product Id:</label>
                        <input type="number" class="form-control" placeholder="Enter Product Id" id="pro1" name="pro" required />
                        <p id="mail1"></p>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Enter Quantuty:</label>
                        <input type="text" class="form-control" placeholder="Enter Quantity" id="quan1" name="quan" required />
                        <p id="passw"></p>
                    </div>
                    <div class="form-group">
                        <label for="price">Enter Price:</label>
                        <input type="number" class="form-control" placeholder="Enter Price" id="prc1" name="prc" required />
                        <p id="passw1"></p>
                    </div>
                    <div class="form-group">
                        <label for="email">Enter Email-Id:</label>
                        <input type="email" class="form-control" placeholder="Enter Emial Id" id="em1" name="em" onblur="demo(this)" required />
                        <p id="mno"> </p>
                    </div>
                    <div class="form-group">
                        <label for="date">Enter Date:</label>
                        <input type="date" class="form-control" name="dt" id="dt1">
                    </div>
                    <center>
                        <button type="submit" class="sub_class" required><a href="fetch_order_data.php" style="color: #fff;">Submit</a></button>
                    </center>
                </form>
                <br>
                <center><button class="Return_class">
                        <a href="Admin_Account.php" style="color:#fff;"><b>Return Back To Home</b></a></button></center><br />

                <center><button class="Return_class">
                        <a href="fetch_order_data.php" style="color:#fff;"><b>View Orders</b></a></button></center><br />
            </div>
        </div>
        </div>
    </section>
</body>
</html>