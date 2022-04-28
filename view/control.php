<?php
include 'decode.php';
// include '../API/api_update2.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>hydrip</title>
	<link rel="stylesheet" type="text/css" href="/hydrip/assets/css/hydrip.css">
	<script type="text/javascript" src="/hydrip/assets/js/jquery-3.2.1.min.js"></script>
</head>

<body class="bg-grey1">
	<div class="topnav bg-grey1">
		<img src="/hydrip/assets/images/logo-web.png">
		<a href="monitoring.php">Monitoring</a>
		<a class="active" href="">Control</a>
		<input type="button" id="btnRefresh" value="REFRESH" class="button" onclick="window.location.href='/hydrip/view/control.php'">
	</div>
	<div class="row">
		<?php
		$cb_auto=1;
		for ($i=0; $i<$amount_control; $i++) { 
			$cb_manual=1;
			print("<div class='column'>
				<div class='card bg-grey2'>
				<div class='title'>
				<h3>Area ".$id=$data_control[$i]['id']."</h3>
				</div><br>
				<div class='divauto'>
				<center>
				<table width=95%>
				<tr>
				<td width=50%>Auto</td>
				<td width=50%><label class='switch'>
				<input type='checkbox' id='auto"); echo $cb_auto; print("' value='"); echo $auto=$data_control[$i]['auto']; echo "' ";
			if ($auto==1) {echo "checked='checked'";}
			else if ($auto==0) {echo "enabled='enabled'";} 
			print(">
				<span class='slider round'></span></label>
				</td>
				</tr>
				</table>
				</center><br>
				</div>
				<div class='divmanual'>
				<center>
				<table width=95%>
				<tr>
				<td width=50%>Row 1</td>
				<td width=50%><label class='switch'>
				<input type='checkbox' id='manual"); echo $cb_auto.$cb_manual++; print("' value='"); echo $manual1=$data_control[$i]['manual1']; echo "' ";
			if ($auto==1) {echo "checked='checked'","disabled='disabled'";}
			else if ($auto==0) {echo "enabled='enabled'";}
			if ($manual1==1) {echo "checked='checked'";}
			else if ($manual1==0) {echo "enabled='enabled'";}
			print(">
				<span class='slider round'></span></label>
				</td>
				</tr>
				</table>
				</center><br>
				</div>
				<div class='divmanual'>
				<center>
				<table width=95%>
				<tr>
				<td width=50%>Row 2</td>
				<td width=50%><label class='switch'>
				<input type='checkbox' id='manual"); echo $cb_auto.$cb_manual++; print("' value='"); echo $manual2=$data_control[$i]['manual2'];
			echo "' ";
			if ($auto==1) {echo "checked='checked'","disabled='disabled'";}
			else if ($auto==0) {echo "enabled='enabled'";}
			if ($manual2==1) {echo "checked='checked'";}
			else if ($manual2==0) {echo "enabled='enabled'";}
			print(">
				<span class='slider round'></span></label>
				</td>
				</tr>
				</table>
				</center><br>
				</div>
				<div class='divmanual'>
				<center>
				<table width=95%>
				<tr>
				<td width=50%>Row 3</td>
				<td width=50%><label class='switch'>
				<input type='checkbox' id='manual"); echo $cb_auto.$cb_manual++; print("' value='"); echo $manual3=$data_control[$i]['manual3'];
			echo "' ";
			if ($auto==1) {echo "checked='checked'","disabled='disabled'";}
			else if ($auto==0) {echo "enabled='enabled'";}
			if ($manual3==1) {echo "checked='checked'";}
			else if ($manual3==0) {echo "enabled='enabled'";}
			print(">
				<span class='slider round'></span></label>
				</td>
				</tr>
				</table>
				</center><br>
				</div>
				<div class='divmanual'>
				<center>
				<table width=95%>
				<tr>
				<td width=50%>Row 4</td>
				<td width=50%><label class='switch'>
				<input type='checkbox' id='manual"); echo $cb_auto.$cb_manual++; print("' value='"); echo $manual4=$data_control[$i]['manual4'];
			echo "' ";
			if ($auto==1) {echo "checked='checked'","disabled='disabled'";}
			else if ($auto==0) {echo "enabled='enabled'";}
			if ($manual4==1) {echo "checked='checked'";}
			else if ($manual4==0) {echo "enabled='enabled'";}
			print(">
				<span class='slider round'></span></label>
				</td>
				</tr>
				</table>
				</center><br>
				</div></div></div>");
			$cb_auto++;
		}
		?>
	</div>
</body>
<script type="text/javascript" src="/hydrip/assets/js/control.js"></script>
</html>