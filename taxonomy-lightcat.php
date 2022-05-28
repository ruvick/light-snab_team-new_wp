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
						// while(have_posts()):
						// 	the_post();
						// 	get_template_part('template-parts/product-loop');  
						// endwhile;
					?>

					<?
						$countInPage = !empty($_REQUEST["countinpage"]) ? $_REQUEST["countinpage"] : IN_PAGE_COUNT;

						$termID = get_queried_object()->term_id;

						$term = get_term_by('id', $child, $taxonomyName); 
						$term_id = $term->term_taxonomy_id; 

						$arg = $wp_query->query;

						$startPrice = empty($_REQUEST["price_ot"])?"0":$_REQUEST["price_ot"];
						$endPrice = empty($_REQUEST["price_do"])?PHP_INT_MAX:$_REQUEST["price_do"];

						$metaquery = array(
							'relation' => 'AND',
							
							'priceStart' => array (
								'key'     => '_offer_price',
								'value' => $startPrice,
								'compare' => '>=',
								'type'    => 'NUMERIC',
							),
							
							'priceEnd' => array (
								'key'     => '_offer_price',
								'value' => $endPrice,
								'compare' => '<=',
								'type'    => 'NUMERIC',
							)
						);

						
						// Фильтрация по материалу
						if (!empty($_REQUEST["material"])) {
							$metaquery["materialQuery"] = array(
								'relation' => 'OR',
							);
							
							for ($i = 0; $i<count($_REQUEST["material"]); $i++) {
								$metaquery["materialQuery"]["material".$i] = array(
									'key'     => '_offer_material',
									'value' => $_REQUEST["material"][$i],
									'compare' => '=',
									'type'    => 'CHAR',
								);
							} 
						}


						// Фильтрация по цоколю
						if (!empty($_REQUEST["tsokol"])) {
							$metaquery["tsokolQuery"] = array(
								'relation' => 'OR',
							);
							
							for ($i = 0; $i<count($_REQUEST["tsokol"]); $i++) {
								$metaquery["tsokolQuery"]["tsokol".$i] = array(
									'key'     => '_offer_tsokol',
									'value' => $_REQUEST["tsokol"][$i],
									'compare' => '=',
									'type'    => 'CHAR',
								);
							} 
						}

						
						// Фильтрация по колличеству ламп
						if (!empty($_REQUEST["lamp_count"])) {
							$metaquery["lamp_countQuery"] = array(
								'relation' => 'OR',
							);
							
							for ($i = 0; $i<count($_REQUEST["lamp_count"]); $i++) {
								$metaquery["lamp_countQuery"]["color".$i] = array(
									'key'     => '_offer_lamp_count',
									'value' => $_REQUEST["lamp_count"][$i],
									'compare' => '=',
									'type'    => 'CHAR',
								);
							} 
						}

									
						// Фильтрация по размеру
						if (!empty($_REQUEST["size"])) {
							$metaquery["sizeQuery"] = array(
								'relation' => 'OR',
							);
							
							for ($i = 0; $i<count($_REQUEST["size"]); $i++) {
								$metaquery["sizeQuery"]["size".$i] = array(
									'key'     => '_offer_size',
									'value' => $_REQUEST["size"][$i],
									'compare' => '=',
									'type'    => 'CHAR',
								);
							} 
						}
									
						// Фильтрация по дизайнеру
						if (!empty($_REQUEST["designer"])) {
							$metaquery["designerQuery"] = array(
								'relation' => 'OR',
							);
							
							for ($i = 0; $i<count($_REQUEST["designer"]); $i++) {
								$metaquery["designerQuery"]["designer".$i] = array(
									'key'     => '_offer_designer',
									'value' => $_REQUEST["designer"][$i],
									'compare' => '=',
									'type'    => 'CHAR',
								);
							} 
						}

								$mypostCount = array(
									'post_type' => 'light',
									'posts_per_page' => -1,
									'meta_query' => $metaquery,
									'exclude' => array(417),
									'tax_query' => array(
										array(
											'taxonomy' => 'lightcat',
											'field' => 'id',
											'terms' => strval($termID)
										),
									),
								);

								

								$Count = new WP_Query($mypostCount);

								$fullCount = $Count->post_count;
								
								$pagenumber = (empty($_REQUEST["page_number"]))?1:$_REQUEST["page_number"]; 
							
								$startPos = ($pagenumber - 1) * $countInPage;
										
											if ($startPos > $fullCount) {
											$pagenumber = 1;
											$startPos = ($pagenumber - 1) * $countInPage;
											}
								
								$mypost = array(
									'post_type' => 'light',
									
									'posts_per_page' => $countInPage,
									'offset' => $startPos,

									'meta_query' => $metaquery,
									'meta_key' => '_offer_price',
									'orderby' => 'meta_value_num',
									'order' => ($_REQUEST["sort"] == 'price_vozr')?'ASC':'DESC',
									'exclude' => array(417),
									'tax_query' => array(
										array(
											'taxonomy' => 'lightcat',
											'field' => 'id',
											'terms' => strval($termID)
										),
									),
								);

								$loop = new WP_Query($mypost);

								// echo "<pre>";	
								// var_dump($loop);
								// echo "</pre>";

								// foreach ($loop->posts as $element) {
								// 	$param = ["element" => $element];
								// 	get_template_part('template-parts/products', 'elem-param', $param); 
								// }

								if ( $loop->have_posts() ) {
									while ( $loop->have_posts() ) {
										$loop->the_post();
										get_template_part('template-parts/product-loop');
									}
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