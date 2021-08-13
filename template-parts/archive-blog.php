<ul class="notion__list">
    <?php $args = array(
        'numberposts' => 10,    //表示する記事の数の指定
        'post_type' => ''   //投稿タイプの指定
    );
    $posts = get_posts( $args );
    if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
         <li>
            <div class="notion__list--left">
                <?php if ( has_post_thumbnail() ): ?>
                    <?php the_post_thumbnail(); ?>
                <?php else: ?>
                    <img style="width:150px height:120px" src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.jpg">
                <?php endif; ?>
                <span>
                    <?php get_the_category(); ?>
                </span>
            </div>
            <div class="notion__list--right">
                <p class="notion__list--date">
                    <?php the_time('Y-m-d')?>
                </p>
                <a href="<?php the_permalink(); ?>" class="notion__list--title">
                    <?php the_title(); ?>
                </a>
                <p class="notion__list--description">
                    <?php the_excerpt(); ?>
                </p>
            </div>
        </li>
    <?php endforeach; ?>
    <?php else : ?>
        <li>記事はまだありません。</li>
    <?php endif;
    wp_reset_postdata(); //クエリのリセット
    ?>
</ul>
