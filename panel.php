<?php
	session_start();	//sesion de usuario
?>
<!DOCTYPE html>
<html>
<head>
	<title>cCONTROL PANEL</title>
</head>
<body>
<h1>CONTROL PANEL</h1>
<div id="welcome">
	<h2>Bienvenido, <span><?php echo $_SESSION['username'];?>! </span></h2>
</div>

<div id="panel"> <!-- panel de control -->
	<div id="controlusers"> <!-- controles para usuarios -->
		<h3>Users</h3> 
		<a href="addUser.php"><img src="imgs/add.png"></a>
		<table>
			<tr>
				<th>ID</th>
				<th>USERNAME</th>
				<th>PASSWORD</th>
				<th>ACTIONS</th>
			</tr>
			<tr>
				<td>1</td>
				<td>1</td>
				<td>1</td>
				<td><a href="updateUser.php"><img src="imgs/edit.png"></a>
					<a href="deleteUser.php"><img src="imgs/delete.png"></a></td>
			</tr>
		</table> 
	</div>
	<div id="controlseries"> <!-- controles para las series de sensores -->
		<h3>Series sensors</h3> 
		<a href="addSerie.php"><img src="imgs/add.png"></a>
		<table>
			<tr>
				<th>ID</th>
				<th>SERIE</th>
				<th>ACTIONS</th>
			</tr>
			<tr>
				<td>1</td>
				<td>1</td>
				<td><a href=""><img src="imgs/edit.png"></a>
					<a href=""><img src="imgs/delete.png"></a></td>
			</tr>
		</table> 
	</div>
	<div id="controlsernsors"> <!-- controles para sensores -->
		<h3>Sensors</h3>
		<a href="addSensor.php"><img src="imgs/add.png"></a>
		<table>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>SERIE</th>
				<th>ACTIONS</th>
			</tr>
			<tr>
				<td>1</td>
				<td>1</td>
				<td>1</td>
				<td><a href=""><img src="imgs/edit.png"></a>
					<a href=""><img src="imgs/delete.png"></a></td>
			</tr>
		</table>
	</div>
	<div id="controllocations"> <!-- controles para lugares -->
		<h3>Locations</h3>
		<a href="addLocation.php"><img src="imgs/add.png"></a>
		<table>
			<tr>
				<th>ID</th>
				<th>PLACE</th>
				<th>DETAILS</th>
				<th>LONGITUDE</th>
				<th>LATITUDE</th>
				<th>ACTIONS</th>
			</tr>
			<tr>
				<td>1</td>
				<td>1</td>
				<td>1</td>
				<td>1</td>
				<td>1</td>
				<td><a href=""><img src="imgs/edit.png"></a>
					<a href=""><img src="imgs/delete.png"></a></td>
			</tr>
		</table>
	</div>
</div>
<br>
<p><a href="sql/logout.php">Finalice</a> sesión aquí!</p>
</body>
</html>