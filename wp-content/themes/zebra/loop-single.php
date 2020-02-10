<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Hayon
 */

 if (have_posts()) :
    while (have_posts()) :
       the_post();

          if ( in_category('photos') ) {
              echo '<div class="gallery-wrapper">';
              the_content();
              echo '</div><!-- gallery-wrapper-->';
            } else {
              // Continue with normal Loop
              the_content();
            }
    endwhile;
 endif;
?>
