<?php
/*
Template Name: お問い合わせテンプレート
*/
?>

<?php get_header(); ?>
<div class="section contactkv">
    <h2 class="sheading">お問い合わせ・資料請求</h2>
</div>

<?php get_template_part('template-parts/breadcrumb'); ?>

<div class="contant container">
    <p class="contact__message">弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください</p>
    <?php if (have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>



<?php get_footer(); ?>