<?php
/*
Template Name: お知らせテンプレート
*/
?>

<?php get_header(); ?>

    <div class="section infokv">
            <h2 class="sheading">お知らせ</h2>
    </div>

    <?php get_template_part('template-parts/breadcrumb'); ?>

    <section class="notice">
        <div class="container">
            <h2 class="notice__title sheading">
                お知らせ一覧
            </h2>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part('template-parts/archive', 'notices'); ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <ul class="indicator">
                <?php if ( function_exists('wp_pagenavi') ) { wp_pagenavi(); } ?>
            </ul>
        </div>
    </section>

    <section class="bill">
        <div class="container">
            <h2 class="bill__heading heading">まずは無料で資料請求から</h2>
            <a href="<?php echo home_url(); ?>/contact/" class="bill__document">資料請求</a>
            <a href="<?php echo home_url(); ?>/contact/" class="bill__contact">お問い合わせ</a>
        </div>
    </section>
    
    <div class="form">
        お電話でのお問い合わせはこちら
        <span class="form__number">0123-456-7890</span>
        <span class="form__date">平日  08:00~20:00</span>
    </div>

<?php get_footer(); ?>