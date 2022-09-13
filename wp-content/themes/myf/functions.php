<?php
/**
 * MYF functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MYF
 */

if ( ! function_exists( 'myf_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function myf_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on components, use a find and replace
	 * to change 'myf' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'myf', get_template_directory() . '/languages' );

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

	add_image_size( 'myf-featured-image', 640, 9999 );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Top', 'myf' ),
		) );

	/**
	 * Add support for core custom logo.
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 200,
		'width'       => 200,
		'flex-width'  => true,
		'flex-height' => true,
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'myf_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'myf_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function myf_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'myf_content_width', 640 );
}
add_action( 'after_setup_theme', 'myf_content_width', 0 );

/**
 * Return early if Custom Logos are not available.
 *
 * @todo Remove after WP 4.7
 */
function myf_the_custom_logo() {
	if ( ! function_exists( 'the_custom_logo' ) ) {
		return;
	} else {
		the_custom_logo();
	}
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function myf_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'myf' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'myf_widgets_init' );




/**
 * Enqueue scripts and styles.
 */
function myf_scripts() {
	wp_enqueue_style( 'myf-style', get_stylesheet_uri() );

	wp_enqueue_style( 'pace', get_theme_file_uri('/assets/plugins/pace/templates/pace-theme.css'), array('myf-style'), '20171506' );
	wp_enqueue_style( 'bootstrap', get_theme_file_uri('/assets/plugins/bootstrap/bootstrap.min.css'), array('myf-style'), '20171506' );
	wp_enqueue_style( 'nitro', get_theme_file_uri('/assets/css/nitro.min.css'), array('myf-style'), '20171506' );
	wp_enqueue_style( 'font-awesome', get_theme_file_uri('/assets/icons/fontawesome/css/font-awesome.min.css'), array('myf-style'), '20171506' );
	wp_enqueue_style( 'simple-lightbox', get_theme_file_uri('/assets/plugins/simple-lightbox/simple-lightbox.min.css'), array('myf-style'), '20151215' );

	wp_enqueue_style( 'myf', get_theme_file_uri('/assets/css/myf.min.css'), array('myf-style'), '20171506' );


	wp_enqueue_script( 'pace', get_template_directory_uri() .'/assets/plugins/pace/pace.min.js', array(), '20171506', true );
	
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() .'/assets/plugins/jquery/jquery.2.1.4.min.js', array(), '20171506', true );

	// Load the html5 shiv.
	wp_enqueue_script( 'smpx-html5', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', array(), '3.7.3' );
	wp_enqueue_script( 'smpx-html5', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), '1.4.2' );
	wp_script_add_data( 'smpx-html5', 'conditional', 'lt IE 9' );


	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/plugins/bootstrap/bootstrap.min.js', array(), '20171506', true );
	wp_enqueue_script( 'simple-lightbox', get_template_directory_uri() . '/assets/plugins/simple-lightbox/simple-lightbox.min.js', array(), '20171506', true );
	wp_enqueue_script( 'myf', get_template_directory_uri() . '/assets/js/project.js', array(), '20171506', true );


	wp_enqueue_script( 'addthis', '//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-511b90fd67e9a7b9', array(), '20171506', true );

}
add_action( 'wp_enqueue_scripts', 'myf_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes );

  return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');




/*---------------------------------------------*/
/*	OPTIONS PAGE
/*---------------------------------------------*/
if( function_exists('acf_add_options_page') ){
	acf_add_options_page(array(
		'page_title' 	=> 'Opciones',
		'menu_title'	=> 'Opciones',
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}




// PAGINATION
require get_template_directory().'/components/pagination.php';





function getMonth($m){
	$m === '01' ? $mm = 'Ene.' : '';
	$m === '02' ? $mm = 'Feb.' : '';
	$m === '03' ? $mm = 'Mar.' : '';
	$m === '04' ? $mm = 'Abr.' : '';
	$m === '05' ? $mm = 'May.' : '';
	$m === '06' ? $mm = 'Jun.' : '';
	$m === '07' ? $mm = 'Jul.' : '';
	$m === '08' ? $mm = 'Ago.' : '';
	$m === '09' ? $mm = 'Set.' : '';
	$m === '10' ? $mm = 'Oct.' : '';
	$m === '11' ? $mm = 'Nov.' : '';
	$m === '12' ? $mm = 'Dic.' : '';
	return $mm;
}






