<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elitearthworx
 */
get_header(); 
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>

	<?php if(!empty($url)): ?>
		<div class="banner-con">
			<img src="<?php echo $url ?>" class="img-responsive" />
		</div>
	<?php endif; ?>

	<section class="page-con" id="content" role="main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<section class="entry-content">
				<?php the_content(); ?>
				<div class="entry-links"><?php wp_link_pages(); ?></div>
			</section>
		</article>
	</section>

<?php
endwhile; endif;
get_footer(); ?>