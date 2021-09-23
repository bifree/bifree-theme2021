<footer>
    <div class="footer_container">
        <div class="footer_container_nav">
            <?php 
                    wp_nav_menu( array( 
                    'theme_location' => 'footer-nav', 
                    'container' => 'nav'
                    ) ); ?>
        </div>
        <div class="footer_container_sns">
            <div class="footer_container_sns__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bifree_logo_a.svg" alt="bifree_logo">
            </div>
            <div class="footer_container_sns__txt">
                <p footer_container_sns__txt>SNSアカウントはこちら
                </p>
                <span class="arrow"></span>
            </div>
            <div class="footer_container_sns__follow">
                <p>＼Follow Bifree!!／</p>
                <div class="footer_container_sns__follow__icon">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter_social icons_roundedsquare_blue.png"
                            alt="twitter_icon">
                    </a>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube_social_squircle_red.png"
                            alt="youtube_icon">
                    </a>

                </div>
            </div>
        </div>
        <div class="footer_container_copy">
            <p>©︎ 2021 Bifree</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>