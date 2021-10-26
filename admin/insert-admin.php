<?php 

if(isset($_POST['add-admin'])){

  // Obtengo los datos de post y los guardo en variables
  $user = $_POST['user'];
  $name = $_POST['name'];
  $password = $_POST['password'];

  // Hasheo la contraseña antes de almacenarla
  $options = array(
    'cost' => 12,
  );
  $passwordHashed = password_hash($password, PASSWORD_BCRYPT, $options);

  // Insertar en la base de datos
  try {

    include_once 'functions/functions.php';

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
    echo "Error: " . $e->getMessage();
  }

  die(json_encode($response));
}

?>