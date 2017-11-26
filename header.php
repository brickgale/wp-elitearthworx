<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="wrapper" class="hfeed">

			<header id="header" role="banner">
				<div  class="row" class="header-con">
					<section id="branding" class="col-xs-12 col-sm-4">
						<div id="site-title">
							<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
						</div>
						<div id="site-description" class="col-xs-12 col-sm-8">
							<?php bloginfo( 'description' ); ?>
						</div>
					</section>

					<nav id="menu" role="navigation">
						<!-- <div id="search">
							<?php //get_search_form(); ?>
						</div> -->
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					</nav>
				</div>
			</header>

			<div id="container">