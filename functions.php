<?php


/*  Theme setup
/* ------------------------------------ */
if ( ! function_exists( 'DriftSchoolWP_setup' ) ) {

	function DriftSchoolWP_setup() {

    // Enable title in header
		add_theme_support( "title-tag" );

		// Enable automatic feed links
		add_theme_support( 'automatic-feed-links' );

		// Enable featured image
		add_theme_support( 'post-thumbnails' );

		// Thumbnail sizes
		add_image_size( 'DriftSchoolWP_single', 800, 999, false );
		add_image_size( 'DriftSchoolWP_big', 1400, 928, true ); 	//(cropped)

		// Custom menu areas
		register_nav_menus( array(
			'header' => esc_html__( 'Header', 'DriftSchoolWP' )
		) );

		// Custom menu areas
		register_nav_menus( array(
			'sidebar' => esc_html__( 'Sidebar', 'DriftSchoolWP' )
		) );

		// Load theme languages
		load_theme_textdomain( 'DriftSchoolWP', get_template_directory().'/languages' );

	}

}
add_action( 'after_setup_theme', 'DriftSchoolWP_setup' );


/*  Enqueue css
/* ------------------------------------ */
if ( ! function_exists( 'DriftSchoolWP_styles' ) ) {
	function DriftSchoolWP_styles() {

		wp_enqueue_style( 'DriftSchoolWP-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
		wp_enqueue_style( 'DriftSchoolWP-style', get_template_directory_uri().'/style.css');

	}
}
add_action( 'wp_enqueue_scripts', 'DriftSchoolWP_styles' );



/*  Enqueue javascript
/* ------------------------------------ */
if ( ! function_exists( 'DriftSchoolWP_scripts' ) ) {

	function DriftSchoolWP_scripts() {

		wp_enqueue_script( 'DriftSchoolWP-script', get_template_directory_uri() . '/scripts.js', array( 'jquery' ),'', true );
		if ( is_singular() && get_option( 'thread_comments' ) )	{ wp_enqueue_script( 'comment-reply' ); }

	}
}
add_action( 'wp_enqueue_scripts', 'DriftSchoolWP_scripts' );





?>
