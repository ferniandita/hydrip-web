<?php
include 'koneksi.php';
$array_control=array();
$query = "SELECT * FROM control";
$exe = mysql_query($query);
while($row = mysql_fetch_array($exe)){
	$id = $row['id'];
	$C 	= $row['C'];
	$M1	= $row['M1'];
	$M2	= $row['M2'];
	$M3	= $row['M3'];
	$M4	= $row['M4'];

	$data_control = [
		'id' => $id,
		'auto' => $C,
		'manual1' => $M1,
		'manual2' => $M2,
		'manual3' => $M3,
		'manual4' => $M4
	];
	array_push($array_control, $data_control);
}
if($exe){
	$response['error'] = FALSE;
	$response['data_control'] = $array_control;
	echo json_encode($response);
}
?>