<!DOCTYPE html>
<html lang="ru">
<head>

  <title><?php wp_title(); ?></title>

  <meta charset="UTF-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="Новый сайт"> 
  
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon256.png" sizes="256x256">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon128.png" sizes="128x128">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon64.png" sizes="64x64">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/icon16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/fav.svg" sizes="any">

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta name="yandex-verification" content="853d5066ec9ce807" />

  <?php wp_head();?>   

	<!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(65477215, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/65477215" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</head>
<body>
<!-- Скрипт корзины, отправка -->
<script>  
  let main_page = "<?echo get_bloginfo("url"); ?>";
  let kabinet_page = "<?echo get_the_permalink(219); ?>";
  let bascet_page = "<?echo get_the_permalink(17172); ?>"; 
  let thencs_page = "<?echo get_the_permalink(17179); ?>";   
  let nophoto_page = "<?echo get_bloginfo("template_url");?>/img/no-photo.jpg";
</script>
  <div class="wrapper">  
    <!-- Подключение  модальных окон-->
    <? include "modal-win.php";?>
    <div class="menu-side-nuar_blk nuar_blk"></div> 