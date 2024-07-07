<?php
/*
Template Name: Sobre o escritório
*/

get_header();
?>
<style>
  .texto-imagem {
    padding-top: 5px;
  }

  .saiba {
    padding-bottom: 5px;
  }

  .img-1 {
    width: 277px;
  }

  .img-2 {
    width: 380px;
  }

  .img-3 {
    width: 446px;
  }

  @media (max-width: 998px) {

    .img-1,
    .img-2,
    .img-3 {
      border-radius: 20px;
      max-width: 480px;
      width: 100%;
      /* aspect-ratio: 16/9; */
    }
  }
</style>
<?php
require_once get_template_directory() . '/template-parts/banner-home/index.php';
require_once get_template_directory() . '/template-parts/saiba/index.php';
require_once get_template_directory() . '/template-parts/linha-temporal/index.php';
?>
<section class="imagens mb-5">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <img class="img-fluid mb-2 img-1" src="<?php echo get_template_directory_uri(); ?>/img/imagem sobre - 5.png" alt="">
      <img class="img-fluid mb-2 img-2" src="<?php echo get_template_directory_uri(); ?>/img/imagem sobre - 6.png" alt="">
      <img class="img-fluid mb-2 img-3" src="<?php echo get_template_directory_uri(); ?>/img/imagem sobre - 7.png" alt="">
    </div>
  </div>
</section>
<?php
require_once get_template_directory() . '/template-parts/contato/index.php';
get_footer(); ?>