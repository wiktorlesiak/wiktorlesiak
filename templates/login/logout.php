<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy();
?>

    <!DOCTYPE html>
    <html >
    <head>
        <title>Wiktor Lesiak - Logged Out</title>
        <?php require_once __DIR__ . '\..\_header.php' ?>
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
