<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php wp_head(); ?>
</head>

<body class="mainContainer">
	<header class="site-header">
		<nav id="site-navigation" class="lienNav" role="navigation">
			<div class="logo">
				<a href="<?php echo home_url('/'); ?>">
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Logo.png'; ?>" alt="Logo">
				</a>
			</div>
			
			<div class="burgerMenu">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</div>
								
			<div class="navigation">
	
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'container'      => 'false',
						'menu_class'     => 'NavBarre',
					)
				);
				?>
			</div>	
		</nav>

	</header>
	
	<main class="site-main">
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content', get_post_format() );
			}
		} else {
			