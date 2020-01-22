<?php
/** Template Name: Index Page*/

?>
<?php get_header(); ?>


<main>
  <section class="wrapper">

    <div style="background:black;">
      <div class="anim3 page-width text-center">
        <div style="margin-bottom:5em;">
          <img  src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/packshot-Zebra-Katz-_LESS-IS-MOOR-_Album-Art_.jpg">
          <big class="m-t">Less is moor</big>
          <div class="m-b text-upper"><a target="_blank" href="https://zebakatz.ffm.to/lessismoor" class="btn">Pre-Save Digital Album Today &Rarr; </a></div>
      </div>
    </div>
    </div>

  </section>
  <section class="wrapper bg-white" style="-webkit-clip-path: url(#mask2);clip-path: url(#mask2)">
    <div class="grid-2 p-b" style="padding-top:10%">
      <div class="rellax" data-rellax-speed="-0.5" data-rellax-percentage="0.5"><img data-aos="fade-right" data-aos-duration="1000" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ZK_Vinyl_4.jpg"></div>
      <div class="rellax" data-rellax-speed="-0.5" data-rellax-percentage="0.5"><img data-aos="fade-left" data-aos-duration="1000" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ZK_Vinyl_3.jpg"></div>
      <div class="p-b text-upper rellax" data-rellax-speed="0" data-rellax-zindex="5" style="z-index:9"><a target="_blank" href="https://zebakatz.ffm.to/lessismoor" class="btn">Pre-Order Vinyl Album &Rarr;</a></div>
    </div>
  </section>
  <section class="wrapper tour" style="background:white">
    <div style="background:black;-webkit-clip-path: url(#mask);clip-path: url(#mask);">
    <div class="page-width text-center">
      <div style="color:white;padding:10% 0; font-size:16px">
        <?php include get_template_directory() . '/parts/snippets/somgkick.php'; ?>
      </div>
    </div>
  </div>
  </section>

<!--  <section class="wrapper final-image" style="-webkit-clip-path: url(#mask2);clip-path: url(#mask2);background:white;">
    <img class="rellax" data-rellax-speed="-1.5" data-rellax-percentage="0.5" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/footer.jpg">
  </section>-->

  <svg width="0" height="0">
    <defs>
      <clipPath id="mask" clipPathUnits="objectBoundingBox">
        <path d="M1,0c0,0-0.3,0.1-0.5,0.1S0.3,0,0,0.1V1h1L1,0z">
      </clipPath>
    </defs>
  </svg>

  <svg width="0" height="0">
    <defs>
      <clipPath id="mask2" clipPathUnits="objectBoundingBox">
        <path d="M1,0c0,0-0.03,0.01-0.15,0.02S0.03,0,0,0.0V1h1L1,0z">
      </clipPath>
    </defs>
  </svg>
</main>
<?php get_footer(); ?>
