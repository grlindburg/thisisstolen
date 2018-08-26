<?php
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'custom' ),
	) );


function custom_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'custom' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );


}
add_action( 'widgets_init', 'custom_widgets_init' );


function custom_scripts() {
	wp_enqueue_style( 'bootstrap-style' , 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick-theme.css' );
	wp_enqueue_style( 'slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
	wp_enqueue_style( 'fontawesome', 'https://pro.fontawesome.com/releases/v5.2.0/css/all.css' );

	wp_register_script('jquery', ("https://code.jquery.com/jquery-3.3.1.min.js"), false, '1.9.1', true);
	wp_register_script('slick', ("https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"), false, '1.9.1', true);
	wp_enqueue_script( 'custom-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array( 'jquery' ), false, true );
	wp_register_script( 'isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array( 'jquery' ), '1.0.0', false );
	wp_register_script( 'typed', "https://cdn.jsdelivr.net/npm/typed.js@2.0.9", array( 'jquery' ), '1.0.0', false );
	wp_register_script( 'js-cookie', "https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js", array( 'jquery' ), '1.0.0', false );

	wp_register_script( 'custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0.0', false );
	wp_enqueue_script( 'custom' );
	wp_enqueue_script( 'isotope' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'slick' );
	wp_enqueue_script( 'typed' );
	wp_enqueue_script( 'js-cookie' );

}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );
