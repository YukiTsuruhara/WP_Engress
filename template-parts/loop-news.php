<ul class="blog__list">
    <li id="post-<?php the_ID(); ?>" <?php post_class('blog__list--item')?>>
        <div class="blog__list--image">
            <?php if ( has_post_thumbnail() ): ?>
                <?php the_post_thumbnail(); ?>
            <?php else: ?>
                <img style="width:150px height:120px" src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.jpg">
            <?php endif; ?>
            <p class="blog__list--category">
                <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
            </p>
        </div>
        <div>
            <a href="<?php the_permalink(); ?>" class="blog__list--text"><?php the_excerpt(); ?></a>
            <p class="blog__list--date"><?php the_time('Y-m-d'); ?></p>
        </div>
    </li>
</ul>