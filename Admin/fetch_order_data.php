<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    
</head>
<?php include_once("header_nav.php")  ?>
<body>

<div class="container">
    <a href="Order_insert_form.php"><input type="submit" name="btn" id="btn1" value="Insert New Record" class="btn btn-success"></a>
<table border="2px" class="table">
    <tr>
        <th style="color: green;">Oder Id th</th>
        <th style="color: green;">Product Id</th>
        <th style="color: green;">Quantity</th>
        <th style="color: green;">Price</th>
        <th style="color: green;">Email</th>
        <th style="color: green;">Date</th>
        <th style="color: green; width: 125px;">Delete Order</th>

    </tr>
    <tr>
        <td>0887</td>
        <td>077</td>
        <td>$10</td>
        <td>Rs 350</td>
        <td>rdas570@rku.ac.in</td>
        <td>25/2/2023</td>
        <th class="btn btn-success" style="width: 100%;">Delete</th>
         
    </tr>
    <tr>
        <td>087</td>
        <td>078</td>
        <td>$20</td>
        <td>Rs 350</td>
        <td>rdas570@rku.ac.in</td>
        <td>25/2/2023</td>
        <th class="btn btn-success" style="width: 100%;">Delete</th>    
    </tr>
    <tr>
        <td>0987</td>
        <td>079</td>
        <td>$15</td>
        <td>Rs 200</td>
        <td>ramesh570@rku.ac.in</td>
        <td>20/2/2023</td>
        <th class="btn btn-success" style="width: 100%;">Delete</th>    
    </tr>
    <tr>
        <td>0897</td>
        <td>080</td>
        <td>$25</td>
        <td>Rs 500</td>
        <td>rdas57@gmail.com</td>
        <td>16/2/2023</td>
        <th class="btn btn-success" style="width: 100%;">Delete</th>    
    </tr>
</table>

</div>
</body>
