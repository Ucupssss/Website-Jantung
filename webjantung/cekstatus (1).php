<?php

$hostname = "sql212.infinityfree.com"; // Nama host MySQL
$username = "if0_36561525";      // Nama pengguna MySQL
$password = "AspalBerlubang";          // Kata sandi MySQL
$database1 = "if0_36561525_dbjantung"; // Nama database MySQL pertama
$database2 = "if0_36561525_oksigen"; // Nama database MySQL kedua

// Membuat koneksi ke database pertama
$conn1 = mysqli_connect("sql212.infinityfree.com", "if0_36561525", "AspalBerlubang", "if0_36561525_dbjantung");
if (!$conn1) {
    die("Koneksi gagal ke database pertama: " . mysqli_connect_error());
}

// Membuat koneksi ke database kedua
$conn2 = mysqli_connect("sql212.infinityfree.com", "if0_36561525", "AspalBerlubang", "if0_36561525_oksigen");
if (!$conn2) {
    die("Koneksi gagal ke database kedua: " . mysqli_connect_error());
}

// Mengirimkan query ke database pertama untuk mengambil data detak jantung
$sql1 = "SELECT detakjantung FROM tbjantung ORDER BY id DESC LIMIT 1";
$result1 = mysqli_query($conn1, $sql1);
if (!$result1) {
    die("Error pada query tbjantung: " . mysqli_error($conn1));
}
$row1 = mysqli_fetch_assoc($result1);
$detakjantung = $row1["detakjantung"];

// Mengirimkan query ke database kedua untuk mengambil data oksigen
$sql2 = "SELECT cekoksigen FROM tboksigen ORDER BY id DESC LIMIT 1";
$result2 = mysqli_query($conn2, $sql2);
if (!$result2) {
    die("Error pada query oksigen: " . mysqli_error($conn2));
}
$row2 = mysqli_fetch_assoc($result2);
$cekoksigen = $row2["cekoksigen"];

// Menentukan status berdasarkan detak jantung dan oksigen
if  ($detakjantung == "NoFinger" && $cekoksigen == "NoFinger" ) {
    echo "Status : -"; 
} elseif ($detakjantung > 60 && $detakjantung < 100 && $cekoksigen > 80 && $cekoksigen < 100) {
    echo "Status : Normal";
} elseif ($detakjantung > 100 && $cekoksigen < 80) {
    echo "Status : Hipertensi";
} else {
    echo "Status : Tidak Normal";
}

// Menutup koneksi
mysqli_close($conn1);
mysqli_close($conn2);
?>
