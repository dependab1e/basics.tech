	<div class="row">
	<?php
	foreach(get_posts(['post_type'=>'realty', 'numberposts'=>$args['limit'], 'orderby'=>'ID', 'order'=>'DESC', 'meta_query' => array(array('key' => 'cities2w', 'value' => $args['cityname'])),]) as $r)
	{
		echo '<div class="col col-6 col-sm-4 col-md-3 object"><a href="'.get_permalink($r->ID).'">';
		echo get_the_post_thumbnail( $r, 'thumbnail' );
		echo '<h3 class="h6">', $r->post_title, '</h3></a>
			<div class="params" style="font-size:80%">';
		get_template_part( 'objects-params', null, ['ID' => $r->ID] );
		echo '</div>
		</div>';
	}
	?>
    </div>
