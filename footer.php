<footer id="footer" class="footer">
			<div class="footer__container _container">

				<div class="footer__row d-flex">

					<a href="index.html" class="logo-icon footer__logo">
						<!-- <? bloginfo("url"); ?> -->
					</a>

					<ul class="footer__menu">
						<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Главная</a></li>
						<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Торговые марки</a></li>
						<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Информация</a></li>
						<li class="footer__menu-item"><a href="#" class="footer__menu-item-link">Контакты</a></li>
					</ul>

					<div class="footer__contacts">
						<a href="#" class="footer__contacts-address">Москва, ул. Маяковского,25</a>
						<a href="tel:88007556504" class="footer__contacts-phone">8 800 755 65 04</a>
						<a href="mailto:info@light.ru" class="footer__contacts-email">info@light.ru</a>
					</div>

					<form class="footer__form" action="#">
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
							<button type="submit" class="footer__form-btn btn">Отправить заявку</button>
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
							<a href="#" class="footer__soc-block-icons-link soc-block-icons-link-01"></a>
							<a href="#" class="footer__soc-block-icons-link soc-block-icons-link-02"></a>
							<a href="#" class="footer__soc-block-icons-link soc-block-icons-link-03"></a>
						</div>
					</div>

				</div>

			</div>
		</footer>
</div> 

<?php wp_footer(); ?>
</body>
</html>