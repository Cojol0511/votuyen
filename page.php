<?php
	$queried_object = get_queried_object();
	$page_name = $queried_object->post_name;
	$parent_id = $queried_object->post_parent;

	// var_dump($page_name);
	if($parent_id == 0){
		ob_start();
		get_template_part( 'partials/loop', $page_name );
		$out = ob_get_contents();
		ob_clean();
		ob_end_flush();
		if($out){
			echo $out;
		} 
		else{
			get_template_part( 'partials/loop', 'default' );
		}
	}
?>