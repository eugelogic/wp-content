<?php

// import parent and child themes stylesheets
function twentysixteen_child_enqueue_styles() {
    $parent_style = 'twentysixteen-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
	);

}
add_action( 'wp_enqueue_scripts', 'twentysixteen_child_enqueue_styles' );

// add scripts
function add_isotope() {
	// add Isotope min plugin file & custom code file
	wp_register_script( 'isotope', get_stylesheet_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '20170514', true );
	wp_register_script( 'isotope-custom', get_stylesheet_directory_uri() . '/js/isotope.custom.js', array('jquery', 'isotope'), '20170514', true );

	wp_enqueue_script( 'isotope-custom' );
	}
add_action( 'wp_enqueue_scripts', 'add_isotope' );

?>
