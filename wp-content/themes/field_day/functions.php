<?php



if (function_exists('acf_add_options_sub_page')) {
	if( function_exists('acf_add_options_page') ) {
 		acf_add_options_page(); // necessary for v.5 :-/
	}
	acf_add_options_sub_page( 'Header' );
	acf_add_options_sub_page( 'Footer' );
} 

add_theme_support( 'post-thumbnails', array('post', 'page') );

add_filter('tribe_events_pre_get_posts', 'filter_tribe_all_occurences', 100);

function filter_tribe_all_occurences ($wp_query) {

	if ( !is_admin() )  {

		$new_meta = array();
		$today = new DateTime();

		// Join with existing meta_query
		if(is_array($wp_query->meta_query))
			$new_meta = $wp_query->meta_query;

		// Add new meta_query, select events ending from now forward
		$new_meta[] = array(
			'key' => '_EventEndDate',
			'type' => 'DATETIME',
			'compare' => '>=',
			'value' => $today->format('Y-m-d H:i:s')
		);

		$wp_query->set( 'meta_query', $new_meta );
	}

	return $wp_query;
}

register_nav_menu( 'primary', __( 'Primary Menu', 'field_day' ) );
register_nav_menu( 'secondary',__( 'Secondary Menu', 'field_day') );
