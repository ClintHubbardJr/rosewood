<?php
function register_my_menu() {
  register_nav_menu('primary_navigation_right',__( 'Primary Navigation Right' ));
}
add_action( 'init', 'register_my_menu' );
