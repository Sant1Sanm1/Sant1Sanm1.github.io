<?php include("db.php")?>
<?php include("include/header.php")?>

<div class="container p-4">

	<div class="row">

		<div class="col-md-4">

			<?php if(isset($_SESSION['message'])){
				?>

				<div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
				  <?= $_SESSION['message'] ?>
				  <button type="button" class="close" 		data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  	</button>
					</div>

			<?php session_unset(); } ?>

			<br>
			<br>

			<div class="card card-body">

				<form action="guardar.php" method="POST">
					
					<div class="form-group">

						<input type="text" name="nombre" class="form-control" placeholder="Nombre Producto" autofocus>

					</div>
					<div class="form-group">

						<input type="text" name="descripcion" rows="2" class="form-control" placeholder="Descripcion"></input>

					</div>
					<div class="form-group">

						<input type="text" name="precio" rows="2" class="form-control" placeholder="Precio"></input>

					</div>
					<div class="form-group">

						<input type="text" name="editorial" rows="2" class="form-control" placeholder="Editorial"></input>

					</div>
					<input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">

				</form>

			</div>

		</div>

		<div class="col-md-8">

			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Descripción</th>
						<th>Precio</th>
						<th>Editorial</th>

					</tr>
				</thead>
				<tbody>
					<?php 
					$query = "SELECT * FROM producto";
					$resultado_tarea =mysqli_query($conn, $query);
					while($row = mysqli_fetch_array($resultado_tarea)){ ?>
						<tr>
							<td><?php echo $row['idProducto']?></td>
							<td><?php echo $row['nombre']?></td>
							<td><?php echo $row['descripcion']?></td>
							<td><?php echo $row['precio']?></td>
							<td><?php echo $row['editorial']?></td>
							<td>
								<a href="editar.php?idProducto=<?php echo $row['idProducto']?>" class = "btn btn-secondary"> 
									<i class="fas fa-marker"></i>
									
								</a>
								<a href="eliminar.php?idProducto=<?php echo $row['idProducto']?>" class= "btn btn-danger">
									<i class="fas fa-trash"></i>
									
								</a>
							</td>
						</tr>
						
					<?php } ?>
				</tbody>
			</table>

		</div>

	</div>

</div>

<?php include("include/footer.php")?>