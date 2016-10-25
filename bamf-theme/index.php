<?php 
/**
 * index.php
 * 
 */
 ?>
<?php get_header(); ?>


<?php get_template_part( 'includes/content', 'jumbotron' ); ?>
<div class="container">

	<div class="row">

		<div class="col-sm-8 blog-main">

			<?php get_template_part( 'loop' ); ?>

			<?php get_template_part( 'includes/content', 'pager' ); ?>

		</div><!-- /.blog-main -->

		<?php get_sidebar(); ?>

	</div><!-- /.row -->
<?php get_footer(); ?>