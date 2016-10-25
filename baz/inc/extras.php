<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package baz
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function baz_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'baz_body_classes' );


/**
 *
 * Social media via crunchifi
 */

function crunchify_social_sharing_buttons($content) {
  if( is_singular() || is_home() ){

    // Get current page URL
    $crunchifyURL = get_permalink();

    // Get current page title
    $crunchifyTitle = str_replace( ' ', '%20', get_the_title());

    // Get Post Thumbnail for pinterest
    $crunchifyThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

    // Construct sharing URL without using any script
    $twitterURL = 'https://twitter.com/intent/tweet?text='.$crunchifyTitle.'&amp;url='.$crunchifyURL.'&amp;via=Crunchify';

    $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$crunchifyURL;

    $googleURL = 'https://plus.google.com/share?url='.$crunchifyURL;

    $bufferURL = 'https://bufferapp.com/add?url='.$crunchifyURL.'&amp;text='.$crunchifyTitle;

    // Based on popular demand added Pinterest too
    $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$crunchifyURL.'&amp;media='.$crunchifyThumbnail[0].'&amp;description='.$crunchifyTitle;

    // Add sharing button at the end of page/page content
    // $content .= '<!-- Crunchify.com social sharing. Get your copy here: http://crunchify.me/1VIxAsz -->';
    // $content .= '<div class="crunchify-social">';
    // $content .= '<h5>SHARE ON</h5> <a class="crunchify-link crunchify-twitter" href="'. $twitterURL .'" target="_blank">Twitter</a>';
    // $content .= '<a class="crunchify-link crunchify-facebook" href="'.$facebookURL.'" target="_blank">Facebook</a>';
    // $content .= '<a class="crunchify-link crunchify-googleplus" href="'.$googleURL.'" target="_blank">Google+</a>';
    // $content .= '<a class="crunchify-link crunchify-buffer" href="'.$bufferURL.'" target="_blank">Buffer</a>';
    // $content .= '<a class="crunchify-link crunchify-pinterest" href="'.$pinterestURL.'" target="_blank">Pin It</a>';
    // $content .= '</div>'; ?>

    <div class="sm-box">
  <h1 class="sm-box_title">Find us on social media</h1>

  <ul class="sm-box_list">
    <li>
      <a id="facebook_icon" class="sm-box_icn" href="<?php echo $facebookURL; ?>" target="_blank"></a>
    </li>
    <li>
      <a id="twitter_icon" class="sm-box_icn" href="<?php echo $twitterURL; ?>" target="_blank"></a>
    </li>
  </ul>
</div> <!-- .sm-box -->

    <?php
    // return true;

  }else{
    // if not a post/page then don't include sharing button
    return $content;
  }
};

add_filter( 'the_content', 'crunchify_social_sharing_buttons');



/**
 * Acf
 */

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page();

}
