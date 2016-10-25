<?php
/**
 * header
 *
 *
 */
 ?>
<!doctype html>
<html class="no-js" <?php echo language_attributes(); ?>>
    <head>
        <meta charset="<?php echo bloginfo( 'charset' ); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php
        wp_title( '&vert;', true, 'right');
        bloginfo('name');
         ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <meta name="description" content="<?php echo bloginfo('description'); ?>">


        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="page" class="hfeed site">
             <header id="masthead" class="site-header" role="banner">
                  <div class="container">
                      <div class="row">
                        <div class="branding">
                            <h1 class="site-title">
                                <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>" ><?php bloginfo('name'); ?></a>
                            </h1>
                            <div class="site-description">
                               <?php bloginfo('description'); ?>
                            </div> <!-- .site-description -->
                          </div>
                          <nav role="navigation" class="site-navigation main-navigation">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',
                                )
                            );
                            ?>
                          </nav><!-- .site-navigation .main-navigation -->
                        </div> <!-- .row -->
                  </div> <!-- .container -->
             </header><!-- #masthead .site-header -->

             <div id="main" class="site-main">
                <div class="container">
                    <div class="row">

