<?php

/*
Template Name: Шаблон карточки товаров
WP Post Template: Шаблон карточки товаров
Template Post Type: post
*/ 

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page page-recurring">

<section id="product-sec" class="product-sec recurring">
  <div class="_container">
    <p id="breadcrumbs">
      <span>
        <span>
          <a href="index.html">
            Главная
          </a> /
          <a href="catalog.html">
            Люстры
          </a> /
          <span class="breadcrumb_last" aria-current="page">
            светильник 6475
          </span>
        </span>
      </span>
    </p>

    <div class="product__row d-flex">
      <div class="product__slider _swiper d-flex">
        <div class="product__slide slider__slide">
          <picture><source srcset="img/product/01.webp" type="image/webp"><img src="img/product/01.jpg?_v=1649104441578" alt=""></picture>
        </div>
        <div class="product__slide slider__slide">
          <picture><source srcset="img/product/01.webp" type="image/webp"><img src="img/product/01.jpg?_v=1649104441578" alt=""></picture>
        </div>
      </div>

      <div class="product__descp">
        <h1 class="product__descp-title">светильник 6475</h1>
        <p class="product__descp-product-code">код товара: <span>10950</span></p>
        <div class="product__descp-line"></div>

        <div class="product__charect">
          <ul class="product__charect-list">
            <li class="product__charect-list-li"><span>Материал:</span> металл</li>
            <li class="product__charect-list-li"><span>Цвет:</span> латунь</li>
            <li class="product__charect-list-li"><span>Тип цоколя:</span> E27</li>
            <li class="product__charect-list-li"><span>Количество ламп:</span> 1 x 60Вт</li>
            <li class="product__charect-list-li"><span>Лампы:</span> в комплект не входят</li>
            <li class="product__charect-list-li"><span>Длинна шнура:</span> max 90</li>
          </ul>

          <p class="product__avail">Наличие: <span>есть на складе</span></p>

          <div class="size-options">
            <p class="size-options-name">Варианты размеров:</p>
            <div class="size-options-block-btn">
              <a href="#" class="size-options-block-btn-link _yellow">D30</a>
              <a href="#" class="size-options-block-btn-link _grey">D40</a>
            </div>
          </div>
        </div>

        <div class="product__descp-line"></div>

        <p class="product__descp-price">Цена <span class="product__descp-price-number rub">15 210</span> </p>

        <div class="product__descp-line"></div>

        <form action="#" class="product__choice d-flex">
          <p class="product__choice-name">Кол-во:</p>
          <div class="product__quantity quantity">
            <div class="quantity__button quantity__button_minus"></div>
            <div class="quantity__input">
              <input autocomplete="off" type="number" name="form[]" value="1">
            </div>
            <div class="quantity__button quantity__button_plus"></div>
          </div>
          <button class="product__btn btn">В корзину</button>
        </form>

        <!-- <div class="product__text">
          <h3>Краткое описание</h3>
          <p>
            Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее
            осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений
            в домашних условиях.
          </p>
        </div> -->

      </div>
    </div>

  </div>
</section>

<section id="similar-products" class="similar-products">
  <div class="_container">
    <h2 class="title">Похожие товары</h2>

    <div class="best-offers__row">

      <div class="card-column">
        <div class="card-box">
          <div class="card-box-img">
            <picture><source srcset="img/cards/02.webp" type="image/webp"><img src="img/cards/02.jpg?_v=1649104441578" alt=""></picture>
          </div>
          <div class="card-box-descp">
            <h4 class="card-box-descp-title">
              бра Golden Bird Double
            </h4>
            <div class="card-box-descp-payment d-flex">
              <div class="card-box-descp-price rub">15 210 </div>
              <a href="#" class="card-box-descp-btn btn">Подробнее</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card-column">
        <div class="card-box">
          <div class="card-box-img">
            <picture><source srcset="img/cards/03.webp" type="image/webp"><img src="img/cards/03.jpg?_v=1649104441578" alt=""></picture>
          </div>
          <div class="card-box-descp">
            <h4 class="card-box-descp-title">
              люстра The Fluttering Butterfly
            </h4>
            <div class="card-box-descp-payment d-flex">
              <div class="card-box-descp-price rub">5230 </div>
              <a href="#" class="card-box-descp-btn btn">Подробнее</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card-column">
        <div class="card-box">
          <div class="card-box-img">
            <picture><source srcset="img/cards/04.webp" type="image/webp"><img src="img/cards/04.jpg?_v=1649104441578" alt=""></picture>
          </div>
          <div class="card-box-descp">
            <h4 class="card-box-descp-title">
              люстра The Fluttering Butterfly
            </h4>
            <div class="card-box-descp-payment d-flex">
              <div class="card-box-descp-price rub">5230 </div>
              <a href="#" class="card-box-descp-btn btn">Подробнее</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card-column">
        <div class="card-box">
          <div class="card-box-img">
            <picture><source srcset="img/cards/05.webp" type="image/webp"><img src="img/cards/05.jpg?_v=1649104441578" alt=""></picture>
          </div>
          <div class="card-box-descp">
            <h4 class="card-box-descp-title">
              люстра Orion 4
            </h4>
            <div class="card-box-descp-payment d-flex">
              <div class="card-box-descp-price rub">43 240 </div>
              <a href="#" class="card-box-descp-btn btn">Подробнее</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card-column">
        <div class="card-box">
          <div class="card-box-img">
            <picture><source srcset="img/cards/01.webp" type="image/webp"><img src="img/cards/01.jpg?_v=1649104441578" alt=""></picture>
          </div>
          <div class="card-box-descp">
            <h4 class="card-box-descp-title">
              люстра The Fluttering Butterfly
            </h4>
            <div class="card-box-descp-payment d-flex">
              <div class="card-box-descp-price rub">5230 </div>
              <a href="#" class="card-box-descp-btn btn">Подробнее</a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

</main>

<?php get_footer();