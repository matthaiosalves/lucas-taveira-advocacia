<?php

$videos = get_field("videos");
?>

<section class="videoSelecionado mb-5" style="background-color: #1B2838;">
  <div class="container-fluid">
    <div class="row">
      <div style="width: 100%; min-height: 772px; display: flex; justify-content: center; align-items: center;">
        <iframe id="videoFrame" width="1137" height="670" src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>" frameborder="0" allowfullscreen style="border: 2px solid #fff; border-radius: 20px;"></iframe>
      </div>
    </div>
  </div>
</section>



<section class="videos mb-5">
  <div class="container-fluid">
    <div class="row">
      <?php $totalAreas = count($videos); ?>
      <?php foreach ($videos as $key => $item) :
        $interno = $item['url_interno'];
        $externo = $item['url_externo'];
      ?>
        <div class="boxContentAreas" data-video-id="<?php echo get_youtube_id($interno); ?>">
          <figure class="boxImage">
            <?php if ($item['imagem']) : ?>
              <img class="img-fluid" src="<?php echo $item['imagem']; ?>" alt="Áreas de Atuação">
            <?php else : ?>
              <img class="img-fluid" src="https://img.youtube.com/vi/<?php echo get_youtube_id($interno); ?>/sddefault.jpg" alt="Entrevista - <?php echo $item['titulo']; ?>">
            <?php endif; ?>

          </figure>
          <div class="boxTitleAndDescriptionAreas">
            <h2 class="title"><?php echo $item['titulo']; ?></h2>
            <p class="description">
              <?php echo $item['descricao']; ?>
            </p>

            <?php if ($externo) : ?>
              <div class="boxButton">
                <a class="buttonAreas" href="<?php echo $externo; ?>" target="_blank">
                  ACESSAR
                  <img loading="lazy" class="setaButton img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="Seta">
                </a>
              </div>
            <?php endif; ?>
          </div>

        </div>
        <hr>
      <?php endforeach; ?>
    </div>
  </div>
</section>