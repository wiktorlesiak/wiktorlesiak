<?php 
/* Reset your password form, sends reset.php password link */
require 'config.php';
session_start();

// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{   
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows == 0 ) // User doesn't exist
    { 
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: index.php?action=error");
    }
    else { // User exists (num_rows != 0)

        $user = $result->fetch_assoc(); // $user becomes array with user data
        
        $email = $user['email'];
        $hash = $user['hash'];
        $first_name = $user['first_name'];

        // Session message to display on success.php
        $_SESSION['message'] = "<p>Please check your email <span>$email</span>"
        . " for a confirmation link to complete your password reset!</p>";

        // Send registration confirmation link (reset.php)
        $to      = $email;
        $subject = 'Password Reset Link ( noreply)';
        $message_body = '
        Hello '.$first_name.',

        You have requested password reset!

        Please click this link to reset your password:

        http://localhost/index.php?action=reset&email='.$email.'&hash='.$hash;

        mail($to, $subject, $message_body);

        header("location: index.php?action=success");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reset Your Password</title>
    <head>
        <title>Wiktor Lesiak - Forgot Password</title>
        <?php require_once __DIR__ . '\..\_header.php' ?>

    </head>

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

    <h1 class="white-text">Reset Your Password</h1>
      <br>
    <form action="index.php?action=forgot" method="post">
     <div class="field-wrap">

     <!-- <input type="email"required autocomplete="off" name="email"/>-->
         <input type="email" required autocomplete="off" name="email" class="input" placeholder="Email Address"/>

     </div>
        <br>

        <button class="main-btn" type="submit" name="login"/>Reset Password</button>
    </form>
  </div>
          
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>

</html>
