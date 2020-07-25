<?php
/**
 * About
 *
 * @package Company_Elite
 */

$config = array(
	'menu_name' => esc_html__( 'About Company Elite', 'company-elite' ),
	'page_name' => esc_html__( 'About Company Elite', 'company-elite' ),

	/* translators: theme version */
	'welcome_title' => sprintf( esc_html__( 'Welcome to %s - v', 'company-elite' ), 'Company Elite' ),

	/* translators: 1: theme name */
	'welcome_content' => sprintf( esc_html__( '%1$s is now installed and ready to use! We want to make sure you have the best experience using %1$s and that is why we gathered here all the necessary information for you. We hope you will enjoy using %1$s.', 'company-elite' ), 'Company Elite' ),

	// Quick links.
	'quick_links' => array(
		'theme_url' => array(
			'text' => esc_html__( 'Theme Details','company-elite' ),
			'url'  => 'https://axlethemes.com/wordpress-themes/company-elite/',
			),
		'demo_url' => array(
			'text' => esc_html__( 'View Demo','company-elite' ),
			'url'  => 'https://axlethemes.com/theme-demo/?demo=company-elite',
			),
		'documentation_url' => array(
			'text'   => esc_html__( 'View Documentation','company-elite' ),
			'url'    => 'https://axlethemes.com/documentation/company-elite/',
			'button' => 'primary',
			),
		'rate_url' => array(
			'text' => esc_html__( 'Rate This Theme','company-elite' ),
			'url'  => 'https://wordpress.org/support/theme/company-elite/reviews/',
			),
		),

	// Tabs.
	'tabs' => array(
		'getting_started'     => esc_html__( 'Getting Started', 'company-elite' ),
		'recommended_actions' => esc_html__( 'Recommended Actions', 'company-elite' ),
		'demo_content'        => esc_html__( 'Demo Content', 'company-elite' ),
		'useful_plugins'      => esc_html__( 'Useful Plugins', 'company-elite' ),
		'support'             => esc_html__( 'Support', 'company-elite' ),
		'upgrade_to_pro'      => esc_html__( 'Upgrade to Pro', 'company-elite' ),
	),

	// Getting started.
	'getting_started' => array(
		array(
			'title'               => esc_html__( 'Theme Documentation', 'company-elite' ),
			'text'                => esc_html__( 'Even if you are a long-time WordPress user, we still believe you should give our documentation a very quick read.', 'company-elite' ),
			'button_label'        => esc_html__( 'View Documentation', 'company-elite' ),
			'button_link'         => 'https://axlethemes.com/documentation/company-elite/',
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
		array(
			'title'               => esc_html__( 'Recommended Actions', 'company-elite' ),
			'text'                => esc_html__( 'We have compiled a list of steps for you, to take make sure the experience you will have using one of our products is very easy to follow.', 'company-elite' ),
			'button_label'        => esc_html__( 'Check Recommended Actions', 'company-elite' ),
			'button_link'         => esc_url( admin_url( 'themes.php?page=company-elite-about&tab=recommended_actions' ) ),
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
		array(
			'title'               => esc_html__( 'Theme Demo Content', 'company-elite' ),
			'text'                => esc_html__( 'You can easily import demo content as we have bundled demo content file within the theme folder. Importer plugin is needed.', 'company-elite' ),
			'button_label'        => esc_html__( 'Demo Content', 'company-elite' ),
			'button_link'         => esc_url( admin_url( 'themes.php?page=company-elite-about&tab=demo_content' ) ),
			'is_button'           => true,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
		array(
			'title'               => esc_html__( 'Customize Everything', 'company-elite' ),
			'text'                => esc_html__( 'Using the WordPress Customizer you can easily customize every aspect of the theme.', 'company-elite' ),
			'button_label'        => esc_html__( 'Go to Customizer', 'company-elite' ),
			'button_link'         => esc_url( wp_customize_url() ),
			'is_button'           => true,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
		array(
			'title'               => esc_html__( 'View Theme Demo', 'company-elite' ),
			'text'                => esc_html__( 'To get quick glance of the theme, please visit theme demo.', 'company-elite' ),
			'button_label'        => esc_html__( 'View Demo', 'company-elite' ),
			'button_link'         => 'https://axlethemes.com/theme-demo/?demo=company-elite',
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
		array(
			'title'               => esc_html__( 'Child Theme', 'company-elite' ),
			'text'                => esc_html__( 'If you want to customize theme file, you should use child theme rather than modifying theme file itself.', 'company-elite' ),
			'button_label'        => esc_html__( 'About Child Theme', 'company-elite' ),
			'button_link'         => 'https://developer.wordpress.org/themes/advanced-topics/child-themes/',
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
	),

	// Recommended actions.
	'recommended_actions' => array(
		'content' => array(
			'front-page' => array(
				'title'       => esc_html__( 'Setting Static Front Page','company-elite' ),
				'description' => esc_html__( 'Select A static page then Front page and Posts page to display front page specific sections. Note: Static page will be set automatically when you import demo content.', 'company-elite' ),
				'id'          => 'front-page',
				'check'       => ( 'page' === get_option( 'show_on_front' ) ) ? true : false,
				'help'        => '<a href="' . esc_url( admin_url( 'customize.php' ) ) . '?autofocus[section]=static_front_page" class="button button-secondary">' . esc_html__( 'Static Front Page', 'company-elite' ) . '</a>',
			),
			'one-click-demo-import' => array(
				'title'       => esc_html__( 'One Click Demo Import', 'company-elite' ),
				'description' => esc_html__( 'Please install the One Click Demo Import plugin to import the demo content.', 'company-elite' ),
				'check'       => class_exists( 'OCDI_Plugin' ),
				'plugin_slug' => 'one-click-demo-import',
				'id'          => 'one-click-demo-import',
			),
		),
	),

	// Demo content.
	'demo_content' => array(
		'description' => sprintf( esc_html__( 'Demo content files are bundled within this theme. %1$s plugin is needed to import demo content. Please make sure plugin is installed and activated. If you have not installed the plugin, please go to Installed Plugins page under Appearance. After plugin activation, go to Import Demo Data menu under Appearance.', 'company-elite' ), '<a href="https://wordpress.org/plugins/one-click-demo-import/" target="_blank">' . esc_html__( 'One Click Demo Import', 'company-elite' ) . '</a>' ),
		),

	// Useful plugins.
	'useful_plugins' => array(
		'description'        => esc_html__( 'This theme supports some helpful WordPress plugins to enhance your website.', 'company-elite' ),
		'plugins_list_title' => esc_html__( 'Useful Plugins List:', 'company-elite' ),
	),

	// Support.
	'support_content' => array(
		'first' => array(
			'title'        => esc_html__( 'Contact Support', 'company-elite' ),
			'icon'         => 'dashicons dashicons-sos',
			'text'         => esc_html__( 'Got theme support question or found bug? Best place to ask your query is our dedicated Support forum.', 'company-elite' ),
			'button_label' => esc_html__( 'Contact Support', 'company-elite' ),
			'button_link'  => esc_url( 'https://axlethemes.com/support-forum/forum/company-elite/' ),
			'is_button'    => true,
			'is_new_tab'   => true,
		),
		'second' => array(
			'title'        => esc_html__( 'Theme Documentation', 'company-elite' ),
			'icon'         => 'dashicons dashicons-book-alt',
			'text'         => esc_html__( 'Please check our theme documentation for detailed information on how to setup and use theme.', 'company-elite' ),
			'button_label' => esc_html__( 'View Documentation', 'company-elite' ),
			'button_link'  => 'https://axlethemes.com/documentation/company-elite/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'third' => array(
			'title'        => esc_html__( 'Pro Version', 'company-elite' ),
			'icon'         => 'dashicons dashicons-products',
			'icon'         => 'dashicons dashicons-star-filled',
			'text'         => esc_html__( 'Upgrade to pro version for more exciting features and additional theme options.', 'company-elite' ),
			'button_label' => esc_html__( 'View Pro Version', 'company-elite' ),
			'button_link'  => 'https://axlethemes.com/wordpress-themes/company-elite-pro/',
			'is_button'    => true,
			'is_new_tab'   => true,
		),
		'fourth' => array(
			'title'        => esc_html__( 'Pre-sale Queries', 'company-elite' ),
			'icon'         => 'dashicons dashicons-cart',
			'text'         => esc_html__( 'Have any query before purchase, you are more than welcome to ask.', 'company-elite' ),
			'button_label' => esc_html__( 'Pre-sale Question?', 'company-elite' ),
			'button_link'  => 'https://axlethemes.com/pre-sale-question/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'fifth' => array(
			'title'        => esc_html__( 'Customization Request', 'company-elite' ),
			'icon'         => 'dashicons dashicons-admin-tools',
			'text'         => esc_html__( 'Needed any customization for the theme, you can request from here.', 'company-elite' ),
			'button_label' => esc_html__( 'Customization Request', 'company-elite' ),
			'button_link'  => 'https://axlethemes.com/customization-request/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'sixth' => array(
			'title'        => esc_html__( 'Child Theme', 'company-elite' ),
			'icon'         => 'dashicons dashicons-admin-customizer',
			'text'         => esc_html__( 'If you want to customize theme file, you should use child theme rather than modifying theme file itself.', 'company-elite' ),
			'button_label' => esc_html__( 'About Child Theme', 'company-elite' ),
			'button_link'  => 'https://developer.wordpress.org/themes/advanced-topics/child-themes/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
	),

	// Upgrade.
	'upgrade_to_pro' => array(
		'description'  => esc_html__( 'Upgrade to pro version for more exciting features and additional theme options.', 'company-elite' ),
		'button_label' => esc_html__( 'Upgrade to Pro', 'company-elite' ),
		'button_link'  => 'https://axlethemes.com/wordpress-themes/company-elite-pro/',
		'is_new_tab'   => true,
	),

);

Company_Elite_About::init( apply_filters( 'company_elite_about_filter', $config ) );
