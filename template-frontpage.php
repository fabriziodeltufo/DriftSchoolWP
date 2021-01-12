<?php
/*
Template Name: Frontpage Template
*/

?>

<?php get_header(); ?>

<section>

  <div class="cover-layer">

    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo( 'description' ); ?></p>

  </div>

</section>

<section class="slider">
  <div>
    <h2>DRIFT SKILLS</h2>
    <p>Impara a gestire la tua auto in tutte le situazioni.</p>
  </div>

</section>

<section class="contatti">

  <div class="contatti-title">
    <h2>CONTATTACI</h2>
    <p>Fissa un appuntamento per una visita nel circuito.</p>
  </div>


  <div class="contatti-area">

    <div class="area-rif">

      <div class="rif">
        <h2>Numero Telefono</h2>
        <p>+39 xxxx xxxxx xxxx</p>
      </div>

      <div class="rif">
        <h2>Indirizzo Email</h2>
        <p>email@domain.it</p>
      </div>

      <div class="rif">
        <h2>Indirizzo Scuola</h2>
        <p>Street, n.
          Zipcode. City. Country</p>
        </div>

      </div>

      <div class="area-map">
        <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=circuito%20monza&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
        <a href="https://www.embedgooglemap.net/1/"></a>
      </div>

    </div>

  </section>



<?php get_sidebar(); ?>
<?php get_footer(); ?>
