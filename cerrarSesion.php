<?php
  session_start();
  include("baseDeDatos.php");
  $mysqli = new mysqli('localhost', 'root', '', 'idiomas');
  $mysqli -> set_charset('utf8');
  // Elimina la variable email en sesión.
  unset($_SESSION['nombre']); 
 
  // Elimina la sesion.
  session_destroy();
   
  // Redirecciona a la página de login.
  header("Location: _index.html");
?>