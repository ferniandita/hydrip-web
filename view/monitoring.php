<?php
include 'decode.php';
// include '../API/api_insert1.php';
// include '../API/api_insert2.php';
// include '../API/api_insert3.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>hydrip</title>
	<link rel="stylesheet" type="text/css" href="/hydrip/assets/css/hydrip.css">
	<script type="text/javascript" src="/assets/js/jquery-3.2.1.min.js"></script>
</head>
<body class="bg-grey1">
	<div class="topnav bg-grey1">
		<img src="/hydrip/assets/images/logo-web.png">
		<a class="active" href="">Monitoring</a>
		<a href="control.php">Control</a>
		<input type="button" name="btnRefresh" value="REFRESH" class="button" onclick="window.location.href='/hydrip/view/monitoring.php'">
	</div>
	<div class="row">
		<?php
		for ($i=0; $i<$amount; $i++){
			print("<div class='column'>
				<div class='card bg-grey2'>
				<div class='title'>
				<h3>Area ".$data_monitoring[$i]['idarea']."</h3>
				</div>
				<div class='content'>
				<br>
				<table style=margin-left: 12px;>
				<tr>
				<th><b>Last Update: </b></th>
				<th style=font-style: italic;>".$data_monitoring[$i]['date']."</th>
				</tr>
				</table><br>				
				</div>
				<div class='content'>
				<p><b>Soil Moisture</b></p>
				<center>
				<table width=75%>
				<tr>
				<th width=25%>Row 1</th>
				<th width=25%>Row 2</th>
				<th width=25%>Row 3</th>
				<th width=25%>Row 4</th>
				</tr>
				<tr>
				<td><span>".$data_monitoring[$i]['moist1']."</span></td>
				<td><span>".$data_monitoring[$i]['moist2']."</span></td>
				<td><span>".$data_monitoring[$i]['moist3']."</span></td>
				<td><span>".$data_monitoring[$i]['moist4']."</span></td>
				</tr>
				</table>
				</center><br>
				</div>
				<div class='content'>
				<center><br>
				<table width=75%>
				<tr>
				<th width=33.3%><b>Soil<br>Temperature</b></th>
				<th width=33.3%><b>Air<br>Humidity</b></th>
				<th width=33.3%><b>Air<br>Temperature</b></th>
				</tr>
				<tr>
				<td><span>".$data_monitoring[$i]['suhu']."</span></td>
				<td><span>".$data_monitoring[$i]['hum']."</span></td>
				<td><span>".$data_monitoring[$i]['airtem']."</span></td>
				</tr>								
				</table>
				</center><br>
				</div>
				<div>
				<center><br>
				<table width=75%>
				<tr>
				<th width=33.3%><b>Water<br>Level</b></th>
				<th width=33.3%><b>Water<br>pH</b></th>
				<th width=33.3%><b>Light<br>Intensity</b></th>
				</tr>
				<tr>
				<td><span>".$data_monitoring[$i]['level']."</span></td>
				<td><span>".$data_monitoring[$i]['ph']."</span></td>
				<td><span>".$data_monitoring[$i]['light']."</span></td>
				</tr>
				</table>
				</center><br>
				</div>
				</div>
				</div>");
		}
		?>
	</div>
</body>
<script type="text/javascript" src="/hydrip/assets/js/hydrip.js"></script>
</html>