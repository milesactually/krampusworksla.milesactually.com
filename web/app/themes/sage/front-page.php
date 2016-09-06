<?php 
	echo '<div class="home-sections">';
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
	} 
	/*<section id="product-widget">
		<h1 style="margin-bottom: 20px;">Current Inventory</h1>
		<div class-"wrap">
		<?php
		// Setup your custom query
		$args = array( 'post_type' => 'product', 'posts_per_page' => 6 );
		$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
		    <div class="widget">
		    	<div class="widget-content">
				    <a href="<?php echo get_permalink( $loop->post->ID ) ?>">
					    <?php the_post_thumbnail('shop_catalog'); ?>
					</a>
			        <h3><?php the_title(); ?></h3>
				    <a href="<?php echo get_permalink( $loop->post->ID ) ?>">
				    	<button class="btn btn-primary btn-xs center-block">More Info</button>
				    </a>
			    </div>
		    </div>
		<?php endwhile; wp_reset_query(); // Remember to reset ?>
		</div>
	</section>
	*/ ?>
	</div>
	<div class="wrap">
		<a href="/shop"><button class="lg">Shop for Masks</button></a>
	</div>	
<?php ?>

