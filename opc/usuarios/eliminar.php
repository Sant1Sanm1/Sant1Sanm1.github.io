<?php

	include("db.php");

	if (isset($_GET['idUsuario'])){

		$id = $_GET['idUsuario'];
		$query = "DELETE FROM registrarse WHERE idUsuario = $id";
		$resultado = mysqli_query($conn, $query);
		if (!$resultado) {
			die("Fallo");
		}


		$_SESSION['message'] = 'Ha sido eliminada correctamente';
		$_SESSION['message_type'] = 'danger';
		header("Location: indexUsu.php");
	}
?>