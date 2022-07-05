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
		<h1 class="title-sec__title"><?php single_cat_title( '', true );?></h1>
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

		<?php  get_template_part('template-parts/page','navigation-in-cat', array("total_count" => $fullCount, "page_number" => $pagenumber));?>

	</div>
</section>

</main>

<?php get_footer(); ?>  