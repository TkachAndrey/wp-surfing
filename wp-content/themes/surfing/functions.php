<?php 

add_action( 'wp_enqueue_scripts', 'surfing_scripts' );


/* Подключение стилей и скриптов  */
function surfing_scripts() {

	// reboot.css
	wp_enqueue_style( 'surfing-reboot', 
		get_template_directory_uri() . '/libs/bootstrap-reboot/bootstrap-reboot.min.css');

	// main.css
	wp_enqueue_style(
		'surfing-main', 
		get_stylesheet_uri()
	);

	// google-fonts
	wp_enqueue_style(
		'surfing-reboot', 'https://fonts.googleapis.com/css?family=Fira+Sans|Playfair+Display:400,700|Poppins:300&display=swap'
	);
	
	// font League Spartan.css
	wp_enqueue_style(
		'surfing-leagueSpartan', 
		get_template_directory_uri() . '/fonts/LeagueSpartan-Bold/LeagueSpartan.css'
	);

	// owlCarousel.min.css
	wp_enqueue_style(
		'surfing-owlCarousel', 
		get_template_directory_uri() . '/libs/owl-carousel-2/owl.carousel.min.css'
	);

	// owlCarousel.theme.css
	wp_enqueue_style(
		'surfing-themeOwlCarousel', 
		get_template_directory_uri() . '/libs/owl-carousel-2/owl.theme.default.min.css'
	);

	
	// jqurey.js
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js');
	wp_enqueue_script('jquery');

	// jqurey.js
	// wp_enqueue_script(
	// 	'jquery', 
	// 	get_template_directory_uri() . '/js/jquery-3.4.1.min.js',
	// 	array(),
	// 	'',
	// 	true
	// );

	// owlCarousel.js
	wp_enqueue_script(
		'owlCarousel', 
		get_template_directory_uri() . '/libs/owl-carousel-2/owl.carousel.min.js',
		array('jquery'),
		'',
		true
	);

	// main.js
	wp_enqueue_script(
		'mainJS', 
		get_template_directory_uri() . '/js/main.js',
		array('jquery', 'owlCarousel'),
		'',
		true
	);



}


/*  Регистрация кастомного типа постов с Бордами  */
add_action('init', 'register_post_types');

function register_post_types(){
	
	$cptArgsArray = array(
		'labels'             => array(
			'name'               => 'Серф-Борды', // Основное название типа записи
			'singular_name'      => 'Серф-Борд', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый борд',
			'edit_item'          => 'Редактировать борд',
			'new_item'           => 'Новый борд',
			'view_item'          => 'Посмотреть борд',
			'search_items'       => 'Найти борд',
			'not_found'          => 'Бордов не найдено',
			'not_found_in_trash' => 'В корзине не найдено ни одного борда',
			'parent_item_colon'  => '',
			'menu_name'          => 'Борды'

		  ),

		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array(
									'title',
									// 'editor',
									// 'author',
									'thumbnail',
									// 'excerpt',
									// 'comments'
								)
	);

	register_post_type('boards', $cptArgsArray);
}



/* Поддержка картинок Превью */
add_theme_support( 'post-thumbnails' );

if( function_exists('add_image_size') ){
	add_image_size('board-slider', 122, 420, true);
}


// function_exists('add_image_size'){

// }
















?>