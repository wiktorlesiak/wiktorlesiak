<?php
/* Main page with two forms: sign up and log in */
require 'config.php';
session_start();
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Wiktor Lesiak - Sign Up</title>
        <?php require_once __DIR__ . '\..\_header.php' ?>
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
        <?php require_once __DIR__ . '\..\_nav.php' ?>
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