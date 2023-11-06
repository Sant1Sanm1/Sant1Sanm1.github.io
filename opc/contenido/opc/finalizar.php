<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css2/fontello.css">
	<link rel="stylesheet" href="../css2/estilos2.css">
    <link rel="stylesheet" href="../css2/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css2/sweetalert2.min.css">

    <title>Bizzard Comics</title>
</head>
<body>

    <header>
        <div class="container">
            <div class="row align-items-stretch justify-content-between">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <a class="navbar-brand" href="">BIZZARD COMICS</a>
                        <input type="checkbox" id="menu-bar">
                        <label class="icon-menu" for="menu-bar"></label>
                        <nav class="menu">
                        <a href="../index2.html">Inicio</a>
                        <a href="../../../index.html">Cerrar Sesion</a>
             </nav>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section id="banner">
            <img src="../img/banner2.jpg">
            <div class="contenedor">
            <h2>Finalice sus compras</h>
        </div>
        </section>
        <center><h2>Llene estos datos y finalice su compra</h2>
            <br>
            <form action="Registro.php" method="post" name="form" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="Nombre Completo" required>
            <br>
            <br>
            <input type="text" name="direccion" placeholder="Dirección" required>
            <br>
            <br>
            <input type="text" name="telefono" placeholder="Telefono" required>
            <br>
            <br>
            <input type="submit" name="registrar" required>
        </form>
        </center>
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


    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/sweetalert2.min.js"></script>

</body>
</html>