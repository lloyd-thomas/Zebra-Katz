<?php
$categories = get_the_category();
$separator = ' ';
$output = '';
if ( ! empty( $categories ) ) {
		foreach( $categories as $category ) {
				$output .= esc_html( $category->slug ).$separator;
		}
		$category_filters = trim( $output, $separator );
}
 ?>

<section class="wrapper bg-white filter_<?php echo $category_filters ?>" style="-webkit-clip-path: url(#mask3);clip-path: url(#mask3)">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content" data-aos="fade-left">
		<?php	the_content();
		$link = get_field('call_to_action');
		if( $link ):
		    $link_url = $link['url'];
		    $link_title = $link['title'];
		    $link_target = $link['target'] ? $link['target'] : '_self';
		    ?>
    <div class="text-center"><div class="p-b text-upper">
			<a class="btn underline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>&nbsp;&#8608;</a>
		</div>
	</div>
<?php endif; ?>

	</div>
	</div>
</article>
</section>
