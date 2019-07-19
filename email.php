<?php
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $referer = filter_input(INPUT_SERVER, 'HTTP_REFERER');
        $name = $_POST["name"];
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        $message = $_POST["message"];
        $from = "info@datablockssolutions.com";
        $to = "datablocksolutions@gmail.com";
        $subject = "Mail From Website";
        $a = "Mail notification from website Name:" . $name ;
        $b="    Email: ". $email;
        $c= "  Contact Number: " . $contact ;
        $d= " Message: " . $message ;
        $message=$a.$b.$c.$d;
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
        header("Location: $referer");
        echo "The email message was sent.";
    ?>


