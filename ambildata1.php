<?php
include "koneksi1.php";
$Q = mysql_query("SELECT * FROM kopi")or die(mysql_query-error());
if ($Q){
	$posts = array();
		if (mysql_num_rows($Q))
		{
			while($post = mysql_fetch_assoc($Q)){
				$posts[] = $post;
				
			}
		}
		$data = json_encode(array('results'=>$posts));
		echo $data;
}
