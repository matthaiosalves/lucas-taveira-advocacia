<?php
/*
Template Name: Página Inicial
*/

get_header();
?>

<?php
require_once get_template_directory() . '/template-parts/banner-home/index.php';
require_once get_template_directory() . '/template-parts/saiba/index.php';
require_once get_template_directory() . '/template-parts/entrevistas/index.php';
require_once get_template_directory() . '/template-parts/areas-de-atuacao/index.php';
require_once get_template_directory() . '/template-parts/conheca-nossa-equipe/index.php';
require_once get_template_directory() . '/template-parts/artigos-relacionados/index.php';
?>
<?php get_footer(); ?>