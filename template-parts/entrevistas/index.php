<?php
$entrevistas = get_field('entrevistas');
$titulo = get_field('titulo');
$descricao = get_field('descricao');
?>
<section class="entrevistas" id="entrevistas">
  <div class="container-fluid">
    <div class="row">

      <div class="boxContentEntrevistas">

        <div class="boxTitleAndDescriptionEntrevistas">
          <h2 class="title"><?php echo $titulo; ?></h2>
          <hr>
          <p class="description">
            <?php echo $descricao; ?>
          </p>

          <div class="boxButton">
            <a href="/videos" class="buttonEntrevistas">
              VEJA TODAS
              <img loading="lazy" class="setaButton img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="Seta">
            </a>

          </div>
        </div>

        <figure class="boxImage">
          <?php echo $entrevistas; ?>
        </figure>

      </div>

    </div>
  </div>
</section>