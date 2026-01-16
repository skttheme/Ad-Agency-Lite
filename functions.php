<?php 
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! function_exists( 'ad_agency_lite_setup' ) ) : 
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function ad_agency_lite_setup() {
	$GLOBALS['content_width'] = apply_filters( 'ad_agency_lite_content_width', 640 );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_post_type_support( 'page', 'excerpt' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'custom-logo', array(
		'height'      => 54,
		'width'       => 132,
		'flex-height' => true,
	) );	
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'ad-agency-lite' )				
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
} 
endif; // ad_agency_lite_setup
add_action( 'after_setup_theme', 'ad_agency_lite_setup' );

function ad_agency_lite_widgets_init() { 	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'ad-agency-lite' ),
		'description'   => esc_html__( 'Appears on page footer', 'ad-agency-lite' ),
		'id'            => 'fc-1-ada',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'ad-agency-lite' ),
		'description'   => esc_html__( 'Appears on page footer', 'ad-agency-lite' ),
		'id'            => 'fc-2-ada',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'ad-agency-lite' ),
		'description'   => esc_html__( 'Appears on page footer', 'ad-agency-lite' ),
		'id'            => 'fc-3-ada',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 4', 'ad-agency-lite' ),
		'description'   => esc_html__( 'Appears on page footer', 'ad-agency-lite' ),
		'id'            => 'fc-4-ada',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );	
}
add_action( 'widgets_init', 'ad_agency_lite_widgets_init' );


add_action( 'wp_enqueue_scripts', 'ad_agency_lite_enqueue_styles' );
function ad_agency_lite_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
} 

add_action( 'wp_enqueue_scripts', 'ad_agency_lite_child_styles', 99);
function ad_agency_lite_child_styles() {
  wp_enqueue_style( 'ad-agency-lite-child-style', get_stylesheet_directory_uri()."/css/responsive.css" );
} 

function ad_agency_lite_admin_style() {
  wp_enqueue_script('ad-agency-lite-admin-script', get_stylesheet_directory_uri()."/js/ad-agency-lite-admin-script.js");
}
add_action('admin_enqueue_scripts', 'ad_agency_lite_admin_style');

function ad_agency_lite_admin_about_page_css_enqueue($hook) {
   if ( 'appearance_page_ad_agency_lite_guide' != $hook ) {
        return;
    }
    wp_enqueue_style( 'ad-agency-lite-about-page-style', get_stylesheet_directory_uri() . '/css/ad-agency-lite-about-page-style.css' );
}
add_action( 'admin_enqueue_scripts', 'ad_agency_lite_admin_about_page_css_enqueue' );

/**
 * Show notice on theme activation
 */
if ( is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {
	add_action( 'admin_notices', 'ad_agency_lite_activation_notice' );
}
function ad_agency_lite_activation_notice(){
    ?>
    <div class="notice notice-info is-dismissible"> 
        <div class="skt-ui-ux-notice-container">
        	<div class="skt-ui-ux-notice-img"><img src="<?php echo esc_url( AD_AGENCY_LITE_SKTTHEMES_THEME_URI . 'images/icon-skt-templates.png' ); ?>" alt="<?php echo esc_attr('SKT Templates');?>" ></div>
            <div class="skt-ui-ux-notice-content">
            <div class="skt-ui-ux-notice-heading"><?php echo esc_html__('Thank you for installing Ad Agency Lite!', 'ad-agency-lite'); ?></div>
            <p class="largefont"><?php echo esc_html__('Ad Agency Lite comes with 150+ ready to use Elementor templates. Install the SKT Templates plugin to get started.', 'ad-agency-lite'); ?></p>
            </div>
            <div class="skt-ui-ux-clear"></div>
        </div>
    </div>
    <?php
}

if ( ! function_exists( 'ad_agency_lite_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function ad_agency_lite_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;


define('AD_AGENCY_LITE_SKTTHEMES_URL','https://www.sktthemes.org');
define('AD_AGENCY_LITE_SKTTHEMES_PRO_THEME_URL','https://www.sktthemes.org/shop/digital-ad-agency-wordpress-theme/');
define('AD_AGENCY_LITE_SKTTHEMES_FREE_THEME_URL','https://www.sktthemes.org/shop/free-media-agency-wordpress-theme/');
define('AD_AGENCY_LITE_SKTTHEMES_THEME_DOC','https://www.sktthemesdemo.net/documentation/skt-ui-ux-doc');
define('AD_AGENCY_LITE_SKTTHEMES_LIVE_DEMO','https://sktperfectdemo.com/themepack/adagency/');
define('AD_AGENCY_LITE_SKTTHEMES_THEMES','https://www.sktthemes.org/themes');
define('AD_AGENCY_LITE_SKTTHEMES_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

function ad_agency_lite_remove_parent_function(){	 
	remove_action( 'admin_notices', 'skt_ui_ux_activation_notice');
	remove_action( 'admin_menu', 'skt_ui_ux_abouttheme');
	remove_action( 'customize_register', 'skt_ui_ux_customize_register');
	remove_action( 'wp_enqueue_scripts', 'skt_ui_ux_custom_css');
}
add_action( 'init', 'ad_agency_lite_remove_parent_function' );

function ad_agency_lite_remove_parent_theme_stuff() {
    remove_action( 'after_setup_theme', 'skt_ui_ux_setup' );
}
add_action( 'after_setup_theme', 'ad_agency_lite_remove_parent_theme_stuff', 0 );

function ad_agency_lite_unregister_widgets_area(){
	unregister_sidebar( 'fc-1' );
	unregister_sidebar( 'fc-2' );
	unregister_sidebar( 'fc-3' );
	unregister_sidebar( 'fc-4' );
}
add_action( 'widgets_init', 'ad_agency_lite_unregister_widgets_area', 11 );

require_once get_stylesheet_directory() . '/inc/about-themes.php';  
require_once get_stylesheet_directory() . '/inc/customizer.php';