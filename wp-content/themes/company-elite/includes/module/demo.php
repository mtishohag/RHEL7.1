<?php
/**
 * Demo configuration
 *
 * @package Company_Elite
 */

$config = array(
	'static_page'    => 'home',
	'posts_page'     => 'blog',
	'menu_locations' => array(
		'primary' => 'main-menu',
		'social'  => 'social-menu',
	),
	'ocdi'           => array(
		array(
			'import_file_name'             => esc_html__( 'Theme Demo Content', 'company-elite' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo/widget.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo/customizer.dat',
		),
	),
	'intro_content'  => esc_html__( 'NOTE: In demo import, category selection could be omitted in old (non-fresh) WordPress setup. After import is complete, please go to Widgets admin page under Appearance menu and select the appropriate category in the widgets.', 'company-elite' ),
);

Company_Elite_Demo::init( apply_filters( 'company_elite_demo_filter', $config ) );
