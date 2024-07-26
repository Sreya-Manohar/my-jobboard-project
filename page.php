<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <?php 
                    $hero_title = get_theme_mod( 'set_hero_title', __( 'JobBoard JAWHM', 'wp-devs' ) );
                    $hero_subtitle = get_theme_mod( 'set_hero_subtitle', __( 'JAWHM hopes that all working holiday makers can find a great job.', 'wp-devs' ) );
                    $hero_button_link = get_theme_mod( 'set_hero_button_link', '#' );
                    $hero_height = get_theme_mod( 'set_hero_height', 800 );
                    $hero_background = wp_get_attachment_url( get_theme_mod( 'set_hero_background' ) );?>
                   <section class="hero" style="background-image: url('<?php echo $hero_background ?>');">
                        <div class="overlay" style="min-height: <?php echo $hero_height ?>px">
                            <div class="container">
                                <div class="hero-items">
                                    <h1><?php echo $hero_title; ?></h1>
                                    <p><?php echo nl2br( $hero_subtitle ); ?></p>
                                </div>
                            </div>
                        </div>
<div class="searchform">
    <table> <tr>                   
    <form method="get" action="<?php echo esc_url( home_url( '/jobs/' ) ); ?>">
    <select name="acf-jobcategory-filter" id="acf-jobcategory-filter" style="width: 200px; background-color: #f2f2f2; color: #333; border: 1px solid #ccc; padding: 5px; font-size: 16px;">
        <option value="">Select jobcategory</option>
        <?php
        global $wpdb;

        // Query distinct values of the 'jobrole' ACF field from wp_postmeta
        $results = $wpdb->get_results("
            SELECT DISTINCT meta_value
            FROM {$wpdb->postmeta}
            WHERE meta_key = 'jobcategory'
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
    <select  name="category" id="category"style="width: 200px; background-color: #f2f2f2; color: #333; border: 1px solid #ccc; padding: 5px; font-size: 16px;">
    <option value="">Select Prefecture</option>
    <?php 

    foreach ($categories as $category) : 
        if ($category->slug === $prefecture || ($category->parent === 4&& $category->parent !== 0)) :
    ?>
        <option value="<?php echo esc_attr($category->slug); ?>" <?php echo ( isset($_GET['category']) && $_GET['category'] === $category->slug ) ? 'selected' : ''; ?>>
            <?php echo esc_html($category->name); ?>
        </option>
    <?php 
        endif;
    endforeach; 
    ?>
</select> 
<?php endif; ?>  
    <button type="submit" name="filter" style="min-width: 330px;
    height: 3.8em; background: #001E32;">Search Jobs</button>
    </tr></table>
</form></div><br><br><br><br>
<?php
// Initialize empty args array
$args = array(
    'post_type' => 'post',  // Adjust post type if needed
    'posts_per_page' => -1, // Display all posts that match the criteria
    'meta_query' => array(),
);
// Check if filters are set and modify $args accordingly

if ( isset( $_GET['acf-jobcategory-filter'] ) && ! empty( $_GET['acf-jobcategory-filter'] ) ) {
    $args['meta_query'][] = array(
        'key' => 'jobcategory', // Replace with your ACF field name for company
        'value' => sanitize_text_field( $_GET['acf-jobcategory-filter'] ),
        'compare' => '=',
    );
}
if (isset($_GET['category']) && !empty($_GET['category'])) {
    $args['category_name'] = sanitize_text_field($_GET['category']);
}
?>

                        <form action="https://jobboard.local/resume-2/" method="post">
                        <label style=" font-size: 25px; font-weight: bold;">Easy Upload Your CV:</label>
                  <button type="submit" id="loginButton" class="button-13" >Build Your Resume</button>
                  </form>
                    </section>
                    
                   
                    
                    <section class="list" style="background-color: #213C4D; color: white; font-size: 26px;">
    <div style="display: flex; flex-wrap: wrap;">
        <div style="flex: 1; padding: 10px;">
            <a href="https://jobboard.local/jobs/">
                <i class="fas fa-search"></i> Find Listings Vacancies
                
            </a>
        </div>
        <div style="flex: 1; padding: 10px;">
            <a href="https://jobboard.local/how-to-post-a-job/">
                <i class="fas fa-users"></i> Find the best candidate
                
            </a>
        </div>
        <div style="flex: 1; width: 100%; padding: 10px;">
            <a href="https://jobboard.local/inter/">
                <i class="far fa-heart"></i> Find an Internship Job
                
            </a>
        </div>
    </div>
</section>

        
<section class="services">
                        <!--<h3 class="heading-12"><?php _e( 'New JobBoard in July 2024', 'wp-devs' ) ?></h3>
                        <p>The JobBoard of JAWHM was reborn on July 3, 2023. We will continue to provide better services for working holiday and study abroad people who are active all over the world.</p>
                        --><div class="container">
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-4' )){
                                        dynamic_sidebar( 'services-4' );
                                    }
                                ?>
                            </div>
                            <!--<div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-5' )){
                                        dynamic_sidebar( 'services-5' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-6' )){
                                        dynamic_sidebar( 'services-6' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-7' )){
                                        dynamic_sidebar( 'services-7' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-8' )){
                                        dynamic_sidebar( 'services-8' );
                                    }
                                ?>
                            </div>-->
                            
                        </div>
                    </section>
                    <section class="services">
                        <!--<h3 class="heading-12"><?php _e( 'How it Works?', 'wp-devs' ) ?></h3>
                        <p>I will briefly explain what you can do with this JobBoard.</p>
                                --><div class="container">
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-1' )){
                                        dynamic_sidebar( 'services-1' );
                                    }
                                ?>
                            </div>
                            <!--<div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-2' )){
                                        dynamic_sidebar( 'services-2' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-3' )){
                                        dynamic_sidebar( 'services-3' );
                                    }
                                ?>
                            </div>-->
                            
                        </div>
                    </section>
                    <section class="services">
                       <!-- <h3 class="heading-12"><?php _e( 'Listings Categories', 'wp-devs' ) ?></h3>
                        <p>Start your search by using any of the following job categories.</p>
                                --><div class="container">
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-11' )){
                                        dynamic_sidebar( 'services-11' );
                                    }
                                ?>
                            </div>
                            <!--<div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-12' )){
                                        dynamic_sidebar( 'services-12' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-13' )){
                                        dynamic_sidebar( 'services-13' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-14' )){
                                        dynamic_sidebar( 'services-14' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-15' )){
                                        dynamic_sidebar( 'services-15' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-16' )){
                                        dynamic_sidebar( 'services-16' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-17' )){
                                        dynamic_sidebar( 'services-17' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-18' )){
                                        dynamic_sidebar( 'services-18' );
                                    }
                                ?>
                            </div>-->
                            
                        </div>
                    </section>
                    <section class="services">
                        <h6 class="heading-12">Internship</h5>
                        <p style="text-align: center";>Internship Available.</p>
                        <div class="container">
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-19' )){
                                        dynamic_sidebar( 'services-19' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-20' )){
                                        dynamic_sidebar( 'services-20' );
                                    }
                                ?>
                            </div>
                             </div>
                    </section>

                    <section class="services">
    <h3 class="heading-12"><?php _e( 'Featured Jobs', 'wp-devs' ) ?></h3>
    <?php
    $custom_query_args = array(
        'post_type'  => 'post',
        'meta_key'   => '_is_ns_featured_post',
        'meta_value' => 'yes',
    );

    // Get current page and append to custom query parameters array
    $custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

    $custom_query = new WP_Query( $custom_query_args );

    if ( $custom_query->have_posts() ) :
    ?>

        <!-- start of the loop -->
        <div class="posts-container">
            <div class="row">

                <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                    
                    <div class="col-md-6">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <h2 style="text-align: left;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="entry-content">
                                <?php the_content(); ?>
                                
                            </div>
                        </article>
                    </div>

                <?php endwhile; ?>

            </div><!-- .row -->
        </div><!-- .posts-container -->
        
        <!-- pagination here -->
        <?php
        // Custom query loop pagination
        previous_posts_link( 'Older Posts' );
        next_posts_link( 'Newer Posts', $custom_query->max_num_pages );
        ?>

    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

    <?php
    // Reset postdata
    wp_reset_postdata();
    ?>

</section>


                    <section class="services">
                        <!--<h3 class="heading-12"><?php _e( 'Our Status', 'wp-devs' ) ?></h3>
                        <p>JobBoard has been used by many people until now. thank you very much.
                        JobBoardは、今まで多くの方々にご利用頂いています。本当にありがとうございます。.</p>
--><div class="container">
                    <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-21' )){
                                        dynamic_sidebar( 'services-21' );
                                    }
                                ?>
                            </div>
                            <!--<div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-22' )){
                                        dynamic_sidebar( 'services-22' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-23' )){
                                        dynamic_sidebar( 'services-23' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-24' )){
                                        dynamic_sidebar( 'services-24' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-25' )){
                                        dynamic_sidebar( 'services-25' );
                                    }
                                ?>
                            </div>-->
                            </div>
                            </section>

                            
                                <section class="services" style="text-align: center; ">
                        <h3 class="heading-12"><?php _e( 'Recently Registered', 'wp-devs' ) ?></h3>
                        <p>A list of recently registered jobs is displayed</p> 
                        <a href="http://jobboard.local/job-list/"  class="custom-link"  ">View job List</a>   <i class="bi-search"></i>
                         </section>
                 

                            <section class="services">
                        <h3 class="heading-12"><?php _e( 'Employers', 'wp-devs' ) ?></h3>
                        <p>Jobfinder helps millions of job seekers and employers find the right fit every day.</p>
                        <div class="container">
                    <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-28' )){
                                        dynamic_sidebar( 'services-28' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-29' )){
                                        dynamic_sidebar( 'services-29' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-30' )){
                                        dynamic_sidebar( 'services-30' );
                                    }
                                ?>
                            </div>
                            </div>
                            </section>
                            

                    
                </main>
            </div>
        </div>
<?php get_footer(); ?>
