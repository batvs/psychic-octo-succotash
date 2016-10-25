<?php
/**
 * acf slider
 *
 * template-parts/customtemp-slider.php
 */


if( have_rows('slides') ): ?>

  <ul class="slides bxslider">

  <?php while( have_rows('slides') ): the_row();

    // vars
    $image = get_sub_field('image');
    $content = get_sub_field('content');
    $link = get_sub_field('link');

    ?>

    <li class="slide">

      <?php if( $link ): ?>
        <a href="<?php echo $link; ?>">
      <?php endif; ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

      <?php if( $link ): ?>
        </a>
      <?php endif; ?>

        <?php echo $content; ?>

    </li>

  <?php endwhile; ?>

  </ul>

<?php endif;
