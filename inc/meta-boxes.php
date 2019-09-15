<?php


function filter_list_item_title_label( $label, $id ) {

  if ( $id == 'students' ) {

    $label = __( 'শিক্ষার্থীর নাম', 'srh-education-theme' );

  }

  return $label;

}
add_filter( 'ot_list_item_title_label', 'filter_list_item_title_label', 10, 2 );


add_action( 'admin_init', 'ppm_quickstart_custom_meta_boxes' );


function ppm_quickstart_custom_meta_boxes() {


  $special_content_meta_box = array(
    'id'          => 'special_content_meta_box',
    'title'       => __('স্পেশাল সেকশনের তথ‍্য', 'srh-education-theme'),
    'pages'       => array( 'special-section' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
        array(
            'label' => __('কনটেন্টের ধরণ', 'srh-education-theme'),
            'id' => 'content_type',
            'type' => 'select',
            'choices' => array(
                array(
                    'value' => 'slideshow',
                    'label' => __('স্লাইডশো', 'srh-education-theme'),
                ),
                array(
                    'value' => 'carousel',
                    'label' => __('ক‍্যারোসেল', 'srh-education-theme'),
                ),
                array(
                    'value' => 'parallax',
                    'label' => __('প‍্যারালাক্স কনটেন্ট', 'srh-education-theme'),
                ),
                array(
                    'value' => 'youtube_video',
                    'label' => __('ইউটিউব ভিডিও', 'srh-education-theme'),
                ),
                array(
                    'value' => 'google_map',
                    'label' => __('গুগল ম‍্যাপ', 'srh-education-theme'),
                ),
                array(
                    'value' => 'cta',
                    'label' => __('কল টু একশন', 'srh-education-theme'),
                ),
                array(
                    'value' => 'features',
                    'label' => __('ফিচার লিস্ট', 'srh-education-theme'),
                ),
                array(
                    'value' => 'tab',
                    'label' => __('ট‍্যাব', 'srh-education-theme'),
                ),
                array(
                    'value' => 'accordion',
                    'label' => __('কলাপ্স সেকশন', 'srh-education-theme'),
                ),               
            ),
        ),
        array(
            'label'       => __('কলাপ্স আইটেমগুলো যুক্ত করুন', 'srh-education-theme'),
            'id'          => 'accordion_list',
            'type'        => 'list-item',
            'condition' => 'content_type:is(accordion)',
            'settings' => array(
                array(
                    'label' => __('কলাপ্সের কনটেন্ট', 'srh-education-theme'),
                    'id'    => 'content',
                    'type'  => 'textarea',
                )
            ),
        ), 
        array(
            'label'       => __('ট‍্যাব আইটেমগুলো যুক্ত করুন', 'srh-education-theme'),
            'id'          => 'tabs_list',
            'type'        => 'list-item',
            'condition' => 'content_type:is(tab)',
            'settings' => array(
                array(
                    'label' => __('ট‍্যাবের কনটেন্ট', 'srh-education-theme'),
                    'id'    => 'content',
                    'type'  => 'textarea',
                )
            ),
        ),        
        array(
            'label'       => __('ম‍্যাপ Latitude', 'srh-education-theme'),
            'id'          => 'map_lat',
            'type'        => 'text',
            'condition'   => 'content_type:is(google_map)',
        ),       
        array(
            'label'       => __('কল টু একশন টাইটেল', 'srh-education-theme'),
            'id'          => 'cta_title',
            'type'        => 'text',
            'condition'   => 'content_type:is(cta)',
        ),      
        array(
            'label'       => __('কল টু একশন কনটেন্ট', 'srh-education-theme'),
            'id'          => 'cta_content',
            'type'        => 'textarea',
            'condition'   => 'content_type:is(cta)',
        ),      
        array(
            'label'       => __('কল টু একশন লিংক টেক্সট', 'srh-education-theme'),
            'id'          => 'cta_link_text',
            'type'        => 'text',
            'condition'   => 'content_type:is(cta)',
        ),     
        array(
            'label'       => __('কল টু একশন লিংক', 'srh-education-theme'),
            'id'          => 'cta_link',
            'type'        => 'text',
            'condition'   => 'content_type:is(cta)',
        ), 
        array(
            'label'       => __('লিংক নতুন ট‍্যাবে ওপেন হবে', 'srh-education-theme'),
            'id'          => 'link_behavour',
            'type'        => 'select',
            'std'        => '_self',
            'choices'        => array(
                array(
                    'value' => '_self',
                    'label' => __('না', 'srh-education-theme'),
                ),
                array(
                    'value' => '_blank',
                    'label' => __('হ‍্যা', 'srh-education-theme'),
                )
            ),
            'condition'   => 'content_type:is(cta)',
        ),        
        array(
            'label'       => __('ম‍্যাপ Longititude', 'srh-education-theme'),
            'id'          => 'map_long',
            'type'        => 'text',
            'condition'   => 'content_type:is(google_map)',
        ), 
        array(
            'label'       => __('ম‍্যাপ জুম লেভেল', 'srh-education-theme'),
            'id'          => 'map_zoom',
            'type'        => 'numeric-slider',
            'std'        => '16',
            'min_max_step'=> '8,20,1',
            'condition'   => 'content_type:is(google_map)',
        ), 
        array(
            'label'       => __('ম‍্যাপ আইকন', 'srh-education-theme'),
            'id'          => 'map_icon',
            'type'        => 'upload',
            'condition'   => 'content_type:is(google_map)',
        ), 
        array(
            'label'       => __('ম‍্যাপের হাইট', 'srh-education-theme'),
            'id'          => 'map_height',
            'type'        => 'numeric-slider',
            'std'        => '400',
            'min_max_step'=> '100,600,50',
            'condition'   => 'content_type:is(google_map)',
        ),        
        array(
            'label'       => __('ইউটিউব ভিডিও আইডি', 'srh-education-theme'),
            'id'          => 'youtube_video_id',
            'type'        => 'text',
            'condition'   => 'content_type:is(youtube_video)',
        ), 
        array(
            'label'       => __('প‍্যারালাক্স কনটেন্ট', 'srh-education-theme'),
            'id'          => 'parallax_content',
            'type'        => 'textarea',
            'condition'   => 'content_type:is(parallax)',
        ), 
        array(
            'label'       => __('প‍্যারালাক্স ব‍্যাকগ্রাউন্ড', 'srh-education-theme'),
            'id'          => 'parallax_bg',
            'type'        => 'upload',
            'condition'   => 'content_type:is(parallax)',
        ), 
        array(
            'label'       => __('প‍্যারালাক্স সেকশনের হাইট', 'srh-education-theme'),
            'id'          => 'parallax_height',
            'type'        => 'numeric-slider',
            'std'        => '400',
            'min_max_step'=> '100,600,50',
            'condition'   => 'content_type:is(parallax)',
        ),        
        array(
            'label'       => __('স্লাইড শো এর জন‍্য ছবি আপলোড করুন', 'srh-education-theme'),
            'id'          => 'slideshow_images',
            'type'        => 'gallery',
            'condition' => 'content_type:is(slideshow)',
        ),
        array(
            'label'       => __('স্লাইড শো এর হাইট', 'srh-education-theme'),
            'id'          => 'slideshow_height',
            'type'        => 'numeric-slider',
            'std'        => '400',
            'min_max_step'=> '100,600,50',
            'condition'   => 'content_type:is(slideshow)',
        ),
        array(
            'label'       => __('স্লাইড শো এর ক‍্যাপশন শো করবে?', 'srh-education-theme'),
            'id'          => 'slideshow_caption',
            'type'        => 'on-off',
            'std'        => 'on',
            'condition'   => 'content_type:is(slideshow)',
        ),
        array(
            'label'       => __('ক‍্যারোসেল এর জন‍্য আইটেম যুক্ত করুন', 'srh-education-theme'),
            'id'          => 'carousel_items',
            'type'        => 'gallery',
            'condition' => 'content_type:is(carousel)',
        ),
        array(
            'label'       => __('ক‍্যারোসেল ইমেজ এর হাইট', 'srh-education-theme'),
            'id'          => 'carousel_image_height',
            'type'        => 'numeric-slider',
            'std'        => '200',
            'min_max_step'=> '100,600,50',
            'condition'   => 'content_type:is(carousel)',
        ),        
        array(
            'label'       => __('একটি রো তে কতগুলো আইটেম শো করবে?', 'srh-education-theme'),
            'id'          => 'carousel_items_count',
            'type'        => 'numeric-slider',
            'std'        => '4',
            'min_max_step'=> '2,8,1',
            'condition' => 'content_type:is(carousel)',
        ),
        array(
            'label'       => __('ক‍্যারোসেল অটোপ্লে হবে?', 'srh-education-theme'),
            'id'          => 'carousel_autoplay',
            'type'        => 'on-off',
            'std'        => 'on',
            'condition'   => 'content_type:is(carousel)',
        ), 
        array(
            'label'       => __('ফিচার কলাম', 'srh-education-theme'),
            'id'          => 'feature_columns',
            'type'        => 'numeric-slider',
            'std'        => '3',
            'min_max_step'=> '2,6,1',
            'condition'   => 'content_type:is(features)',
        ),         
        array(
            'label'       => __('ফিচার আইটেমগুলো যুক্ত করুন', 'srh-education-theme'),
            'id'          => 'feature_list',
            'type'        => 'list-item',
            'condition' => 'content_type:is(features)',
            'settings' => array(
                array(
                    'label' => __('আইকন কোড', 'srh-education-theme'),
                    'id'    => 'icon_code',
                    'type'  => 'text',
                ),
                array(
                    'label' => __('কনটেন্ট', 'srh-education-theme'),
                    'id'    => 'content',
                    'type'  => 'textarea',
                )
            ),
        ),         
    )
  );
  ot_register_meta_box( $special_content_meta_box );

  $result_meta_box = array(
    'id'          => 'result_meta_box',
    'title'       => __('রেজাল্টের তথ‍্য', 'srh-education-theme'),
    'pages'       => array( 'result' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('রেজাল্টের ধরন', 'srh-education-theme'),
        'id'          => 'result_type',
        'type'        => 'select',
        'choices'        => array(
            array(
                'value' => 'file_upload',
                'label' => __('ফাইল আপলোড', 'srh-education-theme'),
            ),
            array(
                'value' => 'result_entry',
                'label' => __('শিক্ষার্থী অনুযায়ী রেজাল্ট', 'srh-education-theme'),
            )
        )
      ),        
      array(
        'label'       => __('রেজাল্টের ফাইল আপলোড করুন', 'srh-education-theme'),
        'id'          => 'upload_result',
        'type'        => 'upload',
        'condition' => 'result_type:is(file_upload)',
      ),        
      array(
        'label'       => __('মোট নম্বর টেক্সট', 'srh-education-theme'),
        'id'          => 'total_no_text',
        'type'        => 'text',
        'std'        => __('মোট নম্বর', 'srh-education-theme'),
        'condition' => 'result_type:is(result_entry)',
      ),      
      array(
        'label'       => __('প্রাপ্ত নম্বর টেক্সট', 'srh-education-theme'),
        'id'          => 'total_get_no_text',
        'type'        => 'text',
        'std'        => __('প্রাপ্ত নম্বর', 'srh-education-theme'),
        'condition' => 'result_type:is(result_entry)',
      ),        
      array(
        'label'       => __('মোট নম্বর', 'srh-education-theme'),
        'id'          => 'total_no',
        'type'        => 'text',
        'std'        => __('১০০', 'srh-education-theme'),
        'condition' => 'result_type:is(result_entry)',
      ),
      array(
        'label'       => __('শিক্ষার্থীর রেজাল্ট যুক্ত করুন', 'srh-education-theme'),
        'id'          => 'student_results',
        'type'        => 'list-item',
        'settings'        => array(
            array(
                'label' => __('শিক্ষার্থীর শাখা', 'srh-education-theme'),
                'id' => 'division',
                'type' => 'select',
                'choices' => array(
                    array(
                        'value' => __('ক', 'srh-education-theme'),
                        'label' => __('ক - শাখা', 'srh-education-theme'),
                    ),
                    array(
                        'value' => __('খ', 'srh-education-theme'),
                        'label' => __('খ - শাখা', 'srh-education-theme'),
                    ),
                    array(
                        'value' => __('গ', 'srh-education-theme'),
                        'label' => __('গ - শাখা', 'srh-education-theme'),
                    ),
                    array(
                        'value' => __('ঘ', 'srh-education-theme'),
                        'label' => __('ঘ - শাখা', 'srh-education-theme'),
                    )
                )                
            ),
            array(
                'label' => __('শিক্ষার্থীর রোল', 'srh-education-theme'),
                'id' => 'roll',
                'type' => 'text',
            ),
            array(
                'label' => __('শিক্ষার্থীর প্রাপ্ত নম্বর', 'srh-education-theme'),
                'id' => 'getno',
                'type' => 'text',
            )
        ),  
        'condition' => 'result_type:is(result_entry)',
      ),        
    )
  );
  ot_register_meta_box( $result_meta_box );
    
  $prostudent_meta_box = array(
    'id'          => 'prostudent_meta_box',
    'title'       => __('কৃতি শিক্ষার্থীর তথ‍্য', 'srh-education-theme'),
    'pages'       => array( 'prostudent' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('তথ‍্য', 'srh-education-theme'),
        'id'          => 'prostudent_why',
        'type'        => 'text',
      ),       
    )
  );
  ot_register_meta_box( $prostudent_meta_box );

  $attendance_meta_box = array(
    'id'          => 'attendance_meta_box',
    'title'       => __('হাজিরার তথ‍্য', 'srh-education-theme'),
    'pages'       => array( 'attendance' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('মোট শিক্ষার্থীর সংখ‍্যা', 'srh-education-theme'),
        'id'          => 'total_student',
        'type'        => 'text',
      ),
      array(
        'label'       => __('আজ উপস্থিত শিক্ষার্থীর সংখ‍্যা', 'srh-education-theme'),
        'id'          => 'present_student',
        'type'        => 'text',
      ),
      array(
        'label'       => __('আজ অনুপস্থিত শিক্ষার্থীর সংখ‍্যা', 'srh-education-theme'),
        'id'          => 'absent_student',
        'type'        => 'text',
      ),
      array(
        'label'       => __('মোট শিক্ষকের সংখ‍্যা', 'srh-education-theme'),
        'id'          => 'total_teacher',
        'type'        => 'text',
      ),
      array(
        'label'       => __('আজ উপস্থিত শিক্ষকের সংখ‍্যা', 'srh-education-theme'),
        'id'          => 'present_teacher',
        'type'        => 'text',
      ),
      array(
        'label'       => __('আজ ছুটিতে থাকা শিক্ষকের সংখ‍্যা', 'srh-education-theme'),
        'id'          => 'absent_teacher',
        'type'        => 'text',
      ), 
      array(
        'label'       => __('মোট কর্মচারীর সংখ‍্যা', 'srh-education-theme'),
        'id'          => 'total_employee',
        'type'        => 'text',
      ),
      array(
        'label'       => __('আজ উপস্থিত কর্মচারীর সংখ‍্যা', 'srh-education-theme'),
        'id'          => 'present_employee',
        'type'        => 'text',
      ),
      array(
        'label'       => __('আজ ছুটিতে থাকা কর্মচারীর সংখ‍্যা', 'srh-education-theme'),
        'id'          => 'absent_employee',
        'type'        => 'text',
      ),        
    )
  );
  ot_register_meta_box( $attendance_meta_box );

  $employee_meta_box = array(
    'id'          => 'employee_meta_box',
    'title'       => __('কর্মচারীর তথ‍্য', 'srh-education-theme'),
    'pages'       => array( 'employee' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('পদবী', 'srh-education-theme'),
        'id'          => 'employee_designation',
        'type'        => 'text',
      ),
      array(
        'label'       => __('যোগদানের তারিখ', 'srh-education-theme'),
        'id'          => 'employee_date',
        'type'        => 'text',
      ),        
    )
  );
  ot_register_meta_box( $employee_meta_box );

  $photogallery_meta_box = array(
    'id'          => 'photogallery_meta_box',
    'title'       => __('ফটোগ‍্যালারি', 'srh-education-theme'),
    'pages'       => array( 'photogallery' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('ছবি আপলোড করুন', 'srh-education-theme'),
        'id'          => 'gallery_images',
        'type'        => 'gallery',
      ),        
    )
  );
  ot_register_meta_box( $photogallery_meta_box );

  $routine_meta_box = array(
    'id'          => 'routine_meta_box',
    'title'       => __('রুটিনের তথ‍্য', 'srh-education-theme'),
    'pages'       => array( 'routine' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('রুটিনের ধরণ', 'srh-education-theme'),
        'id'          => 'routine_type',
        'type'        => 'select',
        'choices'        => array(
            array(
                'value' => 'class',
                'label' => __('ক্লাশ রুটিন', 'srh-education-theme'),
            ),
            array(
                'value' => 'exam',
                'label' => __('পরীক্ষার রুটিন', 'srh-education-theme'),
            )
        )
      ),
      array(
        'label'       => __('রুটিন আপলোড করুন', 'srh-education-theme'),
        'id'          => 'upload_routine',
        'type'        => 'upload',
      ),        
    )
  );
  ot_register_meta_box( $routine_meta_box );

  $student_meta_box = array(
    'id'          => 'student_meta_box',
    'title'       => __('শিক্ষার্থী যুক্ত করুন', 'srh-education-theme'),
    'pages'       => array( 'student' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('শিক্ষার্থী যুক্ত করুন', 'srh-education-theme'),
        'id'          => 'students',
        'type'        => 'list-item',
        'settings'        => array(
            array(
                'label' => __('Student Batch', 'srh-education-theme'),
                'id' => 'division',
                'type' => 'text',               
            ),
            array(
                'label' => __('শিক্ষার্থীর রোল', 'srh-education-theme'),
                'id' => 'roll',
                'type' => 'text',
            )
        ),          
      ),
    )
  );
  ot_register_meta_box( $student_meta_box );

  $committee_meta_box = array(
    'id'          => 'committee_meta_box',
    'title'       => __('সদস‍্যের তথ‍্য', 'srh-education-theme'),
    'pages'       => array( 'committee' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('পদ', 'srh-education-theme'),
        'id'          => 'committee_designation',
        'type'        => 'text',
      ),
      array(
        'label'       => __('শুরুর তারিখ', 'srh-education-theme'),
        'id'          => 'committee_startdate',
        'type'        => 'text',
      ),
      array(
        'label'       => __('শেষের তারিখ', 'srh-education-theme'),
        'id'          => 'committee_enddate',
        'type'        => 'text',
      ),
    )
  );
  ot_register_meta_box( $committee_meta_box );
    
  $vacency_meta_box = array(
    'id'          => 'vacency_meta_box',
    'title'       => __('অন‍্যান‍্য তথ‍্য', 'srh-education-theme'),
    'pages'       => array( 'vacency' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('শুন‍্যপদের বিষয়', 'srh-education-theme'),
        'id'          => 'vacency_subject',
        'type'        => 'text',
      ),
      array(
        'label'       => __('শুন‍্যপদ সৃষ্টির তারিখ', 'srh-education-theme'),
        'id'          => 'vacency_date',
        'type'        => 'text',
      ),
    )
  );
  ot_register_meta_box( $vacency_meta_box );

    
  $enable_teacher_mobile_number = ot_get_option( 'enable_teacher_mobile_number' );
  $enable_teacher_education = ot_get_option( 'enable_teacher_education' );
    
  if($enable_teacher_mobile_number == 'on' && $enable_teacher_education == 'on') {
      $teacher_meta_box = array(
        'id'          => 'teacher_meta_box',
        'title'       => __('Other Information of Faculty member', 'srh-education-theme'),
        'pages'       => array( 'teacher' ),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
          array(
            'label'       => __('Type of Faculty member', 'srh-education-theme'),
            'id'          => 'teacher_type',
            'type'        => 'select',
            'choices'        => array(
                array(
                    'value' => 'current',
                    'label' => __('Faculty member', 'srh-education-theme'),
                ),
                array(
                    'value' => 'archive',
                    'label' => __('Lab Instructor', 'srh-education-theme'),
                )
            )
          ),
          array(
            'label'       => __('Designation', 'srh-education-theme'),
            'id'          => 'teacher_designation',
            'type'        => 'text',
          ),
          array(
            'label'       => __('Education Details', 'srh-education-theme'),
            'id'          => 'teacher_edu_qualification',
            'type'        => 'text',
          ),
          array(
            'label'       => __('Mobile Number', 'srh-education-theme'),
            'id'          => 'teacher_mobile',
            'type'        => 'text',
          ),
            array(
            'label'       => __('Email Address', 'srh-education-theme'),
            'id'          => 'teacher_email',
            'type'        => 'text',
          ),
          array(
            'label'       => __('Joining Date', 'srh-education-theme'),
            'id'          => 'teacher_join_date',
            'type'        => 'text',
          ),
        )
      );
  } elseif($enable_teacher_mobile_number == 'on') {
      $teacher_meta_box = array(
        'id'          => 'teacher_meta_box',
        'title'       => __('Other Information of Faculty member', 'srh-education-theme'),
        'pages'       => array( 'teacher' ),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
          array(
            'label'       => __('Type of Faculty member', 'srh-education-theme'),
            'id'          => 'teacher_type',
            'type'        => 'select',
            'choices'        => array(
                array(
                    'value' => 'current',
                    'label' => __('Faculty member', 'srh-education-theme'),
                ),
                array(
                    'value' => 'archive',
                    'label' => __('Lab Instructor', 'srh-education-theme'),
                )
            )
          ),
          array(
            'label'       => __('Designation', 'srh-education-theme'),
            'id'          => 'teacher_designation',
            'type'        => 'text',
          ),
          array(
            'label'       => __('Mobile Number', 'srh-education-theme'),
            'id'          => 'teacher_mobile',
            'type'        => 'text',
          ),            
          array(
            'label'       => __('Joining Date', 'srh-education-theme'),
            'id'          => 'teacher_join_date',
            'type'        => 'text',
          ),
            array(
            'label'       => __('Email Address', 'srh-education-theme'),
            'id'          => 'teacher_email',
            'type'        => 'text',
          ),
        )
      );
  } elseif($enable_teacher_education == 'on') {
      $teacher_meta_box = array(
        'id'          => 'teacher_meta_box',
        'title'       => __('Other Information of Faculty member', 'srh-education-theme'),
        'pages'       => array( 'teacher' ),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
          array(
            'label'       => __('Type of Faculty member', 'srh-education-theme'),
            'id'          => 'teacher_type',
            'type'        => 'select',
            'choices'        => array(
                array(
                    'value' => 'current',
                    'label' => __('Faculty member', 'srh-education-theme'),
                ),
                array(
                    'value' => 'archive',
                    'label' => __('Lab Instructor', 'srh-education-theme'),
                )
            )
          ),
          array(
            'label'       => __('Designation', 'srh-education-theme'),
            'id'          => 'teacher_designation',
            'type'        => 'text',
          ),
          array(
            'label'       => __('Education Details', 'srh-education-theme'),
            'id'          => 'teacher_edu_qualification',
            'type'        => 'text',
          ),
          array(
            'label'       => __('Joining Date', 'srh-education-theme'),
            'id'          => 'teacher_join_date',
            'type'        => 'text',
          ),
            array(
            'label'       => __('Email Address', 'srh-education-theme'),
            'id'          => 'teacher_email',
            'type'        => 'text',
          ),
        )
      );
  } else {
      $teacher_meta_box = array(
        'id'          => 'teacher_meta_box',
        'title'       => __('Other Information of Faculty member', 'srh-education-theme'),
        'pages'       => array( 'teacher' ),
        'context'     => 'normal',
        'priority'    => 'high',
        'fields'      => array(
          array(
            'label'       => __('Type of Faculty member', 'srh-education-theme'),
            'id'          => 'teacher_type',
            'type'        => 'select',
            'choices'        => array(
                array(
                    'value' => 'current',
                    'label' => __('Faculty member', 'srh-education-theme'),
                ),
                array(
                    'value' => 'archive',
                    'label' => __('Lab Instructor', 'srh-education-theme'),
                )
            )
          ),
          array(
            'label'       => __('Designation', 'srh-education-theme'),
            'id'          => 'teacher_designation',
            'type'        => 'text',
          ),
          array(
            'label'       => __('Joining Date', 'srh-education-theme'),
            'id'          => 'teacher_join_date',
            'type'        => 'text',
          ),
            array(
            'label'       => __('Email Address', 'srh-education-theme'),
            'id'          => 'teacher_email',
            'type'        => 'text',
          ),
        )
      );  
  }   
    

  ot_register_meta_box( $teacher_meta_box );

  $page_meta_box = array(
    'id'          => 'page_meta_box',
    'title'       => __('পাতার অন‍্যান‍্য তথ‍্য', 'srh-education-theme'),
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __('পাতার ধরণ', 'srh-education-theme'),
        'id'          => 'page_type',
        'type'        => 'select',
        'choices'        => array(
            array(
                'value' => 'general',
                'label' => __('সাধারণ পাতা', 'srh-education-theme'),
            ),
            
            array(
                'value' => 'teachers_list',
                'label' => __('List of Faculty member', 'srh-education-theme'),
            ),

            array(
                'value' => 'noticeboard',
                'label' => __('Notices', 'srh-education-theme'),
            ),
            array(
                'value' => 'routine',
                'label' => __('Routine', 'srh-education-theme'),
            ),
            array(
                'value' => 'result',
                'label' => __('Result', 'srh-education-theme'),
            ),
            
            array(
                'value' => 'photogallery',
                'label' => __('Photo Galley', 'srh-education-theme'),
            )
        )
      ),
      array(
        'label'       => __('থিম কালার', 'srh-education-theme'),
        'id'          => 'subpage_box_theme',
        'type'        => 'select',
        'choices'        => array(
            array(
                'value' => '1',
                'label' => __('থিম ১', 'srh-education-theme'),
            ),
            array(
                'value' => '2',
                'label' => __('থিম ২', 'srh-education-theme'),
            ),
            array(
                'value' => '3',
                'label' => __('থিম ৩', 'srh-education-theme'),
            ),
            array(
                'value' => '4',
                'label' => __('থিম ৪', 'srh-education-theme'),
            ),
            array(
                'value' => '5',
                'label' => __('থিম ৫', 'srh-education-theme'),
            ),
            array(
                'value' => '6',
                'label' => __('থিম ৬', 'srh-education-theme'),
            ),
            array(
                'value' => '7',
                'label' => __('থিম ৭', 'srh-education-theme'),
            )
        ),
        'condition' => 'page_type:is(child_page_list)',
      ),
      array(
        'label'       => __('Show Faculty member list', 'srh-education-theme'),
        'id'          => 'teacher_list_cat',
        'type'        => 'select',
        'choices'        => array(
            array(
                'value' => 'current',
                'label' => __('List of Faculty member', 'srh-education-theme'),
            ),
            array(
                'value' => 'archive',
                'label' => __('List of Lab Instructor', 'srh-education-theme'),
            )
        ),
        'condition' => 'page_type:is(teachers_list)',
      ),
      array(
        'label'       => __('যে শিক্ষার্থীদের তালিকা দেখাবে', 'srh-education-theme'),
        'id'          => 'student_list_cat',
        'type'        => 'select',
        'choices'        => array(
            array(
                'value' => 'all',
                'label' => __('সকল শিক্ষার্থীদের তালিকা', 'srh-education-theme'),
            ),
            array(
                'value' => 'specific',
                'label' => __('নির্দিষ্ট শিক্ষার্থীদের তালিকা', 'srh-education-theme'),
            ),
            array(
                'value' => 'pro',
                'label' => __('কৃতি শিক্ষার্থীদের তালিকা', 'srh-education-theme'),
            )
        ),
        'condition' => 'page_type:is(student_list)',
      ),
      array(
        'label'       => __('যে শিক্ষার্থীদের তালিকা দেখাবে', 'srh-education-theme'),
        'id'          => 'specific_students_id',
        'type'        => 'custom-post-type-select',
        'post_type'   => 'student',
        'condition' => 'student_list_cat:is(specific)',
      ), 
      array(
        'label'       => __('শিক্ষার্থী তালিকার কলাম', 'srh-education-theme'),
        'id'          => 'student_list_column',
        'type'        => 'select',
        'std'        => '4',
        'choices'        => array(
            array(
                'value' => '1',
                'label' => __('১ কলাম', 'srh-education-theme'),
            ),
            array(
                'value' => '2',
                'label' => __('২ কলাম', 'srh-education-theme'),
            ),
            array(
                'value' => '3',
                'label' => __('৩ কলাম', 'srh-education-theme'),
            ),
            array(
                'value' => '4',
                'label' => __('৪ কলাম', 'srh-education-theme'),
            ),
        ),
        'condition' => 'page_type:is(student_list)',
      ),        
      array(
        'label'       => __('রুটিন নির্বাচন করুন', 'srh-education-theme'),
        'id'          => 'select_routine',
        'type'        => 'select',
        'choices'        => array(
            array(
                'value' => 'class',
                'label' => __('ক্লাশ রুটিন', 'srh-education-theme'),
            ),
            array(
                'value' => 'exam',
                'label' => __('পরীক্ষার রুটিন', 'srh-education-theme'),
            )
        ),
        'condition' => 'page_type:is(routine)',
      ),
    array(
        'label'       => __('স্পেশাল কনটেন্ট যুক্ত করবেন?', 'srh-education-theme'),
        'id'          => 'enable_special_content',
        'type'        => 'on-off',
        'std'        => 'off',
    ),        
      array(
        'label'       => __('স্পেশাল কনটেন্ট যুক্ত করুন', 'srh-education-theme'),
        'id'          => 'page_special_contents',
        'type'        => 'list-item',
        'settings'        => array(
            array(
                'label'       => __('স্পেশাল কনটেন্ট নির্বাচন করুন', 'srh-education-theme'),
                'id'          => 'special_content_id',
                'type'        => 'custom-post-type-select',
                'post_type'   => 'special-section',
            ),
        ),
        'condition'   => 'enable_special_content:is(on)',
      ),        
        
        
      
    )
  );
  ot_register_meta_box( $page_meta_box );


}