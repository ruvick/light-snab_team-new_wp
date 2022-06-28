<?php

/*
Template Name: Шаблон карточки товаров
WP Post Template: Шаблон карточки товаров
Template Post Type: post
*/ 

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page page-recurring">

<section id="product-sec" class="product-sec recurring">
  <div class="_container">
  <?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
			}
			?> 

    <div class="product__row d-flex">

      <div class="product__slider">
        <div class="product__slider-slider__wrap slider__wrap">
          <div class="slider__container _container">
            <div class="productSlider _swiper d-flex">
              <?
						    $pict = carbon_get_the_post_meta('offer_picture');
						      if($pict) {
							  $pictIndex = 0;
							    foreach($pict as $item) {
							?>
                <a data-fslightbox="gallery" class="card-bg-item slider__slide fancybox" data-fancybox="gallery" href="<?php echo wp_get_attachment_image_src($item['gal_img'], 'full')[0];?>">
                  <button class="product-sec__img-cursor"></button>
                  <img
                    
                    id = "pict-<? echo empty($item['gal_img_sku'])?$pictIndex:$item['gal_img_sku']; ?>" 
										alt = "<? echo $item['gal_img_alt']; ?>"
										title = "<? echo $item['gal_img_alt']; ?>"
										src = "<?php echo wp_get_attachment_image_src($item['gal_img'], 'full')[0];?>" />                
                </a>
							<?
								  $pictIndex++;
							    }
						    }
						  ?>
          </div>
        </div>
        <!-- Кнопки-точки -->
        <div class="product-sl-paggination swiper-paggination"></div>
        </div>
      </div>

      <div class="product__descp">
        <h1 class="product__descp-title"><?php the_title();?></h1>
        <p class="product__descp-product-code">код товара: <span>10950</span></p>
        <div class="product__descp-line"></div>

        <div class="product__charect">
          <ul class="product__charect-list">
          <?
				    $param = carbon_get_the_post_meta('offer_cherecter');

            foreach ($param as $p) {
          ?> 
            <li class="product__charect-list-li"><span><?echo $p["c_name"]?></span> <?echo $p["c_val"]?></li>
          <?
            }
          ?>  
            <!-- <li class="product__charect-list-li"><span>Цвет:</span> латунь</li>
            <li class="product__charect-list-li"><span>Тип цоколя:</span> E27</li>
            <li class="product__charect-list-li"><span>Количество ламп:</span> 1 x 60Вт</li>
            <li class="product__charect-list-li"><span>Лампы:</span> в комплект не входят</li>
            <li class="product__charect-list-li"><span>Длинна шнура:</span> max 90</li> -->
          </ul>

          <p class="product__avail">Наличие: <span>есть на складе</span></p>

          <!-- <div class="size-options">
            <p class="size-options-name">Варианты размеров:</p>
            <div class="size-options-block-btn">
              <a href="#" class="size-options-block-btn-link _yellow">D30</a>
              <a href="#" class="size-options-block-btn-link _grey">D40</a>
            </div>
          </div> -->
        </div>

        <div class="product__descp-line"></div>

        <p class="product__descp-price">Цена <span class="product__descp-price-number price_formator rub"><?php echo carbon_get_the_post_meta('offer_price');?></span> </p>

        <div class="product__descp-line"></div>

        <form action="#" class="product__choice d-flex">
          <p class="product__choice-name">Кол-во:</p>
          <div class="product__quantity quantity">
            <div class="quantity__button quantity__button_minus"></div>
            <div class="quantity__input">
              <input id="pageNumeric" autocomplete="off" type="number" name="form[]" value="1">
            </div>
            <div class="quantity__button quantity__button_plus"></div>
          </div>
          <button class="product__btn btn" id = "btn__to-card" onclick = "add_tocart(this, document.getElementById('pageNumeric').value); return false;"
					  data-price = "<?echo carbon_get_post_meta(get_the_ID(),"offer_price"); ?>"
  				  data-sku = "<? echo carbon_get_post_meta(get_the_ID(),"offer_sku")?>"
  				  data-size = ""
  				  data-oldprice = "<? echo carbon_get_post_meta(get_the_ID(),"offer_old_price")?>"
  				  data-lnk = "<? echo  get_the_permalink(get_the_ID());?>"
  				  data-name = "<? echo  get_the_title();?>"
  				  data-count = "1"
  				  data-picture = "<?php echo wp_get_attachment_image_src($item['gal_img'], 'large')[0];?>"
  				  data-picture = "<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>">
            В корзину
        </button>
        </form>

        <!-- <div class="product__text">
          <h3>Краткое описание</h3>
          <p>
            Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее
            осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений
            в домашних условиях.
          </p>
        </div> -->

      </div>
    </div>

  </div>
</section>

<section id="similar-products" class="similar-products">
  <div class="_container">
    <h2 class="title">Похожие товары</h2>

    <div class="best-offers__row"> 
    <?
			$args = array(
				'posts_per_page' => 5,
				'post_type' => 'light',
				'orderby' => 'rand',
				'tax_query' => array(
					array(
					  'taxonomy' => 'lightcat',
						'field'    => 'slug',
						'terms'    => 'dizajnerskie-svetilniki'
							),
						)
					);
					$query = new WP_Query($args);

					foreach( $query->posts as $post ){
						$query->the_post();
						get_template_part('template-parts/product-loop'); 
					}  
					wp_reset_postdata(); 
			?>
    </div>

  </div>
</section>

</main>

<?php get_footer();