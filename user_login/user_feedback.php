<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback and Rating</title>
    <?php include_once("nave.php") ?>
    <style>
        

        @media (max-width: 992px) {
            main {
                padding-top: 30px;
            }
        }

        .data {
            background-color: #D5EAF5;
            border-radius: 10px;
            /* height:80px; */
        }

        .data1 {
            background-color: rgba(245, 222, 179, 0.736);
            border-radius: 10px;
            height: 80px;

        }

        .data1:hover {
            background-color: #CAC2FF;
            border: red 1px solid;
        }

        .data:hover {
            background-color: #E9ECF1;
            border: red 1px solid;
        }

        .table {
            width: 95%;
            margin-left: 2%;
            padding-right: 20px;
            justify-content: center;
            align-items: center;
        }

        tr {
            border-radius: 5px;
        }

        .row1 {
            display: flex;
            width: 95%;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
            margin-left: 2.5%;
            margin-top: 10px;
        }
        .aa{
            background-color:blue;
            color: white;
            border-radius: 8px;
            padding: 5px;
        }
        .aa:hover{
            background-color:white;
            color: black;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" style="text-align: center; background-color:white;">
                    <h2><b>Feedback & Rating</b></h2>
                </div>
            </div>
            <div class="row1 data">
                <div style="width:10%"><img src="../image/Book.png" height="80px" style="border-radius: 50%; background-color: red;" alt="img"></div>
                <div style="width:40%"> <h5>This is the best product i ever used in this price range i prefere every you must try this product. <br>thankyou</h5> </div>
                <div style="width:10%"> <h5>Date:7/8/2022</h5> </div>
                <div><a href=""><button class="aa">View product</button></a></div>
            </div>
            <div class="row1 data1">
                <div style="width:10%"><img src="../image/Book.png" height="80px" style="border-radius: 50%; background-color: red;" alt="img"></div>
                <div style="width:40%"> <h5>This is the best product i ever used in this price range i prefere every you must try this product. <br>thankyou</h5> </div>
                <div style="width:10%"> <h5>Date:7/8/2022</h5> </div>
                <div><a href=""><button class="aa">View product</button></a></div>
            </div>
        </div>
    </main>
</body>

</html>