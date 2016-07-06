<?php
$layout_version = '1.0.0';

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$main_content = upfront_create_region(
			array (
  'name' => 'main-content',
  'title' => 'Main Content',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'main-content',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'version' => '1.0.0',
  'row' => 99,
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'background_type' => 'color',
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'bg_padding_type' => 'varied',
  'top_bg_padding_slider' => '45',
  'top_bg_padding_num' => '45',
  'bottom_bg_padding_slider' => '0',
  'bottom_bg_padding_num' => '0',
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
  'background_color' => '#ufc6',
)
			);

$main_content->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460434661735-1501 upfront-module-spacer',
  'id' => 'module-1460434661735-1501',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1460434661734-1004',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1460434661733-1264',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
  ),
));

$main_content->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1460434623168-1194',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1460094615711-1111',
  'original_col' => 6,
  'top_padding_num' => 0,
  'bottom_padding_num' => 0,
  'use_padding' => 'yes',
  'edited' => true,
  'row' => 82,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 50,
    ),
  ),
));

$main_content->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460079592372-1662',
  'id' => 'module-1460079592372-1662',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 style="text-align: center;">ISSUE<span></span></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1460079592266-1883',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'textbox-special',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '0',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'textbox-special',
      )),
    )),
    'bottom_padding_use' => 'yes',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
    'theme_style' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1467823539825-1231',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 6,
      'order' => 1,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 1,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1460434623168-1194',
));

$main_content->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460093973093-1612',
  'id' => 'module-1460093973093-1612',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 style="text-align: center;">AN UPFRONT MAGAZINE</h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1460093973092-1541',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'text-logo',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '110',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'text-logo',
      )),
    )),
    'row' => 5,
    'top_padding_use' => 'yes',
    'top_padding_slider' => '15',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '110',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
         'bottom_padding_num' => '30',
         'bottom_padding_use' => 'yes',
         'top_padding_num' => '15',
         'top_padding_use' => 'yes',
         'left_padding_num' => '15',
         'left_padding_use' => 'yes',
         'right_padding_num' => '15',
         'right_padding_use' => 'yes',
         'row' => 4,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1467823539834-1502',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 6,
      'order' => 2,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 2,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 4,
    ),
  ),
  'group' => 'module-group-1460434623168-1194',
));

$main_content->add_element("Uwidget", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460159508652-1311',
  'id' => 'module-1460159508652-1311',
  'options' => 
  array (
    'id_slug' => 'uwidget',
    'type' => 'UwidgetModel',
    'view_class' => 'UwidgetView',
    'class' => 'c24 upfront-widget',
    'has_settings' => 1,
    'preset' => 'default',
    'widget' => 'search-2',
    'element_id' => 'uwidget-object-1460159508647-1704',
    'current_widget' => 'search-2',
    'current_widget_specific_settings' => 
    (array)(array(
       'widget-search-__i__-title' => 
      (array)(array(
         'label' => 'Title: ',
         'name' => 'title',
         'type' => 'text',
         'value' => '',
      )),
    )),
    'padding_slider' => '15',
    'top_padding_num' => '110',
    'bottom_padding_num' => '10',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'current_widget_specific_fields' => 
    (array)(array(
       'widget-search-__i__-title' => 
      (array)(array(
         'label' => 'Title: ',
         'name' => 'title',
         'type' => 'text',
         'value' => '',
      )),
    )),
    'title' => '',
    'widget_specific_fields' => 
    (array)(array(
       'widget-search-__i__-title' => 
      (array)(array(
         'label' => 'Title: ',
         'name' => 'title',
         'type' => 'text',
         'value' => '',
      )),
    )),
    'row' => 8,
    'top_padding_use' => 'yes',
    'top_padding_slider' => '110',
    'bottom_padding_use' => 'yes',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
         'top_padding_num' => '15',
         'top_padding_use' => 'yes',
         'left_padding_num' => '15',
         'left_padding_use' => 'yes',
         'right_padding_num' => '15',
         'right_padding_use' => 'yes',
         'bottom_padding_num' => '10',
         'bottom_padding_use' => 'yes',
         'row' => 8,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1467823539838-1452',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 6,
      'order' => 3,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 3,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 8,
    ),
  ),
  'group' => 'module-group-1460434623168-1194',
));

$main_content->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1460508734193-1588',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1460433335182-1879',
  'original_col' => 6,
  'top_padding_num' => 0,
  'bottom_padding_num' => 0,
  'use_padding' => 'yes',
  'row' => 76,
  'edited' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 2,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 1,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'hide' => 1,
    ),
  ),
));

$main_content->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460431100536-1775',
  'id' => 'module-1460431100536-1775',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/issue-block-orange-240x195-6122.jpg',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/issue-block-orange.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/issue-block-orange.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => '<p>My awesome image caption</p>',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 240,
       'height' => 195,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 240,
       'height' => 195,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 240,
       'height' => 195,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '38',
    'align' => 'center',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'is_locked' => true,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'image-1460431100532-1439',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'row' => 15,
    'valign' => 'center',
    'isDotAlign' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1460508734197-1389',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'close_wrapper' => false,
  'group' => 'module-group-1460508734193-1588',
));

$main_content->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460501941402-1566',
  'id' => 'module-1460501941402-1566',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/issue-block-pattern-240x195-8649.jpg',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/issue-block-pattern.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/issue-block-pattern.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => '<p>My awesome image caption</p>',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 240,
       'height' => 195,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 240,
       'height' => 195,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 240,
       'height' => 195,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '39',
    'align' => 'center',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'is_locked' => true,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'image-1460501941398-1589',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'row' => 15,
    'valign' => 'center',
    'isDotAlign' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1460508734197-1389',
  'new_line' => true,
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1460508734193-1588',
));

$main_content->add_group(array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1460434746860-1775',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1460434654609-1461',
  'original_col' => 8,
  'top_padding_num' => '45',
  'bottom_padding_num' => '40',
  'use_padding' => 'yes',
  'background_color' => '#ufc3',
  'background_style' => 'full',
  'background_default' => 'hide',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'background_type' => 'color',
  'anchor' => '',
  'top_padding_use' => 'yes',
  'top_padding_slider' => '45',
  'bottom_padding_use' => 'yes',
  'bottom_padding_slider' => '40',
  'lock_padding' => '',
  'row' => 52,
  'edited' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 3,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 3,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'row' => 62,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
));

$main_content->add_element("Uimage", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460434639064-1547',
  'id' => 'module-1460434639064-1547',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/issue-rocket-158x40-6856.png',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/issue-rocket.png',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/issue-rocket.png',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => false,
    'image_caption' => '<p>My awesome image caption</p>',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 158,
       'height' => 40,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 158,
       'height' => 40,
    )),
    'position' => 
    (array)(array(
       'top' => -1,
       'left' => -86,
    )),
    'marginTop' => 1,
    'element_size' => 
    (array)(array(
       'width' => 330,
       'height' => 41,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '40',
    'align' => 'center',
    'stretch' => false,
    'vstretch' => false,
    'quick_swap' => false,
    'is_locked' => true,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'image-1460434639060-1633',
    'padding_slider' => '15',
    'top_padding_num' => '5',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'row' => 5,
    'lock_padding' => '',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '15',
    'valign' => 'center',
    'isDotAlign' => true,
    'top_padding_use' => 'yes',
    'top_padding_slider' => '5',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1460434953533-1822',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1460434746860-1775',
));

$main_content->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460431100530-1789',
  'id' => 'module-1460431100530-1789',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<div class="plain-text-container nosortable">


<div class="plain-text-container nosortable">


<div class="plain-text-container nosortable">


<div class="plain-text-container nosortable">


<div class="plain-text-container nosortable">


<blockquote class="upfront-quote-alternative" style="text-align: justify;"><span class="upfront_theme_color_6" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_6">"NEIL ARMSTRONG, THAT SPACEMAN, <span id="selection-marker-1" class="redactor-selection-marker" data-verified="redactor">​</span>HE<span id="selection-marker-2" class="redactor-selection-marker" data-verified="redactor">​</span> WENT TO THE MOON BUT HE AIN\'T BEEN BACK. IT CAN\'T HAVE BEEN THAT GOOD."</span></blockquote><div class="plain-text-container nosortable">


</div>


</div>


</div>


</div>


</div>


</div>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1460431100529-1656',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'alt-text',
    'padding_slider' => '15',
    'top_padding_num' => '2',
    'bottom_padding_num' => '0',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'lock_padding' => '',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'row' => 45,
    'padding_number' => '15',
    'left_padding_num' => '35',
    'right_padding_num' => '35',
    'anchor' => '',
    'left_padding_use' => 'yes',
    'right_padding_use' => 'yes',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'alt-text',
      )),
    )),
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
         'row' => 24,
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1460434953553-1818',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'row' => 24,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1460434746860-1775',
));

$main_content->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460434738837-1662',
  'id' => 'module-1460434738837-1662',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 style="text-align: center;">KARL PILKINGTON</h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1460434738836-1580',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'textbox-special',
    'padding_slider' => '15',
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'row' => 9,
    'lock_padding' => '',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'textbox-special',
      )),
    )),
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1460434953566-1036',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 3,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 3,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1460434746860-1775',
));

$main_content->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460434687770-1651 upfront-module-spacer',
  'id' => 'module-1460434687770-1651',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1460434687770-1091',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1460434687769-1057',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
  ),
));

$regions->add($main_content);

$categories_one = upfront_create_region(
			array (
  'name' => 'categories-one',
  'title' => 'Categories One',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'categories-one',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'version' => '1.0.0',
  'row' => 35,
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'background_type' => 'color',
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'bg_padding_type' => 'varied',
  'top_bg_padding_slider' => 0,
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_slider' => 0,
  'bottom_bg_padding_num' => 0,
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
  'background_color' => '#ufc6',
)
			);

$categories_one->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460515943282-1997 upfront-module-spacer',
  'id' => 'module-1460515943282-1997',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1460515943282-1828',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1460515943280-1362',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
));

$categories_one->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1460513611121-1688',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1460515936056-1545',
  'original_col' => 24,
  'top_padding_num' => '90',
  'bottom_padding_num' => '50',
  'use_padding' => 'yes',
  'edited' => true,
  'lock_padding' => '',
  'top_padding_use' => 'yes',
  'top_padding_slider' => '90',
  'bottom_padding_use' => 'yes',
  'bottom_padding_slider' => '50',
  'row' => 15,
  'background_color' => '#ufc4',
  'background_style' => 'full',
  'background_default' => 'hide',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_type' => 'image',
  'anchor' => '',
  'background_image' => '{{upfront:style_url}}/images/archive-home/issue-block-tv.jpg',
  'background_image_ratio' => 1,
  'href' => '{{upfront:home_url}}/tv/',
  'linkTarget' => false,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 6,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 6,
      'order' => 0,
      'background_position_y' => '50',
      'background_style' => 'full',
      'background_position_x' => '50',
      'use_padding' => 1,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'background_position_y' => '50',
      'background_style' => 'full',
      'background_position_x' => '50',
      'use_padding' => 1,
    ),
    'current_property' => 
    array (
      0 => 'background_style',
    ),
  ),
));

$categories_one->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460501941396-1533',
  'id' => 'module-1460501941396-1533',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3><span class="upfront_theme_color_6">TV</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1460501941395-1315',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'alt-text',
    'padding_slider' => '15',
    'top_padding_num' => '20',
    'bottom_padding_num' => '0',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '30',
    'right_padding_num' => '30',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'alt-text',
      )),
    )),
    'row' => 12,
    'bottom_padding_use' => 'yes',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '20',
    'left_padding_use' => 'yes',
    'right_padding_use' => 'yes',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1460513611125-1070',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 6,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1460513611121-1688',
));

$categories_one->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460513586690-1225',
  'id' => 'module-1460513586690-1225',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p><span class="upfront_theme_color_6">Water cooler goos</span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1460513586689-1976',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'textbox-special',
    'padding_slider' => '15',
    'top_padding_num' => '0',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '30',
    'right_padding_num' => '30',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'textbox-special',
      )),
    )),
    'row' => 11,
    'left_padding_use' => 'yes',
    'right_padding_use' => 'yes',
    'top_padding_use' => 'yes',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1460513611127-1823',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 6,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 6,
      'order' => 0,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1460513611121-1688',
));

$categories_one->add_group(array (
  'columns' => '14',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1460513632532-1773',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1460515939667-1416',
  'original_col' => 24,
  'top_padding_num' => '90',
  'bottom_padding_num' => '65',
  'use_padding' => 'yes',
  'edited' => true,
  'row' => 11,
  'lock_padding' => '',
  'top_padding_use' => 'yes',
  'top_padding_slider' => '90',
  'bottom_padding_use' => 'yes',
  'bottom_padding_slider' => '65',
  'background_color' => '#ufc1',
  'background_style' => 'full',
  'background_default' => 'hide',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_type' => 'image',
  'anchor' => '',
  'background_image' => '{{upfront:style_url}}/images/archive-home/issue-block-photography.jpg',
  'background_image_ratio' => 0.40000000000000002220446049250313080847263336181640625,
  'href' => '{{upfront:home_url}}/photography/',
  'linkTarget' => false,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 6,
      'order' => 1,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 6,
      'order' => 0,
      'top' => 0,
      'background_position_y' => '50',
      'background_style' => 'full',
      'background_position_x' => '50',
      'use_padding' => 1,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'background_position_y' => '50',
      'background_style' => 'full',
      'background_position_x' => '50',
      'use_padding' => 1,
    ),
    'current_property' => 
    array (
      0 => 'background_style',
    ),
  ),
));

$categories_one->add_element("PlainTxt", array (
  'columns' => '14',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460513597566-1787',
  'id' => 'module-1460513597566-1787',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2>PHOTOGRAPHY</h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1460513597565-1863',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'textbox-alternative',
    'padding_slider' => '15',
    'top_padding_num' => '20',
    'bottom_padding_num' => '0',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '30',
    'right_padding_num' => '30',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'textbox-alternative',
      )),
    )),
    'row' => 12,
    'left_padding_use' => 'yes',
    'right_padding_use' => 'yes',
    'bottom_padding_use' => 'yes',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '20',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1460513632534-1516',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1460513632532-1773',
));

$categories_one->add_element("PlainTxt", array (
  'columns' => '14',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460513614786-1015',
  'id' => 'module-1460513614786-1015',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p><span class="upfront_theme_color_6">Hipster cameras</span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1460513614785-1061',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'textbox-special',
    'padding_slider' => '15',
    'top_padding_num' => '0',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '30',
    'right_padding_num' => '30',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'textbox-special',
      )),
    )),
    'row' => 8,
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'left_padding_use' => 'yes',
    'right_padding_use' => 'yes',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1460513632536-1722',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1460513632532-1773',
));

$categories_one->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460515949234-1049 upfront-module-spacer',
  'id' => 'module-1460515949234-1049',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1460515949234-1514',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1460515949233-1828',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
));

$regions->add($categories_one);

$categories_two = upfront_create_region(
			array (
  'name' => 'categories-two',
  'title' => 'Categories Two',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'categories-two',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'version' => '1.0.0',
  'row' => 37,
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'background_type' => 'color',
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'bg_padding_type' => 'varied',
  'top_bg_padding_slider' => 0,
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_slider' => 0,
  'bottom_bg_padding_num' => 0,
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
  'background_color' => '#ufc6',
)
			);

$categories_two->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460516017000-1091 upfront-module-spacer',
  'id' => 'module-1460516017000-1091',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1460516016999-1998',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1460516016998-1063',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
));

$categories_two->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1460513695053-1217',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1460515987425-1962',
  'original_col' => 24,
  'top_padding_num' => '65',
  'bottom_padding_num' => '70',
  'use_padding' => 'yes',
  'edited' => true,
  'lock_padding' => '',
  'top_padding_use' => 'yes',
  'top_padding_slider' => '65',
  'bottom_padding_use' => 'yes',
  'bottom_padding_slider' => '70',
  'row' => 25,
  'background_color' => '#ufc4',
  'background_style' => 'full',
  'background_default' => 'hide',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_type' => 'image',
  'anchor' => '',
  'background_image' => '{{upfront:style_url}}/images/archive-home/issue-block-tech-news.jpg',
  'background_image_ratio' => 1,
  'background_repeat' => 'no-repeat',
  'background_position' => '50% 50%',
  'href' => '{{upfront:home_url}}/tech-news/',
  'linkTarget' => false,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 6,
      'order' => 1,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 6,
      'order' => 0,
      'background_position_y' => '50',
      'background_style' => 'full',
      'background_position_x' => '50',
      'use_padding' => 1,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'background_position_y' => '50',
      'background_style' => 'full',
      'background_position_x' => '50',
      'use_padding' => 1,
    ),
    'current_property' => 
    array (
      0 => 'background_style',
    ),
  ),
));

$categories_two->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460513624166-1975',
  'id' => 'module-1460513624166-1975',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3><span class="upfront_theme_color_6" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_6">TECH</span></h3><h3><span class="upfront_theme_color_6" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_6">NEWS</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1460513624166-1542',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'alt-text',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '0',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '30',
    'right_padding_num' => '30',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'alt-text',
      )),
    )),
    'row' => 17,
    'left_padding_use' => 'yes',
    'right_padding_use' => 'yes',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1460513695057-1785',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1460513695053-1217',
));

$categories_two->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460513666237-1455',
  'id' => 'module-1460513666237-1455',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p>10 Must see features</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1460513666237-1258',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'textbox-alternative',
    'padding_slider' => '15',
    'top_padding_num' => '0',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '30',
    'right_padding_num' => '30',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'textbox-alternative',
      )),
    )),
    'row' => 7,
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'left_padding_use' => 'yes',
    'right_padding_use' => 'yes',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1460513695060-1033',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1460513695053-1217',
));

$categories_two->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1460513717827-1717',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1460515990840-1947',
  'original_col' => 24,
  'top_padding_num' => '65',
  'bottom_padding_num' => '70',
  'use_padding' => 'yes',
  'edited' => true,
  'lock_padding' => '',
  'top_padding_use' => 'yes',
  'top_padding_slider' => '65',
  'bottom_padding_use' => 'yes',
  'bottom_padding_slider' => '70',
  'row' => 6,
  'background_color' => '#ufc1',
  'background_style' => 'full',
  'background_default' => 'hide',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_type' => 'image',
  'anchor' => '',
  'background_image' => '{{upfront:style_url}}/images/archive-home/issue-block-gallery.jpg',
  'background_image_ratio' => 1,
  'href' => '{{upfront:home_url}}/gallery/',
  'linkTarget' => false,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 6,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 6,
      'order' => 1,
      'top' => 0,
      'background_position_y' => '50',
      'background_style' => 'full',
      'background_position_x' => '50',
      'use_padding' => 1,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'background_position_y' => '50',
      'background_style' => 'full',
      'background_position_x' => '50',
      'use_padding' => 1,
    ),
    'current_property' => 
    array (
      0 => 'background_style',
    ),
  ),
));

$categories_two->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460513683459-1211',
  'id' => 'module-1460513683459-1211',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class=""><span><span class="upfront_theme_color_6"><br></span></span></h3><h3 class=""><span><span class="upfront_theme_color_6">GALLERY</span></span><br></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1460513683458-1769',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'alt-text',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '0',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '30',
    'right_padding_num' => '30',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'alt-text',
      )),
    )),
    'row' => 17,
    'left_padding_use' => 'yes',
    'right_padding_use' => 'yes',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1460513717830-1047',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1460513717827-1717',
));

$categories_two->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460513697735-1454',
  'id' => 'module-1460513697735-1454',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p><span class="upfront_theme_color_6">The Latest Creations</span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1460513697734-1636',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'textbox-special',
    'padding_slider' => '15',
    'top_padding_num' => '0',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '30',
    'right_padding_num' => '30',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'textbox-special',
      )),
    )),
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'row' => 7,
    'left_padding_use' => 'yes',
    'right_padding_use' => 'yes',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1460513717832-1422',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1460513717827-1717',
));

$categories_two->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1460513750197-1002',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1460515994482-1973',
  'original_col' => 24,
  'top_padding_num' => '65',
  'bottom_padding_num' => '70',
  'use_padding' => 'yes',
  'edited' => true,
  'lock_padding' => '',
  'top_padding_use' => 'yes',
  'top_padding_slider' => '65',
  'bottom_padding_use' => 'yes',
  'bottom_padding_slider' => '70',
  'row' => 23,
  'background_color' => '#ufc2',
  'background_style' => 'full',
  'background_default' => 'hide',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_type' => 'image',
  'anchor' => '',
  'background_image' => '{{upfront:style_url}}/images/archive-home/issue-block-music.jpg',
  'background_image_ratio' => 1,
  'href' => '{{upfront:home_url}}/music/',
  'linkTarget' => false,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 6,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 3,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 6,
      'order' => 0,
      'top' => 0,
      'row' => 51,
      'background_position_y' => '50',
      'background_style' => 'full',
      'background_position_x' => '50',
      'use_padding' => 1,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'background_position_y' => '50',
      'background_style' => 'full',
      'background_position_x' => '50',
      'use_padding' => 1,
    ),
    'current_property' => 
    array (
      0 => 'background_style',
    ),
  ),
));

$categories_two->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460513706427-1222',
  'id' => 'module-1460513706427-1222',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3><br></h3><h3><span class="upfront_theme_color_6">MUSIC</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1460513706426-1664',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'alt-text',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '0',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '30',
    'right_padding_num' => '30',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'alt-text',
      )),
    )),
    'row' => 17,
    'left_padding_use' => 'yes',
    'right_padding_use' => 'yes',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1460513750199-1114',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1460513750197-1002',
));

$categories_two->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460513730495-1818',
  'id' => 'module-1460513730495-1818',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p><span class="upfront_theme_color_6">... For the love of</span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1460513730495-1351',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'textbox-special',
    'padding_slider' => '15',
    'top_padding_num' => '0',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '30',
    'right_padding_num' => '30',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'textbox-special',
      )),
    )),
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'row' => 7,
    'left_padding_use' => 'yes',
    'right_padding_use' => 'yes',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1460513750202-1240',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1460513750197-1002',
));

$categories_two->add_element("Uimage", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460505281883-1925',
  'id' => 'module-1460505281883-1925',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/issue-block-cyan-60x225-4514.jpg',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/issue-block-cyan.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/issue-block-cyan.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => false,
    'image_caption' => '<p>My awesome image caption</p>',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 277,
       'height' => 225,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 240,
       'height' => 195,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 108.5,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 60,
       'height' => 225,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '41',
    'align' => 'center',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'is_locked' => true,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'image-1460505281876-1795',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'row' => 45,
    'valign' => 'center',
    'isDotAlign' => false,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
         'row' => 31,
         'element_size' => 
        (array)(array(
           'width' => 60,
           'height' => 225,
        )),
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
         'row' => 220,
         'element_size' => 
        (array)(array(
           'width' => 285,
           'height' => 1068,
        )),
      )),
    )),
    'lock_padding' => 0,
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1460515998922-1715',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 2,
      'order' => 3,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 4,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 2,
      'order' => 1,
      'row' => 51,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'hide' => 1,
      'row' => 220,
    ),
    'current_property' => 
    array (
      0 => 'row',
    ),
  ),
));

$categories_two->add_element("Uspacer", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1467783738046-1710 upfront-module-spacer',
  'id' => 'module-1467783738046-1710',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1467783738046-1895',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1467783738046-1719',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'clear' => false,
      'order' => 3,
      'col' => 4,
    ),
    'mobile' => 
    array (
      'col' => 4,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'hide' => 0,
      'left' => 0,
      'col' => 4,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
));

$categories_two->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460516004103-1676 upfront-module-spacer',
  'id' => 'module-1460516004103-1676',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1460516004103-1181',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1460516004101-1121',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
));

$regions->add($categories_two);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'featured-articles.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'featured-articles.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'social-footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'social-footer.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

