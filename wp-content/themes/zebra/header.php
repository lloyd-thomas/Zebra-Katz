<?php
  $page = get_queried_object();

//get URL segment and pass it into class

  $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $uri_segments = explode('/', $uri_path);

  $my_class =  $uri_segments[1];


?>
<!DOCTYPE html>
<!--[if lte IE 11]><html <?php language_attributes(); ?> class="no-js lte-ie11"> <![endif]-->
<!--[if gte IE 11]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="cleartype" content="on">
  <?php wp_head(); ?>



  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <?php
	// Connect to the Browsersync server
	$dev_hostname = "zebra.test";
	if( (strpos($_SERVER['SERVER_NAME'], ".") === false) || ($_SERVER['SERVER_NAME'] === $dev_hostname) ) {
		echo "<script type=\"text/javascript\" id=\"__bs_script__\">document.write(\"<script async src='http://HOST:3000/browser-sync/browser-sync-client.js'><\/script>\".replace(\"HOST\", window.location.hostname));</script>";
	}
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157146311-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157146311-1');
</script>

</head>



<body>
  <header>
    <div class="page-width">
      <div class="header-strip-wrapper">
        <div class="anim1">
          <?php include get_template_directory() . '/parts/snippets/social-icons.php'; ?>
        </div>
        <div class="anim2">
          <div id="mobile-menu">
            <div id="open-menu" class="mobile-btn-wrapper"><div class="icon-burger"></div></div>
            <div id="close-menu" class="mobile-btn-wrapper"><div class="icon-close"></div></div>
          </div>
          <?php include get_template_directory() . '/parts/snippets/mailchimp.php'; ?>
        </div>
      </div>
    </div>
  </header>
  <div id="hero" class="page-width">
    <div id="logo" class="logo-wrapper">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-zebrakatz-animated.svg">
    </div>
  </div>
  <div id="menu">

    <ul id="filter-options">
      <?php
      if(is_page_template( 'page-home.php' )){
        ?>
      <li><input type="checkbox" value="filter_music" id="filter-music" data-filter_id="music"><label for="filter-music">Music</label></li>
      <li><input type="checkbox" value="filter_video" id="filter_video" data-filter_id="videos"><label for="filter-video">Videos</label></li>
      <li><input type="checkbox" value="filter_merchandise" id="filter_merchandise" data-filter_id="merchandise"><label for="filter-merchandise">Merchandise</label></li>
      <li><input type="checkbox" value="filter_photos" id="filter_photos" data-filter_id="Photos"><label for="filter-photos">Photos</label></li>
      <li><a class="btn" href="/about">About</a></li>
    <?php }else{ ?>
      <li><a href="<?php echo home_url(); ?>/#music">Music</a></li>
      <li><a href="<?php echo home_url(); ?>/#videos">Videos</a></li>
      <li><a href="<?php echo home_url(); ?>/#merchandise">Merchandise</a></li>
      <li><a href="<?php echo home_url(); ?>/#photos">Photos</a></li>
      <li><a class="btn">About</a></li>
  <?php  } ?>
    </ul>
  </div>
