
<?php

/*
Template Name: Приглашаем к сотрудничеству дизайнеров
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

	<main id="primary" class="page site-main main-baner-page"> 

  <section class="baner-page"> 
    <div class="nuar_blk"></div>
		<div class="_container">
      <div class="baner-page__descp">
        <p class="baner-page__text">
          БОНУСЫ И <br>СКИДКИ</p>
        <p class="baner-page__text">
          ДИЗАЙНЕРАМ И <br> АРХИТЕКТОРАМ
        </p>
      </div>
    </div>
	</section>

	<section class="content recurring"> 
			<div class="_container">

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

				<h1><?php the_title();?></h1>

				<h2 class="page-subtitle">Вы дизайнер, архитектор, проектировщик?</h2>
				<div class="cooperation-content">
					<div class="cooperation-content__text">
						<ol>
							<li>Поможем подобрать подходящие светильники под Ваш проект
								<ul>
									<li>по визуализации и дизайн проекту</li>
									<li>исходя из пожеланий клиента</li>
								</ul>
							</li>
							<li>
								Проведем полный  комплекс услуг по расчету освещенности
								<ul>
									<li>расчет освещенности каждого помещения </li>
									<li>рекомендации по видам и типу освещения</li>
								</ul>
							</li>
							<li>
								Предоставим лучшие цены
								<ul>
									<li>гибкая  система скидок</li>
									<li>стабильная система агентских выплат</li>
								</ul>
							</li>
							<li>
								Предлагаем более 300 световых брендов Европы и Азии
								<ul>
									<li>топовые световые фабрики</li>
									<li>недорогие аналоги европейских светильников</li>
								</ul>
							</li>
						</ol>
					</div>
					<div class="universal_form">
					<form action="#" class="cooperation-content__form universal_send_form">
						<div class="cooperation-content__form-title">Заполните форму</div> 
						<div class="form__line">
						<input autocomplete="off" type="text" name="name" data-error="Заполните поля"
							data-value="Имя*" class="input _name _req">
						<input autocomplete="off" type="text" name="tel" data-error="Заполните поля"
							data-value="Телефон*" class="input _phone _tel _req">
						<input autocomplete="off" type="text" name="Email" data-error="Заполните поля"
							data-value="E-mail*" class="input _email _req">
							</div>
						<button type="button" class="cooperation__form-btn form__btn btn u_send">Отправить</button>
						<p class="cooperation-content__form-note">
							* Нажимая на кнопку "Отправить" Вы принимаете условия политики конфиденциальности в отношении обработки персональных данных
						</p>
					</form>
					</div>
				</div>
				
			</div>
		</section>
		<?php get_template_part('template-parts/reviews-section');?>
	</main>

<?php get_footer();