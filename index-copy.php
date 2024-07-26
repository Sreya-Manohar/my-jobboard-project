<?php get_header(); ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
width="<?php echo get_custom_header()->width; ?>" alt="" />
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                        <h1><?php _e('Jobs','WP-DEVS ') ?></h1>
                        <div class="container">
                                <div class="blog-items">
                                <form method="get" action="<?php echo esc_url( home_url( '/jobs/' ) ); ?>">
    
    <label for="acf-jobrole-filter">Job Role:</label>
    <select name="acf-jobrole-filter" id="acf-jobrole-filter">
        <option value="">Select a Job Role</option>

        <?php
        global $wpdb;

        // Query distinct values of the 'jobrole' ACF field from wp_postmeta
        $results = $wpdb->get_results("
            SELECT DISTINCT meta_value
            FROM {$wpdb->postmeta}
            WHERE meta_key = 'jobrole'
        ");

        if ($results) {
            foreach ($results as $result) {
                echo '<option value="' . $result->meta_value . '">' . $result->meta_value . '</option>';
            }
        }
        ?>
    </select>

    <label for="acf-company-filter">Company:</label>
    <select name="acf-company-filter" id="acf-company-filter">
        <option value="">Select company name</option>

        <?php
        global $wpdb;

        // Query distinct values of the 'jobrole' ACF field from wp_postmeta
        $results = $wpdb->get_results("
            SELECT DISTINCT meta_value
            FROM {$wpdb->postmeta}
            WHERE meta_key = 'company'
        ");

        if ($results) {
            foreach ($results as $result) {
                echo '<option value="' . $result->meta_value . '">' . $result->meta_value . '</option>';
            }
        }
        ?>
    </select>
   
    
    
    <?php
    $categories = get_categories();
    if (!empty($categories)) :
    ?>
    <label>Prefecture:</label>
    <select name="category">
        <option value="">Select Category</option>
        <?php foreach ($categories as $category) : ?>
            <option value="<?php echo esc_attr($category->slug); ?>" <?php echo ( isset($_GET['category']) && $_GET['category'] === $category->slug ) ? 'selected' : ''; ?>>
                <?php echo esc_html($category->name); ?>
            </option>
        <?php endforeach; ?>
    </select>
    <?php endif; ?>
    
    <button type="submit" name="filter">Filter</button>
</form>


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

// Check if category filter is set
if ( isset( $_GET['category'] ) && ! empty( $_GET['category'] ) ) {
    $args['category_name'] = sanitize_text_field( $_GET['category'] );
}

// Perform WP_Query
$query = new WP_Query( $args );?>
                                <?php

                            if(have_posts()):
                                while(have_posts()):
                                        the_post();
                                        get_template_part('parts/content');
                                endwhile;
                                ?>
                                <div class="wpdevs-pagination">
                                        <div class="pages new">
                                        <?php previous_posts_link(__("<< Newer posts",'wp-devs')); ?>
                                        </div>
                                        <div class="pages old">
                                        <?php next_posts_link(__("Older posts >>",'wp-devs')); ?>
                                        </div>    
                                </div>
                        <?php
                            else:
                                ?>
                                <p><?php _e('No posts found!','wp-devs ') ?></p>
                                <?php endif;
                            ?>       
                                </div>
                                <?php get_sidebar(); ?>
<form method="get" action="<?php echo esc_url( home_url( '/jobs/' ) ); ?>">
                                <section class="list" >
<select name="acf-jobrole-filter" id="acf-jobrole-filter">
<option value="">Select a Job Role</option>

<?php
global $wpdb;

// Query distinct values of the 'jobrole' ACF field from wp_postmeta
$results = $wpdb->get_results("
    SELECT DISTINCT meta_value
    FROM {$wpdb->postmeta}
    WHERE meta_key = 'jobrole'
");

if ($results) {
    foreach ($results as $result) {
        echo '<option value="' . $result->meta_value . '">' . $result->meta_value . '</option>';
    }
}
?>
</select><?php
    $categories = get_categories();
    if (!empty($categories)) :
    ?>
    <select name="category">
        <option value="">Select Category</option>
        <?php foreach ($categories as $category) : ?>
            <option value="<?php echo esc_attr($category->slug); ?>" <?php echo ( isset($_GET['category']) && $_GET['category'] === $category->slug ) ? 'selected' : ''; ?>>
                <?php echo esc_html($category->name); ?>
            </option>
        <?php endforeach; ?>
    </select>
    <?php endif; ?>
    <button type="submit" name="filter" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; cursor: pointer; font-size: 16px;">Filter</button>
    <br><br>
                    

                    Upload your CV:<button type="submit" name="filter" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; cursor: pointer; font-size: 16px;">Build your CV</button><br><br>
                    </section></form>
                   
                        </div>  
                </main>
            </div>
        </div>





<?php get_footer(); ?>



<select name="category" style="width: 200px; background-color: #f2f2f2; color: #333; border: 1px solid #ccc; padding: 5px; font-size: 16px;">
        <option value="">Select Category</option>
        <?php foreach ($categories as $category) : ?>
            <option value="<?php echo esc_attr($category->slug); ?>" <?php echo ( isset($_GET['category']) && $_GET['category'] === $category->slug ) ? 'selected' : ''; ?>>
                <?php echo esc_html($category->name); ?>
            </option>
        <?php endforeach; ?>
    </select>

    if ( isset( $_GET['category'] ) && ! empty( $_GET['category'] ) ) {
    $args['category_name'] = sanitize_text_field( $_GET['category'] );
}

if ( isset( $_GET['prefecture'] ) && ! empty( $_GET['prefecture'] ) ) {
    $args['category_name'] = sanitize_text_field( $_GET['prefecture'] );
}

////filter
$args = array();

if ( isset( $_GET['category'] ) && ! empty( $_GET['category'] ) ) {
    $args['category_name'] = sanitize_text_field( $_GET['category'] );
}

if ( isset( $_GET['prefecture'] ) && ! empty( $_GET['prefecture'] ) ) {
    $args['meta_query'][] = array(
        'key'     => 'prefecture',
        'value'   => sanitize_text_field( $_GET['prefecture'] ),
        'compare' => '=',
    );
}




backup

// Check if category filter is set

if ( isset( $_GET['category'] ) && ! empty( $_GET['category'] ) ) {
    $args['category_name'] = sanitize_text_field( $_GET['category'] );
}


if ( isset( $_GET['prefecture'] ) && ! empty( $_GET['prefecture'] ) ) {
    $args['meta_query'][] = array(
        'key'     => 'prefecture',
        'value'   => sanitize_text_field( $_GET['prefecture'] ),
        'compare' => '=',
    );
}


// Perform WP_Query
$query = new WP_Query( $args );

if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        // Display post content or perform other actions
        
        ?>
        <div class="archive-item">
            <div class="post-title">
                <a href="<?php the_permalink(); ?>" style="color: blue;">
                    <?php the_title(); ?>
                </a>
            </div><br>

            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
            </div><br>

            
            <div class="post-content">
    <?php
    if ( has_excerpt() ) {
        the_excerpt();
    } else {
        echo wp_trim_words( get_the_content(), 50 ); // Change 50 to the number of words you want to display
    }
    ?>
</div>
        </div>
    <?php
        
    }
    wp_reset_postdata();
} else {
    // No posts found.
    echo 'No posts found.';
}
?>





<?php
    $categories = get_categories();
    if (!empty($categories)) :
    ?>
    <label>Prefecture:</label>
    
    <select name="prefecture" style="width: 200px; background-color: #f2f2f2; color: #333; border: 1px solid #ccc; padding: 5px; font-size: 16px;">
    <option value="">Select Prefecture</option>
    <?php 
    
    foreach ($categories as $category) : 
        
        if ($category->slug === $prefecture || ($category->parent === 4 && $category->parent !== 0)) :
    ?>
        <option value="<?php echo esc_attr($category->slug); ?>" <?php echo ( isset($_GET['prefecture']) && $_GET['prefecture'] === $category->slug ) ? 'selected' : ''; ?>>
            <?php echo esc_html($category->name); ?>
        </option>
    <?php 
        endif;
    endforeach; 
    ?>
</select>

<?php endif; ?>
    
<label>Job Category:</label>
<select name="category" style="width: 200px; background-color: #f2f2f2; color: #333; border: 1px solid #ccc; padding: 5px; font-size: 16px;">
    <option value="">Select Job Category</option>
    <?php 

    foreach ($categories as $category) : 
       
        if ($category->slug === $jobcategory || ($category->parent === 22&& $category->parent !== 0)) :
    ?>
        <option value="<?php echo esc_attr($category->slug); ?>" <?php echo ( isset($_GET['category']) && $_GET['category'] === $category->slug ) ? 'selected' : ''; ?>>
            <?php echo esc_html($category->name); ?>
        </option>
    <?php 
        endif;
    endforeach; 
    ?>
</select>

//7/11
<?php
    $categories = get_categories();
    if (!empty($categories)) :
    ?>
    <label>Prefecture:</label>
    
    <select name="prefecture" id="prefecture" style="width: 200px; background-color: #f2f2f2; color: #333; border: 1px solid #ccc; padding: 5px; font-size: 16px;">
    <option value="">Select Prefecture</option>
    <?php 
    
    foreach ($categories as $category) : 
        
        if ($category->slug === $prefecture || ($category->parent === 4 && $category->parent !== 0)) :
    ?>
        <option value="<?php echo esc_attr($category->slug); ?>" <?php echo ( isset($_GET['prefecture']) && $_GET['prefecture'] === $category->slug ) ? 'selected' : ''; ?>>
            <?php echo esc_html($category->name); ?>
        </option>
    <?php 
        endif;
    endforeach; 
    ?>
</select>

<?php endif; ?>
    
<label>Job Category:</label>
<select name="category" id="category" style="width: 200px; background-color: #f2f2f2; color: #333; border: 1px solid #ccc; padding: 5px; font-size: 16px;">
    <option value="">Select Job Category</option>
    <?php 

    foreach ($categories as $category) : 
       
        if ($category->slug === $jobcategory || ($category->parent === 22&& $category->parent !== 0)) :
    ?>
        <option value="<?php echo esc_attr($category->slug); ?>" <?php echo ( isset($_GET['category']) && $_GET['category'] === $category->slug ) ? 'selected' : ''; ?>>
            <?php echo esc_html($category->name); ?>
        </option>
    <?php 
        endif;
    endforeach; 
    ?>
</select> 
   





//prefecture


<?php
    $categories = get_categories();
    if (!empty($categories)) :
    ?>
<label>Prefecture:</label>
<select name="category" id="category"style="width: 200px; background-color: #f2f2f2; color: #333; border: 1px solid #ccc; padding: 5px; font-size: 16px;">
    <option value="">Select Prefecture</option>
    <?php 

    foreach ($categories as $category1) : 
       
        if ($category1->slug === $prefecture || ($category1->parent === 4&& $category1->parent !== 0)) :
    ?>
        <option value="<?php echo esc_attr($category1->slug); ?>" <?php echo ( isset($_GET['category1']) && $_GET['category1'] === $category1->slug ) ? 'selected' : ''; ?>>
            <?php echo esc_html($category1->name); ?>
        </option>
    <?php 
        endif;
    endforeach; 
    ?>
</select> 
<?php endif; ?> 




<label>Job Category:</label>
<select name="category" id="category"style="width: 200px; background-color: #f2f2f2; color: #333; border: 1px solid #ccc; padding: 5px; font-size: 16px;">
    <option value="">Select Job Category</option>
    <?php 

    foreach ($categories as $category) : 
       
        if ($category->slug === $jobcategory || ($category->parent === 22&& $category->parent !== 0)) :
    ?>
        <option value="<?php echo esc_attr($category->slug); ?>" <?php echo ( isset($_GET['category']) && $_GET['category'] === $category->slug ) ? 'selected' : ''; ?>>
            <?php echo esc_html($category->name); ?>
        </option>
    <?php 
        endif;
    endforeach; 
    ?>
</select> 

if (isset($_GET['category']) && !empty($_GET['category'])) {
    $args['category_name'] = sanitize_text_field($_GET['category']);
}
if (isset($_GET['prefecture']) && !empty($_GET['prefecture'])) {
    $args['prefecture_name'] = sanitize_text_field($_GET['prefecture']);
}
