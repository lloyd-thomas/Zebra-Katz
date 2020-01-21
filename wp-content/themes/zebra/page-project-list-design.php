<?php
/** Template Name: Design Projectlist
 *
*/

get_header();

$my_category = get_the_title();

?>

<div class="design-list-wrapper">
  <div class="design-list-controls filters">
    <ul>
      <li>
        <div class="flex-vertical-align-center"><h3>Type</h3>
          <!--<div class="minus-btn circle-btn"><i class="fa fa-minus" aria-hidden="true"></i></div><div class="plus-btn circle-btn"><i class="fa fa-plus" aria-hidden="true"></i></div>-->
        </div>

        <div class="ui-group">
          <ul>
          <?php
          $args = array('child_of' => 3);
          $categories = get_categories( $args );
          foreach($categories as $category) {
             ?>
              <li><input type="checkbox" name="type" id="<?php echo $category->slug; ?>" value="<?php echo $category->slug; ?>"><label for="<?php echo $category->slug; ?>"><?php echo $category->name ?></label></li>
          <?php } ?>
          </ul>
        </div>
      </li>
      <li>
          <div class="flex-vertical-align-center"><h3>Brands</h3>
            <!--<div class="minus-btn circle-btn"><i class="fa fa-minus" aria-hidden="true"></i></div><div class="plus-btn circle-btn"><i class="fa fa-plus" aria-hidden="true"></i></div>
          --></div>
          <div class="ui-group">
            <ul>
          <?php
          $args = array(
            'post_type' => 'brand',
            'post_status' => 'publish',
            'posts_per_page'=> -1
          );
          $brand = new WP_Query( $args );
          if ( $brand->have_posts() ) :
                while( $brand ->have_posts() ) : $brand->the_post();
                $slug = basename( get_permalink() );
                ?>
                  <li><input type="checkbox" name="brand" id="<?php echo $slug ?>" value="<?php echo $slug ?>"><label for="<?php echo $slug ?>"><?php the_title(); ?></label></li>
                <?php
                endwhile;
                wp_reset_postdata();
          else :
          endif;
          ?>
          </ul>
        </div>
      </li>
    </ul>


  </div><!-- design-controls -->

  <?php
	$args = array(
	//'category_name' => $my_category,
	'cat' => '3, 6',
	'posts_per_page' => -1
);

// The Query
$the_query = new WP_Query( $args );
?>

  <div id="project-container">
    <?php
// The Loop
if ( $the_query->have_posts() ) {

    while ( $the_query->have_posts() ) {
        $the_query->the_post();
				$post_categories = get_the_category(get_the_ID());
        $brand = get_field('brand');
				?>
    <?php
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>

      <div class="category project" data-category="<?php
          if($post_categories):
          //  $numItems = count($post_categories);
  				//	$i = 0;

  					foreach($post_categories as $c):

  							echo $c->slug." ";
  						/*	if(++$i != $numItems) {
  								echo " ";
  							}*/
  					  endforeach;
          endif;
        if($brand):
              $slug = basename( get_permalink($brand -> ID) );
              echo $slug;
          endif;
            ?>">
          <a href="<?php echo get_permalink(); ?>" class="project-link"><div class="project-wrapper">
          <?php the_post_thumbnail('thumbnail');?>
          <div class="project-title">
            <span><?php echo get_the_title(); } ?></span>
          </div>
        </div></a>
      </div>

    <?php
    }

} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>
  </div><!-- project-container -->
</div><!-- design-list-wrapper -->

<?php get_footer(); ?>
