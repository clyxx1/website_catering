<?php
function bakerystore_footer( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'bakery-store'),
		) 
	);

    
    // Footer top // 
	$wp_customize->add_section(
        'footer_top',
        array(
            'title' 		=> __('Footer Top','bakery-store'),
			'panel'  		=> 'footer_section',
			'priority'      => 2,
		)
    );
	

	// footer bg Color
	$footerbgcol = esc_html__('#bb8fe7', 'bakery-store' );
	$wp_customize->add_setting(
    	'footer_bg_col',
    	array(
			'default' => $footerbgcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'footer_bg_col',
		array(
		    'label'   		=> __('BG Color','bakery-store'),
		    'section'		=> 'footer_top',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer heading Color
	$footerheadingcol = esc_html__('#fff', 'bakery-store' );
	$wp_customize->add_setting(
    	'footer_heading_col',
    	array(
			'default' => $footerheadingcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'footer_heading_col',
		array(
		    'label'   		=> __('Heading Color','bakery-store'),
		    'section'		=> 'footer_top',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer text Color
	$footertextcol = esc_html__('#fff', 'bakery-store' );
	$wp_customize->add_setting(
    	'footer_text_col',
    	array(
			'default' => $footertextcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'footer_text_col',
		array(
		    'label'   		=> __('Text Color','bakery-store'),
		    'section'		=> 'footer_top',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer list Color
	$footerlistcol = esc_html__('#fff', 'bakery-store' );
	$wp_customize->add_setting(
    	'footer_list_col',
    	array(
			'default' => $footerlistcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'footer_list_col',
		array(
		    'label'   		=> __('List Color','bakery-store'),
		    'section'		=> 'footer_top',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer icon Color
	$footericoncol = esc_html__('#fff', 'bakery-store' );
	$wp_customize->add_setting(
    	'footer_icon_col',
    	array(
			'default' => $footericoncol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'footer_icon_col',
		array(
		    'label'   		=> __('Icon Color','bakery-store'),
		    'section'		=> 'footer_top',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer listhover Color
	$footerlisthovercol = esc_html__('#FBFA02', 'bakery-store' );
	$wp_customize->add_setting(
    	'footer_listhover_col',
    	array(
			'default' => $footerlisthovercol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'footer_listhover_col',
		array(
		    'label'   		=> __('List Hover Color','bakery-store'),
		    'section'		=> 'footer_top',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// Footer Bottom // 
	$wp_customize->add_section(
        'footer_bottom',
        array(
            'title' 		=> __('Footer Bottom','bakery-store'),
			'panel'  		=> 'footer_section',
			'priority'      => 3,
		)
    );
	
	// footer copyright Color
	$footercopyrightcol = esc_html__('#fff', 'bakery-store' );
	$wp_customize->add_setting(
    	'footer_copyright_col',
    	array(
			'default' => $footercopyrightcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyright_col',
		array(
		    'label'   		=> __('CopyRight Color','bakery-store'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	
	// Footer Copyright 
	$bakerystore_foo_copy = esc_html__('Copyright &copy; [current_year] [site_title] | Powered by [theme_author]', 'bakery-store' );
	$wp_customize->add_setting(
    	'footer_copyright',
    	array(
			'default' => $bakerystore_foo_copy,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyright',
		array(
		    'label'   		=> __('CopyRight','bakery-store'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'textarea',
			'transport'         => $selective_refresh,
		)  
	);
 

	// footer copyright Color
	$footercopyrightcol = esc_html__('#fff', 'bakery-store' );
	$wp_customize->add_setting(
    	'footer_copyright_col',
    	array(
			'default' => $footercopyrightcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyright_col',
		array(
		    'label'   		=> __('CopyRight Color','bakery-store'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer copyrightlink Color
	$footercopyrightlinkcol = esc_html__('#FBFA02', 'bakery-store' );
	$wp_customize->add_setting(
    	'footer_copyrightlink_col',
    	array(
			'default' => $footercopyrightlinkcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyrightlink_col',
		array(
		    'label'   		=> __('CopyRight Link Color','bakery-store'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// footer topborder Color
	$footertopbordercol = esc_html__('#fff', 'bakery-store' );
	$wp_customize->add_setting(
    	'footer_topborder_col',
    	array(
			'default' => $footertopbordercol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'footer_topborder_col',
		array(
		    'label'   		=> __('Top Border Color','bakery-store'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer scrolltoparrow Color
	$footerscrolltoparrowcol = esc_html__('#fff', 'bakery-store' );
	$wp_customize->add_setting(
    	'footer_scrolltoparrow_col',
    	array(
			'default' => $footerscrolltoparrowcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'footer_scrolltoparrow_col',
		array(
		    'label'   		=> __('Scroll Top Arrow Color','bakery-store'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer scrolltopbg Color
	$footerscrolltopbgcol = esc_html__('#FD67BE', 'bakery-store' );
	$wp_customize->add_setting(
    	'footer_scrolltopbg_col',
    	array(
			'default' => $footerscrolltopbgcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'footer_scrolltopbg_col',
		array(
		    'label'   		=> __('Scroll Top BG Color','bakery-store'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer scrolltopbghrv Color
	$footerscrolltopbghrvcol = esc_html__('#FBFA02', 'bakery-store' );
	$wp_customize->add_setting(
    	'footer_scrolltopbghrv_col',
    	array(
			'default' => $footerscrolltopbghrvcol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 8,
		)
	);	

	$wp_customize->add_control( 
		'footer_scrolltopbghrv_col',
		array(
		    'label'   		=> __('Scroll Top BG Hover Color','bakery-store'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



}
add_action( 'customize_register', 'bakerystore_footer' );
// Footer selective refresh
function bakerystore_footer_partials( $wp_customize ){	
	// footer_copyright
	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector'            => '.copy-right .copyright-text',
		'settings'            => 'footer_copyright',
		'render_callback'  => 'bakerystore_footer_copyright_render_callback',
	) );
	
	}
add_action( 'customize_register', 'bakerystore_footer_partials' );


// copyright_content
function bakerystore_footer_copyright_render_callback() {
	return get_theme_mod( 'footer_copyright' );
}