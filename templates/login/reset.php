<?php
/* The password reset form, the link to this page is included
   from the forgot.php email message
*/
require 'config.php';
session_start();

// Make sure email and hash variables aren't empty
if( isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']) )
{
    $email = $mysqli->escape_string($_GET['email']); 
    $hash = $mysqli->escape_string($_GET['hash']); 

    // Make sure user email with matching hash exist
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email' AND hash='$hash'");

    if ( $result->num_rows == 0 )
    { 
        $_SESSION['message'] = "You have entered invalid URL for password reset!";
        header("location: index.php?action=error");
    }
}
else {
    $_SESSION['message'] = "Sorry, verification failed, try again!";
    header("location: index.php?action=error");
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Reset Your Password</title>
    <?php require_once __DIR__ . '\..\_header.php' ?>
</head>
<header id="home">
    <!-- Background Image -->
    <div class="bg-img" style="background-image: url('./img/background9.jpg');">
        <div class="overlay"></div>
    </div>
<body>
<div class="home-wrapper">
    <div class="container">
        <div class="row">
            <div class="form">

          <h1>Choose Your New Password</h1>
          
          <form action="index.php?action=reset_password" method="post">
              
          <div class="field-wrap">
            <input type="password"required name="newpassword" autocomplete="off" placeholder="New Password"/>
          </div>
              <br>
          <div class="field-wrap">
            <input type="password"required name="confirmpassword" autocomplete="off" placeholder="Confirm New Password"/>
          </div>
          
          <!-- This input field is needed, to get the email of the user -->
          <input type="hidden" name="email" value="<?= $email ?>">    
          <input type="hidden" name="hash" value="<?= $hash ?>">
<br>
              <button class="main-btn" type="submit" name="login"/>Apply</button>
          
          </form>

    </div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
