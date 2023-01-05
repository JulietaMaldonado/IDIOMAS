<?php
session_start();
include("baseDeDatos.php");
$mysqli = new mysqli('localhost', 'root', '', 'idiomas');
$mysqli -> set_charset('utf8');

$consulta = "INSERT INTO cursos (nombre, id_profesor) VALUES ('{$_POST['nombre']}', '{$_SESSION['id']}')";
$resultado = $mysqli->query($consulta);

header("Location: perfilPro.php"); 
?>