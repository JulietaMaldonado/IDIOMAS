<?php
session_start();
include("baseDeDatos.php");
$mysqli = new mysqli('localhost', 'root', '', 'idiomas');
$mysqli -> set_charset('utf8');
$busqueda = $mysqli -> query("SELECT * FROM usuarios WHERE id = '{$_SESSION['id']}'");
$busquedaDos = $mysqli -> query("SELECT * FROM usuarios WHERE nombre = '{$_SESSION['nombre']}'");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PERFIL</title>
    <!--BOOTSTRAP FRAMEWORKS-->
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <!--CSS-->
    <link rel="stylesheet" href="./styleAlu.css" />
  </head>
  <body>
    <!--ENCABEZADO-->
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <img class="navbar-brand" src="imagenes/idiomas-logo.png" alt="idiomas-logo">
      </div>
    </nav>
    <!--PERFIL-->
    <div class="card usuario">
      <div class="card-body">
          <img
            src="imagenes/icono-usuario.webp"
            alt="foto alumno"
            class="iconoUsuario"
          />
        <div class="usuarioInfo">
        <?php 
                 while($buscadorDos = mysqli_fetch_array($busquedaDos)){
                  echo '<h2 class="nombreUsuario">'.$buscadorDos['nombre']. ' '.$buscadorDos['apellido'].'</h2>';
                   } 
                 ?>

          <div class="menu">
            <ul class="nav nav-pills contenedorEnlances">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  href="#"
                  role="button"
                  aria-expanded="false"
                >
                  MIS CURSOS</a
                >
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="descripcionCursoAlu.php"
                      >Descripción</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Material de estudio</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Evaluación</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="inscripcion.php">INSCRIBETE A UN CURSO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mensajeriaAlu.php">MENSAJERIA</a>
              </li>
              <li class="nav-item">
                <form action="cerrarSesion.php">
                <button class="nav-link" type="submit" style="background-color: transparent; border: none;">CERRAR SESIÓN</button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--JAVASCRIPT DE BOOTSTRAP-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
