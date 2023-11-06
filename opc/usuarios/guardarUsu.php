<?php 

include("db.php");

if(isset($_POST['guardar'])){

	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$email = $_POST['email'];
	$contraseña = $_POST['contraseña'];

	$query = "INSERT INTO registrarse(nombre, apellidos, email, contraseña) VALUES ('$nombre', '$apellidos', '$email', '$contraseña')"; 

	$resultado = mysqli_query($conn, $query);

	if (!$resultado) {

		die("Fallo");
	}

	$_SESSION['message'] = 'Tarea Guardada';
	$_SESSION['message_type'] = 'success';

	header("Location: indexUsu.php");

}

?>