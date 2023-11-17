<?php
$imagem = get_field('imagem');
$texto = get_field('texto');
?>
<section class="texto-imagem" id="texto-imagem">
  <div class="container-fluid">
    <div class="row">

      <div class="col-texto">
        <p class="texto"><?php echo $texto; ?></p>
      </div>
      <div class="col-imagem">
        <img src="<?php echo $imagem; ?>" alt="Imagem de apoio ao texto do lado.">
      </div>
    </div>
  </div>
</section>