<?php
/**
 * functions.php
 *
 * Allows a theme or plugin to register support of a certain theme feature.
 *
 * @link(codex, https://codex.wordpress.org/Function_Reference/add_theme_support)
 * @version 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since thvs 1.0
 */

if ( ! isset( $content_width ) )
    $content_width = 654; /* pixels */


/**
 * Setup theme
 *
 * @since thvs 1.0
 */

if ( ! function_exists( thvs_setup ) ) {

  function thvs_setup() {

    // require( get_template_directory() . '/inc/template-tags.php' );

    /**
     * Add theme scripts
     */
    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


    /**
     * Add default posts and comments RSS feed links to head
     */
    add_theme_support( 'automatic-feed-links' );

    /**
      * Enable support for the Aside Post Format
      */
    add_theme_support( 'post-formats', array( 'aside' ) );

      /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
      'primary' => esc_html__( 'Primary' ),
      'secondary' => esc_html__( 'Secondary' ),
    ) );

    // Register widgetized sidebar
    add_action( 'widgets_init', 'widgetized_sidebar' );

  }
}
add_action( 'after_setup_theme', 'thvs_setup' );


/**
 * Engueueing Styles and Scripts
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 * @since  thvs 1.0
 */
if ( ! function_exists( 'add_theme_scripts' ) ) {

  function add_theme_scripts() {

    /**
     * Styles
     */

    // Load CSS
    // Theme stylesheet
    wp_enqueue_style( 'style', get_stylesheet_uri(), array('skeleton'), '1.1', 'all' );

    // Normalize
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.1', 'all');

    // Google Fonts
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Raleway:400,300,600', array('normalize', 'skeleton'), '1.1', 'all');

    // Skeleton GS
    wp_enqueue_style( 'skeleton', get_template_directory_uri() . '/css/skeleton-750bp.css', array('normalize'), '1.1', 'all');

    // Font-awesome
    wp_enqueue_style( 'font-awesome', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css', array('normalize', 'skeleton'), '1.1', 'all');

    // Main CSS
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main.css', array('normalize', 'skeleton', 'font-awesome'), '1.1', 'all');

    /**
     * Scripts
     */

    // Modernizr
    wp_enqueue_script( 'modernizr-script', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array ( 'jquery' ), 1.1, true );

    // Plugins.js
    wp_enqueue_script( 'plugins-script', get_template_directory_uri() . '/js/plugins.js', array ( 'jquery' ), 1.1, true );

    // Load Main Javascript
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/script.js', array ( 'jquery' , 'plugins' ), 1.1, true );


      // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      //   wp_enqueue_script( 'comment-reply' );
      // }
  }
}

/**
 * Add widgetized sidebar area
 *
 */

if ( ! function_exists('widgetized_sidebar') ) {

    function widgetized_sidebar() {
       /**
        * Creates a sidebar
        * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
        */
        $args = array(
            'name'          => __( 'Right column' ),
            'id'            => 'right-column',
            'description'   => '',
            'class'         => '',
            'before_widget' => '<li id="%1" class="widget %2">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>'
        );

        register_sidebar( $args );
    }
}




if ( ! function_exists('google_analytics') ) {
    function google_analytics() { ?>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    <?php }
}
