<?php include_once('includes/templates/header.php'); ?>

<section class="section container">
  <h2>Calendario de eventos</h2>

  <?php 
    try {
      require_once('includes/functions/db_conection.php');
      $sql  = " SELECT id_event, name_event, date_event, hour_event, cat_event, icon, name_guest, surname_guest ";
      $sql .= " FROM event ";
      $sql .= " INNER JOIN category_event ";
      $sql .= " ON event.id_cat_event = category_event.id_category ";
      $sql .= " INNER JOIN guests ";
      $sql .= " ON event.id_guests = guests.id_guest ";
      $sql .= " ORDER BY id_event ";

      $result = $conn->query($sql);
      
    } catch (\Exception $e) {
      echo $e->getMessage();
    }
  ?>

  <div class="calendary">
    <?php 
      $calendary = array();
      
      while($events = $result->fetch_assoc()){
        // Obtiene la fecha del evento
        $date = $events['date_event'];

        $event = array(
          'title' => $events['name_event'],
          'date' => $events['date_event'],
          'hour' => $events['hour_event'],
          'category' => $events['cat_event'],
          'icon' => $events['icon'],
          'guest' => $events['name_guest'] . ' ' . $events['surname_guest']
        );

        $calendary[$date][] = $event;
      
      ?>
    <?php } ?>
    
    <?php 
      // Imprime todos los eventos
      foreach($calendary as $day => $list_events) : ?>
        <hr>
        <h3>
          <i class="fa fa-calendar"></i>
          <?php 
          // Unix
          setlocale(LC_TIME, 'es_ES.UTF-8');
          // Windows
          setlocale(LC_TIME, 'spanish.UTF-8');

          
          echo strftime("%A, %d de %B del %Y", strtotime($day)); ?>
        </h3>

        <div class="day-content">
          <?php foreach($list_events as $event): ?>
            <div class="day">
              <p class="title"><?php echo $event['title']; ?></p>
              <p class="hour">
                <i class="fa fa-clock" aria-hidden="true"></i>
                <?php echo $event['date'] . " " . $event['hour']; ?>
              </p>
              <p class="category">
              <i class="fa <?php echo $event['icon']; ?>" aria-hidden="true"></i>
                <?php echo $event['category']; ?>
              </p>
              <p class="hour">
                <i class="fa fa-user" aria-hidden="true"></i>
                <?php echo $event['guest']; ?>
              </p>

            </div>
          <?php endforeach; ?>
        </div>
    <?php endforeach; ?>




  </div>

  <?php $conn->close(); ?>

</section>

<?php include_once('includes/templates/footer.php'); ?>