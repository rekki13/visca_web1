<?php
/**
 * Visca functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Visca
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function visca_web_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Visca, use a find and replace
		* to change 'visca-web' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'visca-web', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'visca-web' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'visca_web_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'visca_web_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function visca_web_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'visca_web_content_width', 640 );
}
add_action( 'after_setup_theme', 'visca_web_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function visca_web_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'visca-web' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'visca-web' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'visca_web_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function visca_web_scripts() {
	wp_enqueue_style( 'visca-web-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'visca-web-style', 'rtl', 'replace' );

	wp_enqueue_script( 'visca-web-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'visca_web_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 *
 * ReKKi Develop
 */

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method(){
	wp_enqueue_script( 'rekki-jquery',  'https://code.jquery.com/jquery-3.6.0.js',array(),null,true);
	wp_enqueue_script( 'rekki-script', get_template_directory_uri() . '/js/script.js','rekki-jquery-js',null,true);
}


define( 'ALLOW_UNFILTERED_UPLOADS', true );

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'rekki_sports_sites', [
		'label'  => null,
		'labels' => [
			'name'               => 'Sports Sites',
			'singular_name'      => 'Sports Site',
			'add_new'            => 'Add new',
			'add_new_item'       => 'Adding',
			'edit_item'          => 'Editing',
			'new_item'           => 'New',
			'view_item'          => 'Look',
			'search_items'       => 'Search',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Not found',
			'parent_item_colon'  => '',
			'menu_name'          => 'Sports Sites',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor' ,'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite' => array('slug' => 'sites'),
		'query_var'           => true,
	] );
}
add_action('wp_ajax_myfilter', 'misha_filter_function'); // wp_ajax_{ACTION HERE}
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');

function misha_filter_function(){

$args = array(
	'post_type'      => 'rekki_sports_sites',
	'post_status'    => 'publish',
	'posts_per_page' => 5,
	'orderby' => 'title', // we will sort posts by date
	'order'	=> $_POST['date'] // ASC or DESC
);


	$query = new WP_Query( $args );

	if( $query->have_posts() ) :
		while( $query->have_posts() ): $query->the_post();
			get_template_part( 'template-parts/sites' );
		endwhile;
		wp_reset_postdata();
	else :
		echo 'No posts found';
	endif;

	die();
}