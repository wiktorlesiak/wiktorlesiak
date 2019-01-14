<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy();
?>

    <!DOCTYPE html>
    <html >
    <head>
        <meta charset="UTF-8">


        <title>Welcome <?= $first_name ?></title>

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

        <!-- Owl Carousel -->
        <link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
        <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

        <!-- Magnific Popup -->
        <link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="css/style.css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9] -->
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    </head>

    <body>
    <div class="form">
        <header id="home">
            <!-- Background Image -->
            <div class="bg-img" style="background-image: url('./img/background7.jpg');">
                <div class="overlay"></div>
            </div>
            <!-- /Background Image-->
            <!-- Nav -->
            <?php require_once __DIR__ . '\..\_nav.php' ?>
            <!-- /Nav -->

            <div class="home-wrapper">
                <div class="container">
                    <div class="row">
                        <h1 class="white-text" >You have been logged out</h1>

                        <p style="color: lightgray">See you soon again</p>
                        <br>
                        <a href="index.php"> <button class="main-btn">Return Home</button> </a>

                    </div>
                </div>
            </div>

            <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
            <script src="js/index.js"></script>

    </body>
    </html>
