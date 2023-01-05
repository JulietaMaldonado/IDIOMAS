<?php     
  session_start();

 $usuario = $_REQUEST['usuario']; 
$apellido = $_REQUEST['apellido']; 
$dni = $_REQUEST['dni']; 
 $email = $_REQUEST['email'];       
$password = $_REQUEST['password']; 
$id_rol = $_REQUEST['id_rol'];

    include("baseDeDatos.php");
    $mysqli = new mysqli('localhost', 'root', '', 'idiomas');
    $mysqli -> set_charset('utf8');

    $agregar = "insert into usuarios(nombre, apellido, email, dni, contrasenia, id_rol) values ('$usuario', '$apellido', '$email', '$dni', '$password', '$id_rol')";
    $resultadosA = $mysqli -> query($agregar);

if($resultadosA){
    header("Location: _index.html");
}else{
    header("Location: nuevoUsuario.html");
}
?>