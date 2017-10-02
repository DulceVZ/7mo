<html>
<head><title>Monitoring For Rivers</title>
	<script type="text/javascript">
		function validation(form) {
		  var ok = true;
		  var msg = "You forget introduce your ";
		  if(form.elements["user"].value == "")
		  {
		    msg += "user\n";
		    ok = false;
		  }
		  else{
		  	if(form.elements["password"].value == "")
			  {
			    msg += "password\n";
			    ok = false;
			  }
		  }

		  if(ok == false)
		    alert(msg);
		
		  return ok;
		}
	</script>
</head>
<body>
	<center><h1>WELCOME TO MONITORING SYSTEM AT COLIMA'S RIVER</h1></center>

	<div name="log" align="center">
	<form id="form" method="post" onsubmit="return validation(this)" action="sql/login.php">
			<label for="user"> User: </label>  
			<input type="text" name="user"> <br> <br>
			<label for="password"> Password: </label>  
			<input type="password" name="password"><br><br><br>
			<button type="submit" value="submit">Login</button>
		</form>
	</div>
</body>
</html>