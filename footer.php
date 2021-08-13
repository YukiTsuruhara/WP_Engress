<footer class="footer">
        <div class="container">
            <div class="footer__contents">
                <?php
                $args = array(
                    'menu' => 'global-navigation',
                    'menu_class' => 'footer__nav',
                    'container' => false,
                );
                wp_nav_menu($args);
                ?>
                <div class="footer__info">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" class="footer__info--logo">
                    <p class="footer__info--contact">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.svg" alt="">
                        0123-456-7890
                    </p>
                    <p class="footer__info--date">平日08:00~20:00</p>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer__copylight">
        <div class="container">
            © 2020 Engress. 
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./main.js"></script>
    <?php wp_footer(); ?>
</body>
</html>