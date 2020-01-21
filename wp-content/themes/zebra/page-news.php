<?php
/**	Template Name: News

 */

get_header();



?>

<div id="container">
	<ul class="news-contentlist">
	<?php query_posts(array('category_name'=>'News','posts_per_page'=>-1)); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post();

	?>
	<li>
		<i><?php echo get_the_date(); ?></i>
		  <a href="<?php echo get_permalink(); ?>"><h3><span><?php echo get_the_title(); ?></span></h3></a>
		<?php	if ( has_post_thumbnail() ) { ?>
			<div class="news-img">
			  <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			</div>
			<div class="news-text">
				<?php $content_strip_img = get_the_content();
						$content_strip_img = preg_replace("/<img[^>]+\>/i", " ", $content_strip_img);
							$content_strip_img = apply_filters('the_content', $content_strip_img);
							$content_strip_img = str_replace(']]>', ']]>', $content_strip_img);
							echo $content_strip_img;?>
			</div>
		<?php	} else {
			$content = split_content();
			$content1=array_shift($content);
			$content2=implode($content);
			?>
					<div class="news-img">
			 <a href="<?php echo get_permalink(); ?>"><?php echo $content1; ?></a>
		 	</div>
		 <div class="news-text"><?php echo $content2 ?></div>

		 <?php }?>


	 	 <span class="read-more-text"><a href="<?php echo get_permalink(); ?>">More &rarr;</a><span>
		<br clear="both">
	</li>
	<?php endwhile; endif; ?>
	</ul>
</div> <!-- project-container -->

<?php get_footer(); ?>
