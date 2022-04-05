<footer id="footer" class="footer">
			<div class="footer__container _container">

				<div class="footer__row d-flex">

					<a href="<? bloginfo("url"); ?>" class="logo-icon footer__logo"></a>

					<!-- <?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'footer__menu',
						'container_class' => 'footer__menu','container' => false )); ?>  -->

					<ul class="footer__menu">
						<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Главная</a></li>
						<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Торговые марки</a></li>
						<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Информация</a></li>
						<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Контакты</a></li>
					</ul>

					<div class="footer__contacts">
						<? $adr = carbon_get_theme_option("as_address"); 
							if (!empty($adr)){?><a href="#" class="footer__contacts-address"><? echo $adr; ?></a><?}?> 
						<? $tel = carbon_get_theme_option("as_phones_1"); 
							if (!empty($tel)){?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="footer__contacts-phone"><? echo $tel; ?></a><?}?> 
						<? $mail = carbon_get_theme_option("as_email");
							if (!empty($mail)) { ?><a href="mailto:<? echo $mail; ?>" class="footer__contacts-email"><? echo $mail; ?></a><? } ?>
					</div>

					<form class="footer__form universal_form" action="#">
						<div class="form__line">
							<h3 class="footer__form-title">Форма обратной связи</h3>
							<input id="name" autocomplete="off" type="text" name="form[]" data-error="Заполните поля"
								data-value="Имя*" class="footer__form-input input _req">
							<input id="tel2" autocomplete="off" type="text" name="form[]" data-error="Заполните поля"
								data-value="Tелефон*" class="footer__form-input input _phone _req">
							<input id="tel2" autocomplete="off" type="text" name="form[]" data-error="Заполните поля"
								data-value="E-mail*" class="footer__form-input input _email _req">
							<textarea class="input _req" name="" id="" name="form[]" data-error="Заполните поля" 
								data-value="Сообщение"></textarea>
						</div>
						<div class="footer__form-block-btn d-flex">
							<button type="submit" class="footer__form-btn form__btn uniSendBtn btn">Отправить заявку</button>
							<p class="footer__form-policy">
								* Нажимая на кнопку «Отправить»
								Вы принимаете <a href="#" class="footer__form-policy-link">условия политики конфиденциальности
									в отношении обработки персональных данных</a>
							</p>
						</div>
					</form>

					<div class="footer__soc-block d-flex">
						<p class="footer__soc-block-name">Социальные сети</p>
						<div class="footer__soc-block-icons">
						<a href="<?php echo carbon_get_theme_option('as_vk'); ?>" class="footer__soc-block-icons-link soc-block-icons-link-01"></a>
						<a href="<?php echo carbon_get_theme_option('as_telegr'); ?>" class="footer__soc-block-icons-link soc-block-icons-link-02"></a>
						<a href="<?php echo carbon_get_theme_option('as_whatsapp'); ?>" class="footer__soc-block-icons-link soc-block-icons-link-03"></a>
						</div>
					</div>

				</div>

			</div>
		</footer>
</div> 

<?php wp_footer(); ?>
</body>
</html>