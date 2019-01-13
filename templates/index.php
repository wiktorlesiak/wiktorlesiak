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

<body>
<!-- Header -->
<header id="home">
    <!-- Background Image -->
    <div class="bg-img" style="background-image: url('./img/background1.jpg');">
        <div class="overlay"></div>
    </div>
    <!-- /Background Image -->

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
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li class="has-dropdown"><a href="#blog">Posts</a>
                    <ul class="dropdown">
                        <li><a href="post.html">Latest Posts </a></li>
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

    <!-- home wrapper -->
    <div class="home-wrapper">
        <div class="container">
            <div class="row">

                <!-- home content -->
                <div class="col-md-10 col-md-offset-1">
                    <div class="home-content">
                        <h1 class="white-text">Wiktor Lesiak</h1>
                        <p class="white-text">Creating Java, C, SQL, Python, C#, PHP, HTML5, jQuery, AngularJS
                        </p>
                        <a href="#about"> <button class="white-btn">More</button> </a>
                        <a href="#contact"> <button class="main-btn">Get In Touch</button> </a>
                    </div>
                </div>
                <!-- /home content -->

            </div>
        </div>
    </div>
    <!-- /home wrapper -->

</header>
<!-- /Header -->

<!-- About -->
<div id="about" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">Welcome to Website</h2>
            </div>
            <!-- /Section header -->

            <!-- about -->
            <div class="col-md-4">
                <div class="about">
                    <i class="fa fa-github"></i>
                    <h3>GitHub</h3>
                    <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
                    <a href="#">Read more</a>
                </div>
            </div>
            <!-- /about -->

            <!-- about -->
            <div class="col-md-4">
                <div class="about">
                    <i class="fa fa-code"></i>
                    <h3>Code/Projects</h3>
                    <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
                    <a href="#">Read more</a>
                </div>
            </div>
            <!-- /about -->

            <!-- about -->
            <div class="col-md-4">
                <div class="about">
                    <i class="fa fa-list-alt"></i>
                    <h3>Posts</h3>
                    <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
                    <a href="#">Read more</a>
                </div>
            </div>
            <!-- /about -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /About -->


<!-- Portfolio -->
<div id="portfolio" class="section md-padding bg-grey">

<!-- Contact -->
<div id="contact" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section-header -->
            <div class="section-header text-center">
                <h2 class="title">Get in touch</h2>
            </div>
            <!-- /Section-header -->

            <!-- contact -->
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-twitter"></i>
                    <h3>Twitter</h3>
                    <p>@WLesiak</p>
                </div>
            </div>
            <!-- /contact -->

            <!-- contact -->
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-envelope"></i>
                    <h3>Email</h3>
                    <p>wiktor.lesiak@hotmail.com</p>
                </div>
            </div>
            <!-- /contact -->

            <!-- contact -->
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-facebook"></i>
                    <h3>Facebook</h3>
                    <p>/wiktorlesiak</p>
                </div>
            </div>
            <!-- /contact -->

            <!-- contact form -->
            <div class="col-md-8 col-md-offset-2">
                <form class="contact-form">
                    <input type="text" class="input" name="name" placeholder="Name">
                    <input type="email" class="input" name="mail" placeholder="Email">
                    <input type="text" class="input" name="subject" placeholder="Subject">
                    <textarea class="input" placeholder="Message"></textarea>
                    <button type="submit" name="submit" class="main-btn">Send message</button>
                </form>

            </div>
            <!-- /contact form -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Contact -->


    <?php require_once __DIR__ . '\_footer.php' ?>

<!-- Back to top -->
<div id="back-to-top"></div>
<!-- /Back to top -->

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

</body>

</html>
