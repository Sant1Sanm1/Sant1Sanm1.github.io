<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Bizzard Comics</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum -scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/fontello.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<header>
		<div class="contenedor">
			 <h1 >Bizzard Comics</h1>
			 <input type="checkbox" id="menu-bar">
			 <label class="icon-menu" for="menu-bar"></label>
			 <nav class="menu">
			 	<a href="../index.html">Inicio</a>
			 	<a href="../marvel.html">Marvel Comics</a>
			 	<a href="../dc.html">DC Comics</a>
			 	<a href="../otros.html">Otros</a>
			 	<a href="InSec.php">Inicio Sesion</a>
			 	<a href="Regs.php">Registrarse</a>
			 </nav>
		</div>

	</header>

	<main>
		<section id="banner">
			<img src="../img/banner.jpg">
			<div class="contenedor">
			<h2>Registrate si no tienes una cuenta e inicia sesion</h2>
			<p>Obtiene mayor información</p>
		</div>
		</section>

			<h2>SignUp</h2>
			<span>ó <a href="InSec.php">Login</a></span>
			<form action="Registro.php" method="post" name="form" enctype="multipart/form-data">
			<form action="Sesion.php" method="post" name="form" enctype="multipart/form-data">
			<input type="text" name="nombres" placeholder="Nombre" required>
			<input type="text" name="apellidos" placeholder="Apellidos" required>
			<input type="text" name="email" placeholder="ejemplo@mail.com" required>
			<input type="password" name="contraseña" placeholder="Contraseña" id="contra" required>
			<input type="checkbox" onclick="myFuction()"> Ver Contraseña<br><br>
			<input type="submit" name="registrar" required>
		</form>
	</form>

	<script type="text/javascript">
			function myFuction(){
				var x = document.getElementById("contra");
				if (x.type==="password") {
					x.type="text";
				}else{
					x.type="password";

				}
			}
		</script>

	</main>
	<footer>	
		<div class="contenedor">
			<p class="copy">Bizzard Comics &copy; 2021</p>
			<div class="sociales">
				<a class="icon-facebook-official"href="#"></a>
				<a class="icon-twitter"href="#"></a>
				<a class="icon-instagram"href="#"></a>
			</div>
		</div>
	</footer>
		</body>
</html>