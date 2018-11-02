<?php
// Registrando styles para serem enfileirados
function btw_adding_styles() {
wp_register_style('Bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');

wp_enqueue_style('Bootstrap');
}
add_action( 'wp_enqueue_scripts', 'btw_adding_styles' );

//Registrando Scripts para serem enfileirados
function btw_adding_scripts() {
wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js','', '', true);
wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap');
}
add_action( 'wp_enqueue_scripts', 'btw_adding_scripts' ); 

// Registra as sidebars
function btw_sidebars()	{
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Primeira coluna.',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Sidebar2',
		'id'            => 'sidebar-2',
		'description'   => 'Segunda coluna.',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'btw_sidebars' );

function btw_menu_setup() {		
	// Registra um menu
	register_nav_menus( array(
		'header' => 'Header',
	) );
}
add_action( 'after_setup_theme', 'btw_menu_setup' );
