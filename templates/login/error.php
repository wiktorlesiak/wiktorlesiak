<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Wiktor Lesiak - Error</title>
    <?php require_once __DIR__ . '\..\_header.php' ?>

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
    <div class="bg-img" style="background-image: url('./img/background4.jpg');">
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
    <h1 class="white-text">Error</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: ?action=index" );
    endif;
    ?>
    </p>
    <a href="?action=account"> <button class="main-btn"  name="Home"/>Home</button></a>

</div>
</body>
</html>
