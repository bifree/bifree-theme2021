
<?php get_header(); ?>
<head>
<link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
<head>
    
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

        <div class="readmore">
            <a class="readmore__btn" href="">READ MORE</a>
        </div>
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

        <div class="readmore">
            <a class="readmore__btn">READ MORE</a>
        </div>
    </section>
      
    <section class="article">
        <div class=sec-title>
            <h1 class="sec-title__en">ARTICLE</h1>
            <p class="sec-title__ja">新着記事</p>
        </div>

        <div class="container">
            <div class="article__left-arrow">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/left.png">
            </div>

            <div class="articles">
                <a class="article__item">
                    <div class="article__thumbnail">
                        <img class="article__thumbnail__img" src="" alt="サムネイル">
                    </div>
                    <div class="article__body">
                        <p class="article__title">タイトルタイトルタイトルタイトルタイトル</p>
                        <div class="article__time">
                            <img class="article__time__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/time.png">
                            <time class="article__time__day">2021.10.01
                            </time>
                        </div>
                    </div>
                </a>

                <a class="article__item">
                    <div class="article__thumbnail">
                        <img class="article__thumbnail__img" src="" alt="サムネイル">
                    </div>
                    <div class="article__body">
                        <p class="article__title">タイトルタイトルタイトルタイトルタイトル</p>
                        <div class="article__time">
                            <img class="article__time__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/time.png">
                            <time class="article__time__day">2021.10.01
                            </time>
                        </div>
                    </div>
                </a>

                <a class="article__item">
                    <div class="article__thumbnail">
                        <img class="article__thumbnail__img" src="" alt="サムネイル">
                    </div>
                    <div class="article__body">
                        <p class="article__title">タイトルタイトルタイトルタイトルタイトル</p>
                        <div class="article__time">
                            <img class="article__time__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/time.png">
                            <time class="article__time__day">2021.10.01
                            </time>
                        </div>
                    </div>
                </a>
            </div>

            <div class="article__right-arrow">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/right.png">
            </div>
        </div>

        <div class="readmore">
            <a class="readmore__btn">READ MORE</a>
        </div>
    </section>

    <section class="contact">
        <div class=sec-title>
            <h1 class="sec-title__en">CONTACT</h1>
            <p class="sec-title__ja">お問い合わせ</p>
        </div>

        <div class="container">
            <p class="contact__text">仕事依頼、ご質問・ご相談など、お気軽にお問合せください。</p>
          
            <div class="contact-page">
                <a class="contact__btn" href="contact.html">お問い合わせはこちら
                <img class="contact__btn__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.png">
                <img class="contact__btn__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact_arrow.png"> 
                </a>
            </div>
        </div>
      </section>
    </main>


<?php get_footer(); ?>

