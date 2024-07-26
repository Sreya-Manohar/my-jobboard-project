<article>
   <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_post_thumbnail('medium'); ?>
    <!--<div class="meta-info">
    <p><?php _e('Catagories','wp-devs') ?>: <?php the_category(' '); ?></p>
    <p><?php _e('Tags','wp-devs') ?>: <?php the_tags('',', '); ?></p>
    </div>-->
    <?php the_excerpt(); ?>
</article>