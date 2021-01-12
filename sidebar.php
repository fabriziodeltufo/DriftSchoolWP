<section class="socials">

  <ul class="socials-list">

  <?php
  wp_nav_menu(array(
    'theme_location' => 'sidebar',
    'container' => false,
    'items_wrap' => '<ul>%3$s</ul>'
  ));
  ?>

</ul>

</section>
