<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once __DIR__ . '\_header.php' ?>
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
    <?php require_once __DIR__ . '\_nav.php' ?>
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
