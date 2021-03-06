<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<section class="title-sec">
	<div class="_container">
  <?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
			}
			?> 
		<h1 class="title-sec__title"><?php single_cat_title( '', true );?></h1> 
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

		<!-- <nav class="pagination d-flex">
			<div class="pagination__nav-links d-flex">
				<a class="pagination__back" href="#">Назад</a>
				<span class="pagination__numbers">1</span>
				<a class="pagination__numbers current" href="#">2</a>
				<a class="pagination__numbers" href="#">3</a>
				<div class="pagination__block-dot d-flex">
					<span class="pagination__dot">.</span>
					<span class="pagination__dot">.</span>
					<span class="pagination__dot">.</span>
				</div>
				<a class="pagination__numbers" href="#">17</a>
				<p class="pagination__info">Страница 1 из 17</p>
				<a class="pagination__next" href="#">Вперед</a>
			</div>
		</nav> -->

	</div>
</section>

</main>

<?php get_footer(); ?>  