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
    <title>Nuevo Curso</title>
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
                 while($buscador = mysqli_fetch_array($busqueda)){
                  echo '<a href="descripcionCursoPro.php">'.$buscador['nombre'].'</a><br>';
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

    <!--NUEVO CURSO-->
  
    <div class="container-fluid">
      <h2 class="tituloPagina">CREAR CURSO</h2>

      <form action="cursosPro.php" method="post">
        <div class="accionesCurso">
           <button class="btn btn-secondary botonCursoAccion" href="perfilPro.php">Cancelar</button>
        <button class="btn btn-primary botonCursoAccion" aria-expanded="false" type="submit">Guardar</button>
       </div>
     
    <div class="formularioCurso">
        <label for="" class="label1">Nombre del curso</label>
        <input type="text" class="input1" name="nombre" />
        
        <label for="" class="label1">Modalidad</label>
        
        <div class="tipoClase">
        <input type="radio" name="modalidadPre" id=""/>
        <label for="" class="label2">Presencial</label></div>
        <div class="tipoClase">
        <input type="radio" name="modalidadVir" id="" />
        <label for="" class="label2">Virtual</label>
        <label for="" class="label1">Detalle</label>
        <textarea
          name="detalle"
          id=""
          cols="30"
          rows="10"
          class="detalleCurso"
        ></textarea>

          <label for="" class="label1">Adjuntar material de estudio</label>
          <form action="upload.php" method="post" enctype="multipart/form-data">        
                <div class="input-group mb-3">                
                    <input type="file" class="form-control" name="fileToUpload" id="inputGroupFile01"  placeholder="Seleccionar Archivo ...">
                </div>
                <div class="d-grid gap-2">               
                    <input style="margin-top: 10px; margin-bottom: 20px;" type="submit" value="SUBIR" class="btn btn-primary" name="submit">
                </div>
            </form>
        </div>
</form>
      </div>
    <!--JAVASCRIPT DE BOOTSTRAP-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
