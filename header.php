<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package light
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>> 

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11"><link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/img/favicon/ls256.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/img/favicon/ls32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/img/favicon/ls16.png">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/img/favicon/safari-pinned-tab.svg" color="#00abaf">
  <meta name="theme-color" content="#00abaf"> 

  <?php wp_head(); ?>
	
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

<body <?php body_class(); ?>> 

<!-- Скрипт корзины, отправка -->
<script>  
  let main_page = "<?echo get_bloginfo("url"); ?>";
  let kabinet_page = "<?echo get_the_permalink(219); ?>";
  let bascet_page = "<?echo get_the_permalink(17172); ?>"; 
  let thencs_page = "<?echo get_the_permalink(17179); ?>";   
  let nophoto_page = "<?echo get_bloginfo("template_url");?>/img/no-photo.jpg";
</script> 

  <!-- Подключение  модальных окон-->
  <? include "modal-win.php";?>

  <div id="page" class="site">

  <header id="header" class="header">
	<div class="header__container _container">

		<div class="header__row d-flex">

			<a href="<? bloginfo("url"); ?>" class="logo-icon header__logo"></a>

			<div class="header__contacts d-flex">
				<a href="#" class="header__contacts-address">Москва, ул. Маяковского,25</a>
				<a href="tel:88007556504" class="header__contacts-phone">8 800 755 65 04</a>
				<a href="mailto:info@light.ru" class="header__contacts-email">info@light.ru</a>
			</div>

			<div class="icon-menu" aria-label="Бургер меню">
				<span></span>
				<span></span>
				<span></span>
			</div>

		</div>
</header>

<!-- Мобильное меню -->
<div class="mob-menu header__mob-menu">
	<ul class="mob-menu__list">
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Пункт 1</a></li>
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Пункт 2</a></li>
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Пункт 3</a></li>
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Пункт 4</a></li>
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Пункт 5</a></li>
	</ul>
	<!-- <?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'mob-menu__list',
		'container_class' => 'mob-menu__list','container' => false )); ?>  -->
	<a href="#callback" class="header__popup-link header__popup-link_mob _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
</div>

    <div id="content" class="site-content">
