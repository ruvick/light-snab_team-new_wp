<header id="header" class="header">
			<div class="header__container _container">

				<div class="header__row d-flex">

					<a href="<? bloginfo("url"); ?>" class="logo-icon header__logo"></a>

					<div class="header__contacts d-flex">
						<!-- <? $adr = carbon_get_theme_option("as_address"); 
							if (!empty($adr)){?><a href="#" class="header__contacts-address"><? echo $adr; ?></a><?}?>  -->
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
		<div class="mob-menu mob-menu_ns header__mob-menu">
			<div class="mobMenuWrapper">
				<div class="catalogMenu" data-spollers data-one-spoller>
					<div class="catalogMenuPunct" >
						<div class="catalogMenuPunctTitle" data-spoller>
							<div class="cmpImg">
								<img src="<?bloginfo("template_url")?>/img/formenu/lyustry.png" alt="">
							</div>

							<div class="cmpTitle">
								<span>Люстры</span>
							</div>
						</div>

						<div class="catalogMenuPunctTitle_sub spollers-block__body">
							<ul>
								<li>
									<a href="<?echo get_category_link(12);?>">Смотреть все люстры</a>
								</li>

								<li>
									<a href="<?echo get_category_link(12);?>">Дизайнерские люстры</a>
								</li>
								
								<li>
									<a href="<?echo get_category_link(10);?>">Люстры в стиле лофт</a>
								</li>

								<li>
									<a href="<?echo get_category_link(43);?>">Люстры в стиле прованс</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="catalogMenuPunct" >
						<div class="catalogMenuPunctTitle" data-spoller>
							<div class="cmpImg">
								<img src="<?bloginfo("template_url")?>/img/formenu/bra-i-podsvetki.png" alt="">
							</div>

							<div class="cmpTitle">
								<span>Бра</span>
							</div>
						</div>

						<div class="catalogMenuPunctTitle_sub spollers-block__body">
							<ul>
								<li>
									<a href="<?echo get_category_link(17);?>">Смотреть все Бра</a>
								</li>

								<li>
									<a href="<?echo get_category_link(17);?>">Дизайнерские бра</a>
								</li>
								
								<li>
									<a href="<?echo get_category_link(15);?>">Бра в стиле лофт</a>
								</li>

								<li>
									<a href="<?echo get_category_link(19);?>">Бра в стиле прованс</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="catalogMenuPunct" >
						<div class="catalogMenuPunctTitle" data-spoller>
							<div class="cmpImg">
								<img src="<?bloginfo("template_url")?>/img/formenu/torshery.png" alt="">
							</div>

							<div class="cmpTitle">
								<span>Торшеры</span>
							</div>
						</div>

						<div class="catalogMenuPunctTitle_sub spollers-block__body">
							<ul>
								<li>
									<a href="<?echo get_category_link(60);?>">Смотреть все Торшеры</a>
								</li>

								<li>
									<a href="<?echo get_category_link(60);?>">Дизайнерские торшеры</a>
								</li>
								
								<li>
									<a href="<?echo get_category_link(61);?>">Торшеры в стиле прованс</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="catalogMenuPunct" >
						<div class="catalogMenuPunctTitle" data-spoller>
							<div class="cmpImg">
								<img src="<?bloginfo("template_url")?>/img/formenu/nastolnye-lampy.png" alt="">
							</div>

							<div class="cmpTitle">
								<span>Настольные лампы</span>
							</div>
						</div>

						<div class="catalogMenuPunctTitle_sub spollers-block__body">
							<ul>
								<li>
									<a href="<?echo get_category_link(33);?>">Смотреть все Настольные лампы</a>
								</li>

								<li>
									<a href="<?echo get_category_link(33);?>">Дизайнерские настольные лампы</a>
								</li>
								
								<li>
									<a href="<?echo get_category_link(25);?>">Настольные лампы в стиле лофт</a>
								</li>

								<li>
									<a href="<?echo get_category_link(34);?>">Настольные лампы в стиле прованс</a>
								</li>
							</ul>
						</div>
					</div>
					
					<div class="catalogMenuPunct" >
						<div class="catalogMenuPunctTitle" data-spoller>
							<div class="cmpImg">
								<img src="<?bloginfo("template_url")?>/img/formenu/ofisnoe-osveshchenie.png" alt="">
							</div>

							<div class="cmpTitle">
								<span>Светодиодное освещение</span>
							</div>
						</div>

						<div class="catalogMenuPunctTitle_sub spollers-block__body">
							<ul>
								<li>
									<a href="<?echo get_category_link(13);?>">Смотреть все светодиодное освещение</a>
								</li>

								<li>
									<a href="<?echo get_category_link(41);?>">Светодиодные люстры</a>
								</li>
								
								<li>
									<a href="<?echo get_category_link(16);?>">Светодиодные бра</a>
								</li>

								<li>
									<a href="<?echo get_category_link(62);?>">Cветодиодные торшеры</a>
								</li>

								<li>
									<a href="<?echo get_category_link(14);?>">Точечьный свет</a>
								</li>
							</ul>
						</div>
					</div>
					
					<div class="catalogMenuPunct" >
						<div class="catalogMenuPunctTitle" data-spoller>
							<div class="cmpImg">
								<img src="<?bloginfo("template_url")?>/img/formenu/lampochki.png" alt="">
							</div>

							<div class="cmpTitle">
								<span>Лампочки</span>
							</div>
						</div>

						<div class="catalogMenuPunctTitle_sub spollers-block__body">
							<ul>
								<li>
									<a href="<?echo get_category_link(21);?>">Смотреть все лампочки</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'mob-menu__list',
						'container_class' => 'mob-menu__list','container' => false )); ?> 
				<a href="#callback" class="header__popup-link header__popup-link_mob btn _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>

				<!-- <div class="header__mob-menu-img">
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
					
				</div> -->
			</div>
		</div>
