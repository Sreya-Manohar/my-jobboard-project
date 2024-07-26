<article>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_post_thumbnail('medium'); ?>
    <div class="meta-info">
    <p>Catagories: <?php the_category(' '); ?></p>
    <p>Tags: <?php the_tags('',', '); ?></p>
    </div>
    <?php the_excerpt(); ?>
</article>