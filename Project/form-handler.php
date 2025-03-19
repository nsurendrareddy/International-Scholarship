<?php
$name = $_POST['first name'];
$name = $_POST['last name'];
$dateofbrith = $_POST['dateofbrith'];
$visitor_email = $_POST['email'];
$visitor_number = $_POST['number'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$city = $_POST['city'];
$pin_code = $_POST['pincode'];
$state = $_POST['state'];
$country = $_POST['country'];
$hobbies = $_POST['hobbies'];
$qualification = $_POST['qualification'];
$course = $_POST['course'];
 $conn =new mysqli('localhost','root','','application');

if ($conn-›connect_error){
die( 'Connection Failed : '.$conn-›connect_error);
}else{
$stmt = $conn-›prepare("insert into registration(firstName, lastName, dateofbrith, email, number, gender, address, city, pincode, state, country, hobbies, qualification, course)
values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ");
$stmt->bind_param("ssisisssisssss",$firstName, $lastName, $dateofbrith, $email, $number, $gender, $address, $city, $pincode, $state, $country, $hobbies, $qualification, $course);
§stmt-›execute();
echo "registration Successfully...";
$stmt-›close();
$conn-›close();
}