<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style.css">
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
            <div class="header_container__nav">
                <?php 
                    wp_nav_menu( array( 
                    'theme_location' => 'header-nav', 
                    'container' => 'nav'
                    ) ); ?>
            </div>
        </div>
    </header>