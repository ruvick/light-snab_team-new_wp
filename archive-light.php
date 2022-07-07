<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<div style = "display:none" id = "tovarCategoryId" data-id = "<? echo $thisCatID = get_queried_object()->term_id; ?>"></div>

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
					<? 
						$curent_page = (empty($_REQUEST["page_number"]))?1:$_REQUEST["page_number"];
						$rez = get_tovar($thisCatID, ($curent_page-1)*IN_PAGE_COUNT);
					?>

					<?
						foreach ($rez["tovars"] as $tov) {
							$arg = $tov;
							get_template_part('template-parts/product-loop',"param", $arg); 
						}
					?>
				</div>
			</div>

		</div>

		<?php  
		get_template_part('template-parts/page','navigation-in-cat', array("total_count" => $rez["total_count"], "page_number" => $curent_page));?>

	</div>
</section>

</main>

<?php get_footer(); ?>  