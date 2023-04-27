<?php

/*************** MENU ***************/
add_action('init', 'register_menu');
function register_menu()
{
  register_nav_menus(array(
    'main-nav' => esc_html__('Menu Główne', 'signatigps'),
    'footer-menu' => esc_html__('Menu Stopka', 'signatigps'),
    'footer-documents' => esc_html__('Stopka dokumenty', 'signatigps'),
  ));
}
