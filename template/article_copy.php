<section class="article">
        

        <div class="swiper-container container">
            <div class="article__left-arrow swiper-button-prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/left.png">
            </div>

            

            <div class="articles swiper-wrapper">
                <?php
                $args = array(
                    'posts_per_page' => 6 // 表示件数の指定
                );
                $posts = get_posts( $args );
                foreach ( $posts as $post ): // ループの開始
                setup_postdata( $post ); // 記事データの取得
                ?>
                <a href=<?php the_permalink(); ?> class="article__item swiper-slide">
                    <div class="article__thumbnail article__thumbnail">
                        <?php the_post_thumbnail( 'medium' ); ?>
                    </div>
                    <div class="article__body">
                        <p class="article__title"><?php the_title(); ?></p>
                        <div class="article__time">
                            <img class="article__time__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/time.png">
                            <time class="article__time__day">2021.10.01
                            </time>
                        </div>
                    </div>
                </a>
                <?php
                endforeach; // ループの終了
                wp_reset_postdata(); // 直前のクエリを復元する
                ?>
                <!-- swiper-pagination -->
                <div class="swiper-pagination"></div>
            </div>

            <div class="article__right-arrow swiper-button-next">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/right.png">
            </div>
        </div>

        <div class="readmore">
            <a class="readmore__btn" href="<?php echo home_url('/article/');?>">READ MORE</a>
        </div>
    </section>