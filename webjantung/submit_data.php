<?php
$servername = "localhost";
$username = "id22190939_max30102";
$password = "Tehgelas1706.";
$dbname = "id22190939_mas30102";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$heartRate = $_GET['heartRate'];
$spo2 = $_GET['spo2'];

$sql_jantung = "INSERT INTO tbjantung (detakjantung) VALUES ('$heartRate')";
$sql_oksigen = "INSERT INTO tboksigen (cekoksigen) VALUES ('$spo2')";

if ($conn->query($sql_jantung) === TRUE && $conn->query($sql_oksigen) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
