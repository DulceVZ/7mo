<?php
//Manejo de Sesión
SESSION_START();
//Conexión a la base de datos
require("connection.php");

//Validación POST del formulario
if($_SERVER['REQUEST_METHOD']=='POST')
			{
				//Almacena las variables del formulario
				$user=$_POST["user"];
				$pass=$_POST["password"];

				//comprueba en la BD
				$sql = "SELECT * FROM users WHERE username='".$user."' AND password='".$pass."'";
				$result = $con->query($sql);

				//inicio de sesión
				$row = mysqli_fetch_assoc($result);
					if (mysqli_num_rows($result) > 0) {
						$_SESSION['username']=$row["username"];
						$_SESSION['id']=$row["id"];
						$_SESSION['type']=$row["type"];

						//Validación del tipo de usuario
						if($_SESSION['type'] == 1 || $_SESSION['type'] == 2)
							header('Location:../welcom.php');
						else
							if($_SESSION['type'] == 3)
								header('Location:../panel.php');
					}
					else
					{	//en caso de que un dato sea incorrecto
						echo "<script type='text/javascript'>
								alert('User or password incorrect');
								location.href='../index.php';
							</script>";
					}

			}
?>