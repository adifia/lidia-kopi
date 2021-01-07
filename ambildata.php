<?php
include "koneksi.php";
$sql = "SELECT * FROM kopi";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$posts = array();
	while ($row = $result->fetch_assoc()) {
		$posts[] = $row;
	}
	$data = $posts;
} else {
	$data = null;
}
// echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";

// if ($Q) {
// $posts = array();
// if (myql_num_rows($Q)) {
// while ($post = mysql_fetch_assoc($Q)) {
// $posts[] = $post;
// }
// }
// $data = json_encode(array('results' => $posts));
// echo $data;
// }
