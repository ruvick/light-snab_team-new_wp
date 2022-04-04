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
 * @package light
 */

get_header();
?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="single-bnr" style="background-image: url(<?php echo get_template_directory_uri();?>/img/LIGHT_ban_vnut.jpg);"></div>
			<div class="container">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); 
			}
			?> 

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><? the_title();?></h1>
					<?php the_content();?>
					<?php endwhile;?>
				<?php endif; ?> 
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
