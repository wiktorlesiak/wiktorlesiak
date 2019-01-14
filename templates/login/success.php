<?php
/* Displays all successful messages */
require 'config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Wiktor Lesiak - Verify</title>
    <?php require_once __DIR__ . '\..\_header.php' ?>head>
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
