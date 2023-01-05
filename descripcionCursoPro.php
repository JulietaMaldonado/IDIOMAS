<?php
session_start();
include("baseDeDatos.php");
$mysqli = new mysqli('localhost', 'root', '', 'idiomas');
$mysqli -> set_charset('utf8');
$busqueda = $mysqli -> query("SELECT * FROM cursos WHERE id_profesor = '{$_SESSION['id']}'");
$busquedaDos = $mysqli -> query("SELECT * FROM usuarios WHERE nombre = '{$_SESSION['nombre']}'");
$busquedaTres = $mysqli -> query("SELECT * FROM cursos WHERE nombre = '{$_SESSION['nombre']}'");
$busquedaCuatro = $mysqli -> query("SELECT * FROM usuarios WHERE id_rol = 2");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Descripcion Curso</title>
    <!--BOOTSTRAP FRAMEWORKS-->
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <!--CSS-->
    <link rel="stylesheet" href="./stylePro.css" />
  </head>
  <body>
    <!--ENCABEZADO-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
      <?php 
                 while($buscadorDos = mysqli_fetch_array($busquedaDos)){
                  echo '<a class="navbar-brand" href="perfilPro.php">'.$buscadorDos['nombre']. ' '.$buscadorDos['apellido'].'</a>';
                   } 
                 ?>
                 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cursos
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
              <?php 
                 while($buscadorTres = mysqli_fetch_array($busquedaTres)){
                  echo '<a href="descripcionCursoPro.php">'.$buscadorTres['nombre'].'</a><br>';
                   } 
                 ?>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mensajeriaPro.php" role="button">
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
      <div class="admitirContenedor">
            <?php 
                 while($buscador = mysqli_fetch_array($busqueda)){
                  echo '<h2 class="tituloPagina">'.$buscador['nombre'].'</h2>';
                   } 
                 ?>
      <div class="accionesCurso">
        
        <a
          class="btn btn-secondary botonCursoAccion"
          href="perfilPro.php"
          role="button"
          >Cancelar</a
        >
        <a class="btn btn-primary botonCursoAccion" href="#" role="button"
          >Admitir a todos</a
        >
         <a class="btn btn-primary botonCursoAccion" href="#" role="button"
            >Guardar</a
          >
      </div>
    </div>
        </div>
      </div>
      <div class="alumnosContenedor">
        <div class="row alumnosLista">
          <?php
          while($buscadorCuatro = mysqli_fetch_array($busquedaCuatro)){
            echo  '<div class="col-4">
            <div class="card" style="width: 18rem; margin-top: 20px;">
             <div class="card-body">
                <h5 class="card-title">'.$buscadorCuatro['nombre'].'</h5>
                <a href="#" class="btn btn-primary botonAgregar">Agregar</a>
              </div>
            </div>
          </div>';
          }
          ?>
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