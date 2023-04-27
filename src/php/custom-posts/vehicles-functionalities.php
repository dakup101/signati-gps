<?php
// Register Custom Post Type
function register_vehicles_post_type()
{

	$labels = array(
		'name'                  => _x('Funkcjonalności pojazdów', 'Post Type General Name', 'text_domain'),
		'singular_name'         => _x('Funkcjonalność pojazdu', 'Post Type Singular Name', 'text_domain'),
		'menu_name'             => __('Funkcjonalności pojazdów', 'text_domain'),
		'name_admin_bar'        => __('Funkcjonalności pojazdów', 'text_domain'),
		'archives'              => __('Archiwum', 'text_domain'),
		'attributes'            => __('Atrybuty', 'text_domain'),
		'parent_item_colon'     => __('Rodzic', 'text_domain'),
		'all_items'             => __('Wszystkie', 'text_domain'),
		'add_new_item'          => __('Dodaj', 'text_domain'),
		'add_new'               => __('Dodaj', 'text_domain'),
		'new_item'              => __('Nowy', 'text_domain'),
		'edit_item'             => __('Edytuj', 'text_domain'),
		'update_item'           => __('Aktualizuj', 'text_domain'),
		'view_item'             => __('Pokaż', 'text_domain'),
		'view_items'            => __('Pokaż', 'text_domain'),
		'search_items'          => __('Szukaj', 'text_domain'),
		'not_found'             => __('Brak', 'text_domain'),
		'not_found_in_trash'    => __('Brak', 'text_domain'),
		'featured_image'        => __('Wyróżniony obraz', 'text_domain'),
		'set_featured_image'    => __('Ustaw wyróżniony obrazk', 'text_domain'),
		'remove_featured_image' => __('Usuń wyróżniony obraz', 'text_domain'),
		'use_featured_image'    => __('Użyj jako wyróżniony obraz', 'text_domain'),
		'insert_into_item'      => __('Wstaw', 'text_domain'),
		'uploaded_to_this_item' => __('Załadowano', 'text_domain'),
		'items_list'            => __('Lista', 'text_domain'),
		'items_list_navigation' => __('Nawigacja listy', 'text_domain'),
		'filter_items_list'     => __('Filtruj', 'text_domain'),
	);
	$args = array(
		'label'                 => __('Funkcjonalność pojazdu', 'text_domain'),
		'labels'                => $labels,
		'supports'              => array('title', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-car',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type('vehicle', $args);
}
add_action('init', 'register_vehicles_post_type', 0);
