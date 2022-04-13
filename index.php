<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page"> 

<section id="slider-main" class="slider-main">
  <!-- <div class="nuar_blk"></div> -->

  <div class="slider-bg-wrap">
    <div class="sliderMain _swiper">
    <?
			$pict = carbon_get_theme_option('slider_index');
				if ($pict) {
					$pictIndex = 0;
				foreach ($pict as $item) {
		?>
      <div class="slider-bg__slide slider__slide slider-main__slide" style="background-image: url(<?php echo wp_get_attachment_image_src($item['slider_img'], 'full')[0]; ?>);">
        <div class="slider-bg__container _container">
          <? if (!empty($item['slider_title'])) { ?>
          <h1 class="slider-main__title"><? echo $item['slider_title']; ?></h1>
          <p class="slider-main__subtitle"><? echo $item['slider_subtitle']; ?></p>
          <? } ?>
        </div>
      </div>
					<?
							$pictIndex++;
							}
						}
					?> 
    </div>
    <div class="slider-bg__swiper-button-block swiper-button-block">
      <div class="_container">
        <div class="slider-main__swiper-paggination swiper-paggination"></div>
      </div>
    </div>
  </div>

</section>

<section id="best-offers" class="best-offers">
  <div class="_container">
    <h2 class="best-offers__title title">ЛУЧШИЕ ПРЕДЛОЖЕНИЯ</h2>
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

<section id="info" class="info">
  <div class="_container">

    <div class="info__row d-flex">

      <div class="info__card-block d-flex">

        <div class="info__card-block-item info__card-block-item_top d-flex">
          <div class="info__card-block-item-descp">
            <h2 class="info__card-block-item-title">
              ДИЗАЙНЕРАМ / <br>
              <span>АРХИТЕКТОРАМ</span>
            </h2>
            <a href="<?php echo get_permalink(10);?>" class="info__card-block-item-btn btn">Подробнее</a>
          </div>
          <div class="info__card-block-item-img">
            <picture><source srcset="<?php echo get_template_directory_uri();?>/img/info-01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/info-01.png?_v=1649104441578" alt=""></picture>
          </div>
        </div>

        <div class="info__card-block-item info__card-block-item_bottom d-flex">
          <div class="info__card-block-item-img">
            <picture><source srcset="<?php echo get_template_directory_uri();?>/img/info-02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/info-02.png?_v=1649104441578" alt=""></picture>
          </div>
          <div class="info__card-block-item-descp">
            <h2 class="info__card-block-item-title">
              КОМПЛЕКТОВЩИКАМ / <br>
              <span>СНАБЖЕНЦАМ</span>
            </h2>
            <a href="<?php echo get_permalink(7);?>" class="info__card-block-item-btn btn">Подробнее</a>
          </div>
        </div>

      </div>

      <div class="info__card-big d-flex">
        <div class="info__card-block-item-descp">
          <h2 class="info__card-block-item-title">
            LIGHTSNAB
          </h2>
          <p class="info__card-block-item-subtitle">
            КРУПНЫЙ ДЕСТРИБЬЮТЕР
            НА РЫНКЕ СВЕТА И
            ЭЛЕКТРОУСТАНОВОЧНЫХ
            ИЗДЕЛИЙ
          </p>
          <p class="info__card-block-item-text">
            Без подвесных светильников не обходится оформление практически ни одного современного интерьера. А все
            благодаря широкому спектру задач, которые можно решить с их помощью: это и основная подсветка
            пространства, и выделение функциональной зоны, и украшение интерьера… В ассортименте Cosmorelax
            представлены стильные и необычные подвесные светильники, которые не только будут наполнять интерьер
            светом, но и радовать глаз
          </p>
          <a href="#" class="info__card-block-item-btn btn">Подробнее</a>
        </div>
        <div class="info__card-block-item-img_big info__card-block-item-img">
          <picture><source srcset="<?php echo get_template_directory_uri();?>/img/info-05.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/info-05.png?_v=1649104441578" alt=""></picture>
        </div>
      </div>

    </div>

  </div>
</section>

<section id="inform" class="inform">
  <div class="_container">
    <div class="inform__row d-flex">

      <div class="inform__img">
        <picture><source srcset="<?php echo get_template_directory_uri();?>/img/info-4.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/info-4.png?_v=1649104441578" alt=""></picture>
      </div>

      <div class="inform__descp">
        <h2 class="inform__title">Дизайнеры / Архитекторы / Декораторы</h2>
        <ul class="inform__list">
          <li class="inform__list-item">Более 200 топ брендов</li>
          <li class="inform__list-item">Производство по спец. заказу</li>
          <li class="inform__list-item">Проверенный ассортимент</li>
          <li class="inform__list-item">Образцы и каталоги</li>
          <li class="inform__list-item">Сопровождение проекта</li>
          <li class="inform__list-item">Бонусная программа + Cashback</li>
          <li class="inform__list-item">Подбор по визуализации</li>
          <li class="inform__list-item">Бартер-реклама instagram</li>
          <li class="inform__list-item">Составление КП заказчику</li>
        </ul>
        <a href="#callback" class="inform__btn btn _popup-link">Отправить заявку</a>
      </div>

    </div>
  </div>
</section>

<section id="brends" class="brends">
  <div class="_container">
    <h2 class="brends__title title">У НАС ТОЛЬКО ЛУЧШИЕ БРЕНДЫ</h2>
    <p class="brends__subtitle">
      Мы собрали лучшие европейские и мировые бренды производителей люстр и светильников, которые есть на складе
      нашего интернет магазина.
      Мы можем поставить практически любое декоративное осещение. Свяжитесь с нами, если нужного товара нет на
      сайте.
    </p>

    <div class="sliderBrends _swiper d-flex">
      <? 
				$brends = carbon_get_theme_option('complex_brends');
					if ($brends) {
						$brendsIndex = 0;
					foreach ($brends as $item) {
			?>
        <div class="brends__slide slider__slide">
          <img src="<?php echo wp_get_attachment_image_src($item['img_brends'], 'large')[0]; ?>" alt="">				
        </div>
			<?
				$brendsIndex++;     
						}
					}
			?>
    </div>

    <a href="<?php echo get_permalink(17);?>" class="brends__btn btn">Перейти к торговым маркам</a>

  </div>
</section>

<section id="reviews" class="reviews">
  <div class="_container">

    <div class="reviews__slider reviewsSl _swiper d-flex">
    <? 
			$reviews = carbon_get_theme_option('complex_reviews');

				if ($reviews) {
					$reviewsIndex = 0;
				foreach ($reviews as $item) {
		?>
      <div class="reviews__slide slider__slide">
        <div class="reviews__message">
          <h3 class="reviews__message-title"><? echo $item['title_reviews']; ?></h3>
          <p class="reviews__message-subtitle"><? echo $item['descp_reviews']; ?></p>
          <a href="<? echo $item['link_reviews']; ?>" class="reviews__message-to-read">Читать полностью</a>
        </div>
        <div class="reviews__slide-name-block d-flex">
          <div class="reviews__slide-name-block-img">
            <img src="<?php echo wp_get_attachment_image_src($item['img_reviews'], 'large')[0]; ?>" alt="">				
          </div>
          <div class="reviews__slide-name-block-text">
            <div class="reviews__slide-name-block-descp"><? echo $item['position_reviews']; ?></div>
            <h3 class="reviews__slide-name-block-name"><? echo $item['name_reviews']; ?></h3>
          </div>
        </div>
      </div>
		<?
			$reviewsIndex++; 
					}
				}
		?>
    </div>
  </div>
</section>

<section id="certificates" class="certificates">
  <div class="_container">
    <h2 class="certificates__title title">СЕРТИФИКАТЫ</h2>

    <div class="certificates__slider sliderCert _swiper d-flex">
    <? 
			$certificates = carbon_get_theme_option('complex_certificates');
				if ($certificates) {
					$certificatesIndex = 0;
				foreach ($certificates as $item) {
		?>
      <a href="<?php echo wp_get_attachment_image_src($item['img_certificates'], 'large')[0]; ?>" class="certificates__slide slider__slide" data-lightbox="gallery"> 
        <img src="<?php echo wp_get_attachment_image_src($item['img_certificates'], 'large')[0]; ?>" alt="">				
      </a>
			<?
				$certificatesIndex++; 
					}
				}
			?>
    </div>

  </div>
</section>

</main>

<?php get_footer();
