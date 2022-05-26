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

<div class="loaderSize" id="categoryFilterLoader" style="display: block;">Загрузка...</div>

<form id = "categoryFilterForm" action="" style="display: none;">
  <div class="catalog__sidebar-column">
    <h4 class="catalog__sidebar-column-name">Материал</h4>
      <div class="form__line" id = "material_filter_wrapper">
        
      </div>
    <div class="catalog__sidebar-column-line"></div>
  </div>

  <div class="catalog__sidebar-column">
    <h4 class="catalog__sidebar-column-name">Цоколь</h4>
      <div class="form__line" id = "tsokol_filter_wrapper">
        
      </div>
    <div class="catalog__sidebar-column-line"></div>
  </div>

  <div class="catalog__sidebar-column">
    <h4 class="catalog__sidebar-column-name">Количество ламп</h4>
      <div class="form__line" id = "lamp_count_filter_wrapper">
        
      </div>
    <div class="catalog__sidebar-column-line"></div>
  </div>

  <div class="catalog__sidebar-column">
    <h4 class="catalog__sidebar-column-name">Размер</h4>
      <div class="form__line" id = "size_filter_wrapper">
        
      </div>
    <div class="catalog__sidebar-column-line"></div>
  </div>

  <div class="catalog__sidebar-column">
    <h4 class="catalog__sidebar-column-name">Дизайнер</h4>
      <div class="form__line" id = "designer_filter_wrapper">
        
      </div>
    <div class="catalog__sidebar-column-line"></div>
  </div>

  <div class="catalog-sec__sidebar-form-btn">
        <button type="reset" onclick = "clearFilter()" class="catalog-sec__sidebar-form-btn-limk button button_grey">Сбросить</button>
        <button type="submit" class="catalog-sec__sidebar-form-btn-limk button button_red btn-hover">Применить</button> 
  </div>
</form>

</div>

</div>