<?php
include 'koneksi.php';
$url2 = 'http://localhost/hydrip/APIwebsite/api_control.php';
$content2 = file_get_contents($url2);
$decode2 = json_decode($content2, true);
$data2 = $decode2['data_control'];

$url = 'http://103.195.90.35:3100/hydrip/APIandroid/api_update2.php';
$content = file_get_contents($url);
$decode = json_decode($content, true);
$data = $decode['data'];
$amount = count($data);

var_dump($data); echo "<br><br>";
var_dump($data2);
for ($i = 0; $i < $amount ; $i++) { 
	$id = $data2[$i]['id'];
	$auto = $data2[$i]['auto'];
	$manual1 = $data2[$i]['manual1'];
	$manual2 = $data2[$i]['manual2'];
	$manual3 = $data2[$i]['manual3'];
	$manual4 = $data2[$i]['manual4'];
	$idarea = $data[$i]['idarea'];
	$C = $data[$i]['C'];
	$M1 = $data[$i]['M1'];
	$M2 = $data[$i]['M2'];
	$M3 = $data[$i]['M3'];
	$M4 = $data[$i]['M4'];

	if ($auto != $C) {
		$query = "UPDATE control set C='$C', M1='$M1', M2='$M2', M3='$M3', M4='$M4' WHERE id='$id'";
		mysql_query($query);
	}
	if ($manual1 != $M1) {
		$query = "UPDATE control set M1='$M1' WHERE id='$id'";
		mysql_query($query);
	}
	if ($manual2 != $M2) {
		$query = "UPDATE control set M2='$M2' WHERE id='$id'";
		mysql_query($query);
	}
	if ($manual3 != $M3) {
		$query = "UPDATE control set M3='$M3' WHERE id='$id'";
		mysql_query($query);
	}
	if ($manual4 != $M4) {
		$query = "UPDATE control set M4='$M4' WHERE id='$id'";
		mysql_query($query);
	}
	// var_dump($exe);
}
?>