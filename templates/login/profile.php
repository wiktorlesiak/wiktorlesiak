<body>
<form>

<?php

session_start();
// Check if user is logged in using the session variable

    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];


?>
<!DOCTYPE html>
<html >
<head>
    <title>Welcome <?= $first_name ?></title>
    <?php require_once __DIR__ . '\..\_header.php' ?>
</head>

<body>
  <div class="form">
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
          <h1 class="white-text" >Welcome, <?= $first_name ?></h1>

          <p>
          <?php

          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];

              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }

          ?>
          </p>
          
          <?php
          
          // Keep reminding the user this account is not active, until they activate
          if ( !$active ){
              echo
              'Account is unverified, please confirm your email by clicking
              on the email link!';
          }
          
          ?>
          
          <h2 class="white-text">Your Email:</h2>
          <p><?= $email ?></p>
      <p></p>

          <a href="?action=logout" <button class="button button-block" name="logout"/>Log Out</button></a>

    </div>
              </div>
          </div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
