<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<section class="title-sec">
	<div class="_container">
  <?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
			}
			?> 
		<h1 class="title-sec__title">Все товары</h1>
	</div>
</section>

<section class="catalog">
	<div class="_container">

		<div class="catalog__wrap">

			<div class="catalog__sidebar sidebar">

				<div class="catalog__sidebar-column">
					<div class="catalog__sidebar-btn-block">
						<a href="#" class="catalog__sidebar-btn-block-link btn-link btn-link_grey">Дизайнерские
							светильники</a>
						<a href="#" class="catalog__sidebar-btn-block-link btn-link">Люстры</a>
						<a href="#" class="catalog__sidebar-btn-block-link btn-link">Бра</a>
						<a href="#" class="catalog__sidebar-btn-block-link btn-link">Лампы настольные</a>
						<a href="#" class="catalog__sidebar-btn-block-link btn-link">Торшеры</a>
						<a href="#" class="catalog__sidebar-btn-block-link btn-link btn-link_grey">
							Светильники в стиле Лофт /
							Винтаж
						</a>
						<a href="#" class="catalog__sidebar-btn-block-link btn-link btn-link_grey">
							Светильники в стиле
							Прованс
						</a>
						<a href="#" class="catalog__sidebar-btn-block-link btn-link btn-link_grey">Светодиодное освещение</a>
					</div>
				</div>

				<div class="catalog__sidebar-column">
					<h4 class="catalog__sidebar-column-name">Фильтр товаров</h4>
					<form action="#" class="catalog__sidebar-filter">
						<div class="form__line">
							<label for="check1" class="checkbox">
								<input id="check1" data-error="Ошибка" class="checkbox__input" type="checkbox" value="1"
									name="form[]">
								<span class="checkbox__text"><span>Только в наличии
							</label>
						</div>
					</form>
					<div class="catalog__sidebar-column-line"></div>
				</div>

				<div class="catalog__sidebar-column">
					<h4 class="catalog__sidebar-column-name">Тип товара</h4>
					<div class="catalog__sidebar-btn-block">
						<a href="#" class="catalog__sidebar-btn-block-link">люстры (1005)</a>
						<a href="#" class="catalog__sidebar-btn-block-link">бра (279)</a>
						<a href="#" class="catalog__sidebar-btn-block-link">настольные лампы (101)</a>
						<a href="#" class="catalog__sidebar-btn-block-link">торшеры (98)</a>
					</div>
					<div class="catalog__sidebar-column-line"></div>
				</div>

				<div class="catalog__sidebar-column">
					<h4 class="catalog__sidebar-column-name">Теги</h4>
					<div class="catalog__sidebar-btn-block">
						<a href="#" class="catalog__sidebar-btn-block-link">люстры пауки (2)</a>
						<a href="#" class="catalog__sidebar-btn-block-link">под старину (9)</a>
						<a href="#" class="catalog__sidebar-btn-block-link">светильники-прожекторы( 2)</a>
						<a href="#" class="catalog__sidebar-btn-block-link">из проволоки (1)</a>
						<a href="#" class="catalog__sidebar-btn-block-link">свечи (6)</a>
						<a href="#" class="catalog__sidebar-btn-block-link">люстры-шары (6)</a>
						<a href="#" class="catalog__sidebar-btn-block-link">с бабочками (11)</a>
					</div>
				</div>

			</div>

			<div class="catalog__main-content main-content">
				<div class="card-row"> 
				<?php
						while(have_posts()):
							the_post();
							get_template_part('template-parts/product-loop');  
						endwhile;
					?>
				</div>
			</div>

		</div>

		<?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi($loop); ?>

		<nav class="pagination d-flex">
			<div class="pagination__nav-links d-flex">
				<!-- <a class="pagination__back" href="#">Назад</a> -->
				<span class="pagination__numbers">1</span>
				<a class="pagination__numbers current" href="#">2</a>
				<a class="pagination__numbers" href="#">3</a>
				<div class="pagination__block-dot d-flex">
					<span class="pagination__dot">.</span>
					<span class="pagination__dot">.</span>
					<span class="pagination__dot">.</span>
				</div>
				<a class="pagination__numbers" href="#">17</a>
				<p class="pagination__info">Страница 1 из 17</p>
				<!-- <a class="pagination__next" href="#">Вперед</a> -->
			</div>
		</nav>

	</div>
</section>

</main>

<?php get_footer(); ?>  