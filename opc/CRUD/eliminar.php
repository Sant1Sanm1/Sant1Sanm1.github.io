<?php

	include("db.php");

	if (isset($_GET['idProducto'])){

		$id = $_GET['idProducto'];
		$query = "DELETE FROM producto WHERE idProducto = $id";
		$resultado = mysqli_query($conn, $query);
		if (!$resultado) {
			die("Fallo");
		}


		$_SESSION['message'] = 'Ha sido eliminada correctamente';
		$_SESSION['message_type'] = 'danger';
		header("Location: index.php");
	}
?>