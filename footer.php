<?php

/**
 * @package WordPress
 */

?>

<?php wp_footer(); ?>

<section class="banner ">

  <img src="<?php bloginfo('template_url'); ?>/assets/image/banner/pre_footer.jpg" alt="banner feregsp" />
  <div class="container ">
    <div class="text-wrapper">
      <h4>Forma Parte de este equipo!</h4>
      <p>
        En Grupo FEREG sabemos las exigencias del mercado por eso siempre estamos un paso adelante.
      </p>
    </div>
    <div class="container-bottom">
      <a href="<?php echo (get_permalink(10)) ?>" target="_blank" rel="noopener noreferrer">
        <div class="type-btn-line">

          <span>Registrarte</span>

        </div>
      </a>
    </div>
  </div>
</section>

<footer>
  <div>
    <p>Aviso de privacidad </p>
  </div>
  <div>
    <p>
      GRUPO FEREG Seguridad Privada.
    </p>
  </div>
  <div>
    <ul>
      <li>
        <a href="facebook.com" target="_blank">
          <img src="<?php bloginfo('template_url'); ?>/assets/image/icon/facebook.svg" alt="facebook icon" />
        </a>
      </li>
      <li>
        <a href="facebook.com" target="_blank">
          <img src="<?php bloginfo('template_url'); ?>/assets/image/icon/instagram.svg" alt="instagram icon" />
        </a>
      </li>
    </ul>
  </div>
</footer>
</body>

</html>