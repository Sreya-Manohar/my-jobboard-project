<?php get_header(); ?>
<?php  
while(have_posts()):
    the_post();
    get_template_part('parts/content','single');
    $fields = get_fields();

if( $fields ): ?>
    <ul>
        <?php foreach( $fields as $name => $value ): ?>
            <li><b><?php echo $name; ?></b> <?php echo $value; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form action="https://jobboard.local/application-form/" >
    <div class="applybutton">
    <button>Apply</button></div>
</form>


    <div class="wpdevs-pagination">
        <div class="pages next">
        <?php next_post_link(); ?>
        </div>
        <div class="pages previous">
        <?php previous_post_link(); ?>
        </div>    
    </div>
<?php

if (comments_open() || get_comments_number())
{
    comments_template();
}

endwhile;
?>
<?php  get_footer(); 


