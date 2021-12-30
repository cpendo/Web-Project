<?php 
    $name = $_POST['name'];
    $visitor_email =$_POST['email'];
    $message = $_POST['message'];
    $visitor_number = $_POST['number'];
    $subject = $_POST['subject'];


    $email_from ='identitymasked0@gmail.com';

    $email_subject ="NEW FORM";

    $email_body ="User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                         "User Number: $visitor_number.\n".
                            "User Message: $message.\n";

    $to ="pendoc15@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: welcome.php");

?>