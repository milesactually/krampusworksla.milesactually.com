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