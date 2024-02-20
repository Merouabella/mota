<?php

function theme_enqueue_styles(){
    // Chargement du style.css du theme
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/style.css'));

}

// Action qui permet de charger des scripts dans notre theme
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');



function enregistrement_nav_menus() {

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primaire', 'motar' ),
			'menu-2' => esc_html__( 'Secondaire', 'motar' ),
		)
	);
}
add_action( 'after_setup_theme', 'enregistrement_nav_menus' );

