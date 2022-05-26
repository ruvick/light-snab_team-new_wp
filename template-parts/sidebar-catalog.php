<div class="catalog__sidebar sidebar">
<div class="catalog-sec__sidebar-filter-block-mob"><p class="catalog-sec__sidebar-filter-block-mob-text">Фильтры</p></div>
<div class="catalog-sec__sidebar-body">
<div class="catalog__sidebar-column">
  <div class="catalog__sidebar-btn-block spollers-block" data-spollers data-one-spoller>
  
  <?
    $cats = get_categories( array(
      'taxonomy'  => 'lightcat',
      'orderby' => 'name',
      'parent' => 0
    ) );
  
    foreach ( $cats as $cat ) {
  ?>

  
  
  <div class="spollers-block__item">
    
    <div class="spollers-block__title" data-spoller>
      <a href="#" class="catalog__sidebar-btn-block-link btn-link btn-link_grey"><? echo $cat->name;?></a>
    </div>

    <div class="spollers-block__body">
      <?
        $sub_cat = get_categories( array(
          'taxonomy'  => 'lightcat',
          'orderby' => 'name',
          'parent'  => $cat->term_id
        ) );

        foreach ( $sub_cat as $s_cat ) {
      ?>

        <a href="<?echo get_category_link($s_cat->term_id);?>" class="catalog__sidebar-btn-block-link btn-link"><?echo $s_cat->name;?></a>

      <?
        }
      ?>
      
    </div>

  </div>
  <?
    }
  ?>

  
  
  
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

</div>