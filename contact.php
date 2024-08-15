<?php

    // Collect form data
    $name = $_POST['name']; // $_Post value is the value of name attribute such as name = "email"
    $email = $_POST['email'];
    $sex = $_POST['sex'];  // Collect the sex data
    $message = $_POST['message'];
    $to = "mdj524156@gmail.com";
    $subject = "Projoss User Data";
    
    // Include the sex information in the email body
    $txt = "Name: " . $name . "\r\n Email: " . $email . "\r\n Sex: " . $sex . "\r\n Message: " . $message;
    
    $headers = "From: info@projoss.com" . "\r\n";
    
    if($email != NULL){
        mail($to, $subject, $txt, $headers);
    }
    
    header("location:thanks.html");

?>




