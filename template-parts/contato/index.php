<section class="contato" id="contato">
  <div class="container-fluid">

    <div class="row px-3 titlePrimeRow">

      <div class="boxTitlePrime">
        <span class="barrerLateral"></span>
        <p class="title">ENTRE EM <span class="barrerHorizontal"></span></p>
        <h5 class="subtitle">Contato conosco</h5>
      </div>

      <div class="boxDescriptionPrime">
        <small class="description">Lorem ipsum dolor sit amet, consetetur sadipscing <br> elitr, sed diam nonumy eirmod tempor.</small>
      </div>

    </div>

    <div class="row justify-content-center px-3">

      <form action="" class="row">
        <div class="formInput col-sm-12 col-md-12 col-lg-6">
          <label for="nomeCompleto">Nome Completo*</label>
          <input type="text" id="nomeCompleto" placeholder="">
        </div>
        <div class="formInput col-sm-12 col-md-12 col-lg-5">
          <label for="Celular">Celular</label>
          <input type="number" id="Celular" placeholder="">
        </div>
        <div class="formInput col-sm-12 col-md-12 col-lg-7">
          <label for="email">E-mail*</label>
          <input type="email" id="email" placeholder="">
        </div>
        <div class="formInput col-sm-12 col-md-12 col-lg-4">
          <label for="genero">Gênero</label>
          <select id="genero">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
          </select>
        </div>

        <div class="formInput col-sm-12 col-md-12 col-lg-12">
          <label for="mensagem">Mensagem*</label>
          <textarea id="mensagem" rows="7" cols="50" placeholder=""></textarea>
        </div>

        <div class="form-check col-sm-12 col-md-12 col-lg-12 px-4 ml-3">
          <input class="form-check-input" type="checkbox" id="termos" required>
          <label class="form-check-label" for="termos">
            Li e aceito os <a class="termosUso" href="/">Termos de Uso e a Política de Privacidade</a> do site
          </label>
        </div>

        <div class="row">
          <div class="boxButton" style="margin-top: 30px;">
            <a class="buttonAreas" href="<?php echo $botao; ?>">
              Enviar
              <img class="setaButton img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="Seta">
            </a>
          </div>
        </div>

      </form>
    </div>
  </div>
</section>