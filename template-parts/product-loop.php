<div class="card-column"> 
  <div class="card-box">
    <a href="<?echo get_the_permalink(get_the_ID());?>" class="card-box-img">
			<img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
		</a>
    <div class="card-box-descp">
      <h4 class="card-box-descp-title"><? the_title();?></h4>
      <div class="card-box-descp-payment d-flex">
        <div class="card-box-descp-price rub"><?php echo carbon_get_the_post_meta('offer_price');?> </div>
        <a href="<?echo get_the_permalink(get_the_ID());?>" class="card-box-descp-btn btn">Подробнее</a>
      </div>
    </div>
  </div>
</div>	
		