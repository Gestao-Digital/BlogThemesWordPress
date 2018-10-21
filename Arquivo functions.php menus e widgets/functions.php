<?php
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
