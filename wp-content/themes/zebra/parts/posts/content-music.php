
<!-- add in background-image field -->

<section class="wrapper filter_music music" style="background-image: url(<?php echo $bg_image ?>);background-color: <?php echo $bg_color ?>; -webkit-clip-path: url(#mask3);clip-path: url(#mask3)">
	<?php

	?>

  <div class="inner page-width text-center"  data-aos="fade-up">
		<h1><?php the_title() ?></h1>
		<?php
if(get_field('soundcloud'))
	{
	 the_field('soundcloud');
 }
 if(get_field('spotify'))
 	{
 	 the_field('spotify');
  }
if(get_field('youtube'))
	{
	 the_field('youtube');
 }
 ?>
	</div>

</section>
