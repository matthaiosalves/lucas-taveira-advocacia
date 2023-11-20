
"use strict";

$(document).ready(function () {
  var scrollHeightToChangeColor = 100;
  var navbarSelector = ".navbar";

  function updateNavbarColor() {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > scrollHeightToChangeColor) {
      $(navbarSelector).css("background-color", "#222F4A");
    } else {
      $(navbarSelector).css("background-color", "transparent");
    }
  }

  // Verificar tamanho da tela ao carregar a página
  if ($(window).width() > 992) { 
    updateNavbarColor();
  }

  // Atualizar a cor da barra de navegação ao rolar
  $(window).scroll(function() {
    if ($(window).width() > 992) {
      updateNavbarColor();
    }
  });

  // Atualizar a cor da barra de navegação ao redimensionar a tela
  $(window).resize(function() {
    if ($(window).width() > 992) {
      updateNavbarColor();
    } else {
      // Se for um dispositivo móvel, certifique-se de que a cor da barra de navegação seja #222F4A
      $(navbarSelector).css("background-color", "#222F4A");
    }
  });
});

(function() {
    $(document).ready(function(){
        // Adiciona o clique para os links do navbar
        $('.navbar-nav a').on('click', function(e) {
            // Previne o comportamento padrão do link
            e.preventDefault();

            // Obtém o destino da ancoragem
            var target = $(this).attr('href');

            // Verifica se o destino da ancoragem não é uma string vazia ou #
            if (target && target !== "#") {
                // Calcula a altura do navbar
                var navbarHeight = $('.navbar').outerHeight();

                // Obtém a posição da seção de destino
                var targetPosition = $(target).offset();

                // Verifica se a posição é válida
                if (targetPosition) {
                    // Subtrai a altura do navbar para obter a posição correta
                    var scrollToPosition = targetPosition.top - navbarHeight;

                    // Animando a rolagem suave para a seção de destino
                    $('html, body').animate({
                        scrollTop: scrollToPosition
                    }, 10);
                }
            }
        });
    });
})();

(function($) {
    $(document).ready(function() {
        $('.videos .boxContentAreas').click(function() {
            var videoId = $(this).data('video-id');
            $('#videoFrame').attr('src', 'https://www.youtube.com/embed/' + videoId);
            $('.videoSelecionado').show();

            // Rola a página até o centro da seção do vídeo selecionado
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
