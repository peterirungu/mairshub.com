<?php
 
    $to = "info@mairshub.com";
    $from = $_REQUEST['email']; 
    $name = $_REQUEST['name']; 
    $headers = "From: $from"; 
    $subject = $_REQUEST['subject'];  
 
    $fields = array(); 
    $fields{"name"} = "name"; 
    $fields{"email"} = "email"; 
    $fields{"subject"} = "subject"; 
    $fields{"message"} = "message";
 
    $body = "Here is the message sent from the contact form.:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
 
    $send = mail($to, $subject, $body, $headers);
 
?>
