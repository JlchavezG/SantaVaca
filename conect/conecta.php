<?php
$servidor = "localhost";
$usuario = "root";
$Password = "";
$DB = "dbs110336";
$mysqli = mysqli_connect($servidor, $usuario, $Password, $DB);
 if ($mysqli->connect_error) {
 	die('Error al conectar con la BD de SantaVaca'.$mysqli->connect_error);
 }
?>
