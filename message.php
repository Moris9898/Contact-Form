<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$msg= $_POST['msg'];
if(!empty($name) && !empty($email)  )  {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $reciever = "hasan8miral@gmail.com";
        $subject = "From: $name <$email>";
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\nMessage: $msg\n\nRegards, \n$name";
        $sender = $email;
        if(mail($reciever, $subject, $body, $sender)) {
            echo "You Message has been sent";
        } else {
            echo "Sorry, Failed to send Email ";
        }
    } else {
        echo "Enter A validate Email";
    }
} else {
    echo "Email And Password are Require";
}