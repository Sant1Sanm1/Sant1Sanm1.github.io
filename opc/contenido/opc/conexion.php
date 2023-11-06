<?php

$host="localhost";
$user="root";
$pw="";
$db="parcial_3";

$conexion=mysqli_connect($host, $user, $pw)
or die("Problema al conectar con el servidor".mysqli_error($conexion));

mysqli_select_db($conexion,$db)
or die("Problema al conectar con la base de datos".mysqli_error($conexion)); 

?>

