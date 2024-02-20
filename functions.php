<?php




function enregistrement_nav_menus() {

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primaire', 'motar' ),
			'menu-2' => esc_html__( 'Secondaire', 'motar' ),
		)
	);
}
add_action( 'after_setup_theme', 'enregistrement_nav_menus' );

