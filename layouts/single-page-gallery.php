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
  'row' => 13,
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
  'class' => 'module-1461788581471-1436 upfront-module-spacer',
  'id' => 'module-1461788581471-1436',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1461788581471-1926',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1461788581471-1550',
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
  'class' => 'module-1461788105239-1053',
  'id' => 'module-1461788105239-1053',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h6 style="text-align: right;"><a target="_self" data-upfront-link-type="homepage" href="{{upfront:home_url}}"><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1">Home</span></a> <span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1">/</span> Gallery</h6>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1461788105239-1158',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'textbox-special',
    'padding_slider' => '15',
    'top_padding_num' => '15',
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
         'preset' => 'textbox-special',
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
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1461788184032-1422',
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
));

$breadcrumbs->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1461788579510-1172 upfront-module-spacer',
  'id' => 'module-1461788579510-1172',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1461788579510-1361',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1461788579509-1155',
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
  'row' => 14,
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
  'bottom_bg_padding_slider' => '43',
  'bottom_bg_padding_num' => '43',
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
  'background_color' => '#ufc6',
)
			);

$block_title->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1461788575317-1472 upfront-module-spacer',
  'id' => 'module-1461788575317-1472',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1461788575317-1852',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1461788575315-1552',
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
    'content' => '<h3>GALLERY</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1461788328004-1600',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'textbox-special',
    'padding_slider' => '15',
    'top_padding_num' => '11',
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
         'preset' => 'textbox-special',
      )),
    )),
    'row' => 1.8000000000000000444089209850062616169452667236328125,
    'top_padding_use' => 'yes',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '15',
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
  'wrapper_id' => 'wrapper-1461788467788-1819',
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
));

$block_title->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1461788577184-1830 upfront-module-spacer',
  'id' => 'module-1461788577184-1830',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1461788577184-1116',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1461788577184-1829',
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

$block_banner = upfront_create_region(
			array (
  'name' => 'block-banner',
  'title' => 'Block Banner',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'block-banner',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'version' => '1.0.0',
  'row' => 45,
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
  'background_style' => 'full',
  'background_default' => 'hide',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/single-page-gallery/issue-bg-about.jpg',
  'background_image_ratio' => 0.2300000000000000099920072216264088638126850128173828125,
)
			);

$block_banner->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1466810717445-1608 upfront-module-spacer',
  'id' => 'module-1466810717445-1608',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1466810717445-1423',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1466810717445-1561',
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

$block_banner->add_element("PlainTxt", array (
  'columns' => '11',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1461788467919-1231',
  'id' => 'module-1461788467919-1231',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Computer skateboard Carles, occaecat Pinterest hashtag assumenda PBR&amp;B. Quis authentic scenester cupidatat incididunt, brunch letterpress yoyo veniam flexitarian Carles anim freegan elit deep v.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1461788467919-1184',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'textbox-alternative',
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
    'row' => 10,
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'textbox-alternative',
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
  'row' => 10,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1461805628938-1010',
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
      'edited' => true,
      'col' => 7,
      'order' => 0,
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
));

$block_banner->add_element("PlainTxt", array (
  'columns' => '11',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1466810605642-1092',
  'id' => 'module-1466810605642-1092',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">VHS lo-fi viral magna, incididunt 3 wolf moon literally. Truffaut kale chips seitan, ex small batch chia keytar Portland ennui leggings butcher Schlitz church-key Banksy hashtag. Gluten-free Williamsburg et sriracha.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1466810605642-1964',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'textbox-alternative',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'row' => 17,
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
    )),
  ),
  'row' => 17,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1466810712461-1415',
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
      'edited' => true,
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
));

$block_banner->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1466810719887-1208 upfront-module-spacer',
  'id' => 'module-1466810719887-1208',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1466810719887-1644',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1466810719886-1574',
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

$regions->add($block_banner);

$main = upfront_create_region(
			array (
  'name' => 'main',
  'title' => 'Main Area',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'main',
  'position' => 10,
  'allow_sidebar' => true,
),
			array (
  'row' => 140,
  'background_type' => 'color',
  'background_color' => '#ufc6',
  'version' => '1.0.0',
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
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'bg_padding_type' => 'varied',
  'top_bg_padding_slider' => '70',
  'top_bg_padding_num' => '70',
  'bottom_bg_padding_slider' => '80',
  'bottom_bg_padding_num' => '80',
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
)
			);

$main->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1466811577324-1955 upfront-module-spacer',
  'id' => 'module-1466811577324-1955',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1466811577324-1913',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1466811577324-1221',
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

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1466820849209-1373 upfront-module-spacer',
  'id' => 'module-1466820849209-1373',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1466820849209-1390',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1466820849208-1708',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'clear' => true,
      'order' => 1,
      'col' => 1,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 1,
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
      'col' => 1,
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

$main->add_element("Ugallery", array (
  'columns' => '20',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1466810837362-1594',
  'id' => 'module-1466810837362-1594',
  'options' => 
  array (
    'type' => 'UgalleryModel',
    'view_class' => 'UgalleryView',
    'has_settings' => 1,
    'class' => 'c24 upfront-gallery',
    'id_slug' => 'ugallery',
    'preset' => 'gallery-alternative',
    'status' => 'ok',
    'images' => 
    array (
      0 => 
      (array)(array(
         'id' => '362',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'medium_large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001-768x512.jpg',
            1 => 768,
            2 => 512,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001.jpg',
            1 => 1280,
            2 => 853,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001-140x140-5879.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001.jpg',
             'full' => 
            (array)(array(
               'width' => 1280,
               'height' => 853,
            )),
             'crop' => 
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 35,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 210,
                 'height' => 140,
              )),
               'id' => 362,
               'element_id' => 'ugallery-object-1466810837360-1539',
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 285,
           'height' => 190,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' => 
        (array)(array(
           'left' => 48,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001-190x190-8932.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1466810837360-1539',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => '<p class="nosortable">Image 001</p>',
         'caption' => '<p class="nosortable">Image 001</p>',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'imageLink' => 
        (array)(array(
           'type' => 'image',
           'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001.jpg',
           'target' => '',
        )),
         'linkTarget' => '',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 48,
        )),
         'imageLinkType' => 'image',
         'imageLinkUrl' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001.jpg',
         'imageLinkTarget' => '',
      )),
      1 => 
      (array)(array(
         'id' => '363',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'medium_large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002-768x512.jpg',
            1 => 768,
            2 => 512,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002.jpg',
            1 => 1280,
            2 => 853,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002-140x140-3490.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002.jpg',
             'full' => 
            (array)(array(
               'width' => 1280,
               'height' => 853,
            )),
             'crop' => 
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 35,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 210,
                 'height' => 140,
              )),
               'id' => 363,
               'element_id' => 'ugallery-object-1466810837360-1539',
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 285,
           'height' => 190,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' => 
        (array)(array(
           'left' => 48,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002-190x190-4833.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1466810837360-1539',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => '<p class="nosortable">Image 002</p>',
         'caption' => '<p class="nosortable">Image 002</p>',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'imageLink' => 
        (array)(array(
           'type' => 'image',
           'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002.jpg',
           'target' => '',
        )),
         'linkTarget' => '',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 48,
        )),
         'imageLinkType' => 'image',
         'imageLinkUrl' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002.jpg',
         'imageLinkTarget' => '',
      )),
      2 => 
      (array)(array(
         'id' => '364',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'medium_large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003-768x512.jpg',
            1 => 768,
            2 => 512,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003.jpg',
            1 => 1280,
            2 => 853,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003-140x140-6214.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003.jpg',
             'full' => 
            (array)(array(
               'width' => 1280,
               'height' => 853,
            )),
             'crop' => 
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 35,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 210,
                 'height' => 140,
              )),
               'id' => 364,
               'element_id' => 'ugallery-object-1466810837360-1539',
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 285,
           'height' => 190,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' => 
        (array)(array(
           'left' => 48,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003-190x190-4046.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1466810837360-1539',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => '<p class="nosortable">Image 003</p>',
         'caption' => '<p class="nosortable">Image 003</p>',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'imageLink' => 
        (array)(array(
           'type' => 'image',
           'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003.jpg',
           'target' => '',
        )),
         'linkTarget' => '',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 48,
        )),
         'imageLinkType' => 'image',
         'imageLinkUrl' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003.jpg',
         'imageLinkTarget' => '',
      )),
      3 => 
      (array)(array(
         'id' => '365',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'medium_large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004-768x512.jpg',
            1 => 768,
            2 => 512,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004.jpg',
            1 => 1280,
            2 => 853,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004-140x140-4617.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004.jpg',
             'full' => 
            (array)(array(
               'width' => 1280,
               'height' => 853,
            )),
             'crop' => 
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 35,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 210,
                 'height' => 140,
              )),
               'id' => 365,
               'element_id' => 'ugallery-object-1466810837360-1539',
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 285,
           'height' => 190,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' => 
        (array)(array(
           'left' => 48,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004-190x190-4929.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1466810837360-1539',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => '<p class="nosortable">Image 004</p>',
         'caption' => '<p class="nosortable">Image 004</p>',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'imageLink' => 
        (array)(array(
           'type' => 'image',
           'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004.jpg',
           'target' => '',
        )),
         'linkTarget' => '',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 48,
        )),
         'imageLinkType' => 'image',
         'imageLinkUrl' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004.jpg',
         'imageLinkTarget' => '',
      )),
      4 => 
      (array)(array(
         'id' => '366',
         'srcFull' => '{{upfront:home_url}}/wp-content/uploads/sites/3/2016/06/gallery-img-005.JPG',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-005-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-005-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'medium_large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-005-768x512.jpg',
            1 => 768,
            2 => 512,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-005-1024x683.jpg',
            1 => 1024,
            2 => 683,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:home_url}}/wp-content/uploads/sites/3/2016/06/gallery-img-005.JPG',
            1 => 2400,
            2 => 1600,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-005-140x140-9176.jpg',
             'urlOriginal' => '{{upfront:home_url}}/wp-content/uploads/sites/3/2016/06/gallery-img-005.JPG',
             'full' => 
            (array)(array(
               'width' => 2400,
               'height' => 1600,
            )),
             'crop' => 
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 35,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 210,
                 'height' => 140,
              )),
               'id' => 366,
               'element_id' => 'ugallery-object-1466810837360-1539',
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 285,
           'height' => 190,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' => 
        (array)(array(
           'left' => 48,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-005-190x190-7320.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1466810837360-1539',
         'urlType' => 'image',
         'url' => '{{upfront:home_url}}/wp-content/uploads/sites/3/2016/06/gallery-img-005.JPG',
         'rotation' => 0,
         'link' => 'original',
         'title' => '<p class="nosortable">Image 005</p>',
         'caption' => '<p class="nosortable">Image 005</p>',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'imageLink' => 
        (array)(array(
           'type' => 'image',
           'url' => '{{upfront:home_url}}/wp-content/uploads/sites/3/2016/06/gallery-img-005.JPG',
           'target' => '',
        )),
         'linkTarget' => '',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 48,
        )),
         'imageLinkType' => 'image',
         'imageLinkUrl' => '{{upfront:home_url}}/wp-content/uploads/sites/3/2016/06/gallery-img-005.JPG',
         'imageLinkTarget' => '',
      )),
      5 => 
      (array)(array(
         'id' => '367',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'medium_large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006-768x512.jpg',
            1 => 768,
            2 => 512,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006.jpg',
            1 => 1280,
            2 => 853,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006-140x140-5819.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006.jpg',
             'full' => 
            (array)(array(
               'width' => 1280,
               'height' => 853,
            )),
             'crop' => 
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 35,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 210,
                 'height' => 140,
              )),
               'id' => 367,
               'element_id' => 'ugallery-object-1466810837360-1539',
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 285,
           'height' => 190,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' => 
        (array)(array(
           'left' => 48,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006-190x190-9115.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1466810837360-1539',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => '<p class="nosortable">Image 006</p>',
         'caption' => '<p class="nosortable">Image 006</p>',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'imageLink' => 
        (array)(array(
           'type' => 'image',
           'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006.jpg',
           'target' => '',
        )),
         'linkTarget' => '',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 48,
        )),
         'imageLinkType' => 'image',
         'imageLinkUrl' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006.jpg',
         'imageLinkTarget' => '',
      )),
      6 => 
      (array)(array(
         'id' => '368',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'medium_large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007-768x512.jpg',
            1 => 768,
            2 => 512,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007.jpg',
            1 => 1280,
            2 => 853,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007-140x140-4971.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007.jpg',
             'full' => 
            (array)(array(
               'width' => 1280,
               'height' => 853,
            )),
             'crop' => 
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 35,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 210,
                 'height' => 140,
              )),
               'id' => 368,
               'element_id' => 'ugallery-object-1466810837360-1539',
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 285,
           'height' => 190,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' => 
        (array)(array(
           'left' => 48,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007-190x190-8346.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1466810837360-1539',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => '<p class="nosortable">Image 007</p>',
         'caption' => '<p class="nosortable">Image 007</p>',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'imageLink' => 
        (array)(array(
           'type' => 'image',
           'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007.jpg',
           'target' => '',
        )),
         'linkTarget' => '',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 48,
        )),
         'imageLinkType' => 'image',
         'imageLinkUrl' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007.jpg',
         'imageLinkTarget' => '',
      )),
      7 => 
      (array)(array(
         'id' => '369',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008-300x205.jpg',
            1 => 300,
            2 => 205,
            3 => true,
          ),
           'medium_large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008-768x525.jpg',
            1 => 768,
            2 => 525,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008-1024x700.jpg',
            1 => 1024,
            2 => 700,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008.jpg',
            1 => 1280,
            2 => 875,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008-140x140-4543.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008.jpg',
             'full' => 
            (array)(array(
               'width' => 1280,
               'height' => 875,
            )),
             'crop' => 
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 32,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 205,
                 'height' => 140,
              )),
               'id' => 369,
               'element_id' => 'ugallery-object-1466810837360-1539',
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 278.21428571400002738300827331840991973876953125,
           'height' => 190,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' => 
        (array)(array(
           'left' => 43,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008-190x190-4545.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1466810837360-1539',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => '<p class="nosortable">Image 008</p>',
         'caption' => '<p class="nosortable">Image 008</p>',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'imageLink' => 
        (array)(array(
           'type' => 'image',
           'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008.jpg',
           'target' => '',
        )),
         'linkTarget' => '',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 43,
        )),
         'imageLinkType' => 'image',
         'imageLinkUrl' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008.jpg',
         'imageLinkTarget' => '',
      )),
    ),
    'elementSize' => 
    (array)(array(
       'width' => 0,
       'height' => 0,
    )),
    'labelFilters' => 'true',
    'thumbProportions' => '1',
    'thumbWidth' => '190',
    'thumbHeight' => 190,
    'thumbWidthNumber' => '190',
    'captionType' => 'none',
    'captionColor' => '#ffffff',
    'captionUseBackground' => 0,
    'captionBackground' => '#000000',
    'showCaptionOnHover' => 0,
    'fitThumbCaptions' => false,
    'thumbCaptionsHeight' => 20,
    'linkTo' => 'image',
    'even_padding' => 
    array (
      0 => 'false',
    ),
    'thumbPadding' => '30',
    'sidePadding' => 15,
    'bottomPadding' => 15,
    'thumbPaddingNumber' => '30',
    'thumbSidePaddingNumber' => 15,
    'thumbBottomPaddingNumber' => 15,
    'lockPadding' => 'yes',
    'lightbox_show_close' => 
    array (
      0 => 'true',
    ),
    'lightbox_show_image_count' => 
    array (
      0 => 'true',
    ),
    'lightbox_click_out_close' => 
    array (
      0 => 'true',
    ),
    'lightbox_active_area_bg' => 'rgba(255,255,255,1)',
    'lightbox_overlay_bg' => 'rgba(0,0,0,0.2)',
    'styles' => '',
    'element_id' => 'ugallery-object-1466810837360-1539',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '25',
    'right_padding_num' => '25',
    'anchor' => '',
    'left_padding_use' => 'yes',
    'right_padding_use' => 'yes',
    'top_padding_use' => 'yes',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'gallery-alternative',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'gallery-alternative-tablet',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'gallery-alternative-mobile',
      )),
    )),
    'theme_style' => '',
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
  'wrapper_id' => 'wrapper-1466811533369-1627',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 10,
      'order' => 1,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 0,
      'clear' => true,
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
      'left' => 0,
      'col' => 10,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1466820851964-1562 upfront-module-spacer',
  'id' => 'module-1466820851964-1562',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1466820851964-1355',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1466820851963-1688',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'clear' => false,
      'order' => 1,
      'col' => 1,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 1,
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
      'col' => 1,
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

$main->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1466811579481-1453 upfront-module-spacer',
  'id' => 'module-1466811579481-1453',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1466811579481-1576',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1466811579481-1597',
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

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'social-footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'social-footer.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

