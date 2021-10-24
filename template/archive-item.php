<article class="archive-item">
  <a href="<?php the_permalink(); ?>" class="archive-item__link">

    <?php // アイキャッチを表示させる start ?>
    <div class="archive-item__thumbnail">
      <?php if(has_post_thumbnail()): ?>
        <img class="archive-item__thumbnail-img" src="<?php the_post_thumbnail_url('large'); ?>">
      <?php endif; ?>
    </div>
    <?php // アイキャッチを表示させる end ?>

    <div class="archive-item__content">
      <div class="archive-item__top">
        <?php // 日付を表示させる start ?>
        <p class="archive-item__date"><?php echo get_the_date(); ?></p>
        <?php // 日付を表示させる end ?>

        <?php // カテゴリーを表示させる start ?>
        <?php $cat = get_the_category(); ?>
        <?php $cat = $cat[0]; ?>
        <p class="archive-item__category"><?php echo get_cat_name($cat->term_id); ?></p>
        <?php // カテゴリーを表示させる end ?>
      </div>

      <?php // タイトルを表示させる start ?>
      <h3 class="archive-item__title"><?php the_title(); ?></h3>
      <?php // タイトルを表示させる end ?>
          
      <div class="archive-item__button">
        <div class="archive-item__more">READ</div>
        <div class="archive-item__arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive-arrow-right.png"></div>
      </div>
    </div>
  </a>
</article>