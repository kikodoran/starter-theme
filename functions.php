<?php
/**
 * starter theme functions and definitions
 *
 * @package starter
 * @since starter 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since starter-theme 1.0
 */
if ( ! isset( $content_width ) )
    $content_width = 654; /* pixels */

if ( ! function_exists( 'starter_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since starter-theme 1.0
 */
function starter_setup() {
 
    /**
     * Custom template tags for this theme.
     */
    require( get_template_directory() . '/inc/template-tags.php' );
 
    /**
     * Custom functions that act independently of the theme templates
     */
    require( get_template_directory() . '/inc/tweaks.php' );
 
    /**
     * Make theme available for translation
     * Translations can be filed in the /languages/ directory
     */
    load_theme_textdomain( 'starter', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to head
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for the Aside Post Format
     */
    add_theme_support( 'post-formats', array( 'aside' ) );
 
    /**
     * This theme uses wp_nav_menu() in one location.
     */
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'starter' ),
    ) );
}
endif; // starter_setup
add_action( 'after_setup_theme', 'starter_setup' );