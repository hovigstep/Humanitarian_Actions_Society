<?php 
if(isset($_POST['submit'])){
    $to = "info@cghas.ca"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $subject = "Global Humanitarian Actions Society";
    $message = $first_name . " "  . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Thank you ,Inquiry Sent, we will contact you shortly.";
    }
?>
