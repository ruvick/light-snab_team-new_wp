<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<div style = "display:none" id = "tovarCategoryId" data-id = "<? echo get_queried_object()->term_id; ?>"></div>

<section class="title-sec">
	<div class="_container">
  <?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
			}
			?> 
		<h1 class="title-sec__title">Все товары</h1>
	</div>
</section>

<section class="catalog">
	<div class="_container">

		<div class="catalog__wrap">

		<?php get_template_part('template-parts/sidebar-catalog');?>

			<div class="catalog__main-content main-content">
				<div class="card-row"> 
				<?php
						while(have_posts()):
							the_post();
							get_template_part('template-parts/product-loop');  
						endwhile;
					?>
				</div>
			</div>

		</div>

		<?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi($loop); ?> 

	</div>
</section>

</main>

<?php get_footer(); ?>  