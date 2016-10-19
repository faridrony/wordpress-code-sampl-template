<?php


/*
	=====================================================
					Enqueue Script
	=====================================================
*/
function sample_script_enqeue(){	 

	wp_enqueue_style('name-css',get_template_directory_uri().'/css/custom.css',array(),'1.0.0','all');

	wp_enqueue_script('custom-js',get_template_directory_uri().'/js/custom.js',array(),'1.0.0',true);
}
add_action('wp_enqueue_scripts','sample_script_enqeue');


/*=====================================================
					Add Theme Supports
=====================================================*/
function sample_theme_setup(){

/*
=====================================================
	Add Menu or Menus
=====================================================
*/
	add_theme_support('menus');
	register_nav_menus(array(
		'menu-id'=>__('menu name'),
		'menu-one-id'=>__('menu one name'),
		)); 

}
add_action('init','sample_theme_setup');

// also can use init against after_setup_theme
// add_action('after_setup_theme / init','sample_theme_setup');


	
/*
	=====================================================
	Read more function
	=====================================================
*/
	function readmore($words){
		$content=explode(" ", get_the_content());
		$pieces=array_slice($content, 0 , $words);
		echo implode(" ", $pieces);

	};


	
/*
	=====================================================
	Theme support
	=====================================================
*/
	add_theme_support('custom-header');
	add_theme_support('custom-background');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats',array('aside','image','video','quote','link','audio','gallery','status'));
	add_theme_support('html5',array('search-form'));

	add_image_size('small',300); // 300 pixels wide (and unlimited height)
	add_image_size('medium',600); // 600 pixels wide (and unlimited height) 
	add_image_size('large',2000,800,true); // (cropped)

	
/*
	=====================================================
	Sidebar function
	=====================================================
*/
	function sample_widget_setup(){
		
		/* first sidebar */
		register_sidebar(
			array(
				'name'			=> 'Sidebar One',
				'description'	=> 'This is simple sidebar',
				'id'			=> 'sidebar-1',
				'class'			=> 'sidebar-custom',
				'before_widget'	=> '<aside class="widget">',
				'after_widget'	=> '</aside>',
				'before_title'	=> '<h1 class="widget-title">',
				'after_title'	=> '</h1>',
				)
			);

		/* seconed sidebar */
		register_sidebar(
			array(
				'name'			=> 'Sidebar Two',
				'description'	=> 'This is simple sidebar',
				'id'			=> 'sidebar-2',
				'class'			=> 'sidebar-custom',
				'before_widget'	=> '<aside class="widget">',
				'after_widget'	=> '</aside>',
				'before_title'	=> '<h1 class="widget-title">',
				'after_title'	=> '</h1>',
				)
			);
	}
	add_action('widgets_init','sample_widget_setup');




/*
	=====================================================
	Include walker function
	=====================================================
*/
require get_template_directory().'/inc/walker.php';


/*
	=====================================================
	Head function
	=====================================================
*/
	function  sample_remove_verson(){
		return '';
	}
	add_filter('the_generator','sample_remove_verson');


/*
	=====================================================
	Custom Post Type  function
	=====================================================
*/

	function sample_custom_post_type(){

		$labels	=	array(
		'name'			=>	'portfolio',
		'singular_name'	=>	'Add portfolio',
		'add_new'		=>	'Add portfolio',
		'add_new_item'	=>	'Add New portfolio',
		'edit_item'		=>	'Edit Item',
		'new_item'		=>	'New Item',
		'view_item'		=>	'View Item',
		'search_item'	=>	'Search Portfolio',
		'not_found'		=>	'No Items Found',
		'not_found_in_trash'=>	'No item found in trash',
		'parent_item_colon'	=>	'Parent Item'
		);
		$arg = array(
			'labels'				=>	$labels,
			'public'				=>	true,
			'has_archive'			=>	true,
			'publicly_queryable'	=>	true,
			'query_var'				=>	true,
			'rewrite'				=>	true,
			'capability_type'		=>	'post',
			'hierarchical'			=>	false,
			'supports'				=>	array(

				'title',
				'editor',
				'thumbnail',
				'revisions',
				),
			//'taxonomies'	=>array('category','post_tag'),
			'menu_position'	=>5,
			'exclude_form_search'=>false
			);
		register_post_type('portfolio',$arg);
			
	}
	add_action('init','sample_custom_post_type');


function sample_custom_taxonomies(){
	//add new taxonomy 
	$labels	=	array(
		'name'			=>	'Fields',
		'singular_name'	=>	'Field',
		'search_items'	=>	'Search Fields',
		'all_items'		=>	'All Fields',
		'parent_item'	=>	'Parent Fields',
		'parent_item_colon'=>	'Parent Field:',
		'edit_item'		=>	'Edit Field',
		'update_item'	=>	'Update Field',
		'add_new_item'	=>	'Add New Work Field',
		'new_item_name'	=>	'New Field Name',
		'menu_name'		=>	'Fields'
		);
	$args=array(
		'labels'		=>	$labels,
		'hierarchical'	=>	true,
		'show_ui'		=>	true,
		'show_admin_column'=>	true,
		'query_var'		=>	true,
		'rewrite'		=>	array('slug' => 'Field'	)
		);
	// hierarchical
	register_taxonomy('field',array('portfolio'), $args);

	// non hierarchical
	register_taxonomy('software','portfolio',array(
		'label'	=> 'Software',
		'rewrite'=> array('slug' => 'software'),
		'hierarchical'=>false
		));
}
add_action('init','sample_custom_taxonomies');


/*
	=====================================================
	Custom   function to call taxonomy portfolio
	=====================================================
*/
	function simple_get_taxonomy($postID,$term){
		$term_list=wp_get_post_terms($postID,$term);

		$output='';
		$i=0;
		foreach ($term_list as $term) {
			$i++;
			if ($i>1) { $output .=', '; }
			$output .='<a href="' . get_term_link($term) . '">' . $term->name . '</a>';
		} 
	return $output;
	};