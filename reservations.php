<?php include_once('includes/templates/header.php'); ?>

<section class="section container">
  <h2>Registro de usuarios</h2>
  <form method="POST" action="pagar.php" id="registration" class="registration">
    <div id="user-data" class="user-data">
      <div class="camp">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" placeholder="Tu nombre">
      </div>
      <div class="camp">
        <label for="surname">Apellido:</label>
        <input type="text" name="surname" id="surname" placeholder="Tu apellido">
      </div>
      <div class="camp">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Tu Email">
      </div>
      <div id="error"></div>
    </div>
    
    <div id="packages" class="packages">
      <section class="prices section">
        <h2>Precios</h2>
        <h3>Elige el número de boletos</h3>
        <div class="container">
          <ul class="list-prices">
            <li>
              <div class="table-price">
                <h3>Pase por día (Viernes)</h3>
                <p class="num">$30</p>
                <ul>
                  <li>Bocadillos Gratis</li>
                  <li>Todas las conferencias</li>
                  <li>Todos los talleres</li>
                </ul>
                <div id="order">
                  <label for="pass-day">Boletos deseados:</label>
                  <input class="input-price" type="number" name="tickets[one_day][amount]" id="pass-day" min="0" size="3" placeholder="0">
                  <input type="hidden" name="tickets[one_day][price]" value="30">
                </div>
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
                <div id="order">
                  <label for="complet-day">Boletos deseados:</label>
                  <input class="input-price" type="number" name="tickets[complet][amount]" id="complet-day" min="0" size="3" placeholder="0">
                  <input type="hidden" name="tickets[complet][price]" value="50">
                </div>
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
                <div id="order">
                  <label for="pass-two-days">Boletos deseados:</label>
                  <input class="input-price" type="number" name="tickets[two_days][amount]" id="pass-two-days" min="0" size="3" placeholder="0">
                  <input type="hidden" name="tickets[two_days][price]" value="45">
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </div>
  
    <div id="events" class="events container">
      <h3>Elige tus talleres</h3>
      <div class="box">
        <div id="viernes" class="day-container">
          <h4>Viernes</h4>
          <div class="day-content">
            <div>
              <p>Talleres:</p>
              <label><input type="checkbox" name="registry[]" id="taller_01" value="taller_01"><time>10:00</time> Responsive Web Design</label>
              <label><input type="checkbox" name="registry[]" id="taller_02" value="taller_02"><time>12:00</time> Flexbox</label>
              <label><input type="checkbox" name="registry[]" id="taller_03" value="taller_03"><time>14:00</time> HTML5 y CSS3</label>
              <label><input type="checkbox" name="registry[]" id="taller_04" value="taller_04"><time>17:00</time> Drupal</label>
              <label><input type="checkbox" name="registry[]" id="taller_05" value="taller_05"><time>19:00</time> WordPress</label>
            </div>
            <div>
              <p>Conferencias:</p>
              <label><input type="checkbox" name="registry[]" id="conf_01" value="conf_01"><time>10:00</time> Como ser Freelancer</label>
              <label><input type="checkbox" name="registry[]" id="conf_02" value="conf_02"><time>17:00</time> Tecnologías del Futuro</label>
              <label><input type="checkbox" name="registry[]" id="conf_03" value="conf_03"><time>19:00</time> Seguridad en la Web</label>
            </div>
            <div>
              <p>Seminarios:</p>
              <label><input type="checkbox" name="registry[]" id="sem_01" value="sem_01"><time>10:00</time> Diseño UI y UX para móviles</label>
            </div>
          </div>
        </div>
        <div id="sabado" class="day-container">
          <h4>Sábado</h4>
          <div class="day-content">
            <div>
              <p>Talleres:</p>
              <label><input type="checkbox" name="registry[]" id="taller_06" value="taller_06"><time>10:00</time> AngularJS</label>
              <label><input type="checkbox" name="registry[]" id="taller_07" value="taller_07"><time>12:00</time> PHP y MySQL</label>
              <label><input type="checkbox" name="registry[]" id="taller_08" value="taller_08"><time>14:00</time> JavaScript Avanzado</label>
              <label><input type="checkbox" name="registry[]" id="taller_09" value="taller_09"><time>17:00</time> SEO en Google</label>
              <label><input type="checkbox" name="registry[]" id="taller_10" value="taller_10"><time>19:00</time> De Photoshop a HTML5 y CSS3</label>
              <label><input type="checkbox" name="registry[]" id="taller_11" value="taller_11"><time>21:00</time> PHP Medio y Avanzado</label>
            </div>
            <div>
              <p>Conferencias:</p>
              <label><input type="checkbox" name="registry[]" id="conf_04" value="conf_04"><time>10:00</time> Como crear una tienda online que venda millones en pocos días</label>
              <label><input type="checkbox" name="registry[]" id="conf_05" value="conf_05"><time>17:00</time> Los mejores lugares para encontrar trabajo</label>
              <label><input type="checkbox" name="registry[]" id="conf_06" value="conf_06"><time>19:00</time> Pasos para crear un negocio rentable</label>
            </div>
            <div>
              <p>Seminarios:</p>
              <label><input type="checkbox" name="registry[]" id="sem_02" value="sem_02"><time>10:00</time> Aprende a Programar en una mañana</label>
              <label><input type="checkbox" name="registry[]" id="sem_03" value="sem_03"><time>17:00</time> Diseño UI y UX para móviles</label>
            </div>
          </div>
        </div>
        <div id="domingo" class="day-container">
          <h4>Domingo</h4>
          <div class="day-content">
            <div>
              <p>Talleres:</p>
              <label><input type="checkbox" name="registry[]" id="taller_12" value="taller_12"><time>10:00</time> Laravel</label>
              <label><input type="checkbox" name="registry[]" id="taller_13" value="taller_13"><time>12:00</time> Crea tu propia API</label>
              <label><input type="checkbox" name="registry[]" id="taller_14" value="taller_14"><time>14:00</time> JavaScript y jQuery</label>
              <label><input type="checkbox" name="registry[]" id="taller_15" value="taller_15"><time>17:00</time> Creando Plantillas para WordPress</label>
              <label><input type="checkbox" name="registry[]" id="taller_16" value="taller_16"><time>19:00</time> Tiendas Virtuales en Magento</label>
            </div>
            <div>
              <p>Conferencias:</p>
              <label><input type="checkbox" name="registry[]" id="conf_07" value="conf_07"><time>10:00</time> Como hacer Marketing en línea</label>
              <label><input type="checkbox" name="registry[]" id="conf_08" value="conf_08"><time>17:00</time> ¿Con que lenguaje debo empezar?</label>
              <label><input type="checkbox" name="registry[]" id="conf_09" value="conf_09"><time>19:00</time> Frameworks y librerias Open Source</label>
            </div>
            <div>
              <p>Seminarios:</p>
              <label><input type="checkbox" name="registry[]" id="sem_04" value="sem_04"><time>14:00</time> Creando una App en Android en una tarde</label>
              <label><input type="checkbox" name="registry[]" id="sem_05" value="sem_05"><time>17:00</time> Creando una App en iOS en una tarde</label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="summary" class="summary section">
      <h2>Pago y extras</h2>
      <div class="box container">
        <div class="extra">
          <div class="order">
            <label for="camisa_evento">Camisa del evento $10 <small>(Promoción del 7% de descuento.)</small></label>
            <input type="number" min="0" id="camisa_evento" name="extra_request[shirts][amount]" size="3" placeholder="0">
            <input type="hidden" name="extra_request[shirts][price]" value="10">
          </div>
          <div class="order">
            <label for="etiquetas">Paquete de 10 etiquetas $2 <small>(HTML5, CSS3, JS, etc.)</small></label>
            <input type="number" min="0" id="etiquetas" name="extra_request[labels][amount]" size="3" placeholder="0">
            <input type="hidden" name="extra_request[labels][price]" value="2">
          </div>
          <div class="order">
            <label for="gift">Seleccione un regalo</label>
            <select id="gift" name="gift" required>
              <option selected disabled value="">--Seleccione un regalo--</option>
              <option value="2">Etiquetas</option>
              <option value="1">Pulsera</option>
              <option value="3">Plumas</option>
            </select>
          </div>
          <input type="button" id="calc" class="button" value="calcular">
        </div>
        <div class="total">
          <h4>Resumen:</h4>
          <div id="list-products">

          </div>
          <h4>Total:</>
          <div id="sum-total">

          </div>
          <input type="hidden" name="total-order" id="total-order" value="total-order">
          <input type="submit" value="Pagar" name="submit" id="btnRegistro" class="button">
        </div>
      </div>
    </div>
  </form>
</section>

<?php include_once('includes/templates/footer.php'); ?>