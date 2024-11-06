<?php
$servername = "localhost";
$username = "id22190939_max30102";
$password = "Tehgelas1706.";
$dbname = "id22190939_mas30102";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql_jantung = "SELECT detakjantung FROM tbjantung ORDER BY id DESC LIMIT 1";


$result_jantung = $conn->query($sql_jantung);


if ($result_jantung->num_rows > 0 ) {
  $row_jantung = $result_jantung->fetch_assoc();
  
  echo  $row_jantung['detakjantung'];
 
} else {
  echo "No data found";
}

$conn->close();
?>
