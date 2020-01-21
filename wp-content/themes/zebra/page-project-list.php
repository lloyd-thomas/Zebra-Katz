<?php
/** Template Name: Projectlist
 *
*/

get_header();


$my_category = get_the_title();

if (get_the_title()=='Design'){
	$args = array(
	//'category_name' => $my_category,
	'cat' => '3, 6',
	'posts_per_page' => -1
);
}else{
		$args = array(
		'category_name' => $my_category,
		'posts_per_page' => -1
	);
}

// The Query
$the_query = new WP_Query( $args );
?>

<div id="project-container">
<?php
// The Loop
if ( $the_query->have_posts() ) {

    while ( $the_query->have_posts() ) {
        $the_query->the_post(); ?>
				<?php
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
				<a href="<?php echo get_permalink(); ?>">
					<div class="category project">
						<div class="project-wrapper">
	<?php the_post_thumbnail('thumbnail');?>
					<div class="project-title">
						<span><?php echo get_the_title(); } ?></span>
						</div>
						</div>
					</div>
				</a>
				<?php
    }

} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>
</div>

<?php get_footer(); ?>
