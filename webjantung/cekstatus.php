<?php

$hostname = "localhost"; // Nama host MySQL
$username = "root";      // Nama pengguna MySQL
$password = "";          // Kata sandi MySQL
$database = "max30102"; // Nama database MySQL

// Membuat koneksi
$conn = mysqli_connect("localhost", "root", "", "max30102");

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mengirimkan query ke database untuk mengambil data
$sql = "SELECT * FROM tbjantung";
$result = mysqli_query($conn, $sql);

// Memeriksa apakah query berhasil dieksekusi
if (!$result) {
    die("Error: " . mysqli_error($conn));
}

// Mendapatkan hasil query dalam bentuk array asosiatif
$row = mysqli_fetch_assoc($result);

// Mengambil nilai detak jantung dari hasil query
$detakjantung = $row["detakjantung"];

// Menampilkan nilai detak jantung
if ($detakjantung == "NoFinger") 
    echo "Status : -";
elseif ($detakjantung >= 50 && $detakjantung <= 100) 
    echo "Status : Normal";
else
    echo "Status : Tidak Normal";


// Menutup koneksi
mysqli_close($conn);
?>
