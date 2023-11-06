<?php 

include("db.php");

if(isset($_POST['guardar'])){

	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$precio = $_POST['precio'];
	$editorial = $_POST['editorial'];

	$query = "INSERT INTO producto(nombre, descripcion, precio, editorial) VALUES ('$nombre', '$descripcion', '$precio', '$editorial')"; 

	$resultado = mysqli_query($conn, $query);

	if (!$resultado) {

		die("Fallo");
	}

	$_SESSION['message'] = 'Tarea Guardada';
	$_SESSION['message_type'] = 'success';

	header("Location: index.php");

}

?>