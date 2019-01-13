<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['same'];
    $mailfrom = $_POST['mail'];
    $message = $_POST['message'];
    $_SESSION['message'] =
        "An email address has been send, Thank you for reaching out!";
    $mailTo = "wiktorlesiak.info@gmail.com";
    $headers = "From: ".$mailfrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;
    
  
    mail($mailTo. $subject, $txt, $headers);
    header("Location: index.php?action");



}