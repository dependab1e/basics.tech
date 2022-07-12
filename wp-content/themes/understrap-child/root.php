<div class="rootList">
<?php
foreach(get_posts(['post_type'=>'city', 'numberposts'=>'-1', 'orderby'=>'post_title', 'order'=>'ASC']) as $city)
{
	echo '<div class="city"><a href="'.get_permalink($city->ID).'">';
	echo get_the_post_thumbnail( $city, 'thumbnail' );
	echo '<h2>', $city->post_title, '</h2></a>';
	get_template_part( 'objects-list', null, ['cityname' => $city->post_title, 'limit' => 4] );
	?>
    </div>
<?php
}
?>
</div>
<style>
.row {clear:both; padding-top:10px;}
.rootList .city {margin-bottom:3%;}
.rootList .city:after {content:''; display:block; clear:both;}
.rootList .city a {color:#000;}
.rootList .city > a > .wp-post-image {float:left; margin-right:3%; width:80px;}
.rootList .city > a > h2 {padding-top: 16px; color:blueviolet;}
</style>

<hr>
<h3>Добавить новый объект</h3>
<form id="addNewObject">
<input type="text" class="form-control mb-3" placeholder="Наименование" value="" name="title" required>
<textarea name="desc" class="form-control mb-3" placeholder="Описание объекта" ></textarea>
<label class="form-label">Выберите город</label>
<select name="city2w" required class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg"><option value="">...</option>
<?php foreach(get_posts(['post_type'=>'city', 'numberposts'=>'-1', 'orderby'=>'post_title', 'order'=>'ASC']) as $city) echo '<option>' . $city->post_title . '</option>'; ?>
</select>

<label class="form-label">Выберите тип</label>
<select name="rtype" required class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg"><option value="">...</option>
<?php foreach(get_terms( array('taxonomy' => 'rtype','hide_empty' => false,)) as $type) echo '<option value="' .$type->term_id. '">' . $type->name . '</option>'; ?>
</select>
<div class="mb-3">
<?php if(is_user_logged_in()) echo '<button type="submit" class="btn btn-primary">Добавить</button>';
else echo '<div class="alert alert-danger" role="alert">Вам нужно авторизоваться, прежде чем добавлять объект</div>'; ?>
</div>
<input type="hidden" name="action" value="addNewObject">
<input type="hidden" name="nonce" value="<?php echo wp_create_nonce('addNewObject') ?>">
</form>

<script>
jQuery(function($) {
	$('#addNewObject').on('submit', function(e) {
		e.preventDefault();
		$(this).find('button,[type=submit]').css({visibility:'hidden'});
		var formData = new FormData(this);
		//formData.append('picture', $('input[type=file]')[0].files[0]);
		$.ajax({url:'<?php echo admin_url('admin-ajax.php') ?>', type:'post', data:formData, form:this, processData:false, contentType:false, dataType:'json'}).done(function(r){
			$(this.form).append(r.data).find('button').css({visibility:'visible'});
		});
		return false;
	});
});
</script>