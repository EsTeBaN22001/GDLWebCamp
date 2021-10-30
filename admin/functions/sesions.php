<?php 

// Función para redireccionar al usuario en caso de que no esté logueado
function userAuthenticated(){

  if(!userCheck()){
    header('Location: login.php');
    exit();
  }

}

// Función para checkear que esté iniciada la sesión
function userCheck(){
  return isset($_SESSION['user']);
}

session_start();
userAuthenticated();

?>