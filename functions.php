<?php 
	define('ASSETS', get_template_directory_uri().'/assets/');

	add_action('init', 'review_jupiter' );
	function review_jupiter(){
		$labels = array(
			'name'				=> _x('Cursos','jupiter'),
			'singular_name'		=> _x('Cursos','post type singular name','jupiter'),
			'menu_name'			=> _x('Cursos','admin menu','jupiter'),
			'name_admin_bar'	=> _x('Curso','add new on admin bar','jupiter'),
			'add_new'			=> _x('Add New Curso','Curso', 'jupiter'),
			'add_new_item'		=> __('Add New Curso', 'jupiter'),
			'new_item'			=> __('New Curso', 'jupiter'),
			'edit_item'			=> __('Edit Curso', 'jupiter'),
			'edit_item'			=> __('Edit Curso', 'jupiter'),
			'view_item'			=> __('Ver Curso', 'jupiter'),
			'all_items'			=> __('All Cursos', 'jupiter'),
			'search_items'		=> __('Search Cursos', 'jupiter'),
			'parent_item_color'	=> __('Parent Cursos', 'jupiter'),
			'not_found'			=> __('Curso no found', 'jupiter'),
			'not_found_in_trash'=> __('Curso no found in trash', 'jupiter')
		);
		$args = array(
			'labels'			=> $labels,
			'descripcion'		=> __('Descripcion.','jupiter'),
			'public'			=> true,
			'publicly_queryable'=> true,
			'show_ui'			=> true,
			'show_in_menu'		=> true,
			'query_var'			=> true,
			'rewrite'			=> array('slug' =>'cursos'),
			'capability_type'	=> 'post',
			'has_archive'		=> true,
			'hierarchical'		=> false,
			'menu_position'		=> 6,
			'menu_icon'			=>'dashicons-pressthis',
			'supports'			=> array('title'),
			// 'taxonomies'		=> array('category')


		);
		register_post_type( 'cursos', $args );
	}


	add_action('init', 'productos_edulab' );
	function productos_edulab(){
		$labels = array(
			'name'				=> _x('Productos','jupiter'),
			'singular_name'		=> _x('Productos','post type singular name','jupiter'),
			'menu_name'			=> _x('Productos','admin menu','jupiter'),
			'name_admin_bar'	=> _x('Producto','add new on admin bar','jupiter'),
			'add_new'			=> _x('Add New Producto','Producto', 'jupiter'),
			'add_new_item'		=> __('Add New Producto', 'jupiter'),
			'new_item'			=> __('New Producto', 'jupiter'),
			'edit_item'			=> __('Edit Producto', 'jupiter'),
			'edit_item'			=> __('Edit Producto', 'jupiter'),
			'view_item'			=> __('Ver Producto', 'jupiter'),
			'all_items'			=> __('All Productos', 'jupiter'),
			'search_items'		=> __('Search Productos', 'jupiter'),
			'parent_item_color'	=> __('Parent Productos', 'jupiter'),
			'not_found'			=> __('Producto no found', 'jupiter'),
			'not_found_in_trash'=> __('Producto no found in trash', 'jupiter')
		);
		$args = array(
			'labels'			=> $labels,
			'descripcion'		=> __('Descripcion.','jupiter'),
			'public'			=> true,
			'publicly_queryable'=> true,
			'show_ui'			=> true,
			'show_in_menu'		=> true,
			'query_var'			=> true,
			'rewrite'			=> array('slug' =>'productos'),
			'capability_type'	=> 'post',
			'has_archive'		=> true,
			'hierarchical'		=> false,
			'menu_position'		=> 6,
			'menu_icon'			=>'dashicons-pressthis',
			'supports'			=> array('title'),
			// 'taxonomies'		=> array('category')


		);
		register_post_type( 'productos', $args );
	}
 ?>