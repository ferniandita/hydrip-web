<?php
include 'koneksi.php';
// include '../API/decode.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$id = $_POST['id'];
	$auto = $_POST['auto'];
	$manual1 = $_POST['manual1'];
	$manual2 = $_POST['manual2'];
	$manual3 = $_POST['manual3'];
	$manual4 = $_POST['manual4'];
	$idmanual = $_POST['idmanual'];
	$statusManual = $_POST['statusManual'];

	if (isset($_POST['auto'])) {
		$query = "UPDATE control set C='$auto', M1='$manual1', M2='$manual2', M3='$manual3', M4='$manual4' WHERE id='$id'";
	} else {
		if ($idmanual==1) {
			$query = "UPDATE control set M1='$statusManual' WHERE id='$id'";
		}
		if ($idmanual==2) {
			$query = "UPDATE control set M2='$statusManual' WHERE id='$id'";
		}
		if ($idmanual==3) {
			$query = "UPDATE control set M3='$statusManual' WHERE id='$id'";
		}
		if ($idmanual==4) {
			$query = "UPDATE control set M4='$statusManual' WHERE id='$id'";
		}
	}
	$exe = mysql_query($query);

	$url = 'http://103.195.90.35:3100/hydrip/APIandroid/api_update.php';
	$data = [
		'id_area' => $id,
		'auto' => $auto,
		'manual1' => $manual1,
		'manual2' => $manual2,
		'manual3' => $manual3,
		'manual4' => $manual4,
		'idmanual' => $idmanual,
		'statusManual' => $statusManual
	];
	$options = array(
		'http' => array(
			'header'  => "Content-type: application/x-www-form-urlencoded",
			'method'  => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);

	if($exe){
		$response['error'] = FALSE;
		$response['data'] = $data;
		echo json_encode($response);
	}
}
?>