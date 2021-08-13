<ul class="notice__list">
    <?php $args = array(
        'numberposts' => 10,    //表示する記事の数の指定
        'post_type' => 'notices'   //投稿タイプの指定
    );
    $posts = get_posts( $args );
    if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
        <li class="notice__list--item">
            <p class="notice__list--date">
                <?php the_time('Y-m-d'); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="notice__list--text">
                <?php the_title(); ?>
            </a>
        </li>
    <?php endforeach; ?>
    <?php else : ?>
        <li>記事はまだありません。</li>
    <?php endif;
    wp_reset_postdata(); //クエリのリセット
    ?>
</ul>