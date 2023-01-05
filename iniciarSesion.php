<?php
include("baseDeDatos.php");

function main(){
  session_start();
  $mysqli = new mysqli('localhost', 'root', '', 'idiomas');
  $mysqli -> set_charset('utf8');
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
  $busqueda = $mysqli -> query("SELECT * FROM usuarios");
  while($buscador = mysqli_fetch_array($busqueda)){
 if ($buscador['nombre'] == $nombre and $buscador['contrasenia'] == $password){
  if ($buscador['id_rol'] == 3) {
    $_SESSION['nombre'] = $buscador['nombre'];
    $_SESSION['id'] = $buscador['id'];
    header("Location: perfilPro.php");  
}  else {
  $_SESSION['nombre'] = $buscador['nombre'];
  $_SESSION['id'] = $buscador['id'];
    header("Location: perfilAlu.php");
}
 }
  }
}
main();
?>