<?php 

	if ( !is_active_sidebar('sidebar-home-1') ) {
	    get_template_part('templates/page', 'header'); 
		get_template_part('templates/content', 'page');
	}
	if  (is_active_sidebar('sidebar-home-1') ) {
		dynamic_sidebar('sidebar-home-1');
	}

?>
