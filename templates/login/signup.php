<?php
/* Main page with two forms: sign up and log in */
require 'config.php';
session_start();
?>
<!DOCTYPE html>

<html lang="en">
    <head>
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

<?php
if ( $_SESSION['logged_in'] == 1 ) {
    $_SESSION['message'] = "Hey, How are you today?";
    header("location: ?action=profile");
}
else {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['login'])) { //user logging in

            require 'login.php';

        } elseif (isset($_POST['register'])) { //user registering

            require 'register.php';

        }
    }
    ?>
    <body>

    <header id="home">
        <!-- Background Image -->
        <div class="bg-img" style="background-image: url('./img/background3.jpg');">
            <div class="overlay"></div>
        </div>
        <!-- /Background Image-->
        <!-- Nav -->
        <nav id="nav" class="navbar nav-transparent">
            <div class="container">

                <div class="navbar-header">
                    <!-- Logo -->
                    <div class="navbar-brand">
                        <a href="index.php?action=main">
                            <img class="logo" src="img/logo.png" alt="logo">
                            <img class="logo-alt" src="img/logo-alt.png" alt="logo">
                        </a>
                    </div>
                    <!-- /Logo -->
                    <!-- Collapse nav button -->
                    <div class="nav-collapse">
                        <span></span>
                    </div>
                    <!-- /Collapse nav button -->
                </div>
                <!--  Main navigation  -->
                <ul class="main-nav nav navbar-nav navbar-right">
                    <li><a href="index.php?action=main">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li class="has-dropdown"><a href="#blog">Posts</a>
                        <ul class="dropdown">
                            <li><a href="blog-single.html">Latest Posts </a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="index.php?action=signin">Log In</a></li>
                    <li><a href="index.php?action=signup">Sign Up</a></li>
                </ul>
                <!-- /Main navigation -->
            </div>
        </nav>
        <!-- /Nav -->
        <div class="home-wrapper">
            <div class="container">
                <div class="row">
    <div class="form">
            <div id="signup">
                <h1 class="white-text">Create Account</h1>
                <!-- contact form -->
                <form action="index.php?action=signup" method="post" autocomplete="off" class="contact-form">
                            <div class="col-md-8 col-md-offset-2">
                                    <input type="text" required autocomplete="off" name='firstname' class="input" placeholder="Name"/>
                                        <input type="text" required autocomplete="off" name='lastname' class="input" placeholder="Surname"/>
                                    <input type="email" required autocomplete="off" name='email' class="input" placeholder="Email"/>
                                    <input type="password" required autocomplete="off" name='password' class="input" placeholder="Password"/>
                                    <button class="main-btn" type="submit" name="register">Register</button>
                            </div>
                </form>
            </div>
    </div>
                </div>
            </div>
        </div>

    </header>

    <!-- /Preloader -->
    <?php require_once __DIR__ . '\..\_footer.php' ?>

    <!-- Back to top -->
    <div id="back-to-top"></div>
    <!-- /Back to top -->

    </body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /Preloader -->

    <!-- jQuery Plugins -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
     </body>
</html>
    <?php
}
?>