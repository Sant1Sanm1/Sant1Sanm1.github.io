<?php

include("db.php");

if(isset($_GET['idProducto'])){
	$id = $_GET['idProducto'];
	$query = "SELECT * FROM producto WHERE idProducto = $id";
	$resultado = mysqli_query($conn, $query);

	if (mysqli_num_rows($resultado) == 1){

		$row = mysqli_fetch_array($resultado);
		$nombre = $row['nombre'];
		$descripcion = $row['descripcion'];
		$precio = $row['precio'];
		$editorial = $row['editorial'];

	}
}

	if (isset($_POST['actualiza'])) {
		$id = $_GET['idProducto'];
		$nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];
		$editorial = $_POST['editorial'];

		echo $nombre;
		echo $descripcion;
		echo $precio;
		echo $editorial;

		$query = "UPDATE producto set nombre = '$nombre', descripcion = '$descripcion', precio = '$precio', editorial = '$editorial' WHERE idProducto = $id";
		mysqli_query($conn, $query);

		$_SESSION['message'] = 'Actualizado correctamente';
		$_SESSION['message_type'] = 'warning';

		header("Location: index.php");


	}

?>

<?php include("include/header.php")?>

<div class="container p-4">
	
	<div class="row">
		
		<div class="col-md-4 mx-auto">
			
			<div class="card card-body">
				
				<form action="editar.php?idProducto=<?php echo $_GET['idProducto']; ?>" method = "POST">
					
					<div class="form-group">
						<input type = "text" name="nombre" value = "<?php echo $nombre; ?>"class = "form-control"placeholder = "Actualiza el Nombre">
					</div>
					<div class="form-group">
						<input type="text" name="descripcion" rows="2" class="form-control" placeholder="Actualiza descripción"><?php
							echo $descripcion;
						?>
						</input>
					</div>
					<div class="form-group">
						<input type= "text" name="precio" rows="2" class="form-control" placeholder="Actualiza el precio"><?php
							echo $precio;
						?>
						</input>
					</div>
					<div class="form-group">
						<input type="text" name="editorial" rows="2" class="form-control" placeholder="Actualiza la editorial"><?php
							echo $editorial;
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