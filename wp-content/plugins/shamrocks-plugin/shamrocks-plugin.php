<?php
/*
Plugin Name: Site plugin for ecshamrocksbasketball.com
Description: Site specific code changes for ecshamrocksbasketball.com
*/

function sh_postsbycategory() {
	$the_query = new WP_Query( array( 'category_name' => 'shamrocks', 'posts_per_page' => 10) );

	if ( $the_query->have_posts() ) {
		$string .= '<div class="postsbycategory widget_recent_entries"><hr />';
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			if ( has_post_thumbnail() ) {
				$string .= '<li>';
				$string .= '<a href="' . get_the_permalink() . '" rel="bookmark"> . get_the_post_thumbnail($post_id, array( 50, 50) )' . get_the_title() .'</a></li>';
			} else {
				$string .= '<h3><a=href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() . '</a></h3>';
				$string .= '<p>' . get_the_content() .'</p><hr />';
			}
		}
	} else {
		// No posts found
	}
	$string .= '</div>';

	return $string;

	wp_reset_postdata();
}

// Add a shortcode
add_shortcode('sh_categoryposts', 'sh_postsbycategory');

// Enable a shortcode in text widgets
add_filter('widget_text', 'do_shortcode');

?>
