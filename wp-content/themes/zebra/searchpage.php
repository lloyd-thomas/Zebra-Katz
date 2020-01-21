<?php
/*
Template Name: Search Page
 */

get_header();
add_filter( 'the_title', function ($title) { return "";});
?>

<main class="page-container"  role="main">
	<div class="page-width">
	 <h1>Search Posts</h1>
	 <?php get_search_form(); ?>
	</div>
</main>
<?php get_footer();
