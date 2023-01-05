<?php
session_start();
include("baseDeDatos.php");
$mysqli = new mysqli('localhost', 'root', '', 'idiomas');
$mysqli -> set_charset('utf8');
$busqueda = $mysqli -> query("SELECT * FROM cursos WHERE id_profesor = '{$_SESSION['id']}'");
$busquedaDos = $mysqli -> query("SELECT * FROM usuarios WHERE nombre = '{$_SESSION['nombre']}'");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscripcion</title>
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
      <?php 
                 while($buscadorDos = mysqli_fetch_array($busquedaDos)){
                  echo '<a class="navbar-brand" href="perfilAlu.php">'.$buscadorDos['nombre']. ' '.$buscadorDos['apellido'].'</a>';
                   } 
                 ?>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mis cursos
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="descripcionCurso.html">Descripción</a></li>
                <li><a class="dropdown-item" href="#">Material de Estudio</a></li>
                <li><a class="dropdown-item" href="#">Evaluación</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="inscripcion.php" role="button">
               Inscribete a un curso
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mensajeriaAlu.php" role="button">
               Mensajeria
              </a>
            </li>
            <li class="nav-item">
            <form action="cerrarSesion.php">
                <button class="nav-link" type="submit" style="background-color: transparent; border: none;">CERRAR SESIÓN</button>
                </form>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <h2 class="tituloPagina">INSCRIPCION</h2>
      <div class="row">
          <div class="col-3"></div>
      <div class="col-6">
        <div class="card" style="width: 80%; margin-top: 15px; margin-bottom:20px;">
  <img class="card-img-top" src="imagenes/bandera.webp" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">INGLÉS ACELERADO</h5>
    <p class="card-text">Curso virtual de duración de 4 semanas. <br>
            Abierto todo el año. <br>
            Evaluación final integradora de los conocimientos adquirios. <br>
            Objetivo General: </p>
            <ul>
            <li>Viajes</li>
            <li>Negocios</li>
            <li>Conversación fluida</li>
            </ul></p>
    <a href="descripcionCursoAlu.php" class="btn btn-primary">Acceder</a>
  </div>
</div>
      </div>

      <div class="col-3"></div>
      
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
