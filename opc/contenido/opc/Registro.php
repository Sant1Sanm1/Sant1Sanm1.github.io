<?php

include 'conexion.php';

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

mysqli_query($conexion,"INSERT INTO compra
(nombre, direccion, telefono)
VALUES ('$nombre', '$direccion', '$telefono')")
or die("<script>
alert('Ya realizó su compra');
location.href = 'finalizar.php'
</script>");

echo"<script>
alert('Gracias por comprar nuestros productos');
location.href = '../../../index.html'
</script>";

?>