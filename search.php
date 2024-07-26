<?php get_header(); ?>
<?php  
while(have_posts()):
    the_post();
    get_template_part('parts/content','search');

endwhile;
the_posts_pagination();
?>
<?php  get_footer(); ?>