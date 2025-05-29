
  <section class="info_section layout_padding2">
    <div class="container">

      <div class="row">

        <!-- Columna 1: Suscripción -->
        <div class="footer_col">
          <h5><strong>Los Angelitos de Violeta</strong></h4>
            <p>Sumate para recibir actualizaciones sobre adopciones y campañas.</p>
            <form class="subscribe_form">
              <input type="email" placeholder="Correo">
              <button type="submit">
                <i class="fas fa-arrow-right"></i>
              </button>
            </form>
        </div>

        <!-- Columna 2: Enlaces -->
        <div class="columnas_agrupadas">
          <div class="footer_col" style="flex: 1; min-width: 150px; margin: 20px;">
            <h5><strong>Secciones</strong></h5>
            <ul>
              <p><a href="#nosotros">Nosotros</a></p>
              <p><a href="#servicios">Servicios</a></p>
              <p><a href="#adopciones">Adopciones</a></p>
              <p><a href="#contacto">Contacto</a></p>
              <a href="#" onclick="abrirModal(); return false;">Términos y Condiciones</a>
            </ul>
          </div>

          <!-- Columna 3: Contacto -->
          <div class="footer_col" style="flex: 1; min-width: 250px; margin: 20px;">
            <h5><strong>Contacto</strong></h5>
            <ul>
              <p><i class="fas fa-phone"></i> +54 9 351 215 7626</p>
              <p><i class="fas fa-envelope"></i> angelitosdelbasural@hotmail.com</p>
              <p><i class="fas fa-map-marker-alt"></i> Córdoba, Argentina</p>
            </ul>
          </div>
        </div>

      </div>

      <div id="iconos_redes_sociales">
        <a href="https://facebook.com" target="_blank">
          <i class="fab fa-facebook fa-2x"></i>
        </a>
        <a href="https://instagram.com" target="_blank">
          <i class="fab fa-instagram fa-2x"></i>
        </a>
        <a href="https://twitter.com" target="_blank">
          <i class="fab fa-twitter fa-2x"></i>
        </a>
      </div>

      <div id="derechos">
        © 2025 Fundación Los Angelitos de Violeta - Versión 1.0.1 </div>
      </div>

          <?php require_once 'html/modal.html'; ?>
  </section>
<!-- jQuery: Librería JavaScript que simplifica el manejo del DOM, eventos, animaciones, AJAX, etc. -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

<!-- Bootstrap JS: Añade funcionalidad interactiva (menús colapsables, carruseles, modales, etc.) de Bootstrap -->
<script type="text/javascript" src="js/bootstrap.js"></script>

<!-- Google Maps API: Permite mostrar mapas de Google en la web. 'initMap' es la función callback que se ejecuta al cargar el mapa -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>

<script src="js/modal.js"></script>
