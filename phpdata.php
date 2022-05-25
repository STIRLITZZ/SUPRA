<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dima";

$nume = $_POST['firstName'];
$email = $_POST['Email'];
$prenume = $_POST['LastName'];
$telefon = $_POST['phone'];
$adresa = $_POST['Adresa'];
$profession = $_POST['profession'];
$link = $_POST['link'];
$institutia = $_POST['Institutia'];
$DataIncE = $_POST['DataIncE'];
$DataSfrE = $_POST['DataSfrE'];
$education = $_POST['education'];
$postul = $_POST['postul'];
$DataIncL = $_POST['DataIncL'];
$DataSfrL = $_POST['DataSfrL'];
$oras = $_POST['oras'];
$company = $_POST['company'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO date (nume, prenume, email, telefon ,adresa, profession, link, institutia, DataIncE, DataSfrE, education, postul, DataIncL, DataSfrL, oras, company)
VALUES ('$nume', '$prenume', '$email', '$telefon','$adresa' ,'$profession', '$link', '$institutia', '$DataIncE', '$DataSfrE', '$education', '$postul', '$DataIncL', '$DataSfrL', '$DataSfrL', '$oras')";

if ($conn->query($sql) === TRUE) {
  header ("Location: view.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
