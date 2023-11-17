<section class="artigos" id="artigos">
  <div class="container-fluid">

    <div class="row px-4 justify-content-center gap-4">
      <?php for ($i = 0; $i < 3; $i++) : ?>
        <div class="card col-sm-6 col-md-6 col-lg-12">
          <div class="card-body">

            <div class="boxImage">
              <img src="https://i.imgur.com/8RjZi65.png" alt="Imagem da thumb do artigo">
            </div>

            <div class="boxTitleAndDescription">
              <h2 class="title">
                LOREM IPSUM DOLOR SIT AMET, CONSETETUR SADIPSCING ELITR, SED DIAM NONUMY EIRMOD TEMPOR
              </h2>
              <hr />
              <p class="description">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna…
              </p>


              <div class="boxInfoArtigos">
                <div class="boxAutorArtigos d-flex justify-content-center align-items-center">
                  <i class="fa-solid fa-clipboard fa-2x"></i></i><i class="fa fa-pencil fa"></i>
                  <span>Por Lucas Taveira - 10/09/2023</span>
                </div>

                <div class="boxButton">
                  <a class="buttonAreas" href="#">
                    SAIBA MAIS
                    <img class="setaButton img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="Seta">
                  </a>
                </div>

                <div class="boxSocialsButtons">
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

              </div>

            </div>

          </div>
        </div>
      <?php endfor; ?>
    </div>

    <!-- <div class="row">
      <div class="boxButton d-flex justify-content-center" style="margin-top: 30px;">
        <a class="buttonAreas" href="#">
          VEJA TODAS
          <img class="setaButton img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="Seta">
        </a>
      </div>
    </div> -->

  </div>
</section>