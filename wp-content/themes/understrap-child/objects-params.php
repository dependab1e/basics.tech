<?php
		$meta = get_post_meta($args['ID'], 'area', 1);
		if($meta) echo '<div><b>Площадь:</b> '.$meta.' м<sup>2</sup></div>';
		$meta = get_post_meta($args['ID'], 'price', 1);
		if($meta) echo '<div><b>Цена:</b> '.$meta.' руб.</div>';
		$meta = get_post_meta($args['ID'], 'address', 1);
		if($meta) echo '<div><b>Адрес:</b> '.$meta.'</div>';
		$meta = get_post_meta($args['ID'], 'areal', 1);
		if($meta) echo '<div><b>Жилая площадь:</b> '.$meta.' м<sup>2</sup></div>';
		$meta = get_post_meta($args['ID'], 'floor', 1);
		if($meta) echo '<div><b>Этаж:</b> '.$meta.'</div>';
