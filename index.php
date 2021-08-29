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
        <nav class="program-menu">
          <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
          <a href="#conferencias"><i class="fas fa-comment"></i>Conferencias</a>
          <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
        </nav>
        <div id="talleres" class="course-info hidden">
          <div class="event-detail">
            <h3>HTML5, CSS3, JavaScript</h3>
            <p><i class="fas fa-clock"></i>16:00 hrs</p>
            <p><i class="fas fa-calendar"></i>10 de Dic</p>
            <p><i class="fas fa-user"></i>Juan Pablo De La Torre</p>
          </div>
          <hr>
          <div class="event-detail">
            <h3>Responsive web design</h3>
            <p><i class="fas fa-clock"></i>20:00 hrs</p>
            <p><i class="fas fa-calendar"></i>10 de Dic</p>
            <p><i class="fas fa-user"></i>Juan Pablo De La Torre</p>
          </div>
          <div class="button-container">
            <a href="#" class="button">Ver todos</a>
          </div>
        </div>
        <div id="conferencias" class="course-info hidden">
          <div class="event-detail">
            <h3>Como ser freelancer</h3>
            <p><i class="fas fa-clock"></i>10:00 hrs</p>
            <p><i class="fas fa-calendar"></i>10 de Dic</p>
            <p><i class="fas fa-user"></i>Gregorio Sanchez <p>
          </div>
          <hr>
          <div class="event-detail">
            <h3>Tecnologias del futuro</h3>
            <p><i class="fas fa-clock"></i>17:00 hrs</p>
            <p><i class="fas fa-calendar"></i>10 de Dic</p>
            <p><i class="fas fa-user"></i>Susan Sanchez</p>
          </div>
          <div class="button-container">
            <a href="#" class="button">Ver todos</a>
          </div>
        </div>
        <div id="seminarios" class="course-info hidden">
          <div class="event-detail">
            <h3>Diseño UI/UX para móviles</h3>
            <p><i class="fas fa-clock"></i>17:00 hrs</p>
            <p><i class="fas fa-calendar"></i>11 de Dic</p>
            <p><i class="fas fa-user"></i>Harold García</p>
          </div>
          <hr>
          <div class="event-detail">
            <h3>Aprende a programar en una mañana</h3>
            <p><i class="fas fa-clock"></i>10:00 hrs</p>
            <p><i class="fas fa-calendar"></i>11 de Dic</p>
            <p><i class="fas fa-user"></i>Susana Rivera</p>
          </div>
          <div class="button-container">
            <a href="#" class="button">Ver todos</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="guests container section">
  <h2>Nuestros invitados</h2>
  <ul class="invited-list">
    <li>
      <div class="invited">
        <img src="/build/img/invitado1.webp" alt="Imagen del primer invitado">
        <p>Rafael Bautista</p>
      </div>
    </li>
    <li>
      <div class="invited">
        <img src="/build/img/invitado2.webp" alt="Imagen del primer invitado">
        <p>Shari Herrera</p>
      </div>
    </li>
    <li>
      <div class="invited">
        <img src="/build/img/invitado3.webp" alt="Imagen del primer invitado">
        <p>Gregorio Sanchez</p>
      </div>
    </li>
    <li>
      <div class="invited">
        <img src="/build/img/invitado4.webp" alt="Imagen del primer invitado">
        <p>Susana Rivera</p>
      </div>
    </li>
    <li>
      <div class="invited">
        <img src="/build/img/invitado5.webp" alt="Imagen del primer invitado">
        <p>Harold Garcia</p>
      </div>
    </li>
    <li>
      <div class="invited">
        <img src="/build/img/invitado6.webp" alt="Imagen del primer invitado">
        <p>Susan Sanchez</p>
      </div>
    </li>
  </ul>
</section>

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

<div id="map" class="map">

</div>

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