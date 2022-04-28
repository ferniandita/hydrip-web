<?php
$url1 = 'http://localhost/hydrip/APIwebsite/api_monitoring.php';
$isi1 = file_get_contents($url1);
$decode1 = json_decode($isi1, true);
$data_monitoring = $decode1['data_monitoring'];
$amount = count($data_monitoring);

$url2 = 'http://localhost/hydrip/APIwebsite/api_control.php';
$isi2 = file_get_contents($url2);
$decode2 = json_decode($isi2, true);
$data_control = $decode2['data_control'];
$amount_control = count($data_control);

// var_dump($decode1);
// var_dump($data_monitoring); echo "<br><br><br>";
// var_dump($data_control); echo "<br><br><br>";

// $url3 = 'http://localhost/hydrip/API/api_update2.php';
// $isi3 = file_get_contents($url3);
// $decode3 = json_decode($isi3, true);
// $data = $decode3['data'];
// var_dump($data);
?>