<?php
/* Displays all successful messages */
require 'config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Success</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Wiktor Lesiak</title>
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
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
<body>
<header id="home">
    <!-- Background Image -->
    <div class="bg-img" style="background-image: url('./img/background9.jpg');">
        <div class="overlay"></div>
    </div>
    <!-- /Background Image -->
    <!-- Nav -->
    <?php require_once __DIR__ . '\..\_nav.php' ?>
    <!-- /Nav -->

    <div class="home-wrapper">
        <div class="container">
            <div class="row">
<div class="form">
    <h1 class="white-text"><?= 'Success'; ?></h1>
    <p>
        <?php
        if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
            echo $_SESSION['message'];
        else:
            header( "location: index.php?action=home" );
        endif;
        ?>
    </p>

    <a href="index.php?action=home"> <button class="main-btn" type="submit" name="Home"/>Home</button></a>
</div>
</body>
</html>
