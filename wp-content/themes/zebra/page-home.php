<?php
/** Template Name: Index Page*/

?>
<?php

get_header(); ?>
<main>



  <section class="wrapper single-image filter_music filter_merchandise dark-bg">
    <div class="anim3 page-width text-center">
      <article style="padding-top:2rem;">
        <img  src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/packshot-Zebra-Katz-_LESS-IS-MOOR-_Album-Art_.jpg">
          <div class="m-t m-b">
          <big class="p-t">Less is moor</big>
          <div class="m-b text-upper">
            <a target="_blank" data-aos="zoom-in-down" data-aos-duration="500" href="https://zebrakatz.ffm.to/lessismoor" class="btn-big"><span>Get the album</span></a>
          </div>
        </div>
      </article>
    </div>

  </section>

  <?php

  // check if the repeater field has rows of data
  if( have_rows('home_page_posts') ):

   	// loop through the rows of data
      while ( have_rows('home_page_posts') ) :
        the_row();
        $bg_color = "";
        $bg_image = "";
        if(get_sub_field('color')){
          $bg_color = get_sub_field('color');
        }
        if(get_sub_field('background_image')){
          $bg_image = get_sub_field('background_image');
        }


        $post_objects = get_sub_field('content');
          // display a sub field value
          if( $post_objects ):
            $temp_post = $post;

            foreach( $post_objects as $post):
              setup_postdata($post);
              $postType = get_post_type_object(get_post_type($post));

              if ($postType) {
                  $postTypeName =  esc_html($postType->labels->singular_name);
                  switch($postTypeName):
                    case 'Video':
                      include(locate_template('parts/posts/content-video.php'));
                    break;
                    case 'Music':
                      include(locate_template('parts/posts/content-music.php'));
                    break;
                    case 'Post':
                      include(locate_template('parts/posts/content.php'));
                    break;
                    endswitch;
              }

            endforeach;
            $post = $temp_post;
            $bg_color = "";
          //  $bg_image = "";

          endif; //if( $post_objects ):
        //the_sub_field('title');

      endwhile;

  else :

      // no rows found

  endif;
  wp_reset_postdata();

  ?>
  <section class="wrapper tour filter_live">
    <div style="background:black;-webkit-clip-path: url(#mask);clip-path: url(#mask);">
    <div class="page-width text-center" data-aos="zoom-out">
      <article>
        <?php include get_template_directory() . '/parts/snippets/songkick.php'; ?>
      </article>
    </div>
  </div>
  </section>

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
