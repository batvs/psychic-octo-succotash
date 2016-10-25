<?php
/**
 * FOOTER
 */
 ?>
                    </div> <!-- .row -->
                </div> <!-- .container -->
            </div> <!-- #main .site-main -->

            <footer id="colophon" class="site-footer" role="contentinfo">
                <div class="container">
                    <div class="row">
                        <div class="footer-widget three columns">
                            <h3 class="widget-title">Widget title</h3>
                            <?php wp_nav_menu( array(
                                'theme_location' => 'secondary',
                            ) ); ?>
                        </div>
                        <div class="footer-widget three columns">
                            <h3 class="widget-title">Widget title</h3>
                        </div>
                        <div class="footer-widget three columns">
                            <h3 class="widget-title">Widget title</h3>
                        </div>
                        <div class="footer-widget three columns">
                            <h3 class="widget-title">Widget title</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="site-info">
                            <p class="copyright">Copyright &copy; <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
                                <?php bloginfo('name'); ?>
                            </a></p>
                        </div><!-- .site-info -->
                    </div> <!-- .row -->
                </div> <!-- .container -->
            </footer><!-- #colophon .site-footer -->

        </div> <!-- #page .hfeed .site -->
        <?php wp_footer(); ?>
    </body>
</html>
