<?php 

include_once 'functions/sesions.php';
include_once 'functions/functions.php';
include_once 'templates/header.php';
include_once 'templates/bar.php';
include_once 'templates/aside.php';

?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Crear administrador
        <small>Llena el formulario para crear un administrador</small>
      </h1>
    </section>

    <div class="row">
      <div class="col-md-8">
        <section class="content">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Crear administrador</h3>
            </div>
            <div class="box-body">
              <form role="form" name="save-registry" id="save-registry" method="POST" action="model-admin.php">
                <div class="box-body">
                  <div class="form-group">
                    <label for="user">Usuario:</label>
                    <input type="text" class="form-control" id="user" name="user" placeholder="Tu nombre de usuario">
                  </div>
                  <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Tu nombre completo">
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
                  <input type="hidden" name="registry" value="new">
                  <button type="submit" class="btn btn-primary" id="create-registry-admin">Añadir</button>
                </div>
              </form>
            </div>
          </div>
        </section>
      </div>
    </div>

  </div>

  <?php include_once 'templates/footer.php'; ?>