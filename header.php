<!-- WORDPRESS header -->
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta name="description" content="<?php bloginfo( 'description' ); ?>" >
    <meta name="<?php bloginfo('name'); ?>">
    <meta name="keywords" content="drift, car, school, auto, scuola, pilotare, guida sicura." />

    <?php wp_head(); ?>


</head>

<body>

<div class="header">

    <div class="header-logo">
        <a href="<?php echo home_url(); ?>">
          <?php bloginfo('title'); ?>
          <!-- <img src="image/logo.jpg" alt="Logo"> -->
        </a>
    </div>

    <div class="header-hamburger">
      <a href="">
        <span></span>
        <span></span>
        <span></span>
      </a>
    </div>

    <nav class="header-menu">
      <?php
          wp_nav_menu(array(
            'theme_location' => 'header',
            'container' => false,
            'items_wrap' => '<ul>%3$s</ul>'
          ));
      ?>
    </nav>

</div>
