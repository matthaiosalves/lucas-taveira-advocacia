<?php
$titulo = get_field('titulo');
$texto = get_field('texto');
?>
<section class="titulo-texto">
  <div class="container-fluid">
    <div class="row">
      <h2 class="titulo"><?php echo $titulo; ?></h2>
      <p class="texto"><?php echo $texto; ?></p>
    </div>
  </div>
</section>