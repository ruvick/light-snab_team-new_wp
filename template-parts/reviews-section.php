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
  <div class="reviews__swiper-arrow-button-block swiper-arrow-button-block">
    <div class="reviews__swiper-button-next swiper-button swiper-button-next"></div>
		<div class="reviews__swiper-button-prev swiper-button swiper-button-prev"></div>
  </div>
</section>