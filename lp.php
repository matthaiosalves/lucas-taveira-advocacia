<?php
/*
Template Name: LP
*/

get_header();
$entrevistas = get_field('entrevistas_lp');
$descricao = get_field('descricao_lp');
$faq = get_field('faq');
?>
<style>
  .navbar {
    display: none;
  }

  .faq {
    position: relative;
    z-index: 2;
  }

  .backgroundBlue {
    background-color: #222F4A;
    min-height: 400px;

    position: relative;
  }

  .videos-relacionados {
    min-height: 580px;
    background-color: #3b425c;
    padding-top: 59px;
    padding-bottom: 59px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .videos-relacionados .boxTitle .barrer {
    background-color: #DBDBDB;
    width: 329px;
  }

  .videos-relacionados .boxTitle .title {
    color: #FFFFFF;
  }

  .videos-relacionados .boxDescription {}

  .videos-relacionados .boxDescription .description {
    color: #F4F4F4;
  }

  .imagemGrande {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: -200px;
    margin-left: auto;
    margin-right: auto;
    max-width: 100%;
  }

  .logoTaveira {
    width: 380px;
    max-width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-top: 50px;
  }

  .accordion {
    max-width: 863px;
    margin: 0 auto;
    padding-bottom: 30px;
  }

  .accordion-item {
    border: none;
    margin-bottom: 30px;
    box-shadow: 0px 6px 15px #0000001A;
    border-radius: 10px;
  }

  .accordion-header .accordion-button {
    border-top-left-radius: 10px !important;
    border-top-right-radius: 10px !important;
    border-bottom-left-radius: 10px !important;
    border-bottom-right-radius: 10px !important;
    height: 81px;
  }

  .accordion-button {
    color: #45494C;
    text-transform: uppercase;
    font-size: 18px;
    font-family: 'Poppins', 'Helvetica Neue', Helvetica, Arial;
  }

  .accordion .accordion-button:not(.collapsed) {
    background-color: #3B425C;
    color: #FFFFFF;

  }

  .accordion .accordion-collapse.collapse.show {}

  .custom-carousel,
  iframe {
    width: 700px;
    height: 400px;
    margin: 0 auto;
  }

  .carousel-item {
    text-align: center;
  }

  .custom-carousel .carousel-item img {
    object-fit: cover;
    height: 100%;
  }

  .carousel-control-prev {
    left: -100px;
    right: auto;
  }

  .carousel-control-next {
    right: -100px;
    left: auto;
  }

  .carousel-control-next,
  .carousel-control-prev {
    background-color: #1B2838;
    height: 49px;
    width: 62px;
    top: 45%;
  }

  #faqBox {
    padding-top: 40px;
    padding-bottom: 50px;
    background-color: #fff;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    z-index: 1;
    background-image: url('http://lucas-taveira-advogado.local/wp-content/themes/lucas-taveira/img/banner-areas.png');
  }

  #faqBox::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.9);
  }

  .voltarAoSite {
    max-width: 373px;
    width: 100%;
    height: 84px;
    background-color: #3B425C;
    box-shadow: 0px 3px 6px #00000029;
    padding: 20px 15px;
    position: absolute;
    color: #fff;
    text-decoration: none;
    border-radius: 20px;

    left: 50%;
    transform: translateX(-50%);
    font-family: "Poppins";
  }

  .voltarAoSite:hover {
    color: #fff;
    background-color: #1B2838;
  }

  .voltarAoSite:hover .setaButton {
    right: 15px;
  }

  .voltarAoSite .setaButton {
    width: 25px;
    position: absolute;
    right: 30px;
    top: 30px;
  }


  @media (max-width: 992px) {
    .carousel-control-prev {
      left: 0;
      right: auto;
    }

    .carousel-control-next {
      right: 0;
      left: auto;
    }
  }
</style>

<header>
  <div class="backgroundBlue">
    <div class="container-fluid">
      <img class="logoTaveira" src="<?php echo get_template_directory_uri(); ?>/img/logo-taveira.png" alt="Logo Lucas Taveira">
    </div>
  </div>
  <img class="imagemGrande" src="<?php echo get_template_directory_uri(); ?>/img/lucasgrandao.png" alt="" />
</header>

<section class="videos-relacionados">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 boxTitle">
        <h3 class="title">
          + VÍDEOS RELACIONADOS
        </h3>
        <hr class="barrer">
      </div>

      <div class="col-12 boxDescription">
        <p class="description">
          <?php echo $descricao; ?>
        </p>
      </div>

    </div>

    <div class="row">

      <div id="carouselExampleControls" class="carousel slide custom-carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
          <?php foreach ($entrevistas as $index => $item): ?>
            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
              <?php echo $item['entrevista']; ?>
            </div>
          <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>
  </div>
</section>
<section id="faqBox">
  <?php require_once get_template_directory() . '/template-parts/saiba/index.php'; ?>
  <?php if (!empty($faq)): ?>
    <section class="faq">
      <div class="container-fluid">
        <div class="row">
          <div class="accordion" id="accordionExample">
            <?php
            $index = 0;
            foreach ($faq as $item):
              $index++;
            ?>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading<?php echo $index; ?>">
                  <button class="accordion-button <?php echo $index === 1 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="<?php echo $index === 1 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $index; ?>">
                    <?php echo $index . '. ' . $item['pergunta']; ?>
                  </button>
                </h2>
                <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse <?php echo $index === 1 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong><?php echo $item['resposta']; ?></strong>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <a class="voltarAoSite" href="/" rel="noopener noreferrer">
    <img loading="lazy" class="setaButton img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/arrow-lg.svg" alt="Seta">
    <span class="text-white">IR PARA O</span> <br />
    <span class="text-white" style="font-size: 21px;
    font-weight: bold;">Site institucional</span>
  </a>
</section>
<?php require_once get_template_directory() . '/template-parts/google/index.php'; ?>
<?php get_footer(); ?>