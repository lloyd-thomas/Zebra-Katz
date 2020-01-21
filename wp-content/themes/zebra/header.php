<?php
  $page = get_queried_object();

//get URL segment and pass it into class

  $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $uri_segments = explode('/', $uri_path);

  $my_class =  $uri_segments[1];


?><!DOCTYPE html>
<!--[if lte IE 11]><html <?php language_attributes(); ?> class="no-js lte-ie11"> <![endif]-->
<!--[if gte IE 11]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="cleartype" content="on">
<?php wp_head(); ?>

<?php
	// Connect to the Browsersync server
	$dev_hostname = "zebra.test";
	if( (strpos($_SERVER['SERVER_NAME'], ".") === false) || ($_SERVER['SERVER_NAME'] === $dev_hostname) ) {
		echo "<script type=\"text/javascript\" id=\"__bs_script__\">document.write(\"<script async src='http://HOST:3000/browser-sync/browser-sync-client.js'><\/script>\".replace(\"HOST\", window.location.hostname));</script>";
	}
?>
</head>



<body <?php body_class($my_class); ?>>
  <header>
    <div class="page-width">
      <?php include get_template_directory() . '/parts/snippets/social-icons.php'; ?>
    </div>
  </header>
<div class="page-width">

	<div id="logo" class="rellax">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-zebrakatz.svg">
  </div>
</div>
