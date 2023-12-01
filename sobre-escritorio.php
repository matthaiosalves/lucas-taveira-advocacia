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
require_once get_template_directory() . '/template-parts/contato/index.php';
?>
<?php get_footer(); ?>