<?php
$layout_version = '1.0.0';

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$breadcrumbs = upfront_create_region(
			array (
  'name' => 'breadcrumbs',
  'title' => 'Breadcrumbs',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'breadcrumbs',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'version' => '1.0.0',
  'row' => 6,
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
  'top_bg_padding_slider' => '4',
  'top_bg_padding_num' => '4',
  'bottom_bg_padding_slider' => '15',
  'bottom_bg_padding_num' => '15',
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
  'background_color' => '#ufc6',
)
			);

$breadcrumbs->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1470544071356-1546 upfront-module-spacer',
  'id' => 'module-1470544071356-1546',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1470544071356-1728',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1470544071356-1454',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$breadcrumbs->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1470543127120-1535',
  'id' => 'module-1470543127120-1535',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h6 style="text-align: right;"><a target="_self" data-upfront-link-type="homepage" href="{{upfront:home_url}}"><span class="upfront_theme_color_7">Home</span></a> <span class="upfront_theme_color_7" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_7">/</span> Contact</h6>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1470543127120-1644',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'default',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'row' => 5,
    'current_preset' => 'default',
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
  'wrapper_id' => 'wrapper-1470544032031-1192',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
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
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$breadcrumbs->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1470544067194-1813 upfront-module-spacer',
  'id' => 'module-1470544067194-1813',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1470544067194-1795',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1470544067193-1055',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$regions->add($breadcrumbs);

$block_title = upfront_create_region(
			array (
  'name' => 'block-title',
  'title' => 'Block Title',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'block-title',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'version' => '1.0.0',
  'row' => 7,
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
       'background_type' => 'color',
       'bottom_bg_padding_num' => '20',
       'bottom_bg_padding_slider' => '20',
    )),
     'current_property' => 'bottom_bg_padding_slider',
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
  'bottom_bg_padding_slider' => '43',
  'bottom_bg_padding_num' => '43',
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
  'background_color' => '#ffffff',
)
			);

$block_title->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1467840367125-1108 upfront-module-spacer',
  'id' => 'module-1467840367125-1108',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1467840367125-1330',
    'preset' => 'default',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1467840367124-1793',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$block_title->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1461788328004-1627',
  'id' => 'module-1461788328004-1627',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h5><span class="upfront_theme_bg_color_6">&nbsp;&nbsp;CONTACT &nbsp;</span></h5>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1461788328004-1600',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'textbox-titles',
    'padding_slider' => '15',
    'top_padding_num' => '13',
    'bottom_padding_num' => '30',
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
         'preset' => 'textbox-titles',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'textbox-titles-for-tablet',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'textbox-titles-for-mobile',
      )),
    )),
    'row' => 1.8000000000000000444089209850062616169452667236328125,
    'top_padding_use' => 'yes',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '40',
    'right_padding_use' => 'yes',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
         'lock_padding' => '',
         'bottom_padding_use' => 'yes',
         'bottom_padding_slider' => '25',
         'bottom_padding_num' => '25',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
         'lock_padding' => '',
         'bottom_padding_use' => 'yes',
         'bottom_padding_slider' => '0',
         'bottom_padding_num' => '0',
      )),
    )),
    'current_preset' => 'textbox-titles',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1467840351610-1361',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
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
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$block_title->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1467840369021-1129 upfront-module-spacer',
  'id' => 'module-1467840369021-1129',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1467840369021-1392',
    'preset' => 'default',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1467840369020-1207',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$regions->add($block_title);

$main_area = upfront_create_region(
			array (
  'name' => 'main-area',
  'title' => 'Main Area',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'main-area',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'version' => '1.0.0',
  'row' => 68,
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
       'background_type' => 'color',
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'current_property' => 'background_type',
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
  'bottom_bg_padding_slider' => '40',
  'bottom_bg_padding_num' => '40',
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
  'background_color' => '#ufc6',
)
			);

$main_area->add_element("Uspacer", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1467842383291-1736 upfront-module-spacer',
  'id' => 'module-1467842383291-1736',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1467842383290-1451',
    'preset' => 'default',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1467842383290-1972',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 4,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 4,
      'edited' => true,
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
    'mobile' => 
    array (
      'edited' => true,
    ),
  ),
));

$main_area->add_element("Uspacer", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1470619183574-1363 upfront-module-spacer',
  'id' => 'module-1470619183574-1363',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1470619183574-1381',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1470619183573-1133',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'clear' => true,
      'order' => 1,
      'col' => 4,
    ),
    'mobile' => 
    array (
      'edited' => true,
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
    'mobile' => 
    array (
      'edited' => true,
    ),
  ),
));

$main_area->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1470621906157-1311 upfront-module-spacer',
  'id' => 'module-1470621906157-1311',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1470621906157-1005',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1470621906157-1494',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'clear' => true,
      'order' => 1,
      'col' => 1,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'breakpoint' => 
  array (
    'mobile' => 
    array (
      'edited' => true,
      'hide' => 0,
      'left' => 0,
      'col' => 1,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
));

$main_area->add_element("PlainTxt", array (
  'columns' => '7',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1467839905397-1851',
  'id' => 'module-1467839905397-1851',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 style="text-align: right;">Got a story?​</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1467839905396-1994',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'textbox-alternative',
    'padding_slider' => '15',
    'top_padding_num' => '80',
    'bottom_padding_num' => '0',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
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
         'preset' => 'textbox-alternative',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'textbox-alternative-for-mobile',
      )),
    )),
    'is_edited' => true,
    'row' => 22,
    'top_padding_use' => 'yes',
    'top_padding_slider' => '80',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
         'lock_padding' => '',
         'top_padding_use' => 'yes',
         'top_padding_slider' => '15',
         'top_padding_num' => '15',
         'row' => 8,
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
         'top_padding_use' => 'yes',
         'top_padding_slider' => '15',
         'top_padding_num' => '15',
         'row' => 8,
      )),
    )),
    'current_preset' => 'textbox-alternative',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1467840438474-1207',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => false,
      'col' => 8,
      'order' => 1,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'clear' => false,
      'col' => 6,
      'order' => 1,
      'edited' => true,
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
      'row' => 8,
      'col' => 8,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'row' => 8,
      'col' => 6,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'close_wrapper' => false,
));

$main_area->add_element("PlainTxt", array (
  'columns' => '7',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1470544032183-1686',
  'id' => 'module-1470544032183-1686',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 style="text-align: right;">Or just want to drop us a line?</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1470544032183-1593',
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
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'current_preset' => 'textbox-alternative',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'textbox-alternative',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'textbox-alternative-for-mobile',
      )),
    )),
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'row' => 22,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
         'row' => 6,
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
         'row' => 13,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1467840438474-1207',
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 8,
      'left' => 0,
      'top' => 0,
      'edited' => true,
      'order' => 1,
      'row' => 6,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
    'mobile' => 
    array (
      'col' => 6,
      'edited' => true,
      'row' => 13,
    ),
  ),
));

$main_area->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1467842414289-1019 upfront-module-spacer',
  'id' => 'module-1467842414289-1019',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1467842414288-1447',
    'preset' => 'default',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1467842414288-1831',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 1,
      'edited' => true,
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
    'mobile' => 
    array (
      'edited' => true,
    ),
  ),
));

$main_area->add_element("Ucontact", array (
  'columns' => '9',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1467839905413-1332',
  'id' => 'module-1467839905413-1332',
  'options' => 
  array (
    'form_add_title' => 
    array (
    ),
    'form_title' => 'Contact form',
    'form_name_label' => 'Name',
    'form_email_label' => 'Email',
    'form_email_to' => '',
    'show_subject' => 
    array (
    ),
    'show_captcha' => 
    array (
    ),
    'form_subject_label' => 'Subject:',
    'form_captcha_label' => 'CAPTCHA:',
    'form_default_subject' => 'Sent from the website',
    'form_message_label' => 'Enquiry',
    'form_button_text' => 'Submit',
    'form_validate_when' => 'submit',
    'form_label_position' => 'over',
    'preset' => 'contact-alternative',
    'type' => 'UcontactModel',
    'view_class' => 'UcontactView',
    'class' => 'c24 upfront-contact-form',
    'has_settings' => 1,
    'id_slug' => 'ucontact',
    'element_id' => 'ucontact-object-1467839905412-1175',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'row' => 47,
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
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
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'contact-alternative',
      )),
    )),
    'current_preset' => 'contact-alternative',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1467842367396-1950',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 2,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 2,
      'edited' => true,
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
      'col' => 12,
      'edited' => true,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
    'mobile' => 
    array (
      'col' => 7,
      'edited' => true,
    ),
  ),
));

$main_area->add_element("Uspacer", array (
  'columns' => '3',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1467842439216-1787 upfront-module-spacer',
  'id' => 'module-1467842439216-1787',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1467842439216-1032',
    'preset' => 'default',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1467842439215-1583',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 3,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 3,
      'edited' => true,
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
    'mobile' => 
    array (
      'edited' => true,
    ),
  ),
));

$regions->add($main_area);

$block_map = upfront_create_region(
			array (
  'name' => 'block-map',
  'title' => 'Block Map',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'block-map',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'version' => '1.0.0',
  'row' => 53,
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'background_type' => 'map',
       'row' => 63,
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'current_property' => 'background_type',
  )),
  'background_type' => 'map',
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'bg_padding_type' => 'varied',
  'top_bg_padding_slider' => '30',
  'top_bg_padding_num' => '30',
  'bottom_bg_padding_slider' => '30',
  'bottom_bg_padding_num' => '30',
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
  'background_color' => '#ffffff',
  'background_map_center' => 
  array (
    0 => -37.8179999999999978399500832892954349517822265625,
    1 => 144.9759999999999990905052982270717620849609375,
  ),
  'background_map_zoom' => '15',
  'background_map_style' => 'ROADMAP',
  'background_map_controls' => 
  array (
    0 => 'pan',
  ),
  'background_show_markers' => '1',
  'background_use_custom_map_code' => '1',
  'background_map_location' => 'Madison Ave, New York',
  'padding_slider' => '15',
  'script' => '[
    {
		"featureType": "water",
		"elementType": "all",
		"stylers": [
			{ "hue": "#ffffff" },
			{ "saturation": -100 },
			{ "lightness": 100 },
			{ "visibility": "on" }
		]
	},{
		"featureType": "road",
		"elementType": "all",
		"stylers": [
			{ "hue": "#de7854" },
			{ "saturation": -32 },
			{ "lightness": -6 },
			{ "visibility": "on" }
		]
	},{
		"featureType": "road.local",
		"elementType": "all",
		"stylers": [
			{ "hue": "#bcccc9" },
			{ "saturation": -86 },
			{ "lightness": -23 },
			{ "visibility": "on" }
		]
	},{
		"featureType": "road.arterial",
		"elementType": "labels",
		"stylers": [
			{ "hue": "#de7854" },
			{ "saturation": -32 },
			{ "lightness": -22 },
			{ "visibility": "on" }
		]
	},{
		"featureType": "landscape.natural",
		"elementType": "all",
		"stylers": [
			{ "hue": "#2c3130" },
			{ "saturation": -64 },
			{ "lightness": -81 },
			{ "visibility": "off" }
		]
	},{
		"featureType": "administrative",
		"elementType": "all",
		"stylers": [
			{ "hue": "#373d3c" },
			{ "saturation": 5 },
			{ "lightness": -55 },
			{ "visibility": "simplified" }
		]
	},{
		"featureType": "landscape",
		"elementType": "geometry",
		"stylers": [
			{ "hue": "#c6c7c6" },
			{ "saturation": -97 },
			{ "lightness": -13 },
			{ "visibility": "simplified" }
		]
	},{
		"featureType": "poi",
		"elementType": "geometry",
		"stylers": [
			{ "hue": "#2c3130" },
			{ "saturation": -87 },
			{ "lightness": -77 },
			{ "visibility": "simplified" }
		]
	},{
		"featureType": "transit",
		"elementType": "labels",
		"stylers": [
			{ "hue": "#de7854" },
			{ "saturation": 68 },
			{ "lightness": -20 },
			{ "visibility": "off" }
		]
	},{
		"featureType": "road",
		"elementType": "geometry",
		"stylers": [
			{ "hue": "#bcccc9" },
			{ "saturation": -86 },
			{ "lightness": 36 },
			{ "visibility": "simplified" }
		]
	},{
		"featureType": "poi.school",
		"elementType": "all",
		"stylers": [
			{ "hue": "#c6c7c6" },
			{ "saturation": -98 },
			{ "lightness": -6 },
			{ "visibility": "off" }
		]
	},{
		"featureType": "poi.place_of_worship",
		"elementType": "all",
		"stylers": [
			{ "hue": "#c6c7c6" },
			{ "saturation": -94 },
			{ "lightness": -8 },
			{ "visibility": "off" }
		]
	},{
		"featureType": "poi.business",
		"elementType": "all",
		"stylers": [
			{ "hue": "#c6c7c6" },
			{ "saturation": -94 },
			{ "lightness": -8 },
			{ "visibility": "off" }
		]
	},{
		"featureType": "poi.park",
		"elementType": "labels",
		"stylers": [
			{ "hue": "#c6c7c6" },
			{ "saturation": -98 },
			{ "lightness": 0 },
			{ "visibility": "off" }
		]
	},{
		"featureType": "poi.medical",
		"elementType": "all",
		"stylers": [
			{ "hue": "#c6c7c6" },
			{ "saturation": -98 },
			{ "lightness": -11 },
			{ "visibility": "off" }
		]
	},{
		"featureType": "road",
		"elementType": "all",
		"stylers": [
			{ "hue": "#c6c7c6" },
			{ "saturation": -99 },
			{ "lightness": 38 },
			{ "visibility": "on" }
		]
	},{
		"featureType": "poi",
		"elementType": "labels",
		"stylers": [
			{ "hue": "#de7854" },
			{ "saturation": 43 },
			{ "lightness": -23 },
			{ "visibility": "off" }
		]
	}
]',
  'map_styles' => '[
    {
		"featureType": "water",
		"elementType": "all",
		"stylers": [
			{ "hue": "#ffffff" },
			{ "saturation": -100 },
			{ "lightness": 100 },
			{ "visibility": "on" }
		]
	},{
		"featureType": "road",
		"elementType": "all",
		"stylers": [
			{ "hue": "#de7854" },
			{ "saturation": -32 },
			{ "lightness": -6 },
			{ "visibility": "on" }
		]
	},{
		"featureType": "road.local",
		"elementType": "all",
		"stylers": [
			{ "hue": "#bcccc9" },
			{ "saturation": -86 },
			{ "lightness": -23 },
			{ "visibility": "on" }
		]
	},{
		"featureType": "road.arterial",
		"elementType": "labels",
		"stylers": [
			{ "hue": "#de7854" },
			{ "saturation": -32 },
			{ "lightness": -22 },
			{ "visibility": "on" }
		]
	},{
		"featureType": "landscape.natural",
		"elementType": "all",
		"stylers": [
			{ "hue": "#2c3130" },
			{ "saturation": -64 },
			{ "lightness": -81 },
			{ "visibility": "off" }
		]
	},{
		"featureType": "administrative",
		"elementType": "all",
		"stylers": [
			{ "hue": "#373d3c" },
			{ "saturation": 5 },
			{ "lightness": -55 },
			{ "visibility": "simplified" }
		]
	},{
		"featureType": "landscape",
		"elementType": "geometry",
		"stylers": [
			{ "hue": "#c6c7c6" },
			{ "saturation": -97 },
			{ "lightness": -13 },
			{ "visibility": "simplified" }
		]
	},{
		"featureType": "poi",
		"elementType": "geometry",
		"stylers": [
			{ "hue": "#2c3130" },
			{ "saturation": -87 },
			{ "lightness": -77 },
			{ "visibility": "simplified" }
		]
	},{
		"featureType": "transit",
		"elementType": "labels",
		"stylers": [
			{ "hue": "#de7854" },
			{ "saturation": 68 },
			{ "lightness": -20 },
			{ "visibility": "off" }
		]
	},{
		"featureType": "road",
		"elementType": "geometry",
		"stylers": [
			{ "hue": "#bcccc9" },
			{ "saturation": -86 },
			{ "lightness": 36 },
			{ "visibility": "simplified" }
		]
	},{
		"featureType": "poi.school",
		"elementType": "all",
		"stylers": [
			{ "hue": "#c6c7c6" },
			{ "saturation": -98 },
			{ "lightness": -6 },
			{ "visibility": "off" }
		]
	},{
		"featureType": "poi.place_of_worship",
		"elementType": "all",
		"stylers": [
			{ "hue": "#c6c7c6" },
			{ "saturation": -94 },
			{ "lightness": -8 },
			{ "visibility": "off" }
		]
	},{
		"featureType": "poi.business",
		"elementType": "all",
		"stylers": [
			{ "hue": "#c6c7c6" },
			{ "saturation": -94 },
			{ "lightness": -8 },
			{ "visibility": "off" }
		]
	},{
		"featureType": "poi.park",
		"elementType": "labels",
		"stylers": [
			{ "hue": "#c6c7c6" },
			{ "saturation": -98 },
			{ "lightness": 0 },
			{ "visibility": "off" }
		]
	},{
		"featureType": "poi.medical",
		"elementType": "all",
		"stylers": [
			{ "hue": "#c6c7c6" },
			{ "saturation": -98 },
			{ "lightness": -11 },
			{ "visibility": "off" }
		]
	},{
		"featureType": "road",
		"elementType": "all",
		"stylers": [
			{ "hue": "#c6c7c6" },
			{ "saturation": -99 },
			{ "lightness": 38 },
			{ "visibility": "on" }
		]
	},{
		"featureType": "poi",
		"elementType": "labels",
		"stylers": [
			{ "hue": "#de7854" },
			{ "saturation": 43 },
			{ "lightness": -23 },
			{ "visibility": "off" }
		]
	}
]',
)
			);

$block_map->add_element("Uspacer", array (
  'columns' => '1',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1470799497369-1998',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1470799497369-1687',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'wrapper_id' => 'wrapper-1470799497368-1154',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'edited' => true,
  'new_line' => true,
  'wrapper_breakpoint' => 
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

$block_map->add_group(array (
  'columns' => '6',
  'class' => '',
  'id' => 'module-group-1470799208006-1773',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1470799139875-1468',
  'original_col' => 24,
  'top_padding_num' => 0,
  'bottom_padding_num' => 0,
  'use_padding' => 1,
  'background_color' => 'rgba(222,120,85,0.9)',
  'background_style' => 'full',
  'background_default' => 'hide',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'background_type' => 'color',
  'anchor' => '',
  'top_padding_use' => false,
  'top_padding_slider' => '15',
  'bottom_padding_use' => false,
  'bottom_padding_slider' => '15',
  'row' => 51,
  'edited' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 6,
      'order' => 0,
      'edited' => true,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 1,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 6,
      'edited' => true,
      'left' => 0,
      'top' => 0,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$block_map->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1467840438601-1835',
  'id' => 'module-1467840438601-1835',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<blockquote class="upfront-quote-alternative"><span class="upfront_theme_color_6" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_6">ISSUE</span></blockquote>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1467840438601-1213',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'textbox-alternative',
    'padding_slider' => '15',
    'top_padding_num' => 25,
    'bottom_padding_num' => '0',
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
         'preset' => 'textbox-alternative',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'textbox-alternative-for-tablet',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'textbox-alternative-for-mobile',
      )),
    )),
    'row' => 10,
    'bottom_padding_use' => 'yes',
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
         'row' => 12,
      )),
    )),
    'current_preset' => 'textbox-alternative',
    'top_padding_slider' => '20',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1470799380931-1280',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 6,
      'order' => 1,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 1,
    ),
  ),
  'breakpoint' => 
  array (
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'row' => 12,
      'left' => 0,
      'top' => 0,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'tablet' => 
    array (
      'col' => 6,
      'edited' => false,
      'left' => 0,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1470799208006-1773',
));

$block_map->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1467845253754-1127',
  'id' => 'module-1467845253754-1127',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="upfront-quote-alternative" style="text-align: center;"><span class="upfront_theme_color_6" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_6"><strong data-redactor-tag="strong" data-verified="redactor">MAGAZINE</strong></span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1467845253754-1141',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'default',
    'padding_slider' => '15',
    'top_padding_num' => '0',
    'bottom_padding_num' => '15',
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
         'preset' => 'default',
      )),
    )),
    'row' => 7,
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
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1470799379480-1496',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 6,
      'order' => 2,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 2,
    ),
  ),
  'breakpoint' => 
  array (
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'top' => 0,
      'col' => 7,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'tablet' => 
    array (
      'col' => 6,
      'edited' => false,
      'left' => 0,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1470799208006-1773',
));

$block_map->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1467848905633-1185',
  'id' => 'module-1467848905633-1185',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p style="text-align: center;"><span class="upfront_theme_color_6" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_6"></span><span class="upfront_theme_color_6" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_6"><span class="upfront_theme_color_6" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_6">Head Office</span></span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1467848905632-1229',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'textbox-alternative',
    'padding_slider' => '15',
    'top_padding_num' => '0',
    'bottom_padding_num' => '5',
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
         'preset' => 'textbox-alternative',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'textbox-alternative-for-tablet',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'textbox-alternative-for-mobile',
      )),
    )),
    'row' => 4,
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
    'current_preset' => 'textbox-alternative',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
  ),
  'row' => 4,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1470799376794-1925',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 6,
      'order' => 3,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 3,
    ),
  ),
  'breakpoint' => 
  array (
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'tablet' => 
    array (
      'col' => 6,
      'edited' => false,
    ),
  ),
  'group' => 'module-group-1470799208006-1773',
));

$block_map->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1470798610345-1815',
  'options' => 
  array (
    'content' => '<p style="text-align: center;"><span class="upfront_theme_color_6">888 Madison Ave</span></p>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1470798610345-1237',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'preset' => 'textbox-alternative',
    'padding_slider' => '15',
    'top_padding_num' => '0',
    'bottom_padding_num' => '5',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'current_preset' => 'textbox-alternative',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'textbox-alternative',
      )),
    )),
    'row' => 4,
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
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
  'row' => 4,
  'wrapper_id' => 'wrapper-1470799208017-1066',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 6,
      'order' => 4,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 4,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 6,
      'edited' => false,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
      'edited' => false,
    ),
  ),
  'group' => 'module-group-1470799208006-1773',
));

$block_map->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1470799134242-1964',
  'options' => 
  array (
    'content' => '<p style="text-align: center;"><span class="upfront_theme_color_6" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_6">New York, NY 10173, USA</span></p>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1470799134241-1921',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'preset' => 'textbox-alternative',
    'padding_slider' => '15',
    'top_padding_num' => '0',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'current_preset' => 'textbox-alternative',
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
  'row' => 7,
  'wrapper_id' => 'wrapper-1470799208019-1623',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 6,
      'order' => 5,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 5,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 6,
      'edited' => false,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
      'edited' => false,
    ),
  ),
  'group' => 'module-group-1470799208006-1773',
));

$block_map->add_element("Uspacer", array (
  'columns' => '6',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1470799684819-1614',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1470799684819-1171',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'wrapper_id' => 'wrapper-1470799684818-1844',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 1,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'clear' => false,
      'order' => 0,
      'col' => 6,
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
      'col' => 6,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
));

$block_map->add_element("Uspacer", array (
  'columns' => '17',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1470799501225-1012',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1470799501225-1339',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'wrapper_id' => 'wrapper-1470799501224-1394',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'edited' => true,
  'wrapper_breakpoint' => 
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

$regions->add($block_map);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'social-footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'social-footer.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

