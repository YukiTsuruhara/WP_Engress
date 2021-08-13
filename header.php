<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <title><?php bloginfo('name'); ?></title>
    <?php
     wp_enqueue_script('jquery');
     wp_head();
    ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- ヘッダー -->
    <header class="header">
        <a href="<?php echo home_url(); ?>" class="header__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-logo.png" alt="ヘッダーロゴ"></a>
        <div class="header__contents">
            <div class="header__left">
                <?php
                $args = array(
                    'menu' => 'global-navigation',
                    'menu_class' => 'header__left--contents',
                    'container' => false,
                );
                wp_nav_menu($args);
                ?>
            </div>
            <div class="header__right">
                <div class="header__info">
                    <p class="header__info--date">平日 08:00~20:00</p>
                    <p class="header__info--number">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.svg" alt="電話アイコン">
                        0123-456-7890
                    </p>
                </div>
                <a href="<?php echo home_url(); ?>/contact/" class="header__document">資料請求</a>
                <a href="<?php echo home_url(); ?>/contact/" class="header__contact">お問い合わせ</a>
            </div>
        </div>
        <div class="header__barger js-barger">
            <div class="header__barger--container">
                <span class="header__barger--line"></span>
                <span class="header__barger--line"></span>
                <span class="header__barger--line"></span>
            </div>
        </div>
    </header>