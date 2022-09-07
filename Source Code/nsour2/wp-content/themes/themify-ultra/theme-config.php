<?php
/***************************************************************************
 *						Theme Settings
 * 	----------------------------------------------------------------------
 * 						DO NOT EDIT THIS FILE
 *	----------------------------------------------------------------------
 *
 *  					Copyright (C) Themify
 * 						https://themify.me
 *
 ***************************************************************************/

$themify_theme_config = array();

$themify_theme_config['folders'] = array(
	'images' => array(
		'src' => 'uploads/'
	)
);

$themify_theme_config['panel']['settings']['tab']['default_layouts'] = array(
	'title' => __('Default Layouts', 'themify'),
	'id' => 'default_layouts',
	'custom-module' => array(
		array(
			'title' => __('Default Archive Post Layout', 'themify'),
			'function' => 'default_layout'
		),
		array(
			'title' => __('Default Single Post Layout', 'themify'),
			'function' => 'default_post_layout'
		),
		array(
			'title' => __('Search Result Layout', 'themify'),
			'function' => 'search_result_layout'
		),
		array(
			'title' => __('Default Page Layout', 'themify'),
			'function' => 'default_page_layout'
		),
		array(
			'title' => __('Custom Post Types', 'themify'),
			'function' => 'ultra_custom_post_type_layouts'
		)
	)
);

$themify_theme_config['panel']['settings']['tab']['portfolio_layouts'] = array(
	'title' => __('Portfolio Settings', 'themify'),
	'id' => 'portfolio_layouts',
	'custom-module' => array(
		array(
			'title' => __('Default Archive Portfolio Layout', 'themify'),
			'function' => 'default_portfolio_index_layout'
		),
		array(
			'title' => __('Default Single Portfolio Layout', 'themify'),
			'function' => 'default_portfolio_single_layout'
		),
		array(
			'title' => __('Portfolio Permalink', 'themify'),
			'function' => 'portfolio_slug'
		)
	)
);


if( class_exists( 'WooCommerce' ) ) {
	$themify_theme_config['panel']['settings']['tab']['shop_settings'] = array(
		'title' => __('Shop Settings', 'themify'),
		'id' => 'shop_settings',
		'custom-module' => array(
			array(
				'title' => __('Product Archive', 'themify'),
				'function' => 'shop_layout'
			),
			array(
				'title' => __('Single Product Page', 'themify'),
				'function' => 'single_product'
			),
			array(
				'title' => __('Ajax Cart', 'themify'),
				'function' => 'ajax_cart_style'
			),
		)
	);
}

$themify_theme_config['panel']['settings']['tab']['theme_settings'] = array(
	'title' => __('Theme Settings', 'themify'),
	'id' => 'theme_settings',
	'custom-module' => array(
		array(
			'title' => __('Responsive Design', 'themify'),
			'function' => 'disable_responsive_design_option'
		),
		array(
			'title' => __('Theme Appearance', 'themify'),
			'function' => 'theme_design_controls'
		),
        array(
            'title' => __('Dark Mode', 'themify'),
            'function' => 'theme_dark_mode_controls'
        ),
		array(
			'title' => __('Mega Menu', 'themify'),
			'function' => 'theme_mega_menu_controls'
		),
		array(
			'title' => __('Image Filter', 'themify'),
			'function' => 'image_filter'
		),
                array(
		    'title' => __('Section Scroll', 'themify'),
		    'function' => 'page_section_scroll'
		),
		array(
			'title' => __('Animating Background Colors', 'themify'),
			'function' => 'color_pickers_module'
		),
		array(
			'title' => __('Related Posts', 'themify'),
			'function' => 'related_posts'
		),
		array(
			'title' => __('Single Post Slider Settings', 'themify'),
			'function' => 'single_post_slider_settings'
		),
		array(
			'title' => __('Pagination Option', 'themify'),
			'function' => 'pagination_infinite'
		),
		array(
			'title' => __( 'Footer Text', 'themify' ),
			'function' => 'footer_text_settings'
		),
		array(
			'title' => __('WordPress Gallery Lightbox', 'themify'),
			'function' => 'gallery_plugins'
		)
	)
);

$themify_theme_config['panel']['settings']['tab']['image_script'] = array(
	'title' => __('Image Script', 'themify'),
	'id' => 'image_script',
	'custom-module' => array(
		array(
			'title' => __('Image Script Settings', 'themify'),
			'function' => 'img_settings'
		)
	)
);

$themify_theme_config['panel']['settings']['tab']['social_links'] = array(
	'title' => __('Social Links', 'themify'),
	'id' => 'social_links',
	'custom-module' => array(
		array(
			'title' => __('Manage Social Links', 'themify'),
			'function' => 'themify_manage_links'
		)
	)
);