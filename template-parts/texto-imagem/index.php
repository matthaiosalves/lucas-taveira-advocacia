<?php
$texto_e_imagem = get_field('texto_e_imagem');
?>
<section class="texto-imagem" id="texto-imagem">
  <div class="container-fluid">
    <?php foreach ($texto_e_imagem as $item) : ?>
      <div class="row align-items-center boxTextoImagem">
        <div class="col-texto">
          <p class="texto"><?php echo $item['texto']; ?></p>
        </div>
        <div class="col-imagem">
          <img loading="lazy" src="<?php echo $item['imagem']; ?>" alt="Imagem de apoio ao texto do lado.">
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>