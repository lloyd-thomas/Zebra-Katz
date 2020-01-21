<?php
/**
 * This is the default page template file
 */

get_header();
add_filter( 'the_title', function ($title) { return "";});
?>

<main class="page-container"  role="main">
	<div class="page-width">
		<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'parts/pages/content' );
			endwhile;
		?>
		<?php

// check if the repeater field has rows of data
if( have_rows('page_text_repeat') ):
	$page = 0;
 	// loop through the rows of data
    while ( have_rows('page_text_repeat') ) : the_row();
		$page ++;
		echo $page?>

<?php
        // display a sub field value
        the_sub_field('page_text');

    endwhile;

else :

    // no rows found

endif;

?>
	</div>
</main>
<?php get_footer();
