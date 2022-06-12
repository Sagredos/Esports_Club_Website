<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    //Change from Email to any email
    $email_from = 'student1221@mail.com';
    
    $email_subject = "New Form Submission";

    $email_body = "User Name: $name. \n".
                    "User Email: $visitor_email. \n".
                        "User Message: $message. \n";

    //Change to email to email that you want the messages to go to
    $to = "lalasi3446@eoscast.com";
    
    $headers = "From: $email_from \r\n";
    
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: contact.html");

?>