<?php
include 'koneksi.php';
$array = array();
$query = "SELECT * FROM log ORDER BY id DESC LIMIT 1";
$exe = mysql_query($query);
while($row = mysql_fetch_array($exe))
{
	$k1 = $row['k1'];
	$k2 = $row['k2'];
	$k3 = $row['k3'];
	$k4 = $row['k4'];
	$k5 = $row['k5'];
	$k6 = $row['k6'];

	$k7 = $row['k7'];
	$k8 = $row['k8'];
	$k9 = $row['k9'];
	$k10 = $row['k10'];
	$k11 = $row['k11'];
	$k12 = $row['k12'];

	$k13 = $row['k13'];
	$k14 = $row['k14'];
	$k15 = $row['k15'];
	$k16 = $row['k16'];
	$k17 = $row['k17'];
	$k18 = $row['k18'];

	$k19 = $row['k19'];
	$k20 = $row['k20'];
	$k21 = $row['k21'];
	$k22 = $row['k22'];
	$k23 = $row['k23'];
	$k24 = $row['k24'];

	$s1 = $row['s1'];
	$s2 = $row['s2'];
	$s3 = $row['s3'];
	$s4 = $row['s4'];
	$s5 = $row['s5'];
	$s6 = $row['s6'];
	$s7 = $row['s7'];
	$s8 = $row['s8'];

	$idarea1 = 1;
	$time1 = $row['time'];
	$moist11 = number_format((($k1+$k2+$k3+$k4+$k5+$k6)/6),1);  
	$moist12 = number_format((($k7+$k8+$k9+$k10+$k11+$k12)/6),1);
	$moist13 = number_format((($k13+$k14+$k15+$k16+$k17+$k18)/6),1);
	$moist14 = number_format((($k19+$k20+$k21+$k22+$k23+$k24)/6),1);
	$suhu1 = number_format((($s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8)/8),1);
	$hum1 = $row['hum'];
	$tem1 = $row['tem'];
	$level1 = $row['level'];
	$ph1 = $row['ph'];
	$light1 = $row['light'];
	$note1 = $row['note'];
}

$query = "SELECT * FROM log1 ORDER BY id DESC LIMIT 1";
$exe = mysql_query($query);
while($row = mysql_fetch_array($exe))
{
	$k1 = $row['k1'];
	$k2 = $row['k2'];
	$k3 = $row['k3'];
	$k4 = $row['k4'];
	$k5 = $row['k5'];
	$k6 = $row['k6'];

	$k7 = $row['k7'];
	$k8 = $row['k8'];
	$k9 = $row['k9'];
	$k10 = $row['k10'];
	$k11 = $row['k11'];
	$k12 = $row['k12'];

	$k13 = $row['k13'];
	$k14 = $row['k14'];
	$k15 = $row['k15'];
	$k16 = $row['k16'];
	$k17 = $row['k17'];
	$k18 = $row['k18'];

	$k19 = $row['k19'];
	$k20 = $row['k20'];
	$k21 = $row['k21'];
	$k22 = $row['k22'];
	$k23 = $row['k23'];
	$k24 = $row['k24'];

	$s1 = $row['s1'];
	$s2 = $row['s2'];
	$s3 = $row['s3'];
	$s4 = $row['s4'];
	$s5 = $row['s5'];
	$s6 = $row['s6'];
	$s7 = $row['s7'];
	$s8 = $row['s8'];

	$idarea2 = 2;
	$time2 = $row['time'];
	$moist21 = number_format((($k1+$k2+$k3+$k4+$k5+$k6)/6),1);  
	$moist22 = number_format((($k7+$k8+$k9+$k10+$k11+$k12)/6),1);
	$moist23 = number_format((($k13+$k14+$k15+$k16+$k17+$k18)/6),1);
	$moist24 = number_format((($k19+$k20+$k21+$k22+$k23+$k24)/6),1);
	$suhu2 = number_format((($s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8)/8),1);
	$hum2 = $row['hum'];
	$tem2 = $row['tem'];
	$level2 = $row['level'];
	$ph2 = $row['ph'];
	$light2 = $row['light'];
	$note2 = $row['note'];
}

$query = "SELECT * FROM log2 ORDER BY id DESC LIMIT 1";
$exe = mysql_query($query);
while($row = mysql_fetch_array($exe))
{
	$k1 = $row['k1'];
	$k2 = $row['k2'];
	$k3 = $row['k3'];
	$k4 = $row['k4'];
	$k5 = $row['k5'];
	$k6 = $row['k6'];

	$k7 = $row['k7'];
	$k8 = $row['k8'];
	$k9 = $row['k9'];
	$k10 = $row['k10'];
	$k11 = $row['k11'];
	$k12 = $row['k12'];

	$k13 = $row['k13'];
	$k14 = $row['k14'];
	$k15 = $row['k15'];
	$k16 = $row['k16'];
	$k17 = $row['k17'];
	$k18 = $row['k18'];

	$k19 = $row['k19'];
	$k20 = $row['k20'];
	$k21 = $row['k21'];
	$k22 = $row['k22'];
	$k23 = $row['k23'];
	$k24 = $row['k24'];

	$s1 = $row['s1'];
	$s2 = $row['s2'];
	$s3 = $row['s3'];
	$s4 = $row['s4'];
	$s5 = $row['s5'];
	$s6 = $row['s6'];
	$s7 = $row['s7'];
	$s8 = $row['s8'];

	$idarea3 = 3;
	$time3 = $row['time'];
	$moist31 = number_format((($k1+$k2+$k3+$k4+$k5+$k6)/6),1);  
	$moist32 = number_format((($k7+$k8+$k9+$k10+$k11+$k12)/6),1);
	$moist33 = number_format((($k13+$k14+$k15+$k16+$k17+$k18)/6),1);
	$moist34 = number_format((($k19+$k20+$k21+$k22+$k23+$k24)/6),1);
	$suhu3 = number_format((($s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8)/8),1);
	$hum3 = $row['hum'];
	$tem3 = $row['tem'];
	$level3 = $row['level'];
	$ph3 = $row['ph'];
	$light3 = $row['light'];
	$note3 = $row['note'];
}

$data = array(
	'idarea' => array($idarea1,$idarea2,$idarea3),
	'time' => array($time1,$time2,$time3),
	'moist1' => array($moist11,$moist21,$moist31),
	'moist2' => array($moist12,$moist22,$moist32),
	'moist3' => array($moist13,$moist23,$moist33),
	'moist4' => array($moist14,$moist24,$moist34),
	'suhu' => array($suhu1,$suhu2,$suhu3),
	'hum' => array($hum1,$hum2,$hum3),
	'tem' => array($tem1,$tem2,$tem3),
	'level' => array($level1,$level2,$level3),
	'ph' => array($ph1,$ph2,$ph3),
	'light' => array($light1,$light2,$light3),
	'note' => array($note1,$note2,$note3)
);

$url = 'http://103.195.90.35:3100/hydrip/APIandroid/api_insert.php?';
$options = array(
	'http' => array(
		'header'  => "Content-type: application/x-www-form-urlencoded",
		'method'  => 'POST',
		'content' => http_build_query($data)
	)
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
var_dump($options); echo "<br><br><br>";
var_dump($result); echo "<br><br><br>";
?>