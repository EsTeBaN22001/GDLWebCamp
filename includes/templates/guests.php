<?php 
  try {
    require_once('includes/functions/db_conection.php');
    $sql  = "SELECT * FROM guests";

    $result = $conn->query($sql);
    ?>

      <section class="guests container section">
        <h2>Nuestros invitados</h2>
        <ul class="invited-list">
          <?php while($guests = $result->fetch_assoc()): ?>
            <li>
              <div class="invited">
                <a class="guest-info" href="#guest<?php echo $guests['id_guest']; ?>">
                  <img src="/build/img/<?php echo $guests['url_img']; ?>" alt="Imagen del primer invitado">
                  <p><?php echo $guests['name_guest'] . ' ' . $guests['surname_guest']; ?></p>
                </a>
              </div>
            </li>
            <div style="display:none;">
              <div class="guest-info" id="guest<?php echo $guests['id_guest']; ?>">
                <h2><?php echo $guests['name_guest'] . " " . $guests['surname_guest']; ?></h2>
                <img src="/build/img/<?php echo $guests['url_img']; ?>" alt="Imagen del primer invitado">
                <p><?php echo $guests['description']; ?></p>
              </div>
            </div>
          <?php endwhile; ?>
        </ul>
      </section>
    
  <?php } catch (\Throwable $th) {
    echo $e->getMessage();
  }
?>
<?php $conn->close(); ?>