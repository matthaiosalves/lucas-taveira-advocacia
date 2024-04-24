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
    min-height: 597px;
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
</style>

<header>
  <div class="backgroundBlue"></div>

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
<?php require_once get_template_directory() . '/template-parts/google/index.php'; ?>
<?php get_footer(); ?>