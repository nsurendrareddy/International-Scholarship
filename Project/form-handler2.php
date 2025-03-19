<?php
$name = $_POST['first name'];
$name = $_POST['last name'];
$dateofbrith = $_POST['date of brith'];
$visitor_email = $_POST['email'];
$visitor_number = $_POST['number'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$city = $_POST['city'];
$pin_code = $_POST['pin code'];
$state = $_POST['state'];
$country = $_POST['country'];
$hobbies = $_POST['hobbies'];
$qualification = $_POST['qualification'];
$course = $_POST['course'];

$email_from = 'info@internationalscholarship.com';

$email_subject = 'New Form Submission';

$email_body = "First Name: $name.\n".
               "Last Name: $name.\n".
               "Date Of Birth: $dateofbrith.\n".
               "User Email: $visitor_email.\n".
               "Mobile Number: $visitor_number.\n".
               "Gender: $gender.\n".
               "Address: $address.\n".
               "City: $city.\n".
               "Pin code: $pin_code.\n".
               "State: $state.\n".
               "Hobbies: $hobbies.\n".
               "Qualification: $qualification.\n".
               "Course: $course.\n".

$to = 'nsurendrareddy3@gmail.com';

$header = "From: $email_from \r\n";

$header .= "Replay-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$header);

header("Location: contact.html");
?>