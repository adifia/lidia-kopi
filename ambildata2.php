<?php
include "koneksi.php";
$sql = "SELECT * FROM kopi where id_perusahaan=" . $id;
$result = $conn->query($sql);
if ($result) {
	$row = mysqli_fetch_assoc($result);
	$data = $row;
} else {
	$data = null;
}
