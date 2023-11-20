<?php
$areas = array(
  array(
    'imagem' => 'http://lucas-taveira-advogado.local/wp-content/uploads/2023/10/6-praticas-mais-valorizadas-em-um-escritorio-de-advocacia.jpg',
    'titulo' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy',
    'descricao' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy'
  ),
  array(
    'imagem' => 'http://lucas-taveira-advogado.local/wp-content/uploads/2023/10/6-praticas-mais-valorizadas-em-um-escritorio-de-advocacia.jpg',
    'titulo' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy',
    'descricao' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy'
  ),
  array(
    'imagem' => 'http://lucas-taveira-advogado.local/wp-content/uploads/2023/10/6-praticas-mais-valorizadas-em-um-escritorio-de-advocacia.jpg',
    'titulo' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy',
    'descricao' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy'
  )
);
?>
<section class="videos mb-5">
  <div class="container-fluid">
    <div class="row">
      <?php $totalAreas = count($areas); ?>
      <?php foreach ($areas as $key => $item) : ?>
        <div class="boxContentAreas" <?php echo ($key === $totalAreas - 1) ? ' style="margin-bottom: 45px;"' : ''; ?>>

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