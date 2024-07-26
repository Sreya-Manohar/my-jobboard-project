<?php
get_header(); ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
width="<?php echo get_custom_header()->width; ?>" alt="" />
<form action="/job-post/">
<button class="button64">Click here to Post Job</button></form>
<?php
// Initialize empty args array
$args = array(
    'post_type' => 'post',  // Adjust post type if needed
    'posts_per_page' => -1, // Display all posts that match the criteria
    'meta_query' => array(),
);

// Check if filters are set and modify $args accordingly
if ( isset( $_GET['acf-jobrole-filter'] ) && ! empty( $_GET['acf-jobrole-filter'] ) ) {
    $args['meta_query'][] = array(
        'key' => 'jobrole', // Replace with your ACF field name for job role
        'value' => sanitize_text_field( $_GET['acf-jobrole-filter'] ),
        'compare' => '=',
    );
}

if ( isset( $_GET['acf-company-filter'] ) && ! empty( $_GET['acf-company-filter'] ) ) {
    $args['meta_query'][] = array(
        'key' => 'company', // Replace with your ACF field name for company
        'value' => sanitize_text_field( $_GET['acf-company-filter'] ),
        'compare' => '=',
    );
}
if ( isset( $_GET['acf-jobcategory-filter'] ) && ! empty( $_GET['acf-jobcategory-filter'] ) ) {
    $args['meta_query'][] = array(
        'key' => 'jobcategory', // Replace with your ACF field name for company
        'value' => sanitize_text_field( $_GET['acf-jobcategory-filter'] ),
        'compare' => '=',
    );
}

if ( isset( $_GET['acf-salary-filter'] ) && ! empty( $_GET['acf-salary-filter'] ) ) {
    // Sanitize the input
    $selected_salary = intval( $_GET['acf-salary-filter'] );

    // Adjust the meta_query to filter posts where salary is less than or equal to the selected salary
    $args['meta_query'][] = array(
        'key'     => 'salary', // Replace with your ACF field name for salary
        'value'   => $selected_salary,
        'type'    => 'NUMERIC',
        'compare' => '<=', // Filter posts where salary is less than or equal to the selected salary
    );
}
if ( isset( $_GET['keyword'] ) && ! empty( $_GET['keyword'] ) ) {
    $keyword = sanitize_text_field( $_GET['keyword'] );
    $args['s'] = $keyword; // Add keyword search parameter to query
}


if (isset($_GET['category']) && !empty($_GET['category'])) {
    $args['category_name'] = sanitize_text_field($_GET['category']);
}

$query = new WP_Query( $args );

if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        // Display post content or perform other actions
        
        ?>
    <div class="archive-item">
    </div>
    <?php get_sidebar(); ?>
</div> 
            <div class="post-title">
                <a href="<?php the_permalink(); ?>" style="color: black;">
                    <?php the_title(); ?>
                    
                </a>
            </div><br><br>
        
            <div class="post-thumbnail">
            <?php the_post_thumbnail(); ?>
            <div class="meta-info">
    <p>Catagories: <?php the_category(' '); ?></p>
    
    </div>
            </div><br><br>

            
            <div class="post-content">
                
            <?php
            if ( has_excerpt() ) {
                the_excerpt();
            } else {
                echo wp_trim_words( get_the_content(), 50 ); 
            }
            ?>
            </div><br><br><br><br><br><br><br><br><br>
    </div>
    <?php
        
    }
    wp_reset_postdata();
} else {
    // No posts found.
    echo 'No posts found.';
}?>
 
<?php get_footer(); 

