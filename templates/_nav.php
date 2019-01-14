
<?php
/* Displays user information and some useful messages */
session_start();

    $id = (isset($_GET['id']));
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    $active = $_SESSION['admin'];

?>

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
            <li><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="has-dropdown"><a href="#blog">Posts</a>
                <ul class="dropdown">
                    <li><a href="index.php?action=blog">Latest Posts </a></li>
                </ul>
            </li>

            <?php
            if ( $_SESSION['admin'] == 1 ) {
                ?> <li><a href="?action=admin">ADMIN CURD</a></li>
                <?php
            }
            ?>
            <?php
            if ( $_SESSION['logged_in'] == 1 ){

           ?> <li><a href="index.php?action=signin"><?=$first_name?></a></li>
                <li><a href="?action=logout">Log Out</a></li>
            <?php
            }else {
                ?>
                <li><a href="index.php?action=signin">Log In</a></li>
                <li><a href="index.php?action=signup">Sign Up</a></li>
                <?php
            }
            ?>


        </ul>
        <!-- /Main navigation -->
    </div>
</nav>
<!-- /Nav -->