<?php 

// slugs settings
function wallstreet_lite_post_type_slugs_customizer( $wp_customize ){
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';		
	/* post type slugs settings */
	$wp_customize->add_panel( 'post_type_slug_settings', array(
		'priority'       => 950,
		'capability'     => 'edit_theme_options',
		'title'      => __("SEO Friendly URL", 'wallstreet'),
	) );
	
		/* post type slugs page */
		$wp_customize->add_section( 'slugs_section' , array(
			'title'      => __("SEO Friendly Url's","wallstreet"),
			'panel'  => 'post_type_slug_settings'
		) );
		

		//SEO Section plus
		class wallstreet_theme_seo_upgrade extends WP_Customize_Control {
			public function render_content() { ?>
			<h3><?php _e('Want to use seo setting? Then','wallstreet'); ?><a href="<?php echo esc_url( 'https://webriti.com/wallstreet/' ); ?>" target="_blank">
			<?php _e('Upgrade to Plus','wallstreet'); ?> </a>  
			<?php
			}
		}
		
		
		$wp_customize->add_setting( 'theme_seo_upgrade', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		));
		$wp_customize->add_control(
			new wallstreet_theme_seo_upgrade(
			$wp_customize,
			'theme_seo_upgrade',
				array(
					'section'				=> 'slugs_section',
					'settings'				=> 'theme_seo_upgrade',
				)
			)
		);
			// Slider Slug
			$wp_customize->add_setting( 'wallstreet_pro_options[wallstreet_slider_slug]' , array(
			'default' => 'wallstreet_slider',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option',
			'transport'         => $selective_refresh,
			) );
			$wp_customize->add_control('wallstreet_pro_options[wallstreet_slider_slug]' , array(
			'label'          => __( 'Slider slug', 'wallstreet' ),
			'section'        => 'slugs_section',
			'type'           => 'text',
			) );
			
			// services_slug
			$wp_customize->add_setting( 'wallstreet_pro_options[wallstreet_service_slug]' , array(
			'default' => 'wallstreet_service',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option',
			'transport'         => $selective_refresh,
			) );
			$wp_customize->add_control('wallstreet_pro_options[wallstreet_service_slug]' , array(
			'label'          => __( 'Service slug', 'wallstreet' ),
			'section'        => 'slugs_section',
			'type'           => 'text',
			) );
			
			// team_slug
			$wp_customize->add_setting( 'wallstreet_pro_options[wallstreet_team_slug]' , array(
			'default' => 'wallstreet_team',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option',
			'transport'         => $selective_refresh,
			) );
			$wp_customize->add_control('wallstreet_pro_options[wallstreet_team_slug]' , array(
			'label'          => __( 'Team slug', 'wallstreet' ),
			'section'        => 'slugs_section',
			'type'           => 'text',
			) );
			
			//products_slug
			$wp_customize->add_setting( 'wallstreet_pro_options[wallstreet_portfolio_slug]' , array(
			'default' => 'wallstreet_portfolio',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option',
			'transport'         => $selective_refresh,
			) );
			$wp_customize->add_control('wallstreet_pro_options[wallstreet_portfolio_slug]' , array(
			'label'          => __( 'Portfolio slug', 'wallstreet' ),
			'section'        => 'slugs_section',
			'type'           => 'text',
			) );
			
			
			//Portfolio category Slug
			$wp_customize->add_setting( 'wallstreet_pro_options[wallstreet_products_category_slug]' , array(
			'default' => 'portfolio-categories',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option',
			'transport'         => $selective_refresh,
			) );
			$wp_customize->add_control('wallstreet_pro_options[wallstreet_products_category_slug]' , array(
			'label'          => __( 'Portfolio category slug', 'wallstreet' ),
			'section'        => 'slugs_section',
			'type'           => 'text',
			) );
			
			
			// Testimonial Slug
			$wp_customize->add_setting( 'wallstreet_pro_options[wallstreet_testimonial_slug]' , array(
			'default' => 'wallstreet_testimonial',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option',
			'transport'         => $selective_refresh,
			) );
			$wp_customize->add_control('wallstreet_pro_options[wallstreet_testimonial_slug]' , array(
			'label'          => __( 'Testimonial slug', 'wallstreet' ),
			'section'        => 'slugs_section',
			'type'           => 'text',
			) );
			
			
			// Client Slug
			$wp_customize->add_setting( 'wallstreet_pro_options[wallstreet_client_slug]' , array(
			'default' => 'wallstreet_client',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option',
			'transport'         => $selective_refresh,
			) );
			$wp_customize->add_control('wallstreet_pro_options[wallstreet_client_slug]' , array(
			'label'          => __( 'Client slug', 'wallstreet' ),
			'section'        => 'slugs_section',
			'type'           => 'text',
			) );
			
	
}
add_action( 'customize_register', 'wallstreet_lite_post_type_slugs_customizer' );