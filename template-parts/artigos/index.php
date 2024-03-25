<section class="artigos" id="artigos">
  <div class="container-fluid">

    <div class="row px-4 justify-content-center gap-4">
      <?php
      $args = array(
        'post_type' => 'artigo',
        'posts_per_page' => 3,
      );
      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
          $post_id = get_the_ID();
          $url = get_field('url_artigo', $post_id);
      ?>

          <div class="card col-sm-6 col-md-6 col-lg-12">
            <div class="card-body">

              <div class="boxImage">
                <?php

                if (has_post_thumbnail()) {
                  the_post_thumbnail('full', array('loading' => 'lazy'));
                } else {
                  echo '<img loading="lazy" src="https://i.imgur.com/8RjZi65.png" alt="Imagem da thumb do artigo">';
                }
                ?>
              </div>

              <div class="boxTitleAndDescription">
                <h2 class="title">
                  <?php the_title(); ?>
                </h2>
                <hr />
                <p class="description">
                  <?php
                  $excerpt = get_the_excerpt();
                  echo substr($excerpt, 0, 100);
                  if (strlen($excerpt) > 100) echo '...';
                  ?>
                </p>

                <div class="boxInfoArtigos">
                  <div class="boxAutorArtigos d-flex justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28.629" height="31.944" viewBox="0 0 28.629 31.944">
                      <g id="Grupo_3127" data-name="Grupo 3127" transform="translate(0)">
                        <g id="Grupo_3126" data-name="Grupo 3126">
                          <g id="Grupo_3125" data-name="Grupo 3125">
                            <path id="Caminho_1279" data-name="Caminho 1279" d="M121.807,201.248A1.248,1.248,0,0,0,120.559,200H107.707a1.248,1.248,0,0,0,0,2.5h12.853A1.248,1.248,0,0,0,121.807,201.248Z" transform="translate(-101.475 -187.522)" fill="#3b425c" />
                            <path id="Caminho_1280" data-name="Caminho 1280" d="M107.707,280a1.248,1.248,0,0,0,0,2.5h7.806a1.248,1.248,0,0,0,0-2.5Z" transform="translate(-101.475 -262.53)" fill="#3b425c" />
                            <path id="Caminho_1281" data-name="Caminho 1281" d="M35.735,29.449H31.561a2.5,2.5,0,0,1-2.5-2.5V4.991a2.5,2.5,0,0,1,2.5-2.5H46.9a2.5,2.5,0,0,1,2.5,2.5v7.674a1.248,1.248,0,0,0,2.5,0V4.991A5,5,0,0,0,46.9,0H31.561A5,5,0,0,0,26.57,4.991V26.953a5,5,0,0,0,4.991,4.991h4.173a1.248,1.248,0,0,0,0-2.5Z" transform="translate(-26.57)" fill="#3b425c" />
                            <path id="Caminho_1282" data-name="Caminho 1282" d="M257.459,273.119a3.747,3.747,0,0,0-5.293,0l-6.851,6.836a1.248,1.248,0,0,0-.313.521l-1.492,4.912a1.248,1.248,0,0,0,1.527,1.565l5.037-1.4a1.248,1.248,0,0,0,.548-.319l6.836-6.824A3.748,3.748,0,0,0,257.459,273.119Zm-8.367,10.12-2.534.7.742-2.441,4.623-4.612,1.765,1.765Zm6.6-6.591-.242.241-1.765-1.765.241-.24a1.248,1.248,0,0,1,1.766,1.764Z" transform="translate(-229.925 -255.052)" fill="#3b425c" />
                            <path id="Caminho_1283" data-name="Caminho 1283" d="M120.559,120H107.707a1.248,1.248,0,0,0,0,2.5h12.853a1.248,1.248,0,0,0,0-2.5Z" transform="translate(-101.475 -112.513)" fill="#3b425c" />
                          </g>
                        </g>
                      </g>
                    </svg>
                    <span>Por <?php the_author(); ?> - <?php the_time('d/m/Y'); ?></span>
                  </div>

                  <div class="boxButton">
                    <?php if (empty($url)) : ?>
                      <a class="buttonAreas" href="<?php the_permalink(); ?>">
                        SAIBA MAIS
                        <img loading="lazy" class="setaButton img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="Seta">
                      </a>
                    <?php else : ?>
                      <a class="buttonAreas" href="<?php echo $url; ?>" target="_blank">
                        SAIBA MAIS
                        <img loading="lazy" class="setaButton img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="Seta">
                      </a>
                    <?php endif; ?>
                  </div>


                  <div class="boxSocialsButtons">
                    <a href="https://api.whatsapp.com/send?text=<?php echo urlencode(get_the_title() . ' - ' . get_the_permalink()); ?>" class="social" target="_blank">
                      <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_the_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" class="social" target="_blank">
                      <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/sharingapp/?url=<?php echo urlencode(get_the_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" class="social" target="_blank">
                      <i class="fa-brands fa-instagram"></i>
                    </a>
                  </div>

                </div>
              </div>
            </div>
          </div>

      <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo '<p class="text-center">Nenhum artigo encontrado.</p>';
      endif;
      ?>
    </div>


  </div>
</section>