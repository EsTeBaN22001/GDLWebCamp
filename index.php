<?php include_once('includes/templates/header.php'); ?>

<section class="container section">
  <h2>La mejor conferencia de diseño web en español</h2>
  <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem
    impedit esse voluptatibus, possimus, quod accusamus dicta quasi natus
    soluta ratione facilis eius obcaecati inventore! Molestias odit
    doloremque aut. Modi laborum recusandae perferendis incidunt
    exercitationem totam, quos dolores, saepe reprehenderit, voluptatum
    delectus tempora excepturi vel molestiae nisi. Sunt, saepe! Eligendi,
    maxime?</p>
</section>

<div class="program">
  <div class="video-container">
    <video autoplay loop poster="/build/img/bg-talleres.webp">
      <source src="/build/img/video/video.mp4" type="video/mp4" />
      <source src="/build/img/video/video.webm" type="video/webm" />
      <source src="/build/img/video/video.ogv" type="video/ogg" />
    </video>
  </div>
  <div class="program-content">
    <div class="container">
      <div class="program-event">
        <h2>Programa del evento</h2>
        <?php 
          try {
            require_once('includes/functions/db_conection.php');
            $sql  = " SELECT * FROM category_event ";

            $result = $conn->query($sql);
            
          } catch (\Throwable $th) {
            echo $e->getMessage();
          }
        ?>
        <nav class="program-menu">
          <?php while($cat = $result->fetch_assoc()): ?>
          <a href="#<?php echo strtolower($cat['cat_event']); ?>"><i class="fas <?php echo $cat['icon']; ?>"></i><?php echo $cat['cat_event']; ?></a>
          <?php endwhile; ?>
        </nav>

        <?php 
          try {
            require_once('includes/functions/db_conection.php');
            // Query 1
            $sql  = " SELECT id_event, name_event, date_event, hour_event, cat_event, icon, name_guest, surname_guest ";
            $sql .= " FROM event ";
            $sql .= " INNER JOIN category_event ";
            $sql .= " ON event.id_cat_event = category_event.id_category ";
            $sql .= " INNER JOIN guests ";
            $sql .= " ON event.id_guests = guests.id_guest ";
            $sql .= " AND event.id_cat_event = 1 ";
            $sql .= " ORDER BY id_event LIMIT 2 ;";
            // Query 2
            $sql .= " SELECT id_event, name_event, date_event, hour_event, cat_event, icon, name_guest, surname_guest ";
            $sql .= " FROM event ";
            $sql .= " INNER JOIN category_event ";
            $sql .= " ON event.id_cat_event = category_event.id_category ";
            $sql .= " INNER JOIN guests ";
            $sql .= " ON event.id_guests = guests.id_guest ";
            $sql .= " AND event.id_cat_event = 2 ";
            $sql .= " ORDER BY id_event LIMIT 2 ;";
            // Query 3
            $sql .= " SELECT id_event, name_event, date_event, hour_event, cat_event, icon, name_guest, surname_guest ";
            $sql .= " FROM event ";
            $sql .= " INNER JOIN category_event ";
            $sql .= " ON event.id_cat_event = category_event.id_category ";
            $sql .= " INNER JOIN guests ";
            $sql .= " ON event.id_guests = guests.id_guest ";
            $sql .= " AND event.id_cat_event = 3 ";
            $sql .= " ORDER BY id_event LIMIT 2 ;";
            
          } catch (\Throwable $th) {
            echo $e->getMessage();
          }
        ?>

        <?php $conn->multi_query($sql); ?>

        <?php 
          do {
            $result = $conn->store_result();
            $row = $result->fetch_all(MYSQLI_ASSOC); ?>

            <?php $i = 0; ?>
            <?php foreach($row as $event): ?>
            <?php if($i % 2 === 0): ?>
              <div id="<?php echo strtolower($event['cat_event']); ?>" class="course-info hidden">
                <?php endif; ?>
                <div class="event-detail">
                  <h3><?php echo $event['name_event']; ?></h3>
                  <p><i class="fas fa-clock"></i><?php echo $event['hour_event']; ?></p>
                  <p><i class="fas fa-calendar"></i><?php echo $event['date_event']; ?></p>
                  <p><i class="fas fa-user"></i><?php echo $event['name_guest'] . ' ' . $event['surname_guest']; ?></p>
                </div>
                
                
              <?php if($i % 2 === 1): ?>
                  <div class="button-container">
                    <a href="calendary.php" class="button">Ver todos</a>
                  </div>
                </div>
              <?php endif; ?>
          <?php $i++; ?>
          <?php endforeach; ?>
          <?php $result->free(); ?>
          <?php } while ($conn->more_results() && $conn->next_result());
        ?>
      </div>
    </div>
  </div>
</div>

<?php require_once('includes/templates/guests.php'); ?>

<section class="counter parallax section">
  <div class="container">
    <ul class="event-summary">
      <li><p class="num">0</p> invitados</li>
      <li><p class="num">0</p> talleres</li>
      <li><p class="num">0</p> dias</li>
      <li><p class="num">0</p> conferencias</li>
    </ul>
  </div>
</section>

<section class="prices section">
  <h2>Precios</h2>
  <div class="container">
    <ul class="list-prices">
      <li>
        <div class="table-price">
          <h3>Pase por día</h3>
          <p class="num">$30</p>
          <ul>
            <li>Bocadillos Gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los talleres</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>
      <li>
        <div class="table-price">
          <h3>Todos los días</h3>
          <p class="num">$50</p>
          <ul>
            <li>Bocadillos Gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los talleres</li>
          </ul>
          <a href="#" class="button">Comprar</a>
        </div>
      </li>
      <li>
        <div class="table-price">
          <h3>Pase por 2 días</h3>
          <p class="num">$45</p>
          <ul>
            <li>Bocadillos Gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los talleres</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>
    </ul>
  </div>
</section>

<div id="map" class="map"></div>

<section class="section">
  <h2>Testimoniales</h2>
  <div class="testimonials container">
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam at distinctio eveniet vel nam incidunt laudantium sed vero quisquam, quia, cum similique, rem eum fugit molestiae blanditiis modi quae dolores!</p>
        <footer class="testimonial-info">
          <img src="/build/img/testimonial.webp" alt="Imagen del testimonial">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam at distinctio eveniet vel nam incidunt laudantium sed vero quisquam, quia, cum similique, rem eum fugit molestiae blanditiis modi quae dolores!</p>
        <footer class="testimonial-info">
          <img src="/build/img/testimonial.webp" alt="Imagen del testimonial">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam at distinctio eveniet vel nam incidunt laudantium sed vero quisquam, quia, cum similique, rem eum fugit molestiae blanditiis modi quae dolores!</p>
        <footer class="testimonial-info">
          <img src="/build/img/testimonial.webp" alt="Imagen del testimonial">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>
  </div>
</section>

<div class="newsletter parallax">
  <div class="newsletter-content container">
    <p>Regístrate en NewsLetter:</p>
    <h3>GDLWebCamp</h3>
    <button class="button">Registro</button>
  </div>
</div>

<section class="section">
  <h2>Faltan</h2>
  <div class="count-down container">
    <ul>
      <li><p id="days" class="num"></p>días</li>
      <li><p id="hours" class="num"></p>horas</li>
      <li><p id="minutes" class="num"></p>minutos</li>
      <li><p id="seconds" class="num"></p>segundos</li>
    </ul>
  </div>
</section>

<?php include_once('includes/templates/footer.php'); ?>