
<?php

/*
Template Name: Шаблон Торговые марки
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
          ТОРГОВЫЕ <br> МАРКИ
        </p>
        <p class="baner-page__text">
          ЛУЧШАЯ <br> ПРОДУКЦИЯ
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

      <h1 class="page-h1"><span>У НАС ТОЛЬКО ЛУЧШИЕ БРЕНДЫ</span></h1>

        <div class="brands-about">
	          Мы собрали лучшие европейские и мировые бренды производителей люстр и светильников, которые есть на складе нашего интернет магазина. Мы можем поставить практически любое декоративное осещение. Свяжитесь с нами, если нужного товара нет на сайте.
	        </div>
	        <?php 
	        	$arr_brand = carbon_get_theme_option('as_complex_brand');
	        	if($arr_brand):
	        ?>
	        <div class="page-brands-wrapper">
	        	<?php foreach($arr_brand as $brand):?>
	        	<a href="#" data-text='<?php echo $brand['as_complex_brand_descr']?>'>
	        		<img src="<?php echo wp_get_attachment_image_src($brand['as_complex_brand_img'], 'full')[0];?>" alt="">
	        	</a>
	        <?php endforeach;?>
	        </div>
		      <?php endif;?>
		    </div>

			</div>
		</section>
		<?php get_template_part('template-parts/reviews-section');?>
	</main>

<?php get_footer();