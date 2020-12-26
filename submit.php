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
$mosquito_net = $_POST['mosquito_net'];

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

if(isset($_GET['id'])){
  $sql = "UPDATE tbl_info SET first_name='$first_name', last_name='$last_name', other_name='$other_name', date_of_birth='$date_of_birth', gender='$gender', last_hospital_visit='$last_hospital_visit', address='$address', city='$city', region= '$region', phone_number='$phone_number', blood_preasure='$blood_preasure', pulse='$pulse', malaria_test='$malaria_test', weight='$weight', height='$height', bmi='$bmi', note='$note', mosquito_net='$mosquito_net' WHERE no='$_GET[id]'";
  
  if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
  } else {
    echo mysqli_error($conn);
  }
  
}
else{
$sql = "INSERT INTO tbl_info 
(id, first_name, last_name, other_name, date_of_birth, gender, last_hospital_visit, address, city, region, phone_number, blood_preasure, pulse, malaria_test, weight, height, bmi, note, mosquito_net)
VALUES 
('$id', '$first_name', '$last_name', '$other_name', '$date_of_birth', '$gender', '$last_hospital_visit', '$address', '$city', '$region', '$phone_number', '$blood_preasure', '$pulse', '$malaria_test', '$weight', '$height', '$bmi', '$note', '$mosquito_net')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo mysqli_error($conn);
}
}


mysqli_close($conn);

header("Refresh:3; url=index.php");
?>