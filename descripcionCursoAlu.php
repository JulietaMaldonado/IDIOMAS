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
    <title>Curso: Inglés Acelerado</title>
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
                <li><a class="dropdown-item" href="descripcionCursoAlu.php">Descripción</a></li>
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
      <h2 class="tituloPagina">Inglés Acelerado | Descripción</h2>

      <label for="" class="label1">Fundamentación</label>
      <div class="card contenedorDescripcion">
        <div class="card-body">
          <p>
            En la actualidad este curso presenta una gran utilidad práctica ya que el idioma inglés es la lengua
            utilizada en la mayoría de los paises del extranjero.</br>
            Hoy en día la calidad de bilingüe beneficia ampliamente a quien la posee.
          </p>
        </div>
      </div>
      <label for="" class="label1">Contribución esperada</label>
      <div class="card contenedorDescripcion">
        <div class="card-body">
          <p>
            Que el curso habilite a los participantes a realizar un primer contacto con el habla inglesa y los motive a
            profundizar su estudio.
          </p>
        </div>
      </div>
      <label for="" class="label1">Perfil del Participante</label>
      <div class="card contenedorDescripcion">
        <div class="card-body">
          <p>
            A jóvenes con intensiones de viajar por el mundo, estudiantes, personas que pretendan radicarse en el extranjero.
          </p>
        </div>
      </div>
      <label for="" class="label1">Objetivo General</label>
      <div class="card contenedorDescripcion">
        <div class="card-body">
          <p>
            Que los participantes:</br>
            <ul>
              <li>Puedan hablar con fuidez el idioma inglés.</li>
              <li>Conozcan al menos básicamente las reglas gramaticales de la lengua inglesa.</li>
              <li>Tengan la posibilidad de interactuar con personas de habla inglesa si visitan a 
              países angloparlantes.</li>
            </ul>
          </p>
        </div>
      </div>
      <label for="" class="label1">Modalidad de cursada</label>
      <div class="contenedorInfo1">
        <p>Virtual</p>
      </div>
      <label for="" class="label1">Bibliografía</label>
      <div class="card contenedorDescripcion">
        <div class="card-body">
          <p>
            Speaking Room virtual.</br>
            Glossary.</br>
            Clases grabadas con profesores nativos.</br>
          </p>
        </div>
      </div>
      <label for="" class="label1">Evaluación de los contenidos</label>
      <div class="contenedorContenidos">
        <div class="row">
            <p>Adquisición de conocimientos 20%</br>
              Comprensión de la bibliografía 20%</br>
              Destreza para la aplicación 40%</br>
              Habilidad para la evaluación 20%</br>
        </div>
      </div>
      <label for="" class="label1">Instrumento de evaluación</label>
      <div class="contenedorInfo1">
        <p>Múltiple Choice</p>
      </div>
      <label for="" class="label1">Requisito de aprobación</label>
      <div class="contenedorInfo1">
        <p>
          Aprobación de la evaluación fial con un 80% de respuestas correctas
        </p>
      </div>
      <label for="" class="label1">Perfil del docente</label>
      <div class="card contenedorDescripcion">
        <div class="card-body">
          <p>
            Sandra Mirta Gomez.</br> Profesora universitaria de inglés. </br>Traductora pública.</br>
            Docente en el Colegio Lenguas Vivas. </br>Directora del Ciclo Superior de idioma Inglés en CUI.
          </p>
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
