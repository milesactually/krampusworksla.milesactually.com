<?php 

	//echo '<div id="home-overlay-wrap"></div>';	
	if (is_active_sidebar('sidebar-home-1') ) {
		dynamic_sidebar('sidebar-home-1');
	}
	if  (is_active_sidebar('sidebar-home-2') ) {
		dynamic_sidebar('sidebar-home-2');
	 }	
	if  (is_active_sidebar('sidebar-home-3') ) {
		dynamic_sidebar('sidebar-home-3');
	}	
	if  (is_active_sidebar('sidebar-home-4') ) {
		dynamic_sidebar('sidebar-home-4');
	} ?>
		<section id="product-widget">
			<?php
			// Setup your custom query
			$args = array( 'post_type' => 'product', 'posts_per_page' => 6 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

			    <div class="widget">
				    <div class="widget-wrap">
				    	<div class="widget-content">
						    <a href="<?php echo get_permalink( $loop->post->ID ) ?>">
							    <?php the_post_thumbnail('shop_catalog'); ?>
							</a>
					        <h3><?php the_title(); ?></h3>
						    <a href="<?php echo get_permalink( $loop->post->ID ) ?>">
						    	<button class="btn btn-primary center-block">More Info</button>
						    </a>
					    </div>
				    </div>
			    </div>

			<?php endwhile; wp_reset_query(); // Remember to reset ?>
		</section>
	<?php //echo '</div>';

?>

