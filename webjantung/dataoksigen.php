<?php
$servername = "localhost";
$username = "id22190939_max30102";
$password = "Tehgelas1706.";
$dbname = "id22190939_mas30102";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql_oksigen = "SELECT cekoksigen FROM tboksigen ORDER BY id DESC LIMIT 1";


$result_oksigen = $conn->query($sql_oksigen);

if ($result_oksigen->num_rows > 0) {
  
  $row_oksigen = $result_oksigen->fetch_assoc();
  
  echo  $row_oksigen['cekoksigen'];
} else {
  echo "No data found";
}

$conn->close();
?>
