<?php

include("db.php");

if(isset($_GET['idUsuario'])){
	$id = $_GET['idUsuario'];
	$query = "SELECT * FROM registrarse WHERE idUsuario = $id";
	$resultado = mysqli_query($conn, $query);

	if (mysqli_num_rows($resultado) == 1){

		$row = mysqli_fetch_array($resultado);
		$nombre = $row['nombre'];
		$apellidos = $row['apellidos'];
		$email = $row['email'];
		$contraseña = $row['contraseña'];

	}
}

	if (isset($_POST['actualiza'])) {
		$id = $_GET['idUsuario'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$email = $_POST['email'];
		$contraseña = $_POST['contraseña'];

		echo $nombre;
		echo $apellidos;
		echo $email;
		echo $contraseña;

		$query = "UPDATE registrarse set nombre = '$nombre', apellidos = '$apellidos', email = '$email', contraseña = '$contraseña' WHERE idUsuario = $id";
		mysqli_query($conn, $query);

		$_SESSION['message'] = 'Actualizado correctamente';
		$_SESSION['message_type'] = 'warning';

		header("Location: indexUsu.php");


	}

?>

<?php include("include/header.php")?>

<div class="container p-4">
	
	<div class="row">
		
		<div class="col-md-4 mx-auto">
			
			<div class="card card-body">
				
				<form action="editar.php?idUsuario=<?php echo $_GET['idUsuario']; ?>" method = "POST">
					
					<div class="form-group">
						<input type = "text" name="nombre" class = "form-control"placeholder = "Actualizar Nombre"><?php 
						echo $nombre; ?>
					</div>
					<div class="form-group">
						<input type="text" name="apellidos" rows="2" class="form-control" placeholder="Actualizar Apellidos"><?php
							echo $apellidos;
						?>
						</input>
					</div>
					<div class="form-group">
						<input type="text" name="email" rows="2" class="form-control" placeholder="Actualizar Correo"><?php
							echo $email;
						?>
						</input>
					</div>
					<div class="form-group">
						<input type="password" name="contraseña" rows="2" class="form-control" placeholder="Actualizar Contraseña"><?php
							echo $contraseña;
						?>
						</input>
					</div>
					<button class="btn btn-success" name="actualiza">
						Actualiza
					</button>

				</form>

			</div>

		</div>

	</div>

</div>

<?php include("include/footer.php")?>