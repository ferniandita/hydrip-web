<?php 
include 'koneksi.php';
$idarea = $_POST['idarea'];
$k1 = $_POST['k1'];
$k2 = $_POST['k2'];
$k3 = $_POST['k3'];
$k4 = $_POST['k4'];
$k5 = $_POST['k5'];
$k6 = $_POST['k6'];
$k7 = $_POST['k7'];
$k8 = $_POST['k8'];
$k9 = $_POST['k9'];
$k10 = $_POST['k10'];
$k11 = $_POST['k11'];
$k12 = $_POST['k12'];
$k13 = $_POST['k13'];
$k14 = $_POST['k14'];
$k15 = $_POST['k15'];
$k16 = $_POST['k16'];
$k17 = $_POST['k17'];
$k18 = $_POST['k18'];
$k19 = $_POST['k19'];
$k20 = $_POST['k20'];
$k21 = $_POST['k21'];
$k22 = $_POST['k22'];
$k23 = $_POST['k23'];
$k24 = $_POST['k24'];
$s1 = $_POST['s1'];
$s2 = $_POST['s2'];
$s3 = $_POST['s3'];
$s4 = $_POST['s4'];
$s5 = $_POST['s5'];
$s6 = $_POST['s6'];
$s7 = $_POST['s7'];
$s8 = $_POST['s8'];
$hum = $_POST['hum'];
$tem = $_POST['tem'];
$level = $_POST['level'];
$ph = $_POST['ph'];
$light = $_POST['light'];

if ($idarea == 1) {
      $query = "INSERT INTO log(time,k1,k2,k3,k4,k5,k6,k7,k8,k9,k10,k11,k12,k13,k14,k15,k16,k17,k18,k19,k20,k21,k22,k23,k24,s1,s2,s3,s4,s5,s6,s7,s8,hum,tem,level,ph,light)
      VALUES(now(),'$k1','$k2','$k3','$k4','$k5','$k6','$k7','$k8','$k9','$k10','$k11','$k12','$k13','$k14','$k15','$k16','$k17','$k18','$k19','$k20','$k21','$k22','$k23','$k24','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$hum','$tem','$level','$ph','$light')";
} elseif ($idarea == 2) {
      $query = "INSERT INTO log1(time,k1,k2,k3,k4,k5,k6,k7,k8,k9,k10,k11,k12,k13,k14,k15,k16,k17,k18,k19,k20,k21,k22,k23,k24,s1,s2,s3,s4,s5,s6,s7,s8,hum,tem,level,ph,light)
      VALUES(now(),'$k1','$k2','$k3','$k4','$k5','$k6','$k7','$k8','$k9','$k10','$k11','$k12','$k13','$k14','$k15','$k16','$k17','$k18','$k19','$k20','$k21','$k22','$k23','$k24','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$hum','$tem','$level','$ph','$light')";
} elseif ($idarea == 3) {
      $query = "INSERT INTO log2(time,k1,k2,k3,k4,k5,k6,k7,k8,k9,k10,k11,k12,k13,k14,k15,k16,k17,k18,k19,k20,k21,k22,k23,k24,s1,s2,s3,s4,s5,s6,s7,s8,hum,tem,level,ph,light) 
      VALUES(now(),'$k1','$k2','$k3','$k4','$k5','$k6','$k7','$k8','$k9','$k10','$k11','$k12','$k13','$k14','$k15','$k16','$k17','$k18','$k19','$k20','$k21','$k22','$k23','$k24','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$hum','$tem','$level','$ph','$light')";
}
$exe = mysql_query($query);
var_dump($query);
var_dump($exe);
header('location:/hydrip/view/simulasi.php');
?>
