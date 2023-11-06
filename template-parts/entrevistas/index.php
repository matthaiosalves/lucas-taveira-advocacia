<?php
$entrevistas = get_field('entrevistas');
?>
<section class="entrevistas">
  <div class="container-fluid">
    <div class="row">

      <div class="boxContentEntrevistas">

        <div class="boxTitleAndDescriptionEntrevistas">
          <h2 class="title">Entrevistas</h2>
          <hr>
          <p class="description">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
          </p>

          <div class="boxButton">
            <a href="#" class="buttonEntrevistas">
              VEJA TODAS
              <img class="setaButton img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="Seta">
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