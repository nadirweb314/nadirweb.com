<?php
function freelancerportfolio_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'freelancer-portfolio'),
		) 
	);

	
	/*=========================================
	Freelancer Portfolio Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','freelancer-portfolio'),
			'panel'  		=> 'header_section',
		)
    );



	// topheader Logo Width
    $wp_customize->add_setting('topheader_logowidth',array(
        'default' => 100,
        'sanitize_callback' => 'freelancerportfolio_sanitize_float'
    ));
    $wp_customize->add_control(new freelancerportfolio_Custom_Control( $wp_customize, 'topheader_logowidth',array(
	    'label' => __('Logo Width','freelancer-portfolio'),
	    'section' => 'title_tagline',
	    'input_attrs' => array(
	            'min' => 0,
	            'max' => 500,
	            'step' => 1,
	        ),
    )));
 
    // topheader Logo height
    $wp_customize->add_setting('topheader_logoheight',array(
        'default' => 100,
        'sanitize_callback' => 'freelancerportfolio_sanitize_float'
    ));
    $wp_customize->add_control(new freelancerportfolio_Custom_Control( $wp_customize, 'topheader_logoheight',array(
	    'label' => __('Logo Height','freelancer-portfolio'),
	    'section' => 'title_tagline',
	    'input_attrs' => array(
	            'min' => 0,
	            'max' => 500,
	            'step' => 1,
	        ), 
    )));


    // top header Site Title Color
	$topheadersitetitlecol = esc_html__('#FD7F00', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'topheader_sitetitlecol',
    	array(
			'default' => $topheadersitetitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlecol',
		array(
		    'label'   		=> __('Site Title Color','freelancer-portfolio'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// top header Tagline Color
	$topheadertaglinecol = esc_html__('#FD7F00', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'topheader_taglinecol',
    	array(
			'default' => $topheadertaglinecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_taglinecol',
		array(
		    'label'   		=> __('Tagline Color','freelancer-portfolio'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	
 
	/*=========================================
	Freelancer Portfolio header
	=========================================*/
	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 5,
            'title' 		=> __('Header','freelancer-portfolio'),
			'panel'  		=> 'header_section',
		)
    );	


    $wp_customize->add_setting('freelancerportfolio_reset_header_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new freelancerportfolio_Reset_Custom_Control($wp_customize, 'freelancer_portfolio_reset_header_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Header Settings', 'freelancer-portfolio'),
	  'description' => 'freelancer_portfolio_header_reset_settings',
	  'section' => 'top_header'
	)));



    $wp_customize->add_setting('freelancerportfolio_top_header_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new freelancerportfolio_Tab_Control($wp_customize, 'freelancerportfolio_top_header_tabs', array(
	   'section' => 'top_header',
	   'priority' => 1,
	   'buttons' => array(
	      array(
     		'name' => esc_html__('General', 'freelancer-portfolio'),
 			'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'hide_show_sticky',
            	'topheader_contactbtntext',
            	'topheader_contactbtnlink'

            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'freelancer-portfolio'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'header_menuscolor',
            	'header_menusarrowcolor',
            	'header_menushovercolor',
            	'header_submenusbgcolor',
            	'header_submenusbordercolor',
            	'header_submenutextcolor',
            	'header_submenusbghovercolor',
            	'header_submenustxthovercolor',
            	'header_btnbgcol1',
            	'header_btnbgcol2',
            	'header_buttontext',
            	'header_buttontexthover',
				'header_mobileviewbg',
				'header_mobileviewtoggle',
				'header_mobileviewtogglehover',
				'header_mobileviewmenubg'


            ),
         )
	    
    	),
	)));


	// general setting

	// sticky header
	$wp_customize->add_setting( 'hide_show_sticky',array(
        'default' => false,
        'sanitize_callback' => 'freelancerportfolio_switch_sanitization'
   	) );
   	$wp_customize->add_control( new freelancerportfolio_Toggle_Switch_Custom_Control( $wp_customize, 'hide_show_sticky',array(
        'label' => __( 'Show Sticky Header','freelancer-portfolio' ),
        'section' => 'top_header'
   	)));




    // topheader icon 1
	$topheadercontactbtntext = esc_html__('Contact us', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'topheader_contactbtntext',
    	array(
			'default' => $topheadercontactbtntext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'topheader_contactbtntext',
		array(
		    'label'   		=> __('Button Text','freelancer-portfolio'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);



	// topheader text 1
	$topheadercontactbtnlink = esc_html__('#', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'topheader_contactbtnlink',
    	array(
			'default' => $topheadercontactbtnlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_contactbtnlink',
		array(
		    'label'   		=> __('Button Link','freelancer-portfolio'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// Style setting

	// header menus Color
	$headermenuscolor = esc_html__('#000', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'header_menuscolor',
    	array(
			'default' => $headermenuscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuscolor',
		array(
		    'label'   		=> __('Menus Color','freelancer-portfolio'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header menusarrow Color
	$headermenusarrowcolor = esc_html__('#FE8901', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'header_menusarrowcolor',
    	array(
			'default' => $headermenusarrowcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menusarrowcolor',
		array(
		    'label'   		=> __('Menus Arrow Color','freelancer-portfolio'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header menushover Color
	$headermenushovercolor = esc_html__('#FD7F00', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'header_menushovercolor',
    	array(
			'default' => $headermenushovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menushovercolor',
		array(
		    'label'   		=> __('Menus Hover & Active Color','freelancer-portfolio'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	$headersubmenusbgcolor = esc_html__('#fff', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'header_submenusbgcolor',
    	array(
			'default' => $headersubmenusbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbgcolor',
		array(
		    'label'   		=> __('SubMenus BG Color','freelancer-portfolio'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	$headersubmenusbordercolor = esc_html__('#FD7F00', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'header_submenusbordercolor',
    	array(
			'default' => $headersubmenusbordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbordercolor',
		array(
		    'label'   		=> __('SubMenus Border Color','freelancer-portfolio'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header submenutext Color
	$headersubmenutextcolor = esc_html__('#000', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'header_submenutextcolor',
    	array(
			'default' => $headersubmenutextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenutextcolor',
		array(
		    'label'   		=> __('SubMenus Text Color','freelancer-portfolio'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenusbghover Color
	$headersubmenusbghovercolor = esc_html__('#FD7F00', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'header_submenusbghovercolor',
    	array(
			'default' => $headersubmenusbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbghovercolor',
		array(
		    'label'   		=> __('SubMenus BG Hover Color','freelancer-portfolio'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header submenustxthover Color
	$headersubmenustxthovercolor = esc_html__('#fff', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'header_submenustxthovercolor',
    	array(
			'default' => $headersubmenustxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenustxthovercolor',
		array(
		    'label'   		=> __('SubMenus Text Hover Color','freelancer-portfolio'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header bg1 Colo1
	$headerbtnbgcol1 = esc_html__('#FF8000', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'header_btnbgcol1',
    	array(
			'default' => $headerbtnbgcol1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btnbgcol1',
		array(
		    'label'   		=> __('Button BG 1','freelancer-portfolio'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header bg2 Colo1
	$headerbtnbgcol2 = esc_html__('#FFA041', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'header_btnbgcol2',
    	array(
			'default' => $headerbtnbgcol2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_btnbgcol2',
		array(
		    'label'   		=> __('Button BG 2','freelancer-portfolio'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header btntext Color
	$headerbuttontext = esc_html__('#fff', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'header_buttontext',
    	array(
			'default' => $headerbuttontext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_buttontext',
		array(
		    'label'   		=> __('Button Text','freelancer-portfolio'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header btntext hover Color
	$headerbuttontexthover = esc_html__('#000', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'header_buttontexthover',
    	array(
			'default' => $headerbuttontexthover,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_buttontexthover',
		array(
		    'label'   		=> __('Button Text Hover','freelancer-portfolio'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header mobileviewbg Color
	$headermobileviewbg = esc_html__('#000', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'header_mobileviewbg',
    	array(
			'default' => $headermobileviewbg,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_mobileviewbg',
		array(
		    'label'   		=> __('Mobile View BG','freelancer-portfolio'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header mobileviewtoggle
	$headermobileviewtoggle = esc_html__('#fc7f00', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'header_mobileviewtoggle',
    	array(
			'default' => $headermobileviewtoggle,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_mobileviewtoggle',
		array(
		    'label'   		=> __('Mobile View Toggle','freelancer-portfolio'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header mobileviewtogglehover
	$headermobileviewtogglehover = esc_html__('#fff', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'header_mobileviewtogglehover',
    	array(
			'default' => $headermobileviewtogglehover,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_mobileviewtogglehover',
		array(
		    'label'   		=> __('Mobile View Toggle Hover','freelancer-portfolio'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header mobileviewmenubg
	$headermobileviewmenubg = esc_html__('#fc7f00', 'freelancer-portfolio' );
	$wp_customize->add_setting(
    	'header_mobileviewmenubg',
    	array(
			'default' => $headermobileviewmenubg,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_mobileviewmenubg',
		array(
		    'label'   		=> __('Mobile View Menu BG','freelancer-portfolio'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	$wp_customize->register_control_type('freelancerportfolio_Tab_Control');
	$wp_customize->register_panel_type( 'freelancerportfolio_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'freelancerportfolio_WP_Customize_Section' );
	

}
add_action( 'customize_register', 'freelancerportfolio_header_settings' );



if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class freelancerportfolio_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'freelancerportfolio_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class freelancerportfolio_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'freelancerportfolio_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}






