<?php
/** Template Name: Index Page*/

?>
<?php get_header(); ?>

{{ Cover Artwork }}

<?php include get_template_directory() . '/parts/snippets/mailchimp.php'; ?>

<section class="wrapper" id="wave" style="clip-path: url(#mask);">


  <div class="rellax" data-rellax-speed="4" data-rellax-percentage="0">
    Masking and parallax test.
  </div>

</div>
</section>
<section class="wrapper" id="wave" style="margin-top:-16px;clip-path: url(#mask2);background:white;">
  <div class="rellax" data-rellax-speed="2" data-rellax-percentage="0" style="color:black">
    Masking and parallax test.
  </div>
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
  <path d="M1,0c0,0-0.1,0.1-0.5,0.1S0.3,0,0,0.1V1h1L1,0z">
    </clipPath>
  </defs>
</svg>


<?php include get_template_directory() . '/parts/snippets/somgkick.php'; ?>



<?php get_footer(); ?>
