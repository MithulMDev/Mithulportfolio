<?php
if(isset($_POST['submit'])){
    $to = "mithulapc6@gmail.com";



    $name = $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];

    $subject = "mail from portfolio"
    
    $body = "name : ".$name. "\r\n" .
    		"Phone : ".$phone. "\r\n" .
    		"Message : " . $body;
    if(mail($to, $subject, $body )){
        echo "Mail Sent!";
    }
    else{
         echo "Failed To Send Mail";
    }
}

?>