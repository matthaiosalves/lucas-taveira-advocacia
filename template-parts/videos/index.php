<?php
$url = 'http://www.youtube.com/watch?v=dQw4w9WgXcQ';
$youtube_id = get_youtube_id($url);

$areas = array(
  array(
    'imagem' => 'http://lucas-taveira-advogado.local/wp-content/uploads/2023/10/6-praticas-mais-valorizadas-em-um-escritorio-de-advocacia.jpg',
    'titulo' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy',
    'descricao' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy',
    'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
  ),
  array(
    'imagem' => 'http://lucas-taveira-advogado.local/wp-content/uploads/2023/10/6-praticas-mais-valorizadas-em-um-escritorio-de-advocacia.jpg',
    'titulo' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy',
    'descricao' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy',
    'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
  ),
  array(
    'imagem' => 'http://lucas-taveira-advogado.local/wp-content/uploads/2023/10/6-praticas-mais-valorizadas-em-um-escritorio-de-advocacia.jpg',
    'titulo' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy',
    'descricao' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy',
    'video_url' => 'https://youtu.be/3OnjOv_TtXo?si=ME_IHz_wkdkRnK7q'
  )
);
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
      <?php $totalAreas = count($areas); ?>
      <?php foreach ($areas as $key => $item) : ?>
        <div class="boxContentAreas" data-video-id="<?php echo get_youtube_id($item['video_url']); ?>">
          <!-- Adicione um atributo data-video-id para armazenar o ID do vídeo relacionado -->
          <figure class="boxImage">
            <img class="img-fluid" src="<?php echo $item['imagem']; ?>" alt="Áreas de Atuação">
          </figure>
          <div class="boxTitleAndDescriptionAreas">
            <h2 class="title"><?php echo $item['titulo']; ?></h2>
            <p class="description">
              <?php echo $item['descricao']; ?>
            </p>
          </div>
        </div>
        <hr>
      <?php endforeach; ?>
    </div>
  </div>
</section>