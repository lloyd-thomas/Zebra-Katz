<?php
/** Template Name: Index Page*/

?>
<?php get_header(); ?>


<main>
  <section class="wrapper">

    <div class="rellax" data-rellax-speed="-0.5" data-rellax-percentage="0.5" style="-webkit-clip-path: url(#mask2);clip-path: url(#mask2);background:black;transform:translateY(-5%);">
      <div class="page-width text-center">
        <img class="anim3" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/packshot-Zebra-Katz-_LESS-IS-MOOR-_Album-Art_.jpg">
      </div>
    </div>
  </section>

  <section class="wrapper tour" data-aos="fade-up" data-aos-duration="3000" style="-webkit-clip-path: url(#mask2);clip-path: url(#mask2);background:black;">
    <div class="page-width text-center">
      <div style="color:white;padding-top:10%; font-size:16px">
        <?php include get_template_directory() . '/parts/snippets/somgkick.php'; ?>
      </div>
    </div>
  </section>

  <section class="wrapper final-image" style="-webkit-clip-path: url(#mask2);clip-path: url(#mask2);background:white;">
    <img class="rellax" data-rellax-speed="-1.5" data-rellax-percentage="0.5" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/footer.jpg">
  </section>

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
