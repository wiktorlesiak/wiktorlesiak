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
        <div class="bg-img" style="background-image: url('./img/background1.jpg');">
            <div class="overlay"></div>
        </div>

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
             </form>
            </div>
        </div><!-- tab-content -->
    </div> <!-- /form -->
            </div>
        </div>
    </header>
    </body>
</html>


    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <?php
}
?>