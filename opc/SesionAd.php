<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "parcial_3";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {

	die("No hay conexion:  ".mysqli_connect_error());
}

$nombre = $_POST["email2"];
$pass = $_POST["contraseña2"];

$query = mysqli_query($conn, "SELECT * FROM administrador WHERE email2 = '".$nombre."'and contraseña2 = '".$pass."'");

$nr = mysqli_num_rows($query);

if ($nr == 1) {

	echo"<script>
		alert('Administrador Inicio Sesion');
		location.href = 'CRUD/index.php'
		</script>";
		
	}else if ($nr == 0) {

		echo"<script>
		alert('Intento fallido usted no es un administrador');
		location.href = 'InSec.php'
		</script>";
	}

?>