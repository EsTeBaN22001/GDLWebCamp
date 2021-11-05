<?php 
include_once 'functions/functions.php';

// Obtengo los datos de post y los guardo en variables
if( isset($_POST['user']) ) { $user = $_POST['user']; }
if( isset($_POST['name']) ) { $name = $_POST['name']; }
if( isset($_POST['password']) ) { $password = $_POST['password']; }
if( isset($_POST['id_registry']) ) { $idRegistry = $_POST['id_registry']; }

if($_POST['login-admin']){

  // Insertar en la base de datos
  try {

    $query = 'SELECT * FROM admins WHERE user = ?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $stmt->bind_result($idAdmin, $userAdmin, $nameAdmin, $passwordAdmin, $edited);

    if($stmt->affected_rows){

      $exists = $stmt->fetch();

      if($exists){
        if(password_verify($password, $passwordAdmin)){

          // Iniciar la sesión por $_SESSION
          session_start();

          // Asignar los datos del usuario a la variable de sessión
          $_SESSION['user'] = $userAdmin;
          $_SESSION['name'] = $nameAdmin;

          $response = array(
            'response' => 'success',
            'name' => $nameAdmin
          );
          
        }else{

          $response = array(
            'response' => 'Contraseña incorrecta'
          );

        }
      }else{

        $response = array(
          'response' => 'error'
        );

      }

    }

    $stmt->close();
    $conn->close();

  } catch (\Exception $e) {

    $response = array(
      'response' => $e->getMessage()
    );
    
  }
  
  die(json_encode($response));

}


?>