<?php
include 'koneksi.php';
$array = array();
$query = "SELECT * FROM log ORDER BY id DESC LIMIT 1";
$exe = mysql_query($query);
while($row = mysql_fetch_array($exe))
{
	$idarea = 1;
	$date = date('d M Y H:i:s', strtotime($row['time']));
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

	$hum = $row['hum'];
	$tem = $row['tem'];
	$lvl = $row['level'];
	$ph = $row['ph'];
	$li = $row['light'];

	$moist1 = number_format((($k1+$k2+$k3+$k4+$k5+$k6)/6),1);  
	$moist2 = number_format((($k7+$k8+$k9+$k10+$k11+$k12)/6),1);
	$moist3 = number_format((($k13+$k14+$k15+$k16+$k17+$k18)/6),1);
	$moist4 = number_format((($k19+$k20+$k21+$k22+$k23+$k24)/6),1);
	$suhu = number_format((($s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8)/8),1);
	
	$data1 = [
		'idarea' => $idarea,
		'date' => $date,
		'hum'=> $hum,
		'airtem' => $tem,
		'level' => $lvl,
		'ph' => $ph,
		'light' => $li,
		'moist1' => $moist1,
		'moist2' => $moist2,
		'moist3' => $moist3,
		'moist4' => $moist4,
		'suhu' => $suhu
	];
}

$query = "SELECT * FROM log1 ORDER BY id DESC LIMIT 1";
$exe = mysql_query($query);
while($row = mysql_fetch_array($exe))
{
	$idarea = 2;   
	$date = date('d M Y H:i:s', strtotime($row['time']));
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

	$hum = $row['hum'];
	$tem = $row['tem'];
	$lvl = $row['level'];
	$ph = $row['ph'];
	$li = $row['light'];

	$moist1 = number_format((($k1+$k2+$k3+$k4+$k5+$k6)/6),1);  
	$moist2 = number_format((($k7+$k8+$k9+$k10+$k11+$k12)/6),1);
	$moist3 = number_format((($k13+$k14+$k15+$k16+$k17+$k18)/6),1);
	$moist4 = number_format((($k19+$k20+$k21+$k22+$k23+$k24)/6),1);
	$suhu = number_format((($s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8)/8),1);
	
	$data2 = [
		'idarea' => $idarea,
		'date' => $date,
		'hum'=> $hum,
		'airtem' => $tem,
		'level' => $lvl,
		'ph' => $ph,
		'light' => $li,
		'moist1' => $moist1,
		'moist2' => $moist2,
		'moist3' => $moist3,
		'moist4' => $moist4,
		'suhu' => $suhu
	];
}

$query = "SELECT * FROM log2 ORDER BY id DESC LIMIT 1";
$exe = mysql_query($query);
while($row = mysql_fetch_array($exe))
{
	$idarea = 3;   
	$date = date('d M Y H:i:s', strtotime($row['time']));
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

	$hum = $row['hum'];
	$tem = $row['tem'];
	$lvl = $row['level'];
	$ph = $row['ph'];
	$li = $row['light'];

	$moist1 = number_format((($k1+$k2+$k3+$k4+$k5+$k6)/6),1);  
	$moist2 = number_format((($k7+$k8+$k9+$k10+$k11+$k12)/6),1);
	$moist3 = number_format((($k13+$k14+$k15+$k16+$k17+$k18)/6),1);
	$moist4 = number_format((($k19+$k20+$k21+$k22+$k23+$k24)/6),1);
	$suhu = number_format((($s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8)/8),1);
	
	$data3 = [
		'idarea' => $idarea,
		'date' => $date,
		'hum'=> $hum,
		'airtem' => $tem,
		'level' => $lvl,
		'ph' => $ph,
		'light' => $li,
		'moist1' => $moist1,
		'moist2' => $moist2,
		'moist3' => $moist3,
		'moist4' => $moist4,
		'suhu' => $suhu
	];
}

array_push($array, $data1, $data2, $data3);
if($exe){
	$response['error'] = FALSE;
	$response['data_monitoring'] = $array;
	echo json_encode($response);
}
?>