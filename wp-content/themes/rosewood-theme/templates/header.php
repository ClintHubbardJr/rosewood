<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="navbar-header visible-xs">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
  </div>

  <nav class="collapse navbar-collapse" role="navigation">
    <div class="nav-left">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </div>
    <a class="navbar-brand-2 hidden-xs" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <div class="nav-right">
      <?php
        if (has_nav_menu('primary_navigation_right')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation_right', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </div>
  </nav>
</header>
