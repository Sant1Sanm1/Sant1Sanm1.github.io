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

				<form action="guardarUsu.php" method="POST">
					
					<div class="form-group">

						<input type="text" name="nombre" class="form-control" placeholder="Nuevo Usuario" autofocus>

					</div>
					<div class="form-group">

						<input name="apellidos" rows="2" class="form-control" placeholder="Apellidos"></input>

					</div>
					<div class="form-group">

						<input type="email" name="email" rows="2" class="form-control" placeholder="ejemplo@mail.com"></input>

					</div>
					<div class="form-group">

						<input type="password" name="contraseña" rows="2" class="form-control" placeholder="Contraseña"></input>

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
						<th>Apellidos</th>
						<th>Email</th>
						<th>Contraseña</th>

					</tr>
				</thead>
				<tbody>
					<?php 
					$query = "SELECT * FROM registrarse";
					$resultado_tarea =mysqli_query($conn, $query);
					while($row = mysqli_fetch_array($resultado_tarea)){ ?>
						<tr>
							<td><?php echo $row['idUsuario']?></td>
							<td><?php echo $row['nombre']?></td>
							<td><?php echo $row['apellidos']?></td>
							<td><?php echo $row['email']?></td>
							<td><?php echo $row['contraseña']?></td>
							<td>
								<a href="editar.php?idUsuario=<?php echo $row['idUsuario']?>" class = "btn btn-secondary"> 
									<i class="fas fa-marker"></i>
									
								</a>
								<a href="eliminar.php?idUsuario=<?php echo $row['idUsuario']?>" class= "btn btn-danger">
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