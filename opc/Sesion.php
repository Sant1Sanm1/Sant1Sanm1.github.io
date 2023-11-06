<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "parcial_3";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {

	die("No hay conexion:  ".mysqli_connect_error());
}

$nombre = $_POST["email"];
$pass = $_POST["contraseña"];

$query = mysqli_query($conn, "SELECT * FROM registrarse WHERE email = '".$nombre."'and contraseña = '".$pass."'");

$nr = mysqli_num_rows($query);

if ($nr == 1) {

	echo"<script>
		alert('Usuario Inicio Sesion');
		location.href = 'contenido/index2.html'
		</script>";
		
	}else if ($nr == 0) {

		echo"<script>
		alert('Usuario no registrado, por favor presione aceptar para registrarse');
		location.href = 'Regs.php'
		</script>";
	}

?>