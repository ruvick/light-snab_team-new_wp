<header id="header" class="header">
			<div class="header__container _container">

				<div class="header__row d-flex">

					<a href="<? bloginfo("url"); ?>" class="logo-icon header__logo"></a>

					<div class="header__contacts d-flex">
						<? $adr = carbon_get_theme_option("as_address"); 
							if (!empty($adr)){?><a href="#" class="header__contacts-address"><? echo $adr; ?></a><?}?> 
						<? $tel = carbon_get_theme_option("as_phones_1"); 
							if (!empty($tel)){?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="header__contacts-phone"><? echo $tel; ?></a><?}?> 
						<? $mail = carbon_get_theme_option("as_email");
							if (!empty($mail)) { ?><a href="mailto:<? echo $mail; ?>" class="header__contacts-email"><? echo $mail; ?></a><? } ?>
					</div>

					<a href="<?php echo get_permalink(17172);?>" class="bascket-icon"><span class="bascket-icon__number bascet_counter">0</span></a>

					<div class="icon-menu" aria-label="Бургер меню"> 
						<span></span>
						<span></span>
						<span></span>
					</div>

				</div>
		</header>

		<!-- Мобильное меню -->
		<div class="mob-menu header__mob-menu">
			<div class="header__mob-menu-img">
				<img src="<?php echo get_template_directory_uri();?>/img/menu.jpg" alt="">
			</div>
			<button class="menu-side__closed menu-side-close"></button>
			<div class="header__mob-menu-descp">
				<ul class="mob-menu__list">
					<li class="header-bottom-wrap-menu-item"><a href="#" class="header-bottom-wrap-menu-item__link header-bottom-wrap-menu-item__link_lyustry">Люстры</a></li>
					<li class="header-bottom-wrap-menu-item"><a href="#" class="header-bottom-wrap-menu-item__link header-bottom-wrap-menu-item__link_bra">Бра</a></li>
					<li class="header-bottom-wrap-menu-item"><a href="#" class="header-bottom-wrap-menu-item__link header-bottom-wrap-menu-item__link_torshery">Торшеры</a></li>
					<li class="header-bottom-wrap-menu-item"><a href="#" class="header-bottom-wrap-menu-item__link header-bottom-wrap-menu-item__link_lampy">Настольные лампы</a></li>
				</ul>
				<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'mob-menu__list',
					'container_class' => 'mob-menu__list','container' => false )); ?> 
				<a href="#callback" class="header__popup-link header__popup-link_mob btn _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
			</div>
		</div>
