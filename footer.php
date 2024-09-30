<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lucas_Taveira
 */

$footer = get_field('rodape', 'option');
?>

<footer class="mt-auto">
  <div class="footer">
    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
          <div class="boxIcon">

            <img src="<?php echo $footer['logo']; ?>" alt="" class="img-fluid">

          </div>
          <div class="boxDescriptionFooter">
            <p class="description"><?php echo $footer['descricao']; ?></p>
          </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">

          <div class="boxItemFooter">
            <div class="boxTitleFooter">
              <p class="title">
                Links Úteis
              </p>
              <span class="borderBottom"></span>
            </div>

            <?php
            $campos = $footer['campos'];
            ?>


            <div class="boxLinks">
              <ul>
                <?php foreach ($campos as $item) : ?>
                  <li><a href="<?php echo $item['url']; ?>"><?php echo $item['titulo']; ?></a></li>
                <?php endforeach; ?>
              </ul>
            </div>

          </div>

        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4 boxSocialsPrime">
          <div class="boxSocial">

            <div class="boxTitleFooter">
              <p class="title">
                Nas Redes
              </p>
              <span class="borderBottom"></span>
            </div>

            <?php
            $facebook_link = get_field('facebook', 'option');
            $instagram_link = get_field('instagram', 'option');
            $youtube_link = get_field('youtube', 'option');
            $linkedin_link = get_field('linkedin', 'option');
            ?>

            <div class="boxSocials">
              <?php if ($facebook_link): ?>
                <a href="<?php echo esc_url($facebook_link); ?>" class="social" target="_blank" rel="noopener noreferrer" aria-label="Abre o facebook do escritório">
                  <i class="fa-brands fa-facebook-f"></i>
                </a>
              <?php endif; ?>

              <?php if ($instagram_link): ?>
                <a href="<?php echo esc_url($instagram_link); ?>" class="social" target="_blank" rel="noopener noreferrer" aria-label="Abre o instagram do escritório">
                  <i class="fa-brands fa-instagram"></i>
                </a>
              <?php endif; ?>

              <?php if ($youtube_link): ?>
                <a href="<?php echo esc_url($youtube_link); ?>" class="social" target="_blank" rel="noopener noreferrer" aria-label="Abre o youtube do escritório">
                  <i class="fa-brands fa-youtube"></i>
                </a>
              <?php endif; ?>

              <?php if ($linkedin_link): ?>
                <a href="<?php echo esc_url($linkedin_link); ?>" class="social" target="_blank" rel="noopener noreferrer" aria-label="Abre o linkedin do escritório">
                  <i class="fa-brands fa-linkedin-in"></i>
                </a>
              <?php endif; ?>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="copyright">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-sm-12 col-md-12 col-lg-7">© <?php echo date('Y'); ?> | Todos os direitos reservados | <?php echo get_bloginfo('name'); ?></div>
        <div class="col-sm-12 col-md-12 col-lg-5 text-sm-center text-md-end">
          Desenvolvido por Fabino designer

          <a class="social" href="//www.linkedin.com/in/jo%C3%A3o-paulo-fabino/">
            <svg xmlns="http://www.w3.org/2000/svg" width="119.263" height="36.883" viewBox="0 0 119.263 36.883">
              <g id="Grupo_15082" data-name="Grupo 15082" transform="translate(-95.586 -37.107)">
                <path id="Caminho_37" data-name="Caminho 37" d="M663.5,91.976h-9.6v3.1h1.762v14.937h3.1V95.073h4.782a4.033,4.033,0,0,1,4.033,4.033v10.9h3.1V99.145A7.169,7.169,0,0,0,663.5,91.976Z" transform="translate(-475.992 -46.778)" fill="#fff" />
                <g id="Grupo_23" data-name="Grupo 23" transform="translate(124.397 65.03)">
                  <path id="Caminho_38" data-name="Caminho 38" d="M293.654,227.27a4.36,4.36,0,1,1,0,8.72h-2.678v-8.72h2.678Zm3.783,4.353a3.652,3.652,0,0,0-3.8-3.76H291.6V235.4h2.033A3.662,3.662,0,0,0,297.437,231.623Z" transform="translate(-290.976 -227.153)" fill="#fff" />
                  <path id="Caminho_39" data-name="Caminho 39" d="M387.714,235.386v.6h-4.907v-8.72h4.77v.6h-4.142v3.3h3.818v.587h-3.818v3.634Z" transform="translate(-369.266 -227.153)" fill="#fff" />
                  <path id="Caminho_40" data-name="Caminho 40" d="M454.76,232.778h.639c0,1.281,1,2.092,2.467,2.092,1.334,0,2.3-.749,2.3-1.874,0-1.266-1.163-1.523-2.412-1.8-1.352-.3-2.813-.638-2.813-2.294,0-1.433,1.124-2.341,2.856-2.341a2.471,2.471,0,0,1,2.779,2.476h-.622a1.919,1.919,0,0,0-2.169-1.872c-1.317,0-2.217.667-2.217,1.713,0,1.2,1.159,1.461,2.389,1.736,1.377.316,2.854.657,2.854,2.38,0,1.536-1.244,2.5-2.941,2.5C456.008,235.486,454.76,234.422,454.76,232.778Z" transform="translate(-430.61 -226.543)" fill="#fff" />
                  <path id="Caminho_41" data-name="Caminho 41" d="M539.267,227.27h.628v8.72h-.628Z" transform="translate(-502.656 -227.153)" fill="#fff" />
                  <path id="Caminho_42" data-name="Caminho 42" d="M595.915,231.148a4.2,4.2,0,0,1-4.306,4.288,4.481,4.481,0,0,1-.011-8.96,4.13,4.13,0,0,1,4.173,3.1h-.645a3.519,3.519,0,0,0-3.517-2.486,3.678,3.678,0,0,0-3.735,3.867,3.637,3.637,0,0,0,3.735,3.86,3.493,3.493,0,0,0,3.633-3.073h-4.019v-.6Z" transform="translate(-543.551 -226.477)" fill="#fff" />
                  <path id="Caminho_43" data-name="Caminho 43" d="M696.1,227.27v8.72h-.534l-5.563-7.613v7.613h-.616v-8.72h.569l5.528,7.577V227.27Z" transform="translate(-630.643 -227.153)" fill="#fff" />
                  <path id="Caminho_44" data-name="Caminho 44" d="M787.734,235.386v.6h-4.907v-8.72h4.77v.6h-4.142v3.3h3.818v.587h-3.818v3.634Z" transform="translate(-710.303 -227.153)" fill="#fff" />
                  <path id="Caminho_45" data-name="Caminho 45" d="M862.366,232.325h-2.454v3.665h-.628v-8.72H862.5a2.543,2.543,0,0,1,2.711,2.537,2.477,2.477,0,0,1-2.164,2.473l2.21,3.71h-.71Zm-2.454-.6h2.556a1.936,1.936,0,1,0,0-3.857h-2.556Z" transform="translate(-775.486 -227.153)" fill="#fff" />
                </g>
                <path id="Caminho_46" data-name="Caminho 46" d="M790.679,91.488a9.053,9.053,0,1,0,9.053,9.053A9.053,9.053,0,0,0,790.679,91.488Zm0,15.009a5.956,5.956,0,1,1,5.956-5.956A5.956,5.956,0,0,1,790.679,106.5Z" transform="translate(-584.882 -46.362)" fill="#fff" />
                <path id="Caminho_47" data-name="Caminho 47" d="M353.284,91.976v2.247a9.053,9.053,0,1,0,0,13.612v2.175h3.1V91.976Zm-5.956,15.009a5.956,5.956,0,1,1,5.956-5.956A5.956,5.956,0,0,1,347.329,106.985Z" transform="translate(-206.905 -46.778)" fill="#fff" />
                <path id="Caminho_48" data-name="Caminho 48" d="M490.253,45.2a9.008,9.008,0,0,0-5.956,2.247V37.107h-3.1V63.231h3.1V61.056A9.049,9.049,0,1,0,490.253,45.2Zm0,15.009a5.956,5.956,0,1,1,5.956-5.956A5.956,5.956,0,0,1,490.253,60.206Z" transform="translate(-328.754 0)" fill="#fff" />
                <g id="Grupo_24" data-name="Grupo 24" transform="translate(172.453 38.167)">
                  <rect id="Retângulo_1" data-name="Retângulo 1" width="3.097" height="18.033" transform="translate(0.319 7.03)" fill="#fff" />
                  <path id="Caminho_49" data-name="Caminho 49" d="M620.7,46.262a1.9,1.9,0,0,1-1.925,1.885,1.925,1.925,0,0,1,.039-3.849A1.9,1.9,0,0,1,620.7,46.262Z" transform="translate(-616.886 -44.298)" fill="#fff" />
                </g>
                <path id="Caminho_50" data-name="Caminho 50" d="M298.145,37.107a7.169,7.169,0,0,0-7.169,7.169V63.3h3.1V48.294h2.836V45.2h-2.836v-.96a4.033,4.033,0,0,1,4.033-4.033h3.609v-3.1Z" transform="translate(-166.579 0)" fill="#fff" />
                <g id="Grupo_25" data-name="Grupo 25" transform="translate(95.586 37.107)">
                  <path id="Caminho_51" data-name="Caminho 51" d="M126.412,96.326a9,9,0,0,0,9-9V63.45h-3.887V82.286h-3.559v3.887h3.559v1.205a5.062,5.062,0,0,1-5.062,5.062h-4.529v3.887Z" transform="translate(-118.047 -59.566)" fill="#fff" />
                  <path id="Caminho_52" data-name="Caminho 52" d="M104.583,37.107a9,9,0,0,0-9,9V69.983h3.887V51.147h3.559V47.261H99.473V46.055a5.062,5.062,0,0,1,5.062-5.062h4.529V37.107Z" transform="translate(-95.586 -37.107)" fill="#fff" />
                </g>
              </g>
            </svg>
            <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
  </div>

</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/33ee87c64c.js" crossorigin="anonymous"></script>
<?php if (is_page('videos') || (is_page() && $post->post_parent == get_page_by_path('videos')->ID)) : ?>
  <script>
    (function($) {
      $(document).ready(function() {
        $('.videos .boxContentAreas').click(function() {
          var videoId = $(this).data('video-id');
          $('#videoFrame').attr('src', 'https://www.youtube.com/embed/' + videoId);
          $('.videoSelecionado').show();

          var videoSelecionadoTop = $('.videoSelecionado').offset().top;
          var videoSelecionadoHeight = $('.videoSelecionado').outerHeight();
          var windowHeight = $(window).height();
          var scrollTo = videoSelecionadoTop - (windowHeight / 2) + (videoSelecionadoHeight / 2);

          $('html, body').animate({
            scrollTop: scrollTo
          }, 10);
        });
      });
    })(jQuery);
  </script>
<?php endif; ?>
<?php wp_footer(); ?>


</body>

</html>