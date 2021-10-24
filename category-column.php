<?php get_header();?>
  <main class="container column">
  <?php get_template_part('template/archive-menu');?>

    <div class="archive-items">
      <?php
        $cat_posts = get_posts(array(
          'post_type' => 'post', // 投稿タイプ
          'category_name' => 'column', // カテゴリをスラッグで指定する場合
          'posts_per_page' => 10, // 表示件数
          'orderby' => 'date', // 表示順の基準
          'order' => 'DESC' // 昇順・降順
        ));
      global $post;
      if($cat_posts): foreach($cat_posts as $post): setup_postdata($post); ?>
        <?php get_template_part('template/archive-item');?>
      <?php endforeach; endif; wp_reset_postdata(); ?>
    </div>

    <?php get_template_part('template/archive-pager');?>

  </main>
<?php get_footer();?>