<ul class="main__recommend">
    <?php $args = array(
        'numberposts' => 3,    //表示する記事の数の指定
        'post_type' => ''   //投稿タイプの指定
    );
    $posts = get_posts( $args );
    if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
        <li id="post-<?php the_ID(); ?>" <?php post_class('main__item')?>>
            <div class="main__item--left">
                <?php if ( has_post_thumbnail() ): ?>
                    <?php the_post_thumbnail(); ?>
                <?php else: ?>
                    <img style="width:210px height:130px object-fit:cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.jpg">
                <?php endif; ?>
                <p>
                    <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
                </p>
            </div>
            <div class="main__item--right">
                <p><?php the_time('Y-m-d'); ?></p>
                <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
            </div>
        </li>
    <?php endforeach; ?>
    <?php else : ?>
        <li>記事はまだありません。</li>
    <?php endif;
    wp_reset_postdata(); //クエリのリセット
    ?>
</ul>