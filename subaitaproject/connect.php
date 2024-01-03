<?php

session_start();
$_SESSION["registration_success"] = true;

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "webroyal";




try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $name = $_POST['Name'];
  $email = $_POST['Email'];
  $phoneNumber = $_POST['PhoneNumber'];
  $yearsOfExperience = $_POST['YearsOfExperience'];
  $vacancy = $_POST['vacancy'];

  $resume = $_FILES["uploadfile"]["name"];
  $tempnamea = $_FILES["uploadfile"]["tmp_name"];
  $foldera = "./Resume/" . $resume;
  $photo = $_FILES["uploadfilea"]["name"];
  $tempname = $_FILES["uploadfilea"]["tmp_name"];
  $folder = "./Photo/" . $photo;
  $coverletter = $_POST['Coverletter'];

  $sql = "INSERT INTO career (Name, Experience, Email, PhoneNumber, Vacancy, resume, photo, Coverletter) VALUES ('$name', '$yearsOfExperience', '$email','$phoneNumber','$vacancy','$resume','$photo','$coverletter')";

  move_uploaded_file($tempnamea, $foldera);
  move_uploaded_file($tempname, $folder);

  $conn->exec($sql);
  
  // Redirect to login.php after successful registration
  header("Location: conn1.php");
  exit();
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
