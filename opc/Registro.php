<?php

include 'conexion.php';

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

mysqli_query($conexion,"INSERT INTO registrarse
(nombre, apellidos, email, contraseña)
VALUES ('$nombres', '$apellidos', '$email', '$contraseña')")
or die("<script>
alert('Usuario ya existen, vuelva e intentelo nuevamente');
location.href = 'Regs.php'
</script>");

echo"<script>
alert('Registro exitóso Vuelva e Inicie Sesion');
location.href = 'InSec.php'
</script>";

?>