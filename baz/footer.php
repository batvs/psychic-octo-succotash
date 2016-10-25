<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package baz
 */

?>

      </div> <!-- .row -->
    </div> <!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
      <div class="row">
        <div class="three columns">
          <?php dynamic_sidebar( 'footer-widget-1' ); ?>
        </div>
        <div class="three columns">
          <?php dynamic_sidebar( 'footer-widget-2' ); ?>
        </div>
        <div class="three columns">
          <?php dynamic_sidebar( 'footer-widget-3' ); ?>
        </div>
        <div class="three columns">
          <?php dynamic_sidebar( 'footer-widget-4' ); ?>
        </div>
      </div>
      <div class="row">
        <div class="site-info">
          <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'baz' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'baz' ), 'WordPress' ); ?></a>
          <span class="sep"> | </span>
          <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'baz' ), 'baz', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
        </div><!-- .site-info -->
      </div> <!-- .row -->
    </div> <!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
