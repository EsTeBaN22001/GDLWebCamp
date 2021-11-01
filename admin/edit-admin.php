<?php 

include_once 'functions/sesions.php';
include_once 'functions/functions.php';
include_once 'templates/header.php';

// Obtener el id del admin por GET
$id = $_GET['id'];

if(!filter_var($id, FILTER_VALIDATE_INT)){
  die('Error!');
}

include_once 'templates/bar.php';
include_once 'templates/aside.php';



?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Editar administrador
        <small>Llena el formulario para editar un administrador</small>
      </h1>
    </section>

    <div class="row">
      <div class="col-md-8">
        <section class="content">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Editar administrador</h3>
            </div>
            <div class="box-body">

            <?php 
            
            $query = "SELECT * FROM `admins` WHERE `id_admin` = $id ";
            $result = $conn->query($query);
            $admin = $result->fetch_assoc();
            
            ?>

              <form role="form" name="save-registry" id="save-registry" method="POST" action="model-admin.php">
                <div class="box-body">
                  <div class="form-group">
                    <label for="user">Usuario:</label>
                    <input type="text" class="form-control" id="user" name="user" placeholder="Tu nombre de usuario" value="<?php echo $admin['user']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Tu nombre completo" value="<?php echo $admin['name']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Tu contraseña">
                  </div>
                  <div class="form-group">
                    <label for="password">Repetir contraseña</label>
                    <input type="password" class="form-control" id="repeat-password" name="repeat-password" placeholder="Tu contraseña">
                    <span id="password_result" class="help-block"></span>
                  </div>
                </div>
                <div class="box-footer">
                  <input type="hidden" name="registry" value="update">
                  <input type="hidden" name="id_registry" value="<?php echo $id; ?>">
                  <button type="submit" class="btn btn-primary" id="create-registry">Guardar</button>
                </div>
              </form>
            </div>
          </div>
        </section>
      </div>
    </div>

  </div>

  <?php include_once 'templates/footer.php'; ?>