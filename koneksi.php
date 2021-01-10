<?php
// $host = "localhost";
// $user = "root";
// $pass = "";
// $name = "gis";

$host = "us-cdbr-east-02.cleardb.com";
$user = "b3887bf0396085";
$pass = "fcba0ae9";
$name = "heroku_d3d7b33a7b30232";

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
