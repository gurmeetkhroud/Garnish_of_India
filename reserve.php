<!DOCTYPE html>
<html>
<head>
<title>Reservation</title>
</head>
<body>

<?php
if(isset($_POST['submit'])){
    $to = "gurmeetroks@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $state = $_POST['state'];
    $datepicker = $_POST['datepicker'];
    $phone = $_POST['phone'];
    $guest = $_POST['guest'];
    $email = $_POST['email'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " has the booking for " . $guest . " on " . $datepicker . " His phone no is " . $phone . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Thank you " . $first_name . ", Your reservation has been completed";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
<a href="index.html"><button>Home</button></a>
</body>

</html>
