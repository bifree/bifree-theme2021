
<?php get_header(); ?>


<main>
    <div class="main-visual">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mainvisual1.png" alt="トップ画像">
        <div class="catch-copy">
            <h2 class="catch-copy__ja">‘‘あなたらしさ’’<span class="catch-copy__wo">を</span><br>
            応援したい</h2>
            <p class="catch-copy__en">We want to support your personality.</p>
        </div>
    </div>


    <section class="about">
        <div class=sec-title>
            <h1 class="sec-title__en">ABOUT</h1>
            <p class="sec-title__ja">Bifreeについて</p>
        </div>

        <div class="container">
            <p class="about__text">これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。</p>
        </div>

        <?php get_template_part('template/readmore--about');?>
    </section>


    <section class="service">
        <div class=sec-title>
            <h1 class="sec-title__en">SERVICE</h1>
            <p class="sec-title__ja">事業内容</p>
        </div>

        <div class="container">
            <div class="services service__web">
                <div class="service__text">
                    <div class="service__top">
                        <h3 class="service__number">#01</h3>
                        <div class="service__title">
                            <p class="service__en">web production</p>
                            <h3 class="service__ja">ウェブ制作</h3>
                        </div>
                    </div>
                    <p class="service__body">これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。</p>
                </div>
                <div class="service__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web.png">
                </div>
                <div class="service__img__place"></div>
                <div class="service__back"> </div>
            </div>

            <div class="services service__media">
                <div class="service__text">
                    <div class="service__top">
                        <h3 class="service__number">#02</h3>
                        <div class="service__title">
                            <p class="service__en">media management</p>
                            <h3 class="service__ja">メディア運営</h3>
                        </div>
                    </div>
                    <p class="service__body">これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。</p>
                </div>
                <div class="service__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/media.png">
                </div>
                <div class="service__img__place"></div>
                <div class="service__back"> </div>
            </div>

            <div class="services service__lgbt">
                <div class="service__text">
                    <div class="service__top">
                        <h3 class="service__number">#03</h3>
                        <div class="service__title">
                            <p class="service__en">lgbt awareness activities</p>
                            <h3 class="service__ja">LGBT啓蒙活動</h3>
                     </div>
                    </div>
                    <p class="service__body">これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。</p>
                </div>
                <div class="service__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lgbt.png">
                </div>
                <div class="service__img__place"></div>
                <div class="service__back"> </div>
            </div>
        </div>

        <?php get_template_part('template/readmore--service');?>
    </section>

    <?php get_template_part('template/article');?>

    <section class="contact">
        <div class=sec-title>
            <h1 class="sec-title__en">CONTACT</h1>
            <p class="sec-title__ja">お問い合わせ</p>
        </div>

        <div class="container">
            <p class="contact__text">仕事依頼、ご質問・ご相談など、お気軽にお問合せください。</p>
        
            <div class="contact-page">
                <?php get_template_part('template/contact__btn');?>
            </div>
        </div>
    </section>
    </main>


<?php get_footer(); ?>

