<section class="article d-none">
<div class=sec-title>
            <h1 class="sec-title__en">ARTICLE</h1>
            <p class="sec-title__ja">新着記事</p>
        </div>
    <!-- 実装部分 -->
<div class="mainvisual">
<div class="swiper-container">
<div class="swiper-wrapper">

<!-- 各スライド -->
<?php
$args = array(
    'posts_per_page' => 4 // 表示件数の指定
);
$posts = get_posts( $args );
foreach ( $posts as $post ): // ループの開始
setup_postdata( $post ); // 記事データの取得
?>
<div class="swiper-slide">
    <a href=<?php the_permalink(); ?> class="article__item swiper-slide">
        <div class="article__thumbnail">
            <?php the_post_thumbnail( 'medium' ); ?>
        </div>
        <div class="article__body">
            <p class="article__title"><?php the_title(); ?></p>
            <div class="article__time">
                <img class="article__time__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/time.png">
                <time class="article__time__day"><?php echo get_the_date('Y.n.j'); ?>
                </time>
            </div>
        </div>
    </a>
</div>
<!-- swiper-wrapper -->

<?php
                endforeach; // ループの終了
                wp_reset_postdata(); // 直前のクエリを復元する
                ?>

</div>
<!-- swiper-slide -->
<div class="swiper-pagination"></div>
</div>
<!-- swiper-container -->
</div>

<div class="readmore">
    <a class="readmore__btn" href="<?php echo home_url('/article/');?>">READ MORE</a>
</div>
</section>

