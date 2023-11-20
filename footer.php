<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lucas_Taveira
 */

$footer = get_field('footer', 'options');
?>

<footer class="mt-auto">

  <div class="footer">
    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
          <div class="boxIcon">
            <img src="<?php echo get_template_directory_uri(); ?>/img/footer/logo-pacto-white.svg" alt="Icone Pacto Global">
          </div>
          <div class="boxDescriptionFooter">
            <p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
          </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">

          <div class="boxItemFooter">
            <div class="boxTitleFooter">
              <p class="title">
                Links Úteis
              </p>
              <span class="borderBottom"></span>
            </div>

            <div class="boxLinks">
              <ul>
                <li><a href="/">Escritório</a></li>
                <li><a href="/">Áreas de Atuação</a></li>
                <li><a href="/">Equipe</a></li>
                <li><a href="/">Artigos</a></li>
                <li><a href="/">Entrevistas</a></li>
                <li><a href="/">Termos de Uso</a></li>
                <li><a href="/">Política de Privacidade</a></li>
              </ul>
            </div>
          </div>

        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 boxSocialsPrime">
          <div class="boxSocial">

            <div class="boxTitleFooter">
              <p class="title">
                Nas Redes
              </p>
              <span class="borderBottom"></span>
            </div>

            <div class="boxSocials">
              <a href="#" class="social" target="_blank" rel="noopener noreferrer" aria-label="Abre o facebook do escritório">
                <i class="fa-brands fa-facebook-f"></i>
              </a>
              <a href="#" class="social" target="_blank" rel="noopener noreferrer" aria-label="Abre o instagram do escritório">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a href="#" class="social" target="_blank" rel="noopener noreferrer" aria-label="Abre o youtube do escritório">
                <i class="fa-brands fa-youtube"></i>
              </a>
              <a href="#" class="social" target="_blank" rel="noopener noreferrer" aria-label="Abre o linkedin do escritório">
                <i class="fa-brands fa-linkedin-in"></i>
              </a>
            </div>


          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="copyright">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-7">© <?php echo date('Y'); ?> | Todos os direitos reservados | Lucas Taveira Advogados e Associados</div>
        <div class="col-sm-12 col-md-12 col-lg-5">Desenvolvido por Fabino designer</div>
      </div>
    </div>
  </div>

</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/33ee87c64c.js" crossorigin="anonymous"></script>
<?php wp_footer(); ?>


</body>

</html>