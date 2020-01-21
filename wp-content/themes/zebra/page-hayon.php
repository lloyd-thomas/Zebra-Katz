<?php
/** Template Name: Jaime Hayon */
get_header();
?>
<?php	while ( have_posts() ) : the_post();?>
			<div class="biog-wrapper">
				<div class="biog-copy">
					<?php the_content(); ?>
				</div>
				<div class="feartured-image">
						<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
						the_post_thumbnail('full');
						?>
				</div>
			</div>
			<section class="video-sider-wrapper">
			<div class="slider">


				<?php while (has_sub_field('video_slider')) { ?>

					<?php $postObject = get_sub_field('video'); ?>
					<?php if( $postObject ): ?>
					<?php $post = $postObject; setup_postdata( $post ); ?>
					<?php // the_title();
					$youtube = $post->youtube_code;
					?>
					<div class="slide">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $youtube ?>?controls=0&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media;  picture-in-picture" allowfullscreen></iframe>
					</div>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
					<?php //$video_tite =  $postObject->post_name;
					//print_r($postObject);
					?>


				<?php } ?>
				</div>
			</section>

			<section class="press-portraits-wrapper">
					<h1>Press Portraits</h1>
				<?php
				$images = get_field('press_portraits');
				if( $images ): ?>
				    <ul>
				        <?php foreach( $images as $image ): ?>
				            <li>
				                <a href="<?php echo esc_url($image['url']); ?>">
				                     <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				                </a>
				                <p><?php echo esc_html($image['caption']); ?></p>
				            </li>
				        <?php endforeach; ?>
				    </ul>
<?php endif; ?>
</section>
			<section class="press-articles-wrapper">
				<h1>Latest Press Articles</h1>
				<ul>
				<?php
				$counter = 0;
				while (has_sub_field('press_articles') and $counter < 3) { ?>

					<?php $postObject = get_sub_field('press'); ?>
					<?php if( $postObject ): ?>
					<?php $post = $postObject; setup_postdata( $post ); ?>
					<?php $counter++; 	?>
					<li><?php the_post_thumbnail( 'large' );?></li>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
					<?php //$video_tite =  $postObject->post_name;
					//print_r($postObject);
					?>


				<?php } ?>
			</ul>
		</section>
		<?php	endwhile;
			?>











<?php get_footer();
