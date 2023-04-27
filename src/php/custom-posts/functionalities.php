<?php
// Register Custom Post Type
function functionalities()
{

    $labels = array(
        'name'                  => _x('Funkcjonalności', 'Post Type General Name', 'signati-gps'),
        'singular_name'         => _x('Funkcjonalność', 'Post Type Singular Name', 'signati-gps'),
        'menu_name'             => __('Funkcjonalności', 'signati-gps'),
        'name_admin_bar'        => __('Funkcjonalności', 'signati-gps'),
        'archives'              => __('Funkcjonalności', 'signati-gps'),
        'attributes'            => __('Atrybuty', 'signati-gps'),
        'parent_item_colon'     => __('Rodziciel', 'signati-gps'),
        'all_items'             => __('Wszystko', 'signati-gps'),
        'add_new_item'          => __('Nowa', 'signati-gps'),
        'add_new'               => __('Nowa', 'signati-gps'),
        'new_item'              => __('Nowa', 'signati-gps'),
        'edit_item'             => __('Edytuj', 'signati-gps'),
        'update_item'           => __('Aktualizuj', 'signati-gps'),
        'view_item'             => __('Pokaż', 'signati-gps'),
        'view_items'            => __('Wszystko', 'signati-gps'),
        'search_items'          => __('Szukaj', 'signati-gps'),
        'not_found'             => __('Brak', 'signati-gps'),
        'not_found_in_trash'    => __('Brak', 'signati-gps'),
        'featured_image'        => __('Ikonka', 'signati-gps'),
        'set_featured_image'    => __('Ustaw ikonkę', 'signati-gps'),
        'remove_featured_image' => __('Usuń ikonkę', 'signati-gps'),
        'use_featured_image'    => __('Użyj jako ikonkę', 'signati-gps'),
        'insert_into_item'      => __('Wstaw', 'signati-gps'),
        'uploaded_to_this_item' => __('Załadowano', 'signati-gps'),
        'items_list'            => __('Lista', 'signati-gps'),
        'items_list_navigation' => __('Nawigacja', 'signati-gps'),
        'filter_items_list'     => __('Filtruj', 'signati-gps'),
    );
    $args = array(
        'label'                 => __('Funkcjonalność', 'signati-gps'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-generic',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('func', $args);
}
add_action('init', 'functionalities', 0);
