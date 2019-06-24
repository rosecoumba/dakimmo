<?php
function wallstreet_blog_customizer( $wp_customize ) {
	//Blog Heading section 
	$wp_customize->add_section(
        'blog_setting',
        array(
            'title' => __('Homepage blog settings','wallstreet'),
			'priority'   => 700,
			
			)
    );
	//Blog Section plus
		class wallstreet_theme_blog_upgrade extends WP_Customize_Control {
			public function render_content() { ?>
			<h3><?php _e('Want to more blog setting? Then','wallstreet'); ?><a href="<?php echo esc_url( 'https://webriti.com/wallstreet/' ); ?>" target="_blank">
			<?php _e('Upgrade to Plus','wallstreet'); ?> </a>  
			<?php
			}
		}
		
		
		$wp_customize->add_setting( 'theme_blogs_upgrade', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		));
		$wp_customize->add_control(
			new wallstreet_theme_blog_upgrade(
			$wp_customize,
			'theme_blogs_upgrade',
				array(
					'section'				=> 'blog_setting',
					'settings'				=> 'theme_blogs_upgrade',
				)
			)
		);
	//Show and hide Blog section
	$wp_customize->add_setting(
	'wallstreet_pro_options[blog_section_enabled]'
    ,
    array(
        'default' => true,
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		'type' => 'option',
    )	
	);
	$wp_customize->add_control(
    'wallstreet_pro_options[blog_section_enabled]',
    array(
        'label' => __('Enable Homepage Blog Section','wallstreet'),
        'section' => 'blog_setting',
        'type' => 'checkbox',
    )
	);
	}
	add_action( 'customize_register', 'wallstreet_blog_customizer' );
	?>