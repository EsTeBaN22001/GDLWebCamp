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
        Crear evento
        <small>Llena el formulario para crear un evento</small>
      </h1>
    </section>

    <div class="row">
      <div class="col-md-8">
        <section class="content">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Crear evento</h3>
            </div>
            <div class="box-body">
              <form role="form" name="save-registry" id="save-registry" method="POST" action="model-event.php">
                <div class="box-body">
                  <div class="form-group">
                    <label for="user">Título del evento:</label>
                    <input type="text" class="form-control" id="title_event" name="title_event" placeholder="Título del evento">
                  </div>
                  <div class="form-group">
                    <label for="name">Categoría:</label>
                    <select name="category_event" class="form-control select2" style="width: 100%;">
                      <option value="0" selected disabled>-- Seleccione --</option>
                      <?php 
                      
                      try {
                        
                        $query = "SELECT * FROM category_event";
                        $result = $conn->query($query);

                        while($cat_event = $result->fetch_assoc()): ?>
                      
                        <option value"<?= $cat_event['id_category']; ?>">
                          <?= $cat_event['cat_event']; ?>
                        </option>

                      <?php

                        endwhile;
                      } catch (\Exception $e) {
                        echo "Error: " . $e->getMessage();
                      }
                      
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Fecha del evento:</label>

                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker" name="date_event">
                    </div>
                  </div>
                  <div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label>Hora:</label>

                      <div class="input-group">
                        <input type="text" class="form-control timepicker" name="hour_event">

                        <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">Invitado o ponente:</label>
                    <select name="guest" class="form-control select2 select-form" style="width: 100%;">
                      <option value="0" selected disabled>-- Seleccione --</option>
                      <?php 
                      
                      try {
                        
                        $query = "SELECT id_guest, name_guest, surname_guest FROM guests";
                        $result = $conn->query($query);

                        while($guest = $result->fetch_assoc()): ?>
                      
                        <option value"<?= $guest['id_guest']; ?>">
                          <?= $guest['name_guest'] . " " . $guest['surname_guest']; ?>
                        </option>

                      <?php

                        endwhile;
                      } catch (\Exception $e) {
                        echo "Error: " . $e->getMessage();
                      }
                      
                      ?>
                    </select>
                  </div>
                </div>
                <div class="box-footer">
                  <input type="hidden" name="registry" value="new">
                  <button type="submit" class="btn btn-primary">Añadir</button>
                </div>
              </form>
            </div>
          </div>
        </section>
      </div>
    </div>

  </div>

  <?php include_once 'templates/footer.php'; ?>