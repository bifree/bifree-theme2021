<?php get_header();?>
  <main class="container">
    <div class="page__header">
      <h2 class="upper--table">記事一覧</h2>
    </div>

    <div class="archive-menu">
      <a class="archive-menu__category category__all" href="#">
        <p class="archive-menu__category__en">ALL</p>
        <p class="archive-menu__category__ja">すべての記事</p>
      </a>
      <a class="archive-menu__category category__inrerview" href="#">
        <p class="archive-menu__category__en">INTERVIEW</p>
        <p class="archive-menu__category__ja">インタビュー</p>
      </a>
      <a class="archive-menu__category category__news" href="#">
        <p class="archive-menu__category__en">NEWS</p>
        <p class="archive-menu__category__ja">ニュース</p>
      </a>
      <a class="archive-menu__category category__column" href="#">
        <p class="archive-menu__category__en">COLUMN</p>
        <p class="archive-menu__category__ja">コラム</p>
      </a>
      <a class="archive-menu__category category__technology" href="#">
        <p class="archive-menu__category__en">TECHNOLOGY</p>
        <p class="archive-menu__category__ja">技術ブログ</p>
      </a>
      <a class="archive-menu__category category__others" href="#">
        <p class="archive-menu__category__en">OTHERS</p>
        <p class="archive-menu__category__ja">その他</p>
      </a>
    </div>


    

    <div class="archive-items">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
            <div class="archive-item__content__top">
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
              <div class="archive-item__more">MORE</div>
              <div class="archive-item__arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive-arrow-right.png"></div>


            </div>
          </div>
        </a>
      </article>
      <?php endwhile; endif; ?>
    </div>

    <?php get_template_part('template/archive-pager');?>

  </main>
<?php get_footer();?>