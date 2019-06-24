<?php
function wallstreet_slider_customizer( $wp_customize ) {

	$wp_customize->add_section(
        'slider_section_settings',
        array(
            'title' => __('Banner image settings','wallstreet')));


	//Banner Image plus
		class wallstreet_theme_banner_upgrade extends WP_Customize_Control {
			public function render_content() { ?>
			<h3><?php _e('Want to add more banner image? Then','wallstreet'); ?><a href="<?php echo esc_url( 'https://webriti.com/wallstreet/' ); ?>" target="_blank">
			<?php _e('Upgrade to Plus','wallstreet'); ?> </a>  
			<?php
			}
		}
		
		$wp_customize->add_setting( 'theme_banner_upgrade', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		));
		$wp_customize->add_control(
			new wallstreet_theme_banner_upgrade(
			$wp_customize,
			'theme_banner_upgrade',
				array(
					'section'				=> 'slider_section_settings',
					'settings'				=> 'theme_banner_upgrade',
				)
			)
		);
	
	$wp_customize->add_setting( 'wallstreet_pro_options[slider_image]',array('default' => get_template_directory_uri().'/images/slider.jpg',
	'type' => 'option','sanitize_callback' => 'esc_url_raw',
	));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'wallstreet_pro_options[slider_image]',
			array(
				'type'        => 'upload',
				'label' => __('Image','wallstreet'),
				'section' => 'example_section_one',
				'settings' =>'wallstreet_pro_options[slider_image]',
				'section' => 'slider_section_settings',
				
			)
		)
	);
	
	//Slider Title
	$wp_customize->add_setting(
	'wallstreet_pro_options[slider_title_one]', array(
        'default'        => __('Clean & fresh theme','wallstreet'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('wallstreet_pro_options[slider_title_one]', array(
        'label'   => __('Title', 'wallstreet'),
        'section' => 'slider_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	//Slider sub title
	$wp_customize->add_setting(
	'wallstreet_pro_options[slider_title_two]', array(
        'default'        => __('Welcome to WallStreet','wallstreet'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('wallstreet_pro_options[slider_title_two]', array(
        'label'   => __('Sub title', 'wallstreet'),
        'section' => 'slider_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	//Slider Banner discription
	$wp_customize->add_setting(
	'wallstreet_pro_options[slider_description]', array(
        'default'        => __('A state-of-the-art HTML5-powered flexible layout with lightspeed fast CSS3 transition effects. Works perfectly in any modern mobile.','wallstreet'),
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    ));
    $wp_customize->add_control('wallstreet_pro_options[slider_description]', array(
        'label'   => __('Description', 'wallstreet'),
        'section' => 'slider_section_settings',
		'priority'   => 150,
		'type' => 'text',
    ));
	
	 }
	add_action( 'customize_register', 'wallstreet_slider_customizer' );
	?>