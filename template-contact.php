<?php
/*
Template Name: Contact Template
*/

?>

<?php get_header(); ?>


    <section class="contatti contatti-btn">

      <div class="contatti-title">
        <h2><?php the_title() ;?></h2>
        <p><?php the_content() ;?></p>
      </div>


      <div class="contatti-area">

        <div class="area-rif">

          <div class="rif">
            <h2>Numero Telefono</h2>
            <!-- <p>+39 xxxx xxxxx xxxx</p> -->
            <p><?php echo get_post_meta($post->ID, 'wp-contact-tel', true); ?></p>
          </div>

          <div class="rif">
            <h2>Indirizzo Email</h2>
            <p><?php echo get_post_meta($post->ID, 'wp-contact-email', true); ?></p>
            </div>

          <div class="rif">
            <h2>Indirizzo Scuola</h2>
            <p><?php echo get_post_meta($post->ID, 'wp-contact-address', true); ?></p>
          </div>

        </div>

        <div class="area-map">
          <iframe width="100%" height="100%" id="gmap_canvas" src="<?php echo get_post_meta($post->ID, 'wp-contact-maplink', true); ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
          </iframe>
          <a href="https://www.embedgooglemap.net/1/"></a>
        </div>

      </div>

    </section>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
