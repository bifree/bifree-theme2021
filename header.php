<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6296470801426384"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bifree</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/responsive.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header_container">
            <div class="header_container__logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bifree_logo_b.svg"
                        alt="bifree_logo">
                </a>
            </div>
            <!-- レスポンシブ用メニューボタン -->
            <div class="navbtn">
                <i></i>
                <i></i>
                <i></i>
                <p class="navbtn_txt_menu">MENU</p>
                <p class="navbtn_txt_close">CLOSE</p>
            </div>
            <!-- ヘッダーナビゲーション -->
            <div class="header_container__nav">
                <?php 
                    wp_nav_menu( array( 
                    'theme_location' => 'header-nav', 
                    'container' => 'nav'
                    ) ); ?>
                <!-- ハンバーガーメニュー内アイコン -->
                <div class="header_container_sns__follow__icon">
                    <a href="https://twitter.com/_bifree_">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter_social icons_roundedsquare_blue.png"
                            alt="twitter_icon">
                    </a>
                    <a href="https://youtube.com/channel/UCOSRAzwBWp-PacFcNTI0oKw">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube_social_squircle_red.png"
                            alt="youtube_icon">
                    </a>

                </div>
            </div>

        </div>
    </header>