  $(document).ready(function() {
    var scrollHeightToChangeColor = 100;
    var navbarSelector = ".navbar";
    $(window).scroll(function() {
      var scrollTop = $(this).scrollTop();
      if (scrollTop > scrollHeightToChangeColor) {
        $(navbarSelector).css("background-color", "#222F4A");
      } else {
        $(navbarSelector).css("background-color", "transparent");
      }
    });
  });