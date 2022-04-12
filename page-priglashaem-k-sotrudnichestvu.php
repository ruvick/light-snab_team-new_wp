
<?php

/*
Template Name: Приглашаем к сотрудничеству дизайнеров
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

	<main id="primary" class="page site-main main-baner-page"> 

  <section class="baner-page"> 
    <div class="nuar_blk"></div>
		<div class="_container">
      <div class="baner-page__descp">
        <p class="baner-page__text">
          БОНУСЫ И <br>СКИДКИ</p>
        <p class="baner-page__text">
          ДИЗАЙНЕРАМ И <br> АРХИТЕКТОРАМ
        </p>
      </div>
    </div>
	</section>

		<section class="content recurring"> 
			<div class="_container">

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title();?></h1>
					<?php the_content();?>
					<?php endwhile;?>
				<?php endif; ?> 

			</div>
		</section>
	</main>

<?php get_footer();