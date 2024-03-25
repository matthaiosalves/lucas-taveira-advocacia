<?php
$linha_do_tempo = get_field('linha_do_tempo');
?>
<section class="linha-tempo" id="linha-tempo">
  <div class="container-fluid">
    <?php foreach ($linha_do_tempo as $item) : ?>
      <div class="row align-items-center boxLinhaTemporal">
        <div class="col-sm-12 col-md-12 col-lg-5">
          <h6 class="ano"><?php echo $item['ano']; ?></h6>
          <hr class="barrer">
          <p class="texto"><?php echo $item['texto']; ?></p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-2">
          <img loading="lazy" src="" alt="Linha do tempo">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-5">
          <img loading="lazy" src="<?php echo $item['imagem']; ?>" alt="Imagem de apoio ao texto do lado.">
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>