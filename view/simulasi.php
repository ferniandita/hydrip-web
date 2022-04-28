<?php
include '../API/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>hydrip</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/hydrip.css">
	<script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
</head>
<body class="bg-grey1">
	<div class="topnav bg-grey1">
		<img src="../assets/images/logo-web.png">
		<h1>SIMULASI INPUT DATA SENSOR</h1>
	</div>
	<div class="row2">
		<center>
			<div class="card2 bg-grey2">
				<form action="../API/sim_insert.php" method="post">
					<center>
						<table>
							<tr>
								<td colspan="18">
									<center><br><b>ID AREA:</b>
										<select name="idarea" id="input2">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select><br><br>
									</center>
								</td>
							</tr>
							<tr height="50px">
								<td id="text" width="30px">K1</td>
								<td>:</td>
								<td><input id="input" type="text" name="k1"></td>
								<td id="text" width="30px">K2</td>
								<td>:</td>
								<td><input id="input" type="text" name="k2"></td>
								<td id="text" width="30px">K3</td>
								<td>:</td>
								<td><input id="input" type="text" name="k3"></td>
								<td id="text" width="30px">K4</td>
								<td>:</td>
								<td><input id="input" type="text" name="k4"></td>
								<td id="text" width="30px">K5</td>
								<td>:</td>
								<td><input id="input" type="text" name="k5"></td>
								<td id="text" width="30px">K6</td>
								<td>:</td>
								<td><input id="input" type="text" name="k6"></td>
							</tr>
							<tr height="50px">
								<td id="text">K7</td>
								<td>:</td>
								<td><input id="input" type="text" name="k7"></td>
								<td id="text">K8</td>
								<td>:</td>
								<td><input id="input" type="text" name="k8"></td>
								<td id="text">K9</td>
								<td>:</td>
								<td><input id="input" type="text" name="k9"></td>
								<td id="text">K10</td>
								<td>:</td>
								<td><input id="input" type="text" name="k10"></td>
								<td id="text">K11</td>
								<td>:</td>
								<td><input id="input" type="text" name="k11"></td>
								<td id="text">K12</td>
								<td>:</td>
								<td><input id="input" type="text" name="k12"></td>
							</tr>
							<tr height="50px">
								<td id="text">K13</td>
								<td>:</td>
								<td><input id="input" type="text" name="k13"></td>
								<td id="text">K14</td>
								<td>:</td>
								<td><input id="input" type="text" name="k14"></td>
								<td id="text">K15</td>
								<td>:</td>
								<td><input id="input" type="text" name="k15"></td>
								<td id="text">K16</td>
								<td>:</td>
								<td><input id="input" type="text" name="k16"></td>
								<td id="text">K17</td>
								<td>:</td>
								<td><input id="input" type="text" name="k17"></td>
								<td id="text">K18</td>
								<td>:</td>
								<td><input id="input" type="text" name="k18"></td>
							</tr>
							<tr height="50px">
								<td id="text">K19</td>
								<td>:</td>
								<td><input id="input" type="text" name="k19"></td>
								<td id="text">K20</td>
								<td>:</td>
								<td><input id="input" type="text" name="k20"></td>
								<td id="text">K21</td>
								<td>:</td>
								<td><input id="input" type="text" name="k21"></td>
								<td id="text">K22</td>
								<td>:</td>
								<td><input id="input" type="text" name="k22"></td>
								<td id="text">K23</td>
								<td>:</td>
								<td><input id="input" type="text" name="k23"></td>
								<td id="text">K24</td>
								<td>:</td>
								<td><input id="input" type="text" name="k24"></td>
							</tr>
							<tr height="50px">
								<td id="text">S1</td>
								<td>:</td>
								<td><input id="input" type="text" name="s1"></td>
								<td id="text">S2</td>
								<td>:</td>
								<td><input id="input" type="text" name="s2"></td>
								<td id="text">S3</td>
								<td>:</td>
								<td><input id="input" type="text" name="s3"></td>
								<td id="text">S4</td>
								<td>:</td>
								<td><input id="input" type="text" name="s4"></td>
								<td id="text">S5</td>
								<td>:</td>
								<td><input id="input" type="text" name="s5"></td>
								<td id="text">S6</td>
								<td>:</td>
								<td><input id="input" type="text" name="s6"></td>
							</tr>
							<tr height="50px">
								<td id="text">S7</td>
								<td>:</td>
								<td><input id="input" type="text" name="s7"></td>
								<td id="text">S8</td>
								<td>:</td>
								<td><input id="input" type="text" name="s8"></td>
								<td id="text">Hum</td>
								<td>:</td>
								<td><input id="input" type="text" name="hum"></td>
								<td id="text">Tem</td>
								<td>:</td>
								<td><input id="input" type="text" name="tem"></td>
								<td id="text">Level</td>
								<td>:</td>
								<td><input id="input" type="text" name="level"></td>
								<td id="text">pH</td>
								<td>:</td>
								<td><input id="input" type="text" name="ph"></td>
							</tr>
							<tr height="50px">
								<td id="text">Light</td>
								<td>:</td>
								<td><input id="input" type="text" name="light"></td>
								<td colspan="16"><input id="submit" type="submit" value="INPUT"></td>
							</tr>
						</table>
					</center>
					<table id="keterangan">
						<tr>
							<th colspan="12" style="text-align: left;">Keterangan:</th>
						</tr>
						<tr>
							<td>K1-K24</td>
							<td>:</td>
							<td id="ket">Nilai Sensor Kelembaban Tanah</td>
							<td>S1-S8</td>
							<td>:</td>
							<td id="ket">Nilai Sensor Suhu Tanah</td>
							<td>Hum</td>
							<td>:</td>
							<td id="ket">Nilai Sensor Kelembaban Udara</td>
							<td>Tem</td>
							<td>:</td>
							<td id="ket">Nilai Sensor Suhu Udara</td>
						<tr>
							<td>Level</td>
							<td>:</td>
							<td>Nilai Sensor Water Level</td>
							<td>pH</td>
							<td>:</td>
							<td>Nilai Sensor pH</td>
							<td>Light</td>
							<td>:</td>
							<td>Nilai Sensor Intensitas Cahaya</td>
						</tr>
					</table>
				</form>
			</div>
		</center>
	</div>
</body>
<script type="text/javascript" src="../assets/js/hydrip.js"></script>
</html>