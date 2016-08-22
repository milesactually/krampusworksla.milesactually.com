<?php 

	if ( !is_active_sidebar('sidebar-home-1') && !is_active_sidebar('sidebar-home-2') && !is_active_sidebar('sidebar-home-3') && !is_active_sidebar('sidebar-home-4') ) {
	    get_template_part('templates/page', 'header'); 
		get_template_part('templates/content', 'page');
	}
	if  (is_active_sidebar('sidebar-home-1') ) {
		?><div id="home-overlay-wrap"><?php
		dynamic_sidebar('sidebar-home-1');
		?></div> <?php }
	if  (is_active_sidebar('sidebar-home-2') ) {
		dynamic_sidebar('sidebar-home-2');
		 }	
	if  (is_active_sidebar('sidebar-home-3') ) {
		dynamic_sidebar('sidebar-home-3');
		}	
	if  (is_active_sidebar('sidebar-home-4') ) {
		dynamic_sidebar('sidebar-home-4');
		}					
?>
