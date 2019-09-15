<?php

function filter_site_background_radio_images( $array, $field_id ) {

if ( $field_id == 'select_background_pattern' ) {
    $array = array(
      array(
        'value'   => '0',
        'label'   => __( 'Default', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_0.png'
      ),
      array(
        'value'   => '1',
        'label'   => __( 'Pattern 1', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_1.png'
      ),
      array(
        'value'   => '2',
        'label'   => __( 'Pattern 2', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_2.png'
      ),
      array(
        'value'   => '3',
        'label'   => __( 'Pattern 3', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_3.png'
      ),
      array(
        'value'   => '4',
        'label'   => __( 'Pattern 4', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_4.png'
      ),
      array(
        'value'   => '5',
        'label'   => __( 'Pattern 5', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_5.png'
      ),
      array(
        'value'   => '6',
        'label'   => __( 'Pattern 6', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_6.png'
      ),
      array(
        'value'   => '7',
        'label'   => __( 'Pattern 7', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_7.png'
      ),
      array(
        'value'   => '8',
        'label'   => __( 'Pattern 8', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_8.png'
      ),
      array(
        'value'   => '9',
        'label'   => __( 'Pattern 9', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_9.png'
      ),
      array(
        'value'   => '10',
        'label'   => __( 'Pattern 10', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_10.png'
      ),
      array(
        'value'   => '11',
        'label'   => __( 'Pattern 11', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_11.png'
      ),
      array(
        'value'   => '12',
        'label'   => __( 'Pattern 12', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_12.png'
      ),
      array(
        'value'   => '13',
        'label'   => __( 'Pattern 13', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_13.png'
      ),
      array(
        'value'   => '14',
        'label'   => __( 'Pattern 14', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/patterns/pattern_14.png'
      ),
    );
  }  

return $array;
  
}
add_filter( 'ot_radio_images', 'filter_site_background_radio_images', 10, 2 ); 


function filter_site_color_radio_images( $array, $field_id ) {

if ( $field_id == 'select_color_scheme' ) {
    $array = array(
      array(
        'value'   => '1',
        'label'   => __( 'Color Theme 1', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/colors/color_1.png'
      ),
      array(
        'value'   => '2',
        'label'   => __( 'Color Theme 2', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/colors/color_2.png'
      ),
      array(
        'value'   => '3',
        'label'   => __( 'Color Theme 3', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/colors/color_3.png'
      ),
      array(
        'value'   => '4',
        'label'   => __( 'Color Theme 4', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/colors/color_4.png'
      ),
      array(
        'value'   => '5',
        'label'   => __( 'Color Theme 5', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/colors/color_5.png'
      ),
      array(
        'value'   => '6',
        'label'   => __( 'Color Theme 6', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/colors/color_6.png'
      ),
      array(
        'value'   => '7',
        'label'   => __( 'Color Theme 7', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/colors/color_7.png'
      ),
      array(
        'value'   => '8',
        'label'   => __( 'Color Theme 8', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/colors/color_8.png'
      ),
      array(
        'value'   => '9',
        'label'   => __( 'Color Theme 9', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/colors/color_9.png'
      ),
    );
  }  

return $array;
  
}
add_filter( 'ot_radio_images', 'filter_site_color_radio_images', 10, 2 ); 


function select_footer_style_radio_images( $array, $field_id ) {

if ( $field_id == 'select_footer_style' ) {
    $array = array(
      array(
        'value'   => '1',
        'label'   => __( 'Footer Theme 1', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/footers/footer_1.png'
      ),
      array(
        'value'   => '2',
        'label'   => __( 'Footer Theme 2', 'srh-education-theme' ),
        'src'     => OT_URL . '/assets/images/footers/footer_2.png'
      )
    );
  }  

return $array;
  
}
add_filter( 'ot_radio_images', 'select_footer_style_radio_images', 10, 2 ); 




/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'srh_school_custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.0
 */
function srh_school_custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'option_types_help',
          'title'     => __( 'Option Types', 'srh-education-theme' ),
          'content'   => '<p>' . __( 'Help content goes here!', 'srh-education-theme' ) . '</p>'
        )
      ),
      'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'srh-education-theme' ) . '</p>'
    ),
    'sections'        => array( 
      array(
        'id'          => 'general_settings',
        'title'       => __( 'General Settings', 'srh-education-theme' )
      ),
      array(
        'id'          => 'home_settings',
        'title'       => __( 'Home Page Settings', 'srh-education-theme' )
      ),
      array(
        'id'          => 'text_changes',
        'title'       => __( 'Change Text', 'srh-education-theme' )
      ),
      array(
        'id'          => 'list_settings',
        'title'       => __( 'List Settings', 'srh-education-theme' )
      ),
      array(
        'id'          => 'footer_settings',
        'title'       => __( 'Footer Settings', 'srh-education-theme' )
      ),
      array(
        'id'          => 'color_settings',
        'title'       => __( 'Color Settings', 'srh-education-theme' )
      ),
      array(
        'id'          => 'custom_codes',
        'title'       => __( 'Custom Codes', 'srh-education-theme' )
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'enable_teacher_mobile_number',
        'label'       => __( 'Show mobile number of the faculty member?', 'srh-education-theme' ),
        'type'        => 'on-off',
        'section'     => 'list_settings',
        'std'     => 'off',
      ),
      array(
        'id'          => 'enable_teacher_education',
        'label'       => __( 'Show education details of faculty member?', 'srh-education-theme' ),
        'type'        => 'on-off',
        'section'     => 'list_settings',
        'std'     => 'off',
      ),
      array(
        'id'          => 'select_footer_style',
        'label'       => __( 'Select footer style', 'srh-education-theme' ),
        'type'        => 'radio-image',
        'section'     => 'footer_settings',
        'std'     => '1',
      ),         
      array(
        'id'          => 'site_logo',
        'label'       => __( 'Site Logo', 'srh-education-theme' ),
        'type'        => 'upload',
        'section'     => 'general_settings'
      ),
      array(
        'label'       => __('Menu support at most', 'srh-education-theme' ),
        'id'          => 'menu_support_at_most',
        'type'        => 'numeric-slider',
        'std'        => '7',
        'min_max_step'=> '5,9,1',
        'section'     => 'general_settings'
      ),              
      array(
        'id'          => 'site_layout',
        'label'       => __( '', 'srh-education-theme' ),
        'type'        => 'select',
        'std'        => 'Boxed',
        'choices'        => array(
            array(
                'value' => 'boxed_width',
                'label' => __('Boxed', 'srh-education-theme' ),
            ),
            array(
                'value' => 'srhschoo_fullwidth',
                'label' => __('Full width', 'srh-education-theme' ),
            )
        ),          
        'section'     => 'general_settings'
      ),
      array(
        'id'          => 'site_fontt',
        'label'       => __( 'Site Font', 'srh-education-theme' ),
        'type'        => 'select',
        'std'        => 'hind',
        'choices'        => array(
            array(
                'value' => 'hind',
                'label' => __('Hind Siliguri', 'srh-education-theme' ),
            ),
            array(
                'value' => 'solaimanlipi',
                'label' => __('Solaiman Lipi', 'srh-education-theme' ),
            )
        ),          
        'section'     => 'general_settings'
      ),        
      array(
        'id'          => 'slider_type',
        'label'       => __( 'হোমপেজের ইমেজ নাকি স্লাইড?', 'srh-education-theme' ),
        'type'        => 'select',
        'std'        => 'single_image',
        'choices'        => array(
            array(
                'value' => 'single_image',
                'label' => __('একটি ইমেজ', 'srh-ducation-theme' ),
            ),
            array(
                'value' => 'slideshow',
                'label' => __('স্লাইডশো', 'srh-education-theme' ),
            )
        ),          
        'section'     => 'home_settings'
      ),
      array(
        'id'          => 'upload_slider_image',
        'label'       => __( 'স্লাইডার ইমেজ আপলোড করুন', 'srh-education-theme' ),
        'desc'       => __( 'স্লাইডার ইমেজ এর সাইজ হওয়া উচিত: 1140px by 430px', 'rrf-education-theme' ),
        'type'        => 'upload',
        'section'     => 'home_settings',
        'std'     => 'http://placehold.it/1140x430',
        'condition' => 'slider_type:is(single_image)',
      ), 
      array(
        'id'          => 'upload_slider_images',
        'label'       => __( 'স্লাইডার ইমেজগুলো আপলোড করুন', 'srh-education-theme' ),
        'desc'       => __( 'স্লাইডার ইমেজগুলোর সাইজ হওয়া উচিত: 1140px by 430px', 'rrf-education-theme' ),
        'type'        => 'gallery',
        'section'     => 'home_settings',
        'condition' => 'slider_type:is(slideshow)',
      ),     
             
      array(
        'id'          => 'pattern_type',
        'label'       => __( 'Pattern Type', 'srh-education-theme' ),
        'type'        => 'select',
        'std'        => 'predefined',
        'choices'        => array(
            array(
                'value' => 'predefined',
                'label' => __('Choose from the list', 'srh-education-theme' ),
            ),
            array(
                'value' => 'owndefined',
                'label' => __('Upload new Pattern', 'srh-education-theme' ),
            )
        ),          
        'section'     => 'general_settings',
        'condition' => 'site_layout:is(boxed_width)',
      ),
      array(
        'id'          => 'select_background_pattern',
        'label'       => __( 'Select Pattern', 'srh-education-theme' ),
        'type'        => 'radio-image',
        'section'     => 'general_settings',
        'std'     => '0',
        'operator'     => 'and',
        'condition' => 'pattern_type:is(predefined),site_layout:is(boxed_width)',
      ),
      array(
        'id'          => 'upload_own_pattern',
        'label'       => __( 'Upload new Pattern', 'srh-education-theme' ),
        'type'        => 'upload',
        'section'     => 'general_settings',
        'operator'     => 'and',
        'condition' => 'pattern_type:is(owndefined),site_layout:is(boxed_width)',
      ),
      array(
        'id'          => 'pattern_behaviour',
        'label'       => __( 'Pattern Behaviour', 'srh-education-theme' ),
        'type'        => 'select',
        'std'        => 'fixed',
        'choices'        => array(
            array(
                'value' => 'scroll',
                'label' => __('Scrolled', 'srh-education-theme' ),
            ),
            array(
                'value' => 'fixed',
                'label' => __('Fixed', 'srh-education-theme' ),
            ),            
        ),          
        'section'     => 'general_settings',
        'condition' => 'site_layout:is(boxed_width)',
      ),        
      array(
        'id'          => 'top_text',
        'label'       => __( 'Hedear text for right', 'srh-education-theme' ),
        'std'         => __('Built: 1990, EIIN: 00000', 'srh-education-theme' ),
        'type'        => 'text',
        'section'     => 'text_changes'
      ),
      array(
        'id'          => 'top_email',
        'label'       => __( 'Email Address', 'srh-education-theme' ),
        'std'         => 'himusr@gmail.com',
        'type'        => 'text',
        'section'     => 'text_changes'
      ),
      array(
        'id'          => 'contact_address',
        'label'       => __( 'Address', 'srh-education-theme' ),
        'std'         => __('Pathantola , Dhamrai , Dhaka - 1350', 'srh-education-theme' ),
        'type'        => 'text',
        'section'     => 'text_changes'
      ),
      array(
        'id'          => 'contact_phone',
        'label'       => __( 'Contact Number', 'srh-education-theme' ),
        'std'         => __('01757512095', 'srh-education-theme' ),
        'type'        => 'text',
        'section'     => 'text_changes'
      ),
      array(
        'id'          => 'copyright_text',
        'label'       => __( 'Copyright Text', 'srh-education-theme' ),
        'std'         => __('&copy; 2018 All right reserved. Design and developed by: <a href="https://fiverr.com/srhimel">Shahamar Rahman Himel</a>', 'srh-education-theme' ),
        'type'        => 'text',
        'section'     => 'text_changes'
      ),
      array(
        'id'          => 'color_settings_type',
        'label'       => __( 'Color Settings', 'srh-education-theme' ),
        'type'        => 'select',
        'choices'        => array(
            array(
                'value' => 'predefinied',
                'label' => __('Select from the color platter', 'srh-education-theme' ),
            ),
            array(
                'value' => 'owndefinied',
                'label' => __('Customized color platter', 'srh-education-theme' ),
            )
        ),          
        'section'     => 'color_settings',
      ),        
      array(
        'id'          => 'select_color_scheme',
        'label'       => __( 'Select Color Scheme', 'srh-education-theme' ),
        'type'        => 'radio-image',
        'section'     => 'color_settings',
        'std'         => '1',
        'condition' => 'color_settings_type:is(predefinied)',
      ),        
      array(
        'id'          => 'theme_color_1',
        'label'       => __( 'Theme Color 1', 'srh-education-theme' ),
        'std'         => '#1dd2af',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'theme_color_2',
        'label'       => __( 'Theme Color 2', 'srh-education-theme' ),
        'std'         => '#2ecc71',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'theme_color_3',
        'label'       => __( 'Theme Color 3', 'srh-education-theme' ),
        'std'         => '#3498db',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'theme_color_4',
        'label'       => __( 'Theme Color 4', 'srh-education-theme' ),
        'std'         => '#9b59b6',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'theme_color_5',
        'label'       => __( 'Theme Color 5', 'srh-education-theme' ),
        'std'         => '#e67e22',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'theme_color_6',
        'label'       => __( 'Theme Color 6', 'srh-education-theme' ),
        'std'         => '#e74c3c',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'theme_color_7',
        'label'       => __( 'Theme Color 7', 'srh-education-theme' ),
        'std'         => '#000000',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'home_wid_color_1',
        'label'       => __( 'Homepage left widget background color', 'srh-education-theme' ),
        'std'         => '#1dd2af',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'home_wid_color_2',
        'label'       => __( 'Homepage middle widget background color', 'srh-education-theme' ),
        'std'         => '#e74c3c',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'home_wid_color_3',
        'label'       => __( 'Homepage right widget background color', 'srh-education-theme' ),
        'std'         => '#3498db',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'condition' => 'color_settings_type:is(owndefinied)',
      ),
      array(
        'id'          => 'custom_css',
        'label'       => __( 'Custom CSS', 'srh-education-theme' ),
        'type'        => 'css',
        'section'     => 'custom_codes',
      ),
      array(
        'id'          => 'custom_js',
        'label'       => __( 'Custom JavaScript', 'srh-education-theme' ),
        'type'        => 'javascript',
        'section'     => 'custom_codes',
      ),
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}