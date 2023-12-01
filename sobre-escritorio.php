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
</style>
<?php
require_once get_template_directory() . '/template-parts/banner-home/index.php';
require_once get_template_directory() . '/template-parts/saiba/index.php';
require_once get_template_directory() . '/template-parts/texto-imagem/index.php';
?>
<section class="imagens mb-5">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <img class="img-fluid mb-2" src="<?php echo get_template_directory_uri(); ?>/img/imagem sobre - 5.png" alt="" style="width: 277px;">
      <img class="img-fluid mb-2" src="<?php echo get_template_directory_uri(); ?>/img/imagem sobre - 6.png" alt="" style="width: 380px;">
      <img class="img-fluid mb-2" src="<?php echo get_template_directory_uri(); ?>/img/imagem sobre - 7.png" alt="" style="width: 446px;">
    </div>
  </div>
</section>
<?php
require_once get_template_directory() . '/template-parts/contato/index.php';
get_footer(); ?>