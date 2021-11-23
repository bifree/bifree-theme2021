<?php get_header(); ?>
<main>
    <div class="main-visual">
        <img class="main-visual__img1 main-visual__pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/main-visual1.png" alt="トップ画像">
        <img class="main-visual__img2 main-visual__pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/main-visual2.png" alt="トップ画像">

        <img class="main-visual__img1__sp main-visual__sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/main-visual1sp.png" alt="トップ画像">
        <img class="main-visual__img2__sp main-visual__sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/main-visual2sp.png" alt="トップ画像">
            
        <div class="catch-copy">
          <div class="catch-copy__ja">
            “あなたらしさ”  <span class="wo">を</span><br>
            応援したい
          </div>
          <div class="catch-copy__en">
            We want to support your personality
          </div>
        </div>
        <div class="catch-copy catch-copy__back">
            <div class="catch-copy__ja catch-copy__ja__back">
              “あなたらしさ”  <span class="wo">を</span><br>
              応援したい
            </div>
            <div class="catch-copy__en catch-copy__en__back">
              We want to support your personality
            </div>
          </div>
    </div>


    <section class="about">
        <div class="sec-title">
            <h1 class="sec-title__en">ABOUT</h1>
            <p class="sec-title__ja">Bifreeについて</p>
        </div>

        <div class="container">
            <p class="about__text text--justify">
                任意団体Bifreeは2021年2月22日、LGBTQ当事者とその理解者・支援者であるアライの人々により結成され、「人と人を結ぶウェブメディア」としてこのサイトを公開し活動を開始しました。そのウェブメディアを開設する上で活用したウェブ制作の技術で、更に多くの人を繋ぐことが出来るのではないか…そう考え、ウェブメディア運営からウェブ制作へ活動の主軸を移しました。メンバーも日本人のみならず、海外から参加をしてくれる…そんなインターナショナルな組織へと変貌も遂げました。<br>事業を展開する中で更に多くのLGBTQ当事者に限らない人々を巻き込み、全ての人がその人らしく生きていける、そんな世界を目指してこの先も邁進していきます。
            </p>
        </div>

        <?php get_template_part('template/readmore--about');?>
    </section>


    <section class="service">
        <div class=sec-title>
            <h1 class="sec-title__en">SERVICE</h1>
            <p class="sec-title__ja">事業内容</p>
        </div>

        <div class="container">
            <ul class="service__list">
                <li class="services service__web">
                    <p class="service__space"> </p>
                    <div class="service__text">
                        <div class="service__top">
                            <h3 class="service__number">#01</h3>
                            <div class="service__title">
                                <p class="service__en">web production</p>
                                <h3 class="service__ja">ウェブ制作</h3>
                            </div>
                        </div>
                        <p class="service__body text--justify">
                        LGBTQ当事者の雇用をもっと促進したい…その為のきっかけとなるべく始めたこの事業は、今やBifreeの根幹を大きく担っています。クライアントからのヒアリングを重視し、それを黙々と形にする、地味ですがとてもやりがいのある業務です。個人でなく、組織で行っているからこそのスピード感と、柔軟性は日々磨きをかけているところです。
                        </p>
                    </div>
                </li>

                <li class="services service__media">
                    <div class="service__text">
                        <div class="service__top">
                            <h3 class="service__number">#02</h3>
                            <div class="service__title">
                                <p class="service__en">media management</p>
                                <h3 class="service__ja">メディア運営</h3>
                            </div>
                        </div>
                        <p class="service__body text--justify">
                        登録者数600人に迫る「じゃらんじゃらんちゃんねる」ではLGBTQ当事者へのインタビューをメインに行っており、「LGBTQ当事者はどこにでもいる、当たり前の存在なんだ」とみなさまに知っていただくきっかけ作りを行っています。RPAの技術やPremiere
                        Proを使っての編集がメインです。現状、動画制作の受託案件は承っておりません。</p>
                    </div>
                    <p class="service__space"> </p>
                </li>

                <li class="services service__lgbt">
                    <p class="service__space"> </p>
                    <div class="service__text">
                        <div class="service__top">
                            <h3 class="service__number">#03</h3>
                            <div class="service__title">
                                <p class="service__en">lgbt awareness activities</p>
                                <h3 class="service__ja">LGBT啓蒙活動</h3>
                            </div>
                        </div>
                        <p class="service__body text--justify">
                        Bifreeでは活動で得た収益の一部を、毎月LGBTQ関係の支援団体様へ寄付しております。他、ニーズがあれば当事者による講演会や勉強会・その出演も承っておりますのでお声掛けください。これから先、更に多くの人に「特別な存在でないこと」を発信していければと考えております。
                        </p>
                    </div>
                </li>
            </ul>
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
            <p class="contact__text">仕事依頼、ご質問・ご相談など、<br class="sp-block">お気軽にお問合せください。</p>

        
            <?php get_template_part('template/contact__btn');?>
        </div>
    </section>

    <a class="top-btn" href="#">
        <img class="top-btn__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top-btn.png">
    </a>
</main>

<?php get_footer(); ?>