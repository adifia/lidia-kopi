<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "gis";

// $koneksi = mysql_connect($host, $user, $pass)or die ("koneksi ke database gagal!");
// mysql_select_db ($name, $koneksi) or die ("tidak ada database yang dipilih!");
// 


// membuat koneksi
$conn = new mysqli($host, $user, $pass, $name);
// $conn = mysqli_connect($host, $user, $pass, $name);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil";
// mysqli_close($conn);
