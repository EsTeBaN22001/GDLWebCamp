<?php 

include_once 'functions/sesions.php';
include_once 'functions/functions.php';
include_once '../includes/functions/db_conection.php';
include_once 'templates/header.php';
include_once 'templates/bar.php';
include_once 'templates/aside.php';

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Lista de administradores
      </h1>
    </section>

        <!-- Main content -->
        <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Maneja los usuarios en esta sección</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registration" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Usuario</th>
                  <th>Nombre</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  try {
                    // Consulta para traer los administradores desde ls DB
                    $query = "SELECT id_admin, user, name FROM admins";
                    $results = $conn->query($query);
                    
                    while($admin = $results->fetch_assoc()){
                  ?>
                  <tr>
                    <td><?php echo $admin['user']; ?></td>
                    <td><?php echo $admin['name']; ?></td>
                    <td>
                      <a href="edit-admin.php?id=<?php echo $admin['id_admin']; ?>" class="btn bg-orange btn-flat margin"><i class="fa fa-pencil"></i></a>
                      <a href="#" data-id="<?php echo $admin['id_admin']; ?>" data-type="admin" class="btn  bg-maroon btn-flat margin delete-registry"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>

                  
                  <?php
                  }
                  } catch (\Exception $e) {
                    echo "Error:" . $e->getMessage();
                  }
                  
                  ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Usuario</th>
                  <th>Nombre</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include_once 'templates/footer.php'; ?>