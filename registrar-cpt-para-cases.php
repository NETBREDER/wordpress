// Registra o custom post type Case

function slug_custom_post_type() {
    register_post_type('apprank_case',
        array(
            'labels'      => array(
                'name'          => __('Cases', 'textdomain'),
                'singular_name' => __('Case', 'textdomain'),
            ),
                'hierarchical'        => false,
		'capability_type'     => 'post',
                'public'      => true,
                'has_archive' => true,
		'rewrite' => array('slug' => 'case'),
            	'show_in_rest' => true,
                'supports' => array( 'title', 'editor', 'thumbnail'),
        	'show_ui'             => true,
                'show_in_menu'        => true,
                'show_in_nav_menus'   => true,
                'show_in_admin_bar'   => true,
                'menu_position'       => 5,
                'can_export'          => true,
                'exclude_from_search' => false,
                'publicly_queryable'  => true,
        )
    );
}
add_action('init', 'slug_custom_post_type');
