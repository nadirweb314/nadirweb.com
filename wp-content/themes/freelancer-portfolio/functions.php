<?php
if ( ! function_exists( 'freelancer_portfolio_setup' ) ) :
function freelancer_portfolio_setup() {

// Root path/URI.
define( 'FREELANCER_PORTFOLIO_PARENT_DIR', get_template_directory() );
define( 'FREELANCER_PORTFOLIO_PARENT_URI', get_template_directory_uri() );

// Root path/URI.
define( 'FREELANCER_PORTFOLIO_PARENT_INC_DIR', FREELANCER_PORTFOLIO_PARENT_DIR . '/inc');
define( 'FREELANCER_PORTFOLIO_PARENT_INC_URI', FREELANCER_PORTFOLIO_PARENT_URI . '/inc');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	
	add_theme_support( 'custom-header' );

	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	
	//Add selective refresh for sidebar widget
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'freelancer-portfolio' );
		
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'freelancer-portfolio' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	
	add_theme_support('custom-logo');

	/*
	 * WooCommerce Plugin Support
	 */
	add_theme_support( 'woocommerce' );
	
	// Gutenberg wide images.
	add_theme_support( 'align-wide' );
	
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'assets/css/editor-style.css', freelancer_portfolio_google_font() ) );
	
	//Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'freelancer_portfolio_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'freelancer_portfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function freelancer_portfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'freelancer_portfolio_content_width', 1170 );
}
add_action( 'after_setup_theme', 'freelancer_portfolio_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function freelancer_portfolio_widgets_init() {
	
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'freelancer-portfolio' ),
		'id' => 'freelancer-portfolio-sidebar-primary',
		'description' => __( 'The Primary Widget Area', 'freelancer-portfolio' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><div class="title"><span class="shap"></span></div>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'freelancer-portfolio' ),
		'id' => 'freelancer-portfolio-footer-widget-area',
		'description' => __( 'The Footer Widget Area', 'freelancer-portfolio' ),
		'before_widget' => '<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s"><aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside></div>',
		'before_title' => '<h5 class="widget-title w-title">',
		'after_title' => '</h5><span class="shap"></span>',
	) );

	register_sidebar( array(
		'name' => __( 'WooCommerce Widget Area', 'freelancer-portfolio' ),
		'id' => 'freelancer-portfolio-woocommerce-sidebar',
		'description' => __( 'This Widget area for WooCommerce Widget', 'freelancer-portfolio' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><div class="title"><span class="shap"></span></div>',
	) );
}
add_action( 'widgets_init', 'freelancer_portfolio_widgets_init' );

/**
 * All Styles & Scripts.
 */

require_once get_template_directory() . '/inc/enqueue.php';

/**
 * Nav Walker fo Bootstrap Dropdown Menu.
 */

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';


/**
 * Customizer additions.
 */
 require_once get_template_directory() . '/inc/freelancerportfolio-customizer.php';

require_once get_template_directory() . '/inc/tab-control.php';


    
// for header
function freelancer_portfolio_header_reset_settings() {
    remove_theme_mod('hide_show_sticky');
    remove_theme_mod('topheader_contactbtntext');
    remove_theme_mod('topheader_contactbtnlink');
    remove_theme_mod('header_menuscolor');
    remove_theme_mod('header_menusarrowcolor');
    remove_theme_mod('header_menushovercolor');
    remove_theme_mod('header_submenusbgcolor');
    remove_theme_mod('header_submenusbordercolor');
    remove_theme_mod('header_submenutextcolor');
    remove_theme_mod('header_submenusbghovercolor');
    remove_theme_mod('header_submenustxthovercolor');
    remove_theme_mod('header_btnbgcol1');
    remove_theme_mod('header_btnbgcol2');
    remove_theme_mod('header_buttontext');
    remove_theme_mod('header_buttontexthover');
	remove_theme_mod('header_mobileviewbg');
	remove_theme_mod('header_mobileviewtoggle');
	remove_theme_mod('header_mobileviewtogglehover');
	remove_theme_mod('header_mobileviewmenubg');

    wp_send_json_success(
        array(
            'success' => true,
            'message' => "Reset Completed",
        )
    );
}
add_action( 'wp_ajax_freelancer_portfolio_header_reset_settings', 'freelancer_portfolio_header_reset_settings' );



// for service
function freelancer_portfolio_Service_reset_settings() {
    remove_theme_mod('service_disable_section');
    remove_theme_mod('service_heading');	
    remove_theme_mod('Service1');
    remove_theme_mod('Service2');
    remove_theme_mod('Service3');
    remove_theme_mod('Service4');
    remove_theme_mod('Service5');
    remove_theme_mod('Service6');
    remove_theme_mod('service_headingcolor');
    remove_theme_mod('service_boxtitlecolorcolor');
    remove_theme_mod('service_boxdescriptioncolorcolor');
    remove_theme_mod('service_buttonbgcolor');   
    remove_theme_mod('service_buttontextcolor');
    remove_theme_mod('service_buttonbghovercolor');
    remove_theme_mod('service_boxbgcolor');
    remove_theme_mod('freelancer_portfolio_service_section_width');
    remove_theme_mod('freelancer_portfolio_service_top_padding');
    remove_theme_mod('freelancer_portfolio_service_bottom_padding');
    wp_send_json_success(
        array(
            'success' => true,
            'message' => "Reset Completed",
        )
    );
}
add_action( 'wp_ajax_freelancer_portfolio_Service_reset_settings', 'freelancer_portfolio_Service_reset_settings' );


// for blog
function freelancer_portfolio_blog_reset_settings() {
	remove_theme_mod('blog_disable_section');
    remove_theme_mod('blog_heading');
    remove_theme_mod('blog_headingcolor');
    remove_theme_mod('blog_titlecolor');
    remove_theme_mod('blog_descriptioncolor');
    remove_theme_mod('blog_buttontextcolor');
    remove_theme_mod('blog_buttonbgcolor');
    remove_theme_mod('blog_authorandcategorycolor');
    remove_theme_mod('blog_authorandcategorybgcolor');
	remove_theme_mod('freelancer_portfolio_blog_section_width');
    remove_theme_mod('freelancer_portfolio_blog_top_padding');
    remove_theme_mod('freelancer_portfolio_blog_bottom_padding');
    wp_send_json_success(
        array(
            'success' => true,
            'message' => "Reset Completed",
        )
    );
}
add_action( 'wp_ajax_freelancer_portfolio_blog_reset_settings', 'freelancer_portfolio_blog_reset_settings' );



add_filter( 'nav_menu_link_attributes', 'freelancer_portfolio_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function freelancer_portfolio_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}


function freelancer_portfolio_fonts() {
    wp_enqueue_style( 'freelancer_portfolio-google-fonts-Philosopher', 'https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,700;1,400&display=swap" rel="stylesheet', false );
    
    wp_enqueue_style( 'freelancer_portfolio-google-fonts-Kaushan', 'https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap', false );

}
add_action( 'wp_enqueue_scripts', 'freelancer_portfolio_fonts' );