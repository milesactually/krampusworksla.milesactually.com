<header class="site-header">
  <div class="page-wrap">
      <div class="title-area">
        <div class="wrap">
      <a class="brand" href="<?= esc_url(home_url('/')); ?>">
      <img src="<?= get_template_directory_uri(); ?>/dist/images/header_image.png">
          <h1><span>krampus</span><span>works</span><span>la</span></h1></a>
          <p><?php bloginfo('description'); ?></p>
        </div>
      </div>
        <nav class="nav-primary">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
          ?>
        </nav>
      <!-- <span class="fa fa-bars" id="nav-toggle"></span> -->
    </div>
</header>
