<?php 
error_reporting(E_ALL ^ E_NOTICE);
include_once 'functions/functions.php';

// Obtengo los datos de post y los guardo en variables
if( isset($_POST['user']) ) { $user = $_POST['user']; }
if( isset($_POST['name']) ) { $name = $_POST['name']; }
if( isset($_POST['password']) ) { $password = $_POST['password']; }
if( isset($_POST['id_registry']) ) { $idRegistry = $_POST['id_registry']; }

if( isset($_POST['registry'])  && isset($_POST['registry']) == 'new' ){

  // Hasheo la contraseña antes de almacenarla
  $options = array(
    'cost' => 12,
  );
  $passwordHashed = password_hash($password, PASSWORD_BCRYPT, $options);

  // Insertar en la base de datos
  try {

    $query = 'INSERT INTO admins (user, name, password) VALUES (?,?,?)';
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sss', $user, $name, $passwordHashed);
    $stmt->execute();

    $idRegistry = $stmt->insert_id;

    if($idRegistry > 0){

      $response = array(
        'response' => 'success',
        'idAdmin' => $idRegistry
      );

    }else{

      $response = array(
        'response' => 'error'
      );

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

if( isset($_POST['registry'])  && isset($_POST['registry']) == 'update' ){

  try{

    // Verificar que el password no esté vacio
    if(empty($_POST['password'])){

      $query = "UPDATE admins SET user = ?, name = ?, edited = NOW() WHERE id_admin = ?";
      $stmt = $conn->prepare($query);
      $stmt->bind_param("ssi", $user, $name, $idRegistry);

    }else{

      // Hasheo la contraseña antes de almacenarla
      $options = array(
        'cost' => 12,
      );
      $passwordHashed = password_hash($password, PASSWORD_BCRYPT, $options);

      $query = "UPDATE admins SET user = ?, name = ?, password = ?, edited = NOW() WHERE id_admin = ?";
      $stmt = $conn->prepare($query);
      $stmt->bind_param("sssi", $user, $name, $passwordHashed, $idRegistry);

    }


    $stmt->execute();

    if($stmt->affected_rows){

      $response = array(
        'response' => 'success',
        'id_updated' => $stmt->insert_id
      );

    }else{

      $response = array(
        'response' => 'error'
      );

    }

    $stmt->close();
    $conn->close();

  }catch(Exception $e){

    $response = array(
      'response' => $e->getMessage()
    );

  }

  // Convierto el array $response a JSON
  die(json_encode($response));

}

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