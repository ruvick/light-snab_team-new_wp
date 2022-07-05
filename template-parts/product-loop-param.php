<div class="card-column"> 
  <div class="card-box">
    <a href="<?echo $args->lnk;?>" class="card-box-img">
			<img src="<?php  $imgTm = $args->img_lnk; echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<?echo $args->title;?>"> 
		</a>
    <div class="card-box-descp">
      <h4 class="card-box-descp-title"><?echo $args->title;?></h4>
      <div class="card-box-descp-payment d-flex">
        <div class="card-box-descp-price rub"><span class = "price_formator"><?php echo $args->offer_price;?></span> </div>
        <a href="<?echo $args->lnk;?>" class="card-box-descp-btn btn">Подробнее</a>
      </div>
    </div>
  </div>
</div>	
		