<?php

function mytheme_enqueue_scripts() {

  // Only use this method is we"re not in wp-admin
  if ( ! is_admin() ) {
    add_filter('pre_get_posts','SearchFilter');
    /**
     * jQuery
     * We want to use the modern CDN version of jQuery, not the version shipped with WordPress
     */
    wp_deregister_script("jquery");
    wp_register_script("jquery", "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js", FALSE, "3.2.1", true);
    wp_enqueue_script("jquery");

    wp_register_script( 'rellax', 'https://cdnjs.cloudflare.com/ajax/libs/rellax/1.10.0/rellax.min.js', null, null, true );
    wp_enqueue_script('rellax');

    wp_register_script( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', null, null, true );
    wp_enqueue_script('aos');

    wp_register_script( 'anime', 'https://cdn.jsdelivr.net/npm/animejs@3.1.0/lib/anime.min.js', null, null, true );
    wp_enqueue_script('anime');

    wp_enqueue_style( "mailchimp", '//cdn-images.mailchimp.com/embedcode/slim-10_7.css');


    /**
     * Development styles and scripts
     * Use when in development mode (using `yarn start`)
     * Comment out when in production mode
     */

  /*wp_enqueue_script( "theme-bundle-js", get_template_directory_uri() . "/assets/app.bundle.js", array( "jquery" ), "", true );
   wp_enqueue_style( "theme-bundle-css", get_template_directory_uri() . "/assets/app.bundle.css", array(), "", "all" );
   */
    /**
     * Production styles and scripts
     * Use when in production mode (after using `yarn build`)
     * Comment out when in development mode
     */
  wp_enqueue_script( "theme-bundle-js", get_template_directory_uri() . "/assets/app.bundle.min.js", array( "jquery" ), "", true );
     wp_enqueue_style( "theme-bundle-css", get_template_directory_uri() . "/assets/app.bundle.min.css", array(), "", "all" );

  }
}
add_action("wp_enqueue_scripts", "mytheme_enqueue_scripts", 999);
