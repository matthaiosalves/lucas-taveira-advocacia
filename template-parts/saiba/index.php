<?php
$titulo = get_field('titulo');
$subtitulo = get_field('subtitulo');
$descricao = get_field('descricao');
$tituloDoConteudo = get_field('titulo_do_conteudo');
$conteudo = get_field('conteudo');
$botao = get_field('botao');
?>
<section class="saiba" id="saiba">
  <div class="container-fluid">
    <div class="row px-3 titlePrimeRow">

      <div class="boxTitlePrime">
        <span class="barrerLateral"></span>
        <p class="title"><?php echo $titulo; ?> <span class="barrerHorizontal"></span></p>
        <h5 class="subtitle"><?php echo $subtitulo; ?></h5>
      </div>

      <div class="boxDescriptionPrime">
        <small class="description"><?php echo $descricao; ?></small>
      </div>

      <?php if (is_page_template('video.php') || is_single()) : ?>
        <div class="d-flex justify-content-end align-items-center mt-3" style="gap: 25px;">
          <?php if (is_page_template('video.php')) : ?>
            <div class="boxSocialsButtons justify-content-center align-items-center">
              <a href="#" class="social">
                <i class="fa-brands fa-whatsapp"></i>
              </a>
              <a href="#" class="social">
                <i class="fa-brands fa-facebook"></i>
              </a>
              <a href="#" class="social">
                <i class="fa-brands fa-instagram"></i>
              </a>
            </div>
          <?php endif; ?>
          <?php if (is_single()) : ?>
            <div class="boxAutorArtigos d-flex justify-content-center align-items-center">
              <i class="fa-solid fa-clipboard fa-2x"></i></i><i class="fa fa-pencil fa"></i>
              <span style="font-size: 20px;">Por Lucas Taveira - 10/09/2023</span>
            </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <hr>
    </div>

    <div class="row">
      <?php if ($tituloDoConteudo) : ?>
        <h5 class="contentTitle"><?php echo $tituloDoConteudo; ?></h5>
      <?php endif; ?>
      <p class="contentParagraph"><?php echo $conteudo; ?></p>
    </div>

    <?php if ($botao) : ?>
      <div class="row">
        <div class="boxButton d-flex justify-content-center" style="margin-top: 30px;">
          <a class="buttonAreas" href="<?php echo $botao; ?>">
            SAIBA MAIS
            <img class="setaButton img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="Seta">
          </a>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>