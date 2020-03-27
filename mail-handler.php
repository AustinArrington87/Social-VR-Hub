<?php 
if(isset($_POST['submit'])){
    $to = "your_email1, your_email2"; // this is your Email address - enter where you want notification sent
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $hub_name = $_POST['hub_name'];
    $iframe = $_POST['iframe'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = "Here is a copy of your message " . $name . "\n\n" . $_POST['iframe'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['iframe'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location: thank-you.html');
exit();
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
    
?>