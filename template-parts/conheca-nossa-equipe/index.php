<?php
$equipe = get_field('equipe');
$equipe_titulo = get_field('equipe_titulo');
?>
<section class="conheca-equipe" id="conheca-equipe">
  <div class="container-fluid">

    <div class="row">
      <div class="boxTitleAndDescription">
        <h2 class="title"><?php echo $equipe_titulo['titulo']; ?></h2>
        <p class="description"><?php echo $equipe_titulo['descricao']; ?></p>
      </div>
    </div>
    <hr />

    <div class="row listTeam">
      <?php foreach ($equipe as $item) : ?>
        <div class="boxTeam col-sm-12 col-md-6 col-lg-4">
          <figure>
            <img loading="lazy" src="<?php echo $item['imagem']; ?>" alt="Equipe">
          </figure>

          <div class="boxTitleAndDescription">
            <h2 class="title"><?php echo $item['nome']; ?></h2>
            <hr />
            <p class="description"><?php echo $item['descricao']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- <div class="row">
      <div class="boxButton d-flex justify-content-center" style="margin-top: 30px;">
        <a class="buttonAreas" href="/equipe">
          SAIBA MAIS
          <img loading="lazy" class="setaButton img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="Seta">
        </a>
      </div>
    </div> -->

  </div>
</section>