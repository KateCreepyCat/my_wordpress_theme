<?php
add_action( 'wp_enqueue_scripts', 'bootstrap_css' );
add_action( 'wp_footer', 'bootstrap_js' );
add_action( 'after_setup_theme', 'nav_menu' );
add_action( 'after_setup_theme', 'theme_support' );
add_action( 'init', 'register_post_types' );
add_action( 'acf/init', 'generated_by_acf' );

function generated_by_acf() {
	acf_add_local_field_group( array(
		'key'                   => 'group_62028075117c7',
		'title'                 => 'Listing',
		'fields'                => array(
			array(
				'key'               => 'field_620280c541dff',
				'label'             => 'Price',
				'name'              => 'price',
				'type'              => 'number',
				'instructions'      => 'Specify a price',
				'required'          => 1,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
				'min'               => 0,
				'max'               => '',
				'step'              => '',
			),
			array(
				'key'               => 'field_620281d241e00',
				'label'             => 'Size category',
				'name'              => 'size_category',
				'type'              => 'radio',
				'instructions'      => '',
				'required'          => 1,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'choices'           => array(
					'Small'  => 'Small',
					'Medium' => 'Medium',
					'Large'  => 'Large',
				),
				'allow_null'        => 1,
				'other_choice'      => 0,
				'default_value'     => '',
				'layout'            => 'vertical',
				'return_format'     => 'value',
				'save_other_choice' => 0,
			),
			array(
				'key'               => 'field_620283a041e01',
				'label'             => 'Size',
				'name'              => 'size',
				'type'              => 'radio',
				'instructions'      => '',
				'required'          => 1,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'choices'           => array(
					'1\'\'x1\'\''   => '1\'\'x1\'\'',
					'2\'\'x2\'\''   => '2\'\'x2\'\'',
					'5\'\'x5\'\''   => '5\'\'x5\'\'',
					'10\'\'x10\'\'' => '10\'\'x10\'\'',
				),
				'allow_null'        => 1,
				'other_choice'      => 1,
				'save_other_choice' => 1,
				'default_value'     => '',
				'layout'            => 'vertical',
				'return_format'     => 'value',
			),
			array(
				'key'               => 'field_6202847941e02',
				'label'             => 'Formats',
				'name'              => 'formats',
				'type'              => 'checkbox',
				'instructions'      => '',
				'required'          => 1,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'choices'           => array(
					'DST' => 'DST',
					'PEC' => 'PEC',
					'PES' => 'PES',
				),
				'allow_custom'      => 1,
				'save_custom'       => 1,
				'default_value'     => array(),
				'layout'            => 'vertical',
				'toggle'            => 0,
				'return_format'     => 'value',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'listing',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => '',
		'active'                => true,
		'description'           => '',
		'show_in_rest'          => 0,
	) );
}

function register_post_types() {
	register_post_type( 'listing', [
		'label'               => null,
		'labels'              => [
			'name'               => 'Листинги', // основное название для типа записи
			'singular_name'      => 'Листинг', // название для одной записи этого типа
			'add_new'            => 'Добавить листинг', // для добавления новой записи
			'add_new_item'       => 'Добавление листинга', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование листинга', // для редактирования типа записи
			'new_item'           => 'Новый листинг', // текст новой записи
			'view_item'          => 'Смотреть листинг', // для просмотра записи этого типа.
			'search_items'       => 'Искать листинг', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Листинги', // название меню
		],
		'description'         => 'Это наши листинги :)',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => true,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// зависит от show_in_menu
		'show_in_rest'        => true,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'post-formats', 'excerpt' ],
		// 'title','editor','author','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

function theme_support() {
	add_theme_support( "title-tag" );
	add_theme_support( 'post-thumbnails', array( 'post', 'listing' ) );
	add_image_size( 'single-listing-thumbnail', 500, 500, false );
	add_image_size( 'archive-listing-thumbnail', 419, 419 );
}

function bootstrap_css() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_register_style( 'bootstrap.min.css',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap.min.css' );
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/assets/css/custom.css', [ 'bootstrap.min.css' ] );
}

function bootstrap_js() {
	wp_register_script( 'bootstrap.min.js',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' );
	wp_enqueue_script( 'bootstrap.min.js' );
}

function nav_menu() {
	register_nav_menu( 'header_menu', 'Header menu' );
	register_nav_menu( 'footer_menu', 'Footer menu' );
}
