<?php

$id =   $_POST['id'];
$first_name =   $_POST['first_name'];
$last_name =   $_POST['last_name'];
$other_name =   $_POST['other_name'];
$date_of_birth =   $_POST['date_of_birth'];
$gender =   $_POST['gender'];
$last_hospital_visit =   $_POST['last_visit'];
$address =   $_POST['address'];
$city =   $_POST['city'];
$region =   $_POST['region'];
$phone_number =   $_POST['phone'];
$blood_preasure =   $_POST['blood_preasure'];
$pulse =   $_POST['pulse'];
$malaria_test =   $_POST['malaria'];
$weight =   $_POST['weight'];
$height =   $_POST['height'];
$bmi =   $_POST['bmi'];
$note =   $_POST['note'];


$servername = "localhost";
$database = "ngo";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO tbl_info 
(id, first_name, last_name, other_name, date_of_birth, gender, last_hospital_visit, address, city, region, phone_number, blood_preasure, pulse, malaria_test, weight, height, bmi, note)
VALUES 
('$id', '$first_name', '$last_name', '$other_name', '$date_of_birth', '$gender', '$last_hospital_visit', '$address', '$city', '$region', '$phone_number', '$blood_preasure', '$pulse', '$malaria_test', '$weight', '$height', '$bmi', '$note')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo mysqli_error($conn);
}



mysqli_close($conn);

header("Refresh:5; url=index.php");
?>