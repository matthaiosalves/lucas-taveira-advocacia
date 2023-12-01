<?php
/*
Template Name: Direito do consumidor
*/

get_header();
?>
<style>
  .texto-imagem {
    padding-top: 5px;
    padding-bottom: 5px;
  }

  .saiba {
    padding-bottom: 5px;
  }

  .texto-imagem .boxTextoImagem:nth-child(2n + 1) {
    flex-direction: row;
  }
</style>
<?php
require_once get_template_directory() . '/template-parts/banner-home/index.php';
require_once get_template_directory() . '/template-parts/saiba/index.php';
require_once get_template_directory() . '/template-parts/texto-imagem/index.php';
require_once get_template_directory() . '/template-parts/titulo-texto/index.php';
require_once get_template_directory() . '/template-parts/contato/index.php';
?>
<?php get_footer(); ?>