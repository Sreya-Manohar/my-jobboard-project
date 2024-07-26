<article class = "latest-news">
    <?php if(has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?>
    <?php endif; ?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="meta-info">
    <?php if(has_category()): ?>
<p><?php _e('Catagories','wp-devs') ?>: <?php the_category(' '); ?>
<?php endif; ?>
<?php if(has_tag()): ?>
<?php _e('Tags','wp-devs') ?>: <?php the_tags('',', '); ?></p>
<?php endif; ?>
</div>
<?php the_content(); ?>
</article>