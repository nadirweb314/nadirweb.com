<?php
function freelancerportfolio_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'freelancerportfolio_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'freelancer-portfolio' ),
		)
	);
	

	

	/*=========================================
	Banner Section
	=========================================*/
	$wp_customize->add_section(
		'banner_setting', array(
			'title' => esc_html__( 'Banner Section', 'freelancer-portfolio' ),
			'priority' => 1,
			'panel' => 'freelancerportfolio_frontpage_sections',
		)
	);


	// banner_profile_image
	$wp_customize->add_setting(
    	'banner_profile_image', 
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'banner_profile_image',
	        array(
			    'label'   		=> __('Profile Image','freelancer-portfolio'),
	            'section' => 'banner_setting',
	            'settings' => 'banner_profile_image',
	            'description' => __('Recommended Image Size: 402X504px', 'freelancer-portfolio')
	        )
	    )
	);


	// Banner profilename
	$wp_customize->add_setting(
    	'banner_profilename',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'banner_profilename',
		array(
		    'label'   		=> __('Profile Name','freelancer-portfolio'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);



	// Banner Heading
	$wp_customize->add_setting(
    	'banner_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'banner_heading',
		array(
		    'label'   		=> __('Heading','freelancer-portfolio'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// banner sub heading
	$wp_customize->add_setting(
    	'banner_subheading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'banner_subheading',
		array(
		    'label'   		=> __('Sub Heading','freelancer-portfolio'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// banner description
	$wp_customize->add_setting(
    	'banner_description',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'banner_description',
		array(
		    'label'   		=> __('Description','freelancer-portfolio'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// banner phonno
	$wp_customize->add_setting(
    	'banner_phonno',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'banner_phonno',
		array(
		    'label'   		=> __('Phone No','freelancer-portfolio'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// banner email
	$wp_customize->add_setting(
    	'banner_email',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'banner_email',
		array(
		    'label'   		=> __('Email','freelancer-portfolio'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// banner address
	$wp_customize->add_setting(
    	'banner_address',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 8,
		)
	);	

	$wp_customize->add_control( 
		'banner_address',
		array(
		    'label'   		=> __('Address','freelancer-portfolio'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// banner fblink
	$wp_customize->add_setting(
    	'banner_fblink',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 9,
		)
	);	

	$wp_customize->add_control( 
		'banner_fblink',
		array(
		    'label'   		=> __('Facebook Link','freelancer-portfolio'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);		

	// banner instalink
	$wp_customize->add_setting(
    	'banner_instalink',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 10,
		)
	);	

	$wp_customize->add_control( 
		'banner_instalink',
		array(
		    'label'   		=> __('Insta Link','freelancer-portfolio'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// banner twitterlink
	$wp_customize->add_setting(
    	'banner_twitterlink',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 11,
		)
	);	

	$wp_customize->add_control( 
		'banner_twitterlink',
		array(
		    'label'   		=> __('Twitter Link','freelancer-portfolio'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// banner pinterestlink
	$wp_customize->add_setting(
    	'banner_pinterestlink',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 12,
		)
	);	

	$wp_customize->add_control( 
		'banner_pinterestlink',
		array(
		    'label'   		=> __('Pinterest Link','freelancer-portfolio'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// banner bottombannertextleft
	$wp_customize->add_setting(
    	'banner_bottombannertextleft',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 13,
		)
	);	

	$wp_customize->add_control( 
		'banner_bottombannertextleft',
		array(
		    'label'   		=> __('Bottom Left','freelancer-portfolio'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// banner bannerbottomtextright
	$wp_customize->add_setting(
    	'banner_bannerbottomtextright',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 14,
		)
	);	

	$wp_customize->add_control( 
		'banner_bannerbottomtextright',
		array(
		    'label'   		=> __('Bottom Right','freelancer-portfolio'),
		    'section'		=> 'banner_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	



	/*=========================================
	Service Section
	=========================================*/
	$wp_customize->add_section(
		'Service_setting', array(
			'title' => esc_html__( 'My Skills Section', 'freelancer-portfolio' ),
			'priority' => 2,
			'panel' => 'freelancerportfolio_frontpage_sections',
		)
	);

	$wp_customize->add_setting('freelancerportfolio_reset_Service_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new freelancerportfolio_Reset_Custom_Control($wp_customize, 'freelancerportfolio_reset_Service_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset My Skills Settings', 'freelancer-portfolio'),
	  'description' => 'freelancer_portfolio_Service_reset_settings',
	  'section' => 'Service_setting'
	)));
	

	$wp_customize->add_setting('freelancerportfolio_Service_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new freelancerportfolio_Tab_Control($wp_customize, 'freelancerportfolio_Service_tabs', array(
	   'section' => 'Service_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'freelancer-portfolio'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'service_disable_section',
            	'service_heading',
            	'Service1',
            	'Service2',
            	'Service3',
            	'Service4',
            	'Service5',
            	'Service6'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'freelancer-portfolio'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'service_headingcolor',
            	'service_boxtitlecolorcolor',
            	'service_boxdescriptioncolorcolor',
            	'service_buttonbgcolor',
            	'service_buttontextcolor',
            	'service_buttonbghovercolor',
            	'service_boxbgcolor'
            ),
     	),
  		array(
	        'name' => esc_html__('Layout', 'freelancer-portfolio'),
	        'icon' => 'dashicons dashicons-layout',
	        'fields' => array(
	            'freelancer_portfolio_service_section_width',
	            'freelancerportfolio_service_padding',
	            'freelancer_portfolio_service_top_padding',
	            'freelancer_portfolio_service_bottom_padding'
	        ),
     	)
	    
    	),
	))); 



	// General

	// hide show service section
	$wp_customize->add_setting(
        'service_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new freelancerportfolio_Toggle_Switch_Custom_Control(
            $wp_customize,
            'service_disable_section',
            array(
                'settings'      => 'service_disable_section',
                'section'       => 'Service_setting',
                'label'         => __( 'Disable Section', 'freelancer-portfolio' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'freelancer-portfolio' ),
                    'off' => __( 'No', 'freelancer-portfolio' )
                ),
            )
        )
    );


    // service title
	$wp_customize->add_setting(
    	'service_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'service_heading',
		array(
		    'label'   		=> __('Heading','freelancer-portfolio'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// Service 1
	$wp_customize->add_setting( 
    	'Service1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'Service1',
		array(
		    'label'   		=> __('My Skill 1','freelancer-portfolio'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		

	// Service 2
	$wp_customize->add_setting(
    	'Service2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'Service2',
		array(
		    'label'   		=> __('My Skill 2','freelancer-portfolio'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 3
	$wp_customize->add_setting(
    	'Service3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'Service3',
		array(
		    'label'   		=> __('My Skill 3','freelancer-portfolio'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 4
	$wp_customize->add_setting(
    	'Service4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'Service4',
		array(
		    'label'   		=> __('My Skill 4','freelancer-portfolio'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// Service 5
	$wp_customize->add_setting(
    	'Service5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'Service5',
		array(
		    'label'   		=> __('My Skill 5','freelancer-portfolio'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// Service 6
	$wp_customize->add_setting(
    	'Service6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'Service6',
		array(
		    'label'   		=> __('My Skill 6','freelancer-portfolio'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// style

	// service headingcolor color
	$serviceheadingcolor = esc_html__('#000', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'service_headingcolor',
    	array(
			'default' => $serviceheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_headingcolor',
		array(
		    'label'   		=> __('Heading Color','freelancer-portfolio'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// service boxtitlecolor color
	$serviceboxtitlecolorcolor = esc_html__('#000', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'service_boxtitlecolorcolor',
    	array(
			'default' => $serviceboxtitlecolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxtitlecolorcolor',
		array(
		    'label'   		=> __('Title Color','freelancer-portfolio'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service boxdescriptioncolor color
	$serviceboxdescriptioncolorcolor = esc_html__('#aaa', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'service_boxdescriptioncolorcolor',
    	array(
			'default' => $serviceboxdescriptioncolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxdescriptioncolorcolor',
		array(
		    'label'   		=> __('Description Color','freelancer-portfolio'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// service buttonbg color
	$servicebuttonbgcolor = esc_html__('#FE8901', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'service_buttonbgcolor',
    	array(
			'default' => $servicebuttonbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_buttonbgcolor',
		array(
		    'label'   		=> __('Button BG Color','freelancer-portfolio'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service buttontext color
	$servicebuttontextcolor = esc_html__('#fff', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'service_buttontextcolor',
    	array(
			'default' => $servicebuttontextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_buttontextcolor',
		array(
		    'label'   		=> __('Button Text Color','freelancer-portfolio'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service buttonbghover color
	$servicebuttonbghovercolor = esc_html__('#000', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'service_buttonbghovercolor',
    	array(
			'default' => $servicebuttonbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_buttonbghovercolor',
		array(
		    'label'   		=> __('Button BG Hover Color','freelancer-portfolio'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service boxbg color
	$serviceboxbgcolor = esc_html__('#fff', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'service_boxbgcolor',
    	array(
			'default' => $serviceboxbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxbgcolor',
		array(
		    'label'   		=> __('Box BG Color','freelancer-portfolio'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// layout setting

	$wp_customize->add_setting('freelancer_portfolio_service_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'freelancerportfolio_sanitize_choices',
    ));
    $wp_customize->add_control('freelancer_portfolio_service_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','freelancer-portfolio'),
        'choices' => array (
            'Box Width' => __('Box Width','freelancer-portfolio'),
            'Full Width' => __('Full Width','freelancer-portfolio')
        ),
        'section' => 'Service_setting',
    ));


    // service section padding 
	$wp_customize->add_setting('freelancerportfolio_service_padding',array(
      'sanitize_callback'   => 'esc_html'
    ));
    $wp_customize->add_control('freelancerportfolio_service_padding',array(
      'label' => __('Section Padding','freelancer-portfolio'),
      'section' => 'Service_setting'
    ));

    $wp_customize->add_setting('freelancer_portfolio_service_top_padding',array(
        'default' => '5',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('freelancer_portfolio_service_top_padding',array(
	    'type' => 'number',
	    'label' => __('Top','freelancer-portfolio'),
	    'section' => 'Service_setting',
    ));

 	$wp_customize->add_setting('freelancer_portfolio_service_bottom_padding',array(
        'default' => '2',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('freelancer_portfolio_service_bottom_padding',array(
	    'type' => 'number',
	    'label' => __('Bottom','freelancer-portfolio'),
	    'section' => 'Service_setting',
    ));



    /*=========================================
	Blog Section
	=========================================*/
	$wp_customize->add_section(
		'blog_setting', array(
			'title' => esc_html__( 'Blog Section', 'freelancer-portfolio' ),
			'priority' => 3,
			'panel' => 'freelancerportfolio_frontpage_sections',
		)
	);


	$wp_customize->add_setting('freelancerportfolio_reset_blog_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new freelancerportfolio_Reset_Custom_Control($wp_customize, 'freelancerportfolio_reset_blog_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Blog Settings', 'freelancer-portfolio'),
	  'description' => 'freelancer_portfolio_blog_reset_settings',
	  'section' => 'blog_setting'
	)));
	

	$wp_customize->add_setting('freelancerportfolio_blog_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new freelancerportfolio_Tab_Control($wp_customize, 'freelancerportfolio_blog_tabs', array(
	   'section' => 'blog_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'freelancer-portfolio'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
				'blog_disable_section',
            	'blog_heading'
            ),
            'active' => true,
         ), 
	    	array(
            'name' => esc_html__('Style', 'freelancer-portfolio'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'blog_headingcolor',
                'blog_titlecolor',
                'blog_descriptioncolor',
                'blog_buttontextcolor',
                'blog_buttonbgcolor',
                'blog_authorandcategorycolor',
                'blog_authorandcategorybgcolor'


            ),
			
     	),
		 array(
	        'name' => esc_html__('Layout', 'freelancer-portfolio'),
	        'icon' => 'dashicons dashicons-layout',
	        'fields' => array(
	            'freelancer_portfolio_blog_section_width',
	            'freelancerportfolio_blog_padding',
	            'freelancer_portfolio_blog_top_padding',
	            'freelancer_portfolio_blog_bottom_padding'
	        ),
     	)
	    
    	),
	))); 


	// General Tab


	// hide show blog section
	$wp_customize->add_setting(
        'blog_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new freelancerportfolio_Toggle_Switch_Custom_Control(
            $wp_customize,
            'blog_disable_section',
            array(
                'settings'      => 'blog_disable_section',
                'section'       => 'blog_setting',
                'label'         => __( 'Disable Section', 'freelancer-portfolio' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'freelancer-portfolio' ),
                    'off' => __( 'No', 'freelancer-portfolio' )
                ),
            )
        )
    );

	// blog heading
	$wp_customize->add_setting(
    	'blog_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'blog_heading',
		array(
		    'label'   		=> __('Heading','freelancer-portfolio'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Style setting

	// blog heading Color
	$blogheadingcolor = esc_html__('#000', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'blog_headingcolor',
    	array(
			'default' => $blogheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_headingcolor',
		array(
		    'label'   		=> __('Heading Color','freelancer-portfolio'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// blog title Color
	$blogtitlecolor = esc_html__('#000', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'blog_titlecolor',
    	array(
			'default' => $blogtitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_titlecolor',
		array(
		    'label'   		=> __('Title Color','freelancer-portfolio'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog description Color
	$blogdescriptioncolor = esc_html__('#aaa', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'blog_descriptioncolor',
    	array(
			'default' => $blogdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','freelancer-portfolio'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// blog buttontext Color
	$blogbuttontextcolor = esc_html__('#fff', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'blog_buttontextcolor',
    	array(
			'default' => $blogbuttontextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_buttontextcolor',
		array(
		    'label'   		=> __('Button Text Color','freelancer-portfolio'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog buttonbg Color
	$blogbuttonbgcolor = esc_html__('#FE8901', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'blog_buttonbgcolor',
    	array(
			'default' => $blogbuttonbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_buttonbgcolor',
		array(
		    'label'   		=> __('Button BG Color','freelancer-portfolio'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog authorandcategory Color
	$blogauthorandcategorycolor = esc_html__('#fff', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'blog_authorandcategorycolor',
    	array(
			'default' => $blogauthorandcategorycolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_authorandcategorycolor',
		array(
		    'label'   		=> __('Comment & Date Color','freelancer-portfolio'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog authorandcategorybg Color
	$blogauthorandcategorybgcolor = esc_html__('#FE8901', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'blog_authorandcategorybgcolor',
    	array(
			'default' => $blogauthorandcategorybgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_authorandcategorybgcolor',
		array(
		    'label'   		=> __('Comment & Date BG Color','freelancer-portfolio'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// layout setting

	$wp_customize->add_setting('freelancer_portfolio_blog_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'freelancerportfolio_sanitize_choices',
    ));
    $wp_customize->add_control('freelancer_portfolio_blog_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','freelancer-portfolio'),
        'choices' => array (
            'Box Width' => __('Box Width','freelancer-portfolio'),
            'Full Width' => __('Full Width','freelancer-portfolio')
        ),
        'section' => 'blog_setting',
    ));


    // blog section padding 
	$wp_customize->add_setting('freelancerportfolio_blog_padding',array(
      'sanitize_callback'   => 'esc_html'
    ));
    $wp_customize->add_control('freelancerportfolio_blog_padding',array(
      'label' => __('Section Padding','freelancer-portfolio'),
      'section' => 'blog_setting'
    ));

    $wp_customize->add_setting('freelancer_portfolio_blog_top_padding',array(
        'default' => '5',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('freelancer_portfolio_blog_top_padding',array(
	    'type' => 'number',
	    'label' => __('Top','freelancer-portfolio'),
	    'section' => 'blog_setting',
    ));

 	$wp_customize->add_setting('freelancer_portfolio_blog_bottom_padding',array(
        'default' => '2',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('freelancer_portfolio_blog_bottom_padding',array(
	    'type' => 'number',
	    'label' => __('Bottom','freelancer-portfolio'),
	    'section' => 'blog_setting',
    ));


	$wp_customize->register_control_type('freelancerportfolio_Tab_Control');

}

add_action( 'customize_register', 'freelancerportfolio_blog_setting' );

// service selective refresh
function freelancerportfolio_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'freelancerportfolio_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'freelancerportfolio_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'freelancerportfolio_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'freelancerportfolio_blog_section_partials' );

// blog_title
function freelancerportfolio_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function freelancerportfolio_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function freelancerportfolio_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}


