<?php
/**
 * Pure Executive Auto Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PEAuto_Theme
 */

if ( ! function_exists( 'peauto_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function peauto_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // peauto_setup
add_action( 'after_setup_theme', 'peauto_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function peauto_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'peauto_content_width', 640 );
}
add_action( 'after_setup_theme', 'peauto_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function peauto_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'peauto_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function peauto_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'peauto_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function peauto_scripts() {

    wp_enqueue_style( 'peauto-style', get_stylesheet_uri() );

    wp_enqueue_script( 'jquery');

    wp_enqueue_script( 'peauto-main-js', get_template_directory_uri() . '/build/js/main.min.js', array('jquery'), false, true);

	wp_enqueue_script( 'peauto-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'peauto_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 *  Move WP Admin Bar to the bottom
 */
function pakdhw_move_admin_bar() {
    echo '
    <style type="text/css">
    body.admin-bar #wphead {
        padding-top: 0;
    }
    #wpadminbar {
        top: auto !important;
        bottom: 0;
        position: fixed;
    }
    #wpadminbar .quicklinks .menupop ul {
        position: absolute;
        bottom: 32px;
        background-color: #23282d;
    }
    #wpadminbar .quicklinks .menupop ul + ul {
        bottom: 70px;
    }
    #wpadminbar .quicklinks .menupop ul ul {
        transform: translateY(62px);
        -webkit-transform: translateY(62px);
        -ms-transform: translateY(62px);
    }
    #wpadminbar .quicklinks .menupop ul.ab-sub-secondary {
        bottom: 64px;
        position: absolute;
    }
    @media screen and (max-width: 782px) {
        #wpadminbar .quicklinks .menupop ul {
            bottom: 46px;
        }
        #wpadminbar .quicklinks .menupop ul + ul,
        #wpadminbar .quicklinks .menupop ul.ab-sub-secondary {
            bottom: 86px;
        }
        #wpadminbar .quicklinks .menupop ul ul {
            transform: translateY(92px);
            -webkit-transform: translateY(92px);
            -ms-transform: translateY(92px);
        }
    }
    </style>';
}
// on frontend area
add_action( 'wp_head', 'pakdhw_move_admin_bar' );

/**
 *  Remove the html margin-top
 */
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


/**
 *  Apply JetPack Photon To Advanced Custom Fields Images
 */
function cdn_attachments_urls($url, $post_id) {
    return str_replace('https://pureexecutiveauto.ca/wp-content/uploads', 'https://i0.wp.com/pureexecutiveauto.ca/wp-content/uploads', $url);
}
add_filter('acf/format_value/type=image', 'cdn_attachments_urls', PHP_INT_MAX, 2);