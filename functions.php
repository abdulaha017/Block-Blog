<?php 


function block_blog_theme_supports(){
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array(
		'images',
		'video',
		'quote',
		'gallery',
		'audio'
	) );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'ab_creation' ),
		)
	);
}
add_action('after_setup_theme', 'block_blog_theme_supports');

function block_blog_enqueue_styles() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '4.0.0', 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '4.7.0', 'all' );
	wp_enqueue_style('stylesheet', get_stylesheet_uri());

	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'popper', get_template_directory_uri() .'/assets/js/popper.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() .'/assets/js/bootstrap.min.js', array( 'jquery', 'popper' ), '4.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'block_blog_enqueue_styles' );


function block_blog_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'ab_creation' ),
			'id'            => 'right-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'ab_creation' ),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6 class="upper">',
			'after_title'   => '</h6>',
		)
	);

}
add_action( 'widgets_init', 'block_blog_widgets_init' );


