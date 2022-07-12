<?php
ini_set('display_errors', 1);
// add new custom post type "realty"
add_action( 'init', function(){
    register_post_type( 'realty',
        array(
            'labels' => array(
                'name' => __( 'Недвижимость' ),
                'singular_name' => __( 'Недвижимость' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'realty'),
            'show_in_rest' => true,
            'capability_type' => 'post',
			'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies' => array( 'rtype' ),
		)
    );

	$labels = array(
	  'name' => 'Тип недвижимости',
	);
	register_taxonomy('rtype', array('realty'), array(
	    'hierarchical' => true,
	    'labels' => $labels,
	    'show_ui' => true,
	    'show_in_rest' => true,
	    'show_admin_column' => true,
	    'query_var' => true,
	    'rewrite' => array( 'slug' => 'rtype' ),
	  ));

});

// add realty gallery popup script
add_action( 'init', function(){
	wp_enqueue_script('fancybox', get_stylesheet_directory_uri() . '/fancybox/fancybox3.js', ['jquery'], false, true );
    wp_enqueue_style( 'fancybox', get_stylesheet_directory_uri() . '/fancybox/fancybox3.min.css' );
	add_action('wp_footer', function() { ?>
    <script>jQuery(function($) { $("[data-fancybox]").fancybox({animationEffect:'zoom-in-out'}) })</script>
	<?php });
});

// show realty params on right sidebar
add_shortcode('object-params', function() {
	if (!is_singular( 'realty' ) ) return;
	get_template_part( 'objects-params', null, ['ID' => $GLOBALS['wp_query']->post->ID] );
});

// обработка формы добавления объекта на главной
add_action( 'wp_ajax_addNewObject', function() {
	check_ajax_referer( 'addNewObject', 'nonce' );
	$post = [
          'post_title'    => sanitize_text_field( $_POST['title'] ),
          'post_content'  => $_POST['desc'],
          'post_status'   => 'draft',
          'post_category' => [ $_POST['rtype'] ],
          'post_type'     => 'realty'
	];
	$post_id = wp_insert_post( $post );
	if($post_id) {
		update_post_meta( $post_id, 'cities2w', $_POST['city2w'] );
		wp_send_json_success('<a href="/wp-admin/post.php?post=' .$post_id. '&action=edit" target="_blank">Объект</a> добавлен успешно!');
	}
	else wp_send_json_error('Не удалось добавить объект ' . print_r($post, 1));
	die();
});