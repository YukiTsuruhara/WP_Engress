<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

    <section class="blogDetail">
        <div class="container">
            <div class="main">
                <?php if (have_posts() ) : ?>
                    <?php while (have_posts() ) : the_post(); ?>
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <p class="main__category">
                                <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
                            </p>
                            <h2 class="main__title">
                                <?php the_title(); ?>
                            </h2>
                            <div class="main__head">
                                <div class="main__sns">
                                    <img src="./assets/images/like.png" alt="">
                                    <img src="./assets/images/share.png" alt="">
                                    <img src="./assets/images/twitter.png" alt="">
                                </div>
                                <p class="main__date">
                                    <?php the_time('Y-m-d'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="main__image">
                            <img src="./assets/images/feature02.jpg" alt="">
                        </div>
                        <div>
                            <?php the_content(); ?>
                        </div>
                        <?php endwhile; ?>
                <?php endif; ?>
                <h3 class="main__retitle">おすすめ記事</h3>
                <?php if ( have_posts() ) :?>
                         <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part('template-parts/archive', 'recommend'); ?>
                         <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
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