<?php
/*
Template Name: shop
Template Post Type: page
*/

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        // The Query
        $args = array(
            'post_type' => 'post',
            'category_name' => 'shop',
            'posts_per_page' => -1, // -1 to display all posts
        );
        $query = new WP_Query($args);

        // The Loop
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2 class="entry-title"><?php the_title(); ?></h2>
                    </header><!-- .entry-header -->
                    <div class="meta-info">
    <p><?php _e('Catagories','wp-devs') ?>: <?php the_category(' '); ?></p>
    </div>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-<?php the_ID(); ?> -->
                <?php
            }
        } else {
            // no posts found
            echo '<p>No posts found.</p>';
        }

        /* Restore original Post Data */
        wp_reset_postdata();
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php 
get_footer();
