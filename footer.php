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

?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/33ee87c64c.js" crossorigin="anonymous"></script>
<script>
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
</script>
<?php wp_footer(); ?>

</body>

</html>