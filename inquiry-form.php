<?php
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['students-email'];
    $about = $_POST['students-about'];
    $game = $_POST['game-interest'];

    $email_subject = "New Inquiry Submission";

    $email_from ='sacstateesportsclub@sacstate.com';

    $email_body = "Student's First Name: $firstName.\n".
                    "Student's Last Name: $lastName.\n"
                        "Student's Email: $email.\n".
                            "Student's bio: $about.\n".
                                "Game student is interested in: $game.\n";

    //Email you would like to receive the inquiry
    $to = "derrickmar03@gmail.com";

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>