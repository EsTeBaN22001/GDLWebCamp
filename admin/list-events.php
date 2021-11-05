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
        Lista de eventos
        <small>Aquí podrás editar o borrar los eventos</small>
      </h1>
    </section>

        <!-- Main content -->
        <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Maneja los eventos en esta sección</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registration" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Categoría</th>
                  <th>Invitados</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  try {
                    // Consulta para traer los administradores desde ls DB
                    $query  = "SELECT id_event, name_event, date_event, hour_event, cat_event, name_guest, surname_guest ";
                    $query .= " FROM event ";
                    $query .= " INNER JOIN category_event ";
                    $query .= " ON event.id_cat_event=category_event.id_category ";
                    $query .= " INNER JOIN guests ";
                    $query .= " ON event.id_guests=guests.id_guest ";
                    $query .= " ORDER BY id_event ";

                    $results = $conn->query($query);
                    
                    while($event = $results->fetch_assoc()){
                  ?>
                  <tr>
                    <td><?= $event['name_event']; ?></td>
                    <td><?= $event['date_event']; ?></td>
                    <td><?= $event['hour_event']; ?></td>
                    <td><?= $event['cat_event']; ?></td>
                    <td><?= $event['name_guest'] . " " . $event['surname_guest']; ?></td>
                    <td>
                      <a href="edit-admin.php?id=<?= $event['id_event']; ?>" class="btn bg-orange btn-flat margin"><i class="fa fa-pencil"></i></a>
                      <a href="#" data-id="<?= $event['id_event']; ?>" data-type="event" class="btn  bg-maroon btn-flat margin delete-registry"><i class="fa fa-trash"></i></a>
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
                  <th>Nombre</th>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Categoría</th>
                  <th>Invitados</th>
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