<?php get_header();?>
  <main class="container all">
    <?php get_template_part('template/archive-menu');?>

    <div class="archive-items">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <?php get_template_part('template/archive-item');?>
      <?php endwhile; endif; ?>
    </div>

    <?php get_template_part('template/archive-pager');?>

  </main>
<?php get_footer();?>