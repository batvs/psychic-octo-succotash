<?php
/**
 * baz child functions.php
 *
 * plug-in like theme functionalities for child theme.
 */


/**
 * Best practices for child theme development is to
 * make sure to add the parent theme styles before the child theme.
 *
 * https://codex.wordpress.org/Child_Themes
 */

function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
