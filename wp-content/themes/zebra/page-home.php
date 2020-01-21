<?php
/** Template Name: Index Page*/

?>
<?php get_header(); ?>



<section class="wrapper" style="clip-path: url(#mask2);">

  <div class="rellax" data-rellax-speed="-3" data-rellax-percentage="0.5" >
        <div class="page-width text-center">
<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/packshot-Zebra-Katz-_LESS-IS-MOOR-_Album-Art_.jpg">
</div>
</div>
</section>

<section class="wrapper" id="wave" style="clip-path: url(#mask2);background:black;transform:translateY(-10%);">
      <div class="page-width text-center">
  <div style="color:white;padding-top:10%; font-size:16px">
    <?php include get_template_directory() . '/parts/snippets/somgkick.php'; ?>
  </div>
</div>
</section>

<section class="wrapper" id="wave" style="clip-path: url(#mask);background:white;transform:translateY(-10%);">
      <div class="page-width text-center">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/footer.jpg">
      <div>
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





<?php get_footer(); ?>
