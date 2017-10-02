<?php
	session_start();	//sesion de usuario
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcom</title>
</head>
<body>
<h1>HOME</h1>
<div id="welcome">
	<h2>Bienvenido, <span><?php echo $_SESSION['username'];?>! </span></h2>
	<p><a href="sql/logout.php">Finalice</a> sesión aquí!</p>
</div>
</body>
</html>