<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6296470801426384"
    crossorigin="anonymous"></script>
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
            <div id="hamburger">
                <a class="header_container__navbtn_menu" href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav_menu.svg" alt="navbtn_menu">
                    <p>
                        MENU
                    </p>
                </a>
            </div>
            <!-- ヘッダーナビゲーション -->
            <div class="header_container__nav">
                <?php 
                    wp_nav_menu( array( 
                    'theme_location' => 'header-nav', 
                    'container' => 'nav'
                    ) ); ?>
            </div>
        </div>
    </header>