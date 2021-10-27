<?php 

include_once 'functions/functions.php';
include_once 'templates/header.php';

?>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index.php"><b>GDL</b>WebCamp</a>
    </div>
    <div class="login-box-body">
      <p class="login-box-msg">Inicia sesión aquí!</p>
      <form name="login-admin-form" id="login-admin" method="POST" action="insert-admin.php">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="user" placeholder="Usuario">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="Contraseña">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <input type="hidden" name="login-admin" value="1">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sesión</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

  <?php include_once 'templates/footer.php'; ?>