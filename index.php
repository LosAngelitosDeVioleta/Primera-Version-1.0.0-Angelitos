<!DOCTYPE html>
<html>

  <!-- SECCION : HEAD -->
  <?php require_once 'html/head.html'; ?>

<body>
  
  <div class="hero_area">

  <!-- SECCION : HEADER -->
  <?php require_once 'html/header.html'; ?>
  
    <!-- SECCION INICIO -->
  <?php require_once 'html/inicio.html'; ?>

  </div>

  <!-- SECCION NUESTRA HISTORIA -->
  <?php require_once 'html/nuestraHistoria.html'; ?>

  <!-- SECCION SERVICIOS -->
  <?php require_once 'html/servicios.html'; ?>

  <!-- SECCION MASCOTAS -->
  <?php require_once 'html/mascotas.html'; ?>

  <!-- SECCION COMENTARIOS/EXPERIENCIAS ADOPTANTES -->
  <?php require_once 'html/comentarios.html'; ?>

  <!-- SECCION CONTACTO Y MAPS -->
  <?php require_once 'html/infoContacto.html'; ?>

  <!-- SECCION FOOTER -->
  <?php require_once 'html/footer.php'; ?>

  <!-- MODAL: TÉRMINOS Y CONDICIONES -->
  <?php require_once 'html/modal.html'; ?>

<a href="#" id="back-to-top" class="scroll-up">↑</a>
<script src="js/btn_top.js"></script>

<style>
   a {
    text-decoration: none;
  }

  .scroll-up {
    position: fixed;
    right: 3rem;
    bottom: -50%;
    z-index: 10;
    width: 32px;
    height: 32px;
    border-radius: 4px;
    background-color: rgba(29, 29, 31, 0.7);
    backdrop-filter: saturate(180%) blur(20px);
    -webkit-backdrop-filter: saturate(180%) blur(20px);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    transition: bottom .4s, transform .4s;
    color: white;
    font-weight: bold;
    font-size: 20px;
  }

  .scroll-up:hover {
    transform: translateY(-.25rem);
  }

  /* Mostrar botón */
  ._show-scroll {
    bottom: 3rem;
  }

  @media (max-width: 1199.98px) {
    .scroll-up {
      right: 1rem;
    }
  }
</style>

</body>
</html>
