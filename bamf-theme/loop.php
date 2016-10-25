<?php 
/**
 * main loop
 *
 * this is the default loop, used on the main page and 
 * on the archives page.
 * 
 */

if ( have_posts() ) :
	the_post(); ?>
	<?php if ( ! is_front_page() ) : ?>
	<h2 class="page-title">
		<?php 
			if ( is_day() ) { 
				sprintf( 'Archive for %s', get_the_date() );
			} elseif ( is_month() ) {
				sprintf( 'Archive for %s', get_the_date( 'F Y' ) );
			} elseif ( is_year() ) {
				sprintf( 'Archive for %s', get_the_date( 'Y' ) );
			} else {
				echo get_queried_object()->name;
			}
		 ?>
	</h2>
	<?php endif; ?>
	<?php rewind_posts(); ?>
	<?php 
	while( have_posts() ) : the_post();
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
        <header>
        	<h2 class="blog-post-title">
        		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
        	</h2>
        </header>
        <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
        <section class="blog-post-content">
        	<?php 
        	if ( is_front_page() || is_home() ) {
        		the_excerpt();
        	} else {
        		the_content();
        	}
        	?>
        </section>
	</article><!-- /.blog-post -->
	<?php 
	endwhile;
	 ?>
	<?php 
endif;

 ?>