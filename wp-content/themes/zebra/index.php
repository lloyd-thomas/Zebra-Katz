<?php
/**
 * This is the default template file for indexes (list of blog/news posts)
 */

$index_page_title = get_the_title( get_option('page_for_posts', true) );
get_header();
?>

<div id="project-container">

			<?php
				if (have_posts()):

					while ( have_posts() ) : the_post();
						get_template_part( 'parts/posts/content', 'index' );
					endwhile; ?>
</div>
					<?php echo "<div class=\"posts-navigation below\">";
						the_posts_pagination(array(
							'prev_text' => __( 'Previous page', 'hsl' ),
							'next_text' => __( 'Next page', 'hsl' ),
							'before_page_number' => __( 'Page', 'hsl' ),
						));
					echo "</div>";

				else:
					get_template_part( 'parts/posts', 'none' );
				endif;
			?>


<?php get_footer(); ?>
