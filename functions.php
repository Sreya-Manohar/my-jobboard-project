<?php

require get_template_directory() . '/inc/customizer.php';

function wpdevs_load_scripts(){
    wp_enqueue_style( 'wpdevs-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null );
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdevs_load_scripts' );

function wpdevs_config(){

    $textdomain = 'wp-devs';
    load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

    register_nav_menus(
        array(
            'wp_devs_main_menu' => __( 'Main Menu', 'wp-devs' ),
            'wp_devs_footer_menu' => __( 'Footer Menu', 'wp-devs' )
        )
    );

    $args = array(
        'height'    => 225,
        'width'     => 1920
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'width' => 200,
        'height'    => 110,
        'flex-height'   => true,
        'flex-width'    => true
    ) );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'wpdevs_config', 0 );

add_action( 'widgets_init', 'wpdevs_sidebars' );
function wpdevs_sidebars(){
    register_sidebar(
        array(
            'name'  => __( 'Blog Sidebar', 'wp-devs' ),
            'id'    => 'sidebar-blog',
            'description'   => __( 'This is the Blog Sidebar. You can add your widgets here.', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 4', 'wp-devs' ),
            'id'    => 'services-4',
            'description'   => __( 'First Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 5', 'wp-devs' ),
            'id'    => 'services-5',
            'description'   => __( 'First Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 6', 'wp-devs' ),
            'id'    => 'services-6',
            'description'   => __( 'First Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 7', 'wp-devs' ),
            'id'    => 'services-7',
            'description'   => __( 'First Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 8', 'wp-devs' ),
            'id'    => 'services-8',
            'description'   => __( 'First Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 1', 'wp-devs' ),
            'id'    => 'services-1',
            'description'   => __( 'First Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 2', 'wp-devs' ),
            'id'    => 'services-2',
            'description'   => __( 'Second Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 3', 'wp-devs' ),
            'id'    => 'services-3',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 11', 'wp-devs' ),
            'id'    => 'services-11',
            'description'   => __( 'First Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 12', 'wp-devs' ),
            'id'    => 'services-12',
            'description'   => __( 'Second Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 13', 'wp-devs' ),
            'id'    => 'services-13',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 14', 'wp-devs' ),
            'id'    => 'services-14',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 15', 'wp-devs' ),
            'id'    => 'services-15',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 16', 'wp-devs' ),
            'id'    => 'services-16',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 17', 'wp-devs' ),
            'id'    => 'services-17',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 18', 'wp-devs' ),
            'id'    => 'services-18',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 19', 'wp-devs' ),
            'id'    => 'services-19',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 20', 'wp-devs' ),
            'id'    => 'services-20',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 21', 'wp-devs' ),
            'id'    => 'services-21',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 22', 'wp-devs' ),
            'id'    => 'services-22',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 23', 'wp-devs' ),
            'id'    => 'services-23',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 24', 'wp-devs' ),
            'id'    => 'services-24',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 25', 'wp-devs' ),
            'id'    => 'services-25',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 26', 'wp-devs' ),
            'id'    => 'services-26',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 27', 'wp-devs' ),
            'id'    => 'services-27',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 28', 'wp-devs' ),
            'id'    => 'services-28',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 29', 'wp-devs' ),
            'id'    => 'services-29',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 30', 'wp-devs' ),
            'id'    => 'services-30',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 31', 'wp-devs' ),
            'id'    => 'services-31',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 32', 'wp-devs' ),
            'id'    => 'services-32',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name'  => __( 'Service 33', 'wp-devs' ),
            'id'    => 'services-33',
            'description'   => __( 'Third Service Area', 'wp-devs' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        )
    );
    
}

if ( ! function_exists( 'wp_body_open' ) ){
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}



function page_content_shortcode($atts) {
    // Extract shortcode attributes
    $atts = shortcode_atts(array(
        'id' => 0, // Default to ID 0 if no ID provided
    ), $atts, 'page_content');

    // Get the specified page
    $page = get_post($atts['id']);
    
    // Initialize output variable
    $output = '';

    // Check if the page exists and is published
    if ($page && $page->post_status == 'publish') {
        // Append the title
        $output .= '<h2>' . esc_html($page->post_title) . '</h2>';
        // Append the content
        $output .= apply_filters('the_content', $page->post_content);
    } else {
        // Page not found or not published
        $output = 'Page not found.';
    }

    return $output;
}
add_shortcode('page_content', 'page_content_shortcode');


// Redirect non-logged-in users away from the contact form page
function restrict_contact_form_access() {
    if ( ! is_user_logged_in() && is_page( 'application-form' ) ) { 
        echo '<div class="message">Please login to access the application form.</div>';
        ?> <a href="https://jobboard.local/login/">Login</a><?php
        exit;
    }
    if ( ! is_user_logged_in() && is_page( 'resume-2' ) ) { 
        echo '<div class="message">Please login to build resume</div>';
        ?> <a href="https://jobboard.local/login/">Login</a><?php
        exit;
    }
}
add_action( 'template_redirect', 'restrict_contact_form_access' );

function restrict_contact_form_access1() {
    if ( ! is_user_logged_in() && is_page( 'job-post' ) ) { 
        echo '<div class="message">Please login to post job</div>';
        ?> <a href="https://jobboard.local/login/">Login</a><?php
        exit;
    }
}
add_action( 'template_redirect', 'restrict_contact_form_access' );

add_action( 'acf/init', 'set_acf_settings' );
function set_acf_settings() {
    acf_update_setting( 'enable_shortcode', true );
}