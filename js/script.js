
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

// (function() {
//     $(document).ready(function(){
//         $('.navbar-nav a').on('click', function(e) {
//             e.preventDefault();
//             var target = $(this).attr('href');
//             if (target && target !== "#") {
//                 var navbarHeight = $('.navbar').outerHeight();
//                 var targetPosition = $(target).offset();
//                 if (targetPosition) {
//                     var scrollToPosition = targetPosition.top - navbarHeight;
//                     $('html, body').animate({
//                         scrollTop: scrollToPosition
//                     }, 10);
//                 }
//             }
//         });
//     });
// })();





