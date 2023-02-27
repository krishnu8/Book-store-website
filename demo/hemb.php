<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburger Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Remove border from toggler */
        .navbar-toggler {
            border: 0 !important;
        }

        .navbar-toggler:focus,
        .navbar-toggler:active,
        .navbar-toggler-icon:focus {
            outline: none !important;
            box-shadow: none !important;
            border: 0 !important;
        }

        /* Lines of the Toggler */
        .toggler-icon {
            width: 30px;
            height: 3px;
            background-color: #e74c3c;
            display: block;
            transition: all 0.2s;
        }

        /* Adds Space between the lines */
        .middle-bar {
            margin: 5px auto;
        }

        /* State when navbar is opened (START) */
        .navbar-toggler .top-bar {
            transform: rotate(45deg);
            transform-origin: 10% 10%;
        }

        .navbar-toggler .middle-bar {
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .navbar-toggler .bottom-bar {
            transform: rotate(-45deg);
            transform-origin: 10% 90%;
        }

        /* State when navbar is opened (END) */

        /* State when navbar is collapsed (START) */
        .navbar-toggler.collapsed .top-bar {
            transform: rotate(0);
        }

        .navbar-toggler.collapsed .middle-bar {
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .navbar-toggler.collapsed .bottom-bar {
            transform: rotate(0);
        }

        /* State when navbar is collapsed (END) */

        /* Color of Toggler when collapsed */
        .navbar-toggler.collapsed .toggler-icon {
            background-color: #777777;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon top-bar"></span>
                <span class="toggler-icon middle-bar"></span>
                <span class="toggler-icon bottom-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                 
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>