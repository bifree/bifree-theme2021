<?php get_header(); ?>

<main class="container">
		
	<?php if(have_posts()): the_post(); ?>
		<article class="single__content" <?php post_class('single-content');?>>
  	<div class="single__info">
			 <!--投稿日を取得-->
				<p class="single__date">
				<i class="far fa-clock"></i>
				<time
				datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
				<?php echo get_the_date(); ?>
				</time>
				</p>
				
			<!--カテゴリ取得-->
			<?php if(has_category() ): ?>
			<p class="single__category">
				<?php echo get_the_category_list( ' ' ); ?>
			</p>
			<?php endif; ?>
		</div>

		<!--タイトル-->
		<h1 class="single__title"><?php the_title(); ?></h1>

		<!--アイキャッチ取得-->
		<div class="single__thumbnail">
			<?php if( has_post_thumbnail() ): ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>
		</div>

		<!--本文取得-->
		<p class="single__text">
			<?php the_content(); ?>
		</p>
	</article>
	<?php endif; ?>
	
	<div class="single__button">
		<a class="single__btn" href="<?php echo home_url('/article/');?>">
			<img class="single__btn__arrow single__before" src="<?php echo get_template_directory_uri(); ?>/assets/img/single-arrow-blue.png"> 
			<img class="single__btn__arrow single__after" src="<?php echo get_template_directory_uri(); ?>/assets/img/single-arrow-white.png"> 
			<span class="single__btn__text">記事一覧に戻る</span>
		</a>
	</div>
</main>

<?php get_footer(); ?>