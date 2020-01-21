<?php
// Register Menus
/*register_nav_menus(array(
  'primary' => __( 'Primary Navigation', 'mytheme' ),
  'footer' => __('Footer Navigation', 'mytheme')
));*/


if( function_exists('acf_add_options_sub_page') )
{
    acf_add_options_sub_page(array(
        'title' => 'Header',
        'parent' => 'edit.php?post_type=page',
        'capability' => 'edit_posts'
    ));
    acf_add_options_sub_page(array(
        'title' => 'Footer',
        'parent' => 'edit.php?post_type=page',
        'capability' => 'edit_posts'
    ));
}


add_theme_support( 'post-thumbnails' );


//add_action('init', 'custom_post_type_videos');

add_action('init', 'custom_post_type_brands');
function custom_post_type_brands()
{
  $labels = array(
    'name' => _x('brands', 'post type general name'),
    'singular_name' => _x('brands', 'post type singular name'),
    'add_new' => _x('Add New', 'Brand'),
    'add_new_item' => __('Add New Brand'),
    'edit_item' => __('Edit Brand'),
    'new_item' => __('New Brand'),
    'view_item' => __('View Brand'),
    'search_items' => __('Search Brand'),
    'not_found' =>  __('No Brands found'),
    'not_found_in_trash' => __('No Brands found in Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'Brands'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'capability_type' => 'post',
    'rewrite' => array('slug'=>'brand'),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-admin-users',
    'supports' => array('title','editor','author','thumbnail')
  );
  register_post_type('brand',$args);
}

//Add in videos custom post type
add_action('init', 'custom_post_type_videos');
function custom_post_type_videos()
{
  $labels = array(
    'name' => _x('videos', 'post type general name'),
    'singular_name' => _x('videos', 'post type singular name'),
    'add_new' => _x('Add New', 'Video'),
    'add_new_item' => __('Add New Video'),
    'edit_item' => __('Edit Video'),
    'new_item' => __('New Video'),
    'view_item' => __('View Video'),
    'search_items' => __('Search Video'),
    'not_found' =>  __('No Videos found'),
    'not_found_in_trash' => __('No Videos found in Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'Videos'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'capability_type' => 'post',
    'rewrite' => array('slug'=>'videos'),
    'has_archive' => true,
    'hierarchical' => false,
    'taxonomies' => array(),
    'menu_icon' => 'dashicons-video-alt2',
    'supports' => array('title','editor','author')
  );
  register_post_type('videos',$args);
}

//Add in videos custom post type
add_action('init', 'custom_post_type_press');
function custom_post_type_press()
{
  $labels = array(
    'name' => _x('press', 'post type general name'),
    'singular_name' => _x('press', 'post type singular name'),
    'add_new' => _x('Add New', 'press'),
    'add_new_item' => __('Add New press'),
    'edit_item' => __('Edit press'),
    'new_item' => __('New press'),
    'view_item' => __('View press'),
    'search_items' => __('Search press'),
    'not_found' =>  __('No press found'),
    'not_found_in_trash' => __('No press found in Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'press'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'capability_type' => 'post',
    'rewrite' => array('slug'=>'press'),
    'has_archive' => true,
    'hierarchical' => false,
    'taxonomies' => array(),
    'menu_icon' => 'dashicons-text-page',
    'supports' => array('title','editor','author','thumbnail')
  );
  register_post_type('press',$args);
}

// split content at the more tag and return an array
function split_content() {
	global $more;
	$more = true;
	$content = preg_split('/<span id="more-\d+"><\/span>/i', get_the_content('more'));
	for($c = 0, $csize = count($content); $c < $csize; $c++) {
		$content[$c] = apply_filters('the_content', $content[$c]);
	}
	return $content;
}

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "/images/default.jpg";
  }
  return $first_img;
}

// Menu fallback
function mytheme_menu_fallback() {
  $page_menu_html = wp_page_menu(array(
    'depth' => 1,
    'container' => 'nav',
    'menu_class' => 'temp',
    'echo' => false,
    'show_home' => false,
    'items_wrap' => '%3$s',
    'before' => '',
    'after' => ''
  ));
  $page_menu_html = str_replace('<nav class="temp">', '', $page_menu_html);
  $page_menu_html = str_replace('</nav>', '', $page_menu_html);
  echo $page_menu_html;
}

if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
    function mytheme_register_nav_menu(){
        /*register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ) );*/
        register_nav_menus( array(
        'hayon-menu' => esc_html__( 'Primary', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}

function SearchFilter($query) {
  if ($query->is_search) {
    $query->set('cat','4');
  }
  return $query;
}

if(!is_admin())
  add_filter('pre_get_posts','SearchFilter');
