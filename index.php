<?php get_header(); ?>


<section class="servizi servizi-btn">

  <div class="servizi-title">
    <h2><?php the_category()?></h2>
    <p><?php $catID = get_the_category(); echo category_description( $catID[0] );?></p>
  </div>

  <div class="servizi-area">

    <?php if (have_posts()) :?><?php while(have_posts()) : the_post() ?>

      <!-- loop content -->

      <div class="servizio">

        <?php /* Image Url */
        $image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
        ?>

      <img src="<?php echo $image_attributes[0]; ?>">
      <h2><?php the_title() ?></h2>
      <p><?php the_excerpt() ?></p>

    </div>


      <?php endwhile; ?>

        <?php else : ?>
          <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'slug-theme'); ?></p>
    <?php endif; ?>

</div>


<a href="contatti">
  <button type="button" name="button">MAGGIORI INFORMAZIONI</button>
</a>

</section>

  <?php get_sidebar(); ?>
  <?php get_footer(); ?>
