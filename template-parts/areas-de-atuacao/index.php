<?php
$areas = get_field('areas_de_atuacao');
?>
<section class="areasDeAtuacao" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner-areas.png');" id="areasDeAtuacao">
  <div class="container-fluid">

    <div class="row">

      <div class="boxTitleAndDescription">
        <h2 class="title">Áreas de atuação</h2>
        <p class="descrition">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam <br> nonumy eirmod tempor.</p>
      </div>
    </div>
    <hr />

    <div class="row">
      <?php foreach ($areas as $item) : ?>
        <div class="boxContentAreas">

          <figure class="boxImage">
            <img loading="lazy" class="img-fluid" src="<?php echo $item['imagem']; ?>" alt="Áreas de Atuação">
          </figure>

          <div class="boxTitleAndDescriptionAreas">
            <h2 class="title"><?php echo $item['titulo']; ?></h2>
            <p class="description">
              <?php echo $item['descricao']; ?>
            </p>

            <div class="boxButton">
              <a class="buttonAreas" href="#">
                SAIBA MAIS
                <img loading="lazy" class="setaButton img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="Seta">
              </a>
            </div>
          </div>

        </div>
      <?php endforeach; ?>
    </div>



  </div>
</section>