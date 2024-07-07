<?php
/*
Template Name: LP
*/

get_header();
?>
<style>
  .navbar {
    display: none;
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
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
        </p>
      </div>

    </div>

    <div class="row">

    </div>
  </div>
</section>
<?php require_once get_template_directory() . '/template-parts/saiba/index.php'; ?>
<section class="faq">
  <div class="container-fluid">
    <div class="row">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Accordion Item #1
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Accordion Item #2
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Accordion Item #3
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<?php require_once get_template_directory() . '/template-parts/google/index.php'; ?>
<?php get_footer(); ?>