<?php
/** Template Name: Index Page*/

?>
<?php get_header(); ?>


<main>
  <section class="wrapper single-image">

    <div style="background:black;">
      <div class="anim3 page-width text-center">
        <div style="margin-bottom:5em;">
          <img  src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/packshot-Zebra-Katz-_LESS-IS-MOOR-_Album-Art_.jpg">
          <div class="m-t m-b">
          <big class="p-t">Less is moor</big>
          <div class="m-b text-upper"><a target="_blank" href="https://zebakatz.ffm.to/lessismoor" class="btn">Pre-Save Digital Album Today &Rarr; </a></div>
        </div>
      </div>
    </div>
    </div>

  </section>
  <section class="wrapper bg-white multi-image" style="-webkit-clip-path: url(#mask2);clip-path: url(#mask2)">
    <div class="grid-2 p-b" style="padding-top:10%">
      <div class="rellax" data-rellax-speed="-0.5" data-rellax-percentage="0.5"><img data-aos="fade-right" data-aos-duration="1000" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ZK_Vinyl_4.jpg"></div>
      <div class="rellax" data-rellax-speed="-0.5" data-rellax-percentage="0.5"><img data-aos="fade-left" data-aos-duration="1000" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ZK_Vinyl_3.jpg"></div>
      <div class="p-b text-upper rellax" data-rellax-speed="0" data-rellax-zindex="5" style="z-index:9"><a target="_blank" href="https://thevinylfactory.com/product/less-is-moor/" class="btn">Pre-Order Vinyl Album &Rarr;</a></div>
    </div>
  </section>
  <section class="wrapper tour" style="background:white">
    <div style="background:black;-webkit-clip-path: url(#mask);clip-path: url(#mask);">
    <div class="page-width text-center" data-aos="zoom-out">
      <div style="color:white;padding:10% 0; font-size:16px">
        <?php include get_template_directory() . '/parts/snippets/songkick.php'; ?>
      </div>
    </div>
  </div>
  </section>
  <section class="wrapper single-image bg-white p-b" style="-webkit-clip-path: url(#mask3);clip-path: url(#mask3)">

    <div class="page-width text-center">
        <div style="padding:10% 10% 0 10%; font-size:16px">
          <a href="https://awal.ffm.to/zk-ish"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ZK_ISH_1080x1920_Instagram_Story.jpg"></a>
        </div>
        <div class="m-b m-t text-upper"><a target="_blank" href="https://zebakatz.ffm.to/lessismoor" class="btn">Latest single "Ish" &Rarr; </a></div>

    </div>

  </section>

<!--  <section class="wrapper final-image" style="-webkit-clip-path: url(#mask2);clip-path: url(#mask2);background:white;">
    <img class="rellax" data-rellax-speed="-1.5" data-rellax-percentage="0.5" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/footer.jpg">
  </section>-->

  <svg width="0" height="0">
    <defs>
      <clipPath id="mask" clipPathUnits="objectBoundingBox">
        <path d="M0,0c0,0,0.0797,0.0134,0.4142,0.0118S0.7239-0.0018,0.8183,0S1,0.0119,1,0.0119V1H0V0z">
      </clipPath>
    </defs>
  </svg>

  <svg width="0" height="0">
    <defs>
      <clipPath id="mask2" clipPathUnits="objectBoundingBox">
        <path d="M0,0.0296c0,0,0.0231-0.0374,0.3561-0.0044c0.3458,0.0343,0.332-0.0106,0.4347-0.0035C0.9429,0.0323,1,0.0119,1,0.0119V1H0
	V0.0296z">
      </clipPath>
    </defs>
  </svg>
  <svg width="0" height="0">
    <defs>
      <clipPath id="mask3" clipPathUnits="objectBoundingBox">
        <path d="M0,0.0151c0,0,0.2602-0.0099,0.3695-0.0099S1,0.0272,1,0.0272V1H0V0.0151z">
      </clipPath>
    </defs>
  </svg>


</main>
<?php get_footer(); ?>
