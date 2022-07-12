<?php
/*
Plugin Name: База городов
Description: Добавляет cutom post type "city" и позволяет выбирать город для cutom post type "realty"
Author: Dependab1e
*/

add_action( 'init', function(){
    register_post_type( 'city',
        array(
            'labels' => array(
                'name' => __( 'Города' ),
                'singular_name' => __( 'Город' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'city'),
            'show_in_rest' => false,
            'capability_type' => 'post',
			'supports' => array( 'title', 'thumbnail', 'custom-fields', 'editor'),
		)
    );
});


add_action( 'add_meta_boxes', function(){
    add_meta_box( 'cities2w', 'Город', 'cities2wcallback', 'realty', 'normal', 'high' );
});

function cities2wcallback($post)
{
	$current = get_post_meta( $post->ID, 'cities2w', 1 );
	$html = '<div class="inside acf-fields"><div class="acf-field is-required"><div class="acf-label"><label>Выберите город: </label></div>&nbsp;<select name="city2w" required>';
	foreach(get_posts(['post_type'=>'city', 'numberposts'=>'-1', 'orderby'=>'post_title', 'order'=>'ASC']) as $city)
	{
		$html.= '<option ' . (($current==$city->post_title)?'selected>':'>') . $city->post_title . '</option>';
	}
	echo $html . '</select></div></div>';

}

add_action( 'save_post_realty', function( $post_id ){
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if( !current_user_can( 'edit_post' ) ) return;
	if( isset( $_POST['city2w'] ) ) update_post_meta( $post_id, 'cities2w', $_POST['city2w'] );
});