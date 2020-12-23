<?php

function ficus_customize_register($wp_customize){
        $wp_customize->add_section('header', array(
            'title'          => __('Header', 'cleancut'),
            'description'    => sprintf( __('Options for showcase area', 'Ficus')
            ),
            'priority'       => 130,
        ));

        // Image Header Setting
		  $wp_customize->add_setting('image_header', array(
		    'default' => get_bloginfo('template_directory') . '/img/ficus.jpg',
		    'type'    => 'theme_mod'

		 ));

		 // Image Header Control
		 $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_header', array(
		     'label'    => __('Background Image', 'Ficus'),
		     'section'  => 'header',
		     'settings' => 'image_header',
		     'priority' => 1,
		 )));
        
		// Text Setting
		$wp_customize->add_setting( 'title_header', array(
			'default'              => _x('FICUS MICROCARPA GINSENG', 'Ficus'),
			'type'                 => 'theme_mod'
		));

		// Text Control
		$wp_customize->add_control( 'title_header', array(
			'label'    => __('Title header', 'Ficus'),
			'section'  => 'header',
			'priority' => 4,
        ));
        
        // Facebook Setting
		$wp_customize->add_setting( 'fb_link', array(
			'default'              => _x('https://www.facebook.com/', 'Ficus'),
			'type'                 => 'theme_mod'
		));

		// Facebook Control
		$wp_customize->add_control( 'fb_link', array(
			'label'    => __('Facebook link', 'Ficus'),
			'section'  => 'header',
			'priority' => 4,
        ));
        
        // Instagram Setting
		$wp_customize->add_setting( 'instagram_link', array(
			'default'              => _x('https://www.instagram.com/', 'Ficus'),
			'type'                 => 'theme_mod'
		));

		// Instagram Control
		$wp_customize->add_control( 'instagram_link', array(
			'label'    => __('Instagram link', 'Ficus'),
			'section'  => 'header',
			'priority' => 4,
        ));
        
        // Linkedin Setting
		$wp_customize->add_setting( 'linkedin_link', array(
			'default'              => _x('https://www.linkedin.com/', 'Ficus'),
			'type'                 => 'theme_mod'
		));

		// Linkedin Control
		$wp_customize->add_control( 'linkedin_link', array(
			'label'    => __('Linkedin link', 'Ficus'),
			'section'  => 'header',
			'priority' => 4,
		));






    }
add_action('customize_register','ficus_customize_register');