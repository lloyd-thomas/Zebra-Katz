<?php
/** Template Name: About Page*/

?>
<?php

get_header();



?>

<?php

// check if the repeater field has rows of data

?>
<main>
  <section class="wrapper">
<?php if( have_rows('text_block') ):
  $count = 0; ?>



	<?php while( have_rows('text_block') ): the_row();
    $count ++;
		// vars
		$image = get_sub_field('image');
		$content = get_sub_field('text_field');

		?>

	<div class="block-grid <?php if($count==2){ ?>reverse<?php } ?>">
      <div class="col-image">
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
        </div>
        <div class="col-text-wrapper">
          <div class="col-text">
            <?php echo $content; ?>
          </div>
          <div class="col-text-spacer"></div>
        </div>
		</div>
    <?php if($count==2){ $count=0; }else{ ?>
    <div class="block">
      <div class="page-width text-center">
        <img data-aos="fade-up" data-aos-duration="2000" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/3_Heads.png"></div>
      </div>
    </div>
  <?php } ?>

	<?php endwhile; ?>



<?php endif; ?>
</section>
</main>


<?php get_footer(); ?>
