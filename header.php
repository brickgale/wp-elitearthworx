<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header id="header" role="banner">
			<div class="header-con row bottom-xs bottom-sm">
				<section id="branding" class="col-xs-12 col-sm-4">
					<div id="site-title">
						
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1></a>

					</div>
					<div id="site-description">
						<?php bloginfo( 'description' ); ?>
					</div>
				</section>

				<nav id="menu" role="navigation" class="col-xs-12 col-sm-8">
					<!-- <div id="search">
						<?php //get_search_form(); ?>
					</div> -->
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
				</nav>
			</div>
		</header>

		<div id="container">