<div class="sidebar">
    <p class="sidebar__relation sidebar__title">
        関連記事
    </p>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <ul class="sidebar__article">
                <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_post_thumbnail(); ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            </ul>
        <?php endwhile; ?>
    <?php endif; ?>
    <p class="sidebar__category sidebar__title">
        カテゴリー
    </p>
    <ul class="sidebar__category--list">
        <?php
        $args = array(
            'title_li' => '',
        );
        wp_list_categories($args);
        ?>
    </ul>
</div>