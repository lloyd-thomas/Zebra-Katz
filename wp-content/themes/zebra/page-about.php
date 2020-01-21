<?php
/** Template Name: About */
get_header();
?>
<?php	while ( have_posts() ) : the_post();?>
	<div class="col_2_wrapper">
		<div class="bio-wrapper">
			<div class="biog-copy">
				<h2><span>Jaime Hayon</span></h2>
				<div class="feartured-image">
						<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
						the_post_thumbnail('full');
						?>
				</div>
				<?php the_content(); ?>
				<div class="press-portraits-wrapper">
						<h1>Press Portraits</h1>
					<?php
					$images = get_field('press_portraits');
					if( $images ): ?>
							<ul>
									<?php foreach( $images as $image ): ?>
											<li>

															 <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

													<p><?php echo esc_html($image['caption']); ?></p>
											</li>
									<?php endforeach; ?>
							</ul>
							<?php
							$press_pack = get_field('press_pack_download');
									if( $press_pack ): ?>
									<?php echo do_shortCode($press_pack);
								endif;?>
			<?php endif; ?>
			</div>
			</div>

		</div>


		<div class="studio-contacts">
			<h2><span>The Team</span></h2>
			<?php if( have_rows('studio_contact') ): ?>
				<?php $num = 0 ?>

				<ul>

				<?php while( have_rows('studio_contact') ): the_row();




					// vars
					$title = get_sub_field('title');
					$address = get_sub_field('address');
					$tel = get_sub_field('telephone');
					$email = get_sub_field('email');
					$info = get_sub_field('other_info');
					$contact_name = get_sub_field('contact_name');

					?>

					<li class="contact-info">
						<?php if( $title ): ?>
							<h1><span><?php echo $title ?></span></h1>
						<?php endif; ?>

						<?php if( $address ): ?>
										<address>
						 <?php echo $address ?>
						 				</address><br />
						<?php endif; ?>
						<?php if( $tel ): ?>
						 Tel:&nbsp;<?php echo $tel ?> <br />
						<?php endif; ?>
						<?php if( $email ): ?><a href="mailto://<?php echo $email ?>"><?php echo $email ?></a>
								<br />
						<?php endif; ?>

						<?php if( $info ): ?>
							<div class="other-info">
								<?php echo $info ?>
							</div>
						<?php endif; ?>
							<?php if( have_rows('contact_name') ): ?>
							<?php	while( have_rows('contact_name') ): the_row();
								$full_name = get_sub_field('full_name');
								$job_title = get_sub_field('job_title');
								$email = get_sub_field('email');
								if($full_name){
								?>
								<br />
								<div class="contact_name">
									<span class="full_name"><?php echo $full_name ?></span> / <span class="job_title"><?php echo $job_title ?></span><br />
									<span class="email"><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></span>
								</div>
							<?php }
							endwhile; ?>
							<?php endif; ?>
					</li>
	<?php


			$num ++; ?>
				<?php

				endwhile; ?>

				</ul>


			<?php endif; ?>
			<div class="studio_image">
				<?php
					$studio_image = get_field('studio_image');
					?>
					 <img src="<?php echo esc_url($studio_image['sizes']['large']); ?>" alt="<?php echo esc_attr($studio_image['alt']); ?>" />
			</div>
		</div>

	</div>
	<div class="random-grid">
			<?php if( have_rows('random_gallery') ): ?>
				<ul>
						<?php	while( have_rows('random_gallery') ): the_row();
						$column_width = get_sub_field('column_width');
						$image = get_sub_field('image');
						$video = get_sub_field('video');
						$title = get_sub_field('title');
						?>
							<li class="<?php echo $column_width ?>">
								<?php if($image){ ?>
								<img src="<?php echo $image['url'];?>" />

							<?php	}else{
									?>
									<?php $postObject = get_sub_field('video'); ?>
									<?php if( $postObject ): ?>
									<?php $post = $postObject; setup_postdata( $post ); ?>
									<?php // the_title();
									$youtube = $post->youtube_code;
									?>
									<?php
								  //Check if youtube code has a value
								  if($post->youtube_code ){
								    $youtube = $post->youtube_code;
								  ?>
								  <div class="video-wrapper">
								    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $youtube ?>?controls=0&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media;  picture-in-picture" allowfullscreen></iframe>
								  </div>

								  <?php }
								    if($post->vimeo_code){
								      $vimeo = $post->vimeo_code;

								      ?>
								      <div class="video-wrapper">
								        <iframe src="https://player.vimeo.com/video/<?php echo $vimeo ?>?title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe><script src="https://player.vimeo.com/api/player.js"></script>
								  </div>
								  <?php
								    }
								   ?>

										<?php wp_reset_postdata(); ?>
									<?php endif; ?>
							<?php } ?>
							<?php if($title){ ?>
							<div class="project-title">
								<span><?php echo $title ?></span>
							</div>
						<?php } ?>
							</li>
						<?php endwhile; ?>
		</ul>
				<?php endif; ?>
	</div>

		<?php	endwhile;
			?>

<?php get_footer();
