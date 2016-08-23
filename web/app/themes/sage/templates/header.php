<header class="banner">
  <div class="container">
      <div class="title-area">
        <h1><a class="brand" href="<?= esc_url(home_url('/')); ?>"><span>krampus</span><span>works</span><span>la</span></a></h1>
        <p><?php bloginfo('description'); ?></p>
      </div>
      <div class="header-nav">
        <nav class="nav-primary">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
          ?>
        </nav>
      </div>
      <span class="fa fa-bars" id="nav-toggle"></span>
    </div>
</header>
