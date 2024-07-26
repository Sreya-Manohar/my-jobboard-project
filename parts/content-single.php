<article>
    <h2><?php the_title(); ?></h2>
    
    <div class="meta-info">
    <p><?php _e('Catagories','wp-devs') ?>: <?php the_category(' '); ?></p>
    <p><?php _e('Tags','wp-devs') ?>: <?php the_tags('',', '); ?></p>
    </div>
    <?php the_content(); ?>
    <?php wp_link_pages(); ?>
    </article>