<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package PEAuto_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function peauto_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'peauto_body_classes' );

/**
 * Changing login logo link to website Homepage.
 */
function login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'login_logo_url' );

/**
 * Changing login logo to Pure Executive Auto.
 */
function login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/pea-logo.svg);
			background-color: rgba(25,25,25,0.8);
    		background-size: 90%;
    		background-position: 42% 45%;
			border-radius: 5px;
			width: 100%;
			height: 80px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'login_logo' );