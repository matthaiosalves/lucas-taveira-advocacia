<?php
$imagem = get_field('imagem_banner_home');
?>
<section class="banner-home" style="background-image: url('<?php echo !empty($imagem) ? $imagem : 'https://lucastaveiraadvogados.com.br/wp-content/uploads/2023/11/Banner-1-LT-ADVOGADOS.jpg'; ?>');" id="banner-home">
</section>