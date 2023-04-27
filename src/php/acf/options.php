<?php
if (function_exists('acf_add_options_page')) {
	$parent = acf_add_options_page(array(
		'page_title'  => 'Pola powtarzalne',
		'menu_title'  => 'Pola powtarzalne',
		'menu_slug'   => 'repeat',
		'capability'  => 'edit_posts',
		'redirect'    => true
	));
	$header = acf_add_options_sub_page(
		array(
			'page_title' => 'Header',
			'menu_title' => 'Header',
			'parent_slug' => 'repeat'
		)
	);
	$vehicles = acf_add_options_sub_page(
		array(
			'page_title' => 'Sekcja wybierz pojazd',
			'menu_title' => 'Sekcja wybierz pojazd',
			'parent_slug' => 'repeat'
		)
	);
	$for_whom = acf_add_options_sub_page(
		array(
			'page_title' => 'Sekcja dla kogo',
			'menu_title' => 'Sekcja dla kogo',
			'parent_slug' => 'repeat'
		)
	);
	$functionalities = acf_add_options_sub_page(
		array(
			'page_title' => 'Funkcjonalność',
			'menu_title' => 'Funkcjonalność',
			'parent_slug' => 'repeat'
		)
	);
	$faq = acf_add_options_sub_page(
		array(
			'page_title' => 'FAQ',
			'menu_title' => 'FAQ',
			'parent_slug' => 'repeat'
		)
	);
	$contact = acf_add_options_sub_page(
		array(
			'page_title' => 'Formularz - stopka',
			'menu_title' => 'Formularz - stopka',
			'parent_slug' => 'repeat'
		)
	);
	$contact_info = acf_add_options_sub_page(
		array(
			'page_title' => 'Stopka - dane kontaktowe',
			'menu_title' => 'Stopka - dane kontaktowe',
			'parent_slug' => 'repeat'
		)
	);
}
