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
  'row' => 5,
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
  'class' => 'module-1470546467280-1103 upfront-module-spacer',
  'id' => 'module-1470546467280-1103',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1470546467279-1389',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1470546467279-1841',
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
  'class' => 'module-1470546392830-1640',
  'id' => 'module-1470546392830-1640',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h6 style="text-align: right;"><a href="{{upfront:home_url}}" target="_self" data-upfront-link-type="homepage">Home</a> <span class="upfront_theme_color_7">/</span> Gallery</h6>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1470546392829-1106',
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
    'lock_padding' => '',
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
  'wrapper_id' => 'wrapper-1470546439259-1441',
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
  'class' => 'module-1470546465153-1478 upfront-module-spacer',
  'id' => 'module-1470546465153-1478',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1470546465152-1392',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1470546465152-1329',
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
       'edited' => true,
       'col' => 24,
       'background_type' => 'color',
       'row' => 6,
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
  'bottom_bg_padding_slider' => '0',
  'bottom_bg_padding_num' => '0',
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
    'current_preset' => 'default',
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
    'content' => '<h2><span class="upfront_theme_bg_color_6" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_bg_color_6">&nbsp;&nbsp;GALLERY &nbsp;</span></h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1461788328004-1600',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'box-title',
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
         'preset' => 'box-title',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'box-title',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'box-title',
      )),
    )),
    'row' => 6,
    'top_padding_use' => 'yes',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '30',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
         'bottom_padding_use' => 'yes',
         'bottom_padding_slider' => '25',
         'bottom_padding_num' => '25',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
         'bottom_padding_use' => 'yes',
         'bottom_padding_slider' => '0',
         'bottom_padding_num' => '0',
         'row' => 4,
      )),
    )),
    'current_preset' => 'box-title',
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
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 4,
    ),
    'current_property' => 
    array (
      0 => 'col',
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
    'current_preset' => 'default',
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
  'row' => 31,
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
    'current_preset' => 'default',
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
    'content' => '<p class=""><span style="color:rgb(131, 142, 141)" rel="color:rgb(131, 142, 141)" data-verified="redactor" data-redactor-tag="span" data-redactor-style="color:rgb(131, 142, 141)">Computer skateboard Carles, occaecat Pinterest hashtag assumenda PBR&amp;B. Quis authentic scenester cupidatat incididunt, brunch letterpress yoyo veniam flexitarian Carles anim freegan elit deep v.</span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1461788467919-1184',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'default',
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
    'row' => 23,
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'default',
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
    'current_preset' => 'default',
  ),
  'row' => 6,
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
    'current_property' => 
    array (
      0 => 'col',
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
    'content' => '<p class=""><span style="color:rgb(131, 142, 141)">VHS lo-fi viral magna, incididunt 3 wolf moon literally. Truffaut kale chips seitan, ex small batch chia keytar Portland ennui leggings butcher Schlitz church-key Banksy hashtag. Gluten-free Williamsburg et sriracha.</span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1466810605642-1964',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'default',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'row' => 24,
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
         'preset' => 'default',
      )),
    )),
    'current_preset' => 'default',
  ),
  'row' => 6,
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
    'current_property' => 
    array (
      0 => 'col',
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
    'current_preset' => 'default',
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
  'row' => 110,
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
       'background_type' => 'color',
       'bottom_bg_padding_num' => '10',
       'bottom_bg_padding_slider' => '10',
       'top_bg_padding_num' => '10',
       'top_bg_padding_slider' => '10',
    )),
     'current_property' => 'top_bg_padding_slider',
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'bg_padding_type' => 'varied',
  'top_bg_padding_slider' => '30',
  'top_bg_padding_num' => '30',
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
  'class' => 'module-1470616732407-1992 upfront-module-spacer',
  'id' => 'module-1470616732407-1992',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1470616732407-1728',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1470616732406-1355',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 2,
    ),
    'mobile' => 
    array (
      'edited' => true,
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
  'class' => 'module-1470620544238-1902 upfront-module-spacer',
  'id' => 'module-1470620544238-1902',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1470620544237-1101',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1470620544237-1053',
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
  'class' => 'module-1470616524451-1289',
  'id' => 'module-1470616524451-1289',
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
         'id' => 235479,
         'src' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001-(1)-190x190-7962.jpg',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/181658031gallery-img-001-(1).jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001-(1)-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001-(1)-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'medium_large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001-(1)-768x512.jpg',
            1 => 768,
            2 => 512,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001-(1)-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001-(1).jpg',
            1 => 1280,
            2 => 853,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001-(1)-140x140-1221.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001-(1).jpg',
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
               'id' => 48,
               'element_id' => 'ugallery-object-1470616524450-1957',
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
         'rotation' => 0,
         'link' => 'original',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001-(1).jpg',
         'title' => '<p>Image caption</p>',
         'caption' => 'Image description',
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
           'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001-(1).jpg',
           'target' => '',
        )),
         'linkTarget' => '',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1470616524450-1957',
         'urlType' => 'image',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 48,
        )),
         'imageLinkType' => 'image',
         'imageLinkUrl' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-001-(1).jpg',
         'imageLinkTarget' => '',
      )),
      1 => 
      (array)(array(
         'id' => 235480,
         'src' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002-(1)-190x190-3715.jpg',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/1234195281gallery-img-002-(1).jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002-(1)-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002-(1)-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'medium_large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002-(1)-768x512.jpg',
            1 => 768,
            2 => 512,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002-(1)-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002-(1).jpg',
            1 => 1280,
            2 => 853,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002-(1)-140x140-6343.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002-(1).jpg',
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
               'id' => 49,
               'element_id' => 'ugallery-object-1470616524450-1957',
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
         'rotation' => 0,
         'link' => 'original',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002-(1).jpg',
         'title' => '<p>Image caption</p>',
         'caption' => 'Image description',
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
           'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002-(1).jpg',
           'target' => '',
        )),
         'linkTarget' => '',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1470616524450-1957',
         'urlType' => 'image',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 48,
        )),
         'imageLinkType' => 'image',
         'imageLinkUrl' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-002-(1).jpg',
         'imageLinkTarget' => '',
      )),
      2 => 
      (array)(array(
         'id' => 235481,
         'src' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003-(1)-190x190-1404.jpg',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/915488904gallery-img-003-(1).jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003-(1)-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003-(1)-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'medium_large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003-(1)-768x512.jpg',
            1 => 768,
            2 => 512,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003-(1)-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003-(1).jpg',
            1 => 1280,
            2 => 853,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003-(1)-140x140-2757.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003-(1).jpg',
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
               'id' => 50,
               'element_id' => 'ugallery-object-1470616524450-1957',
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
         'rotation' => 0,
         'link' => 'original',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003-(1).jpg',
         'title' => '<p>Image caption</p>',
         'caption' => 'Image description',
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
           'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003-(1).jpg',
           'target' => '',
        )),
         'linkTarget' => '',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1470616524450-1957',
         'urlType' => 'image',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 48,
        )),
         'imageLinkType' => 'image',
         'imageLinkUrl' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-003-(1).jpg',
         'imageLinkTarget' => '',
      )),
      3 => 
      (array)(array(
         'id' => 235482,
         'src' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004-(1)-190x190-8899.jpg',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/148033567gallery-img-004-(1).jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004-(1)-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004-(1)-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'medium_large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004-(1)-768x512.jpg',
            1 => 768,
            2 => 512,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004-(1)-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004-(1).jpg',
            1 => 1280,
            2 => 853,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004-(1)-140x140-3027.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004-(1).jpg',
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
               'id' => 51,
               'element_id' => 'ugallery-object-1470616524450-1957',
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
         'rotation' => 0,
         'link' => 'original',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004-(1).jpg',
         'title' => '<p>Image caption</p>',
         'caption' => 'Image description',
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
           'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004-(1).jpg',
           'target' => '',
        )),
         'linkTarget' => '',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1470616524450-1957',
         'urlType' => 'image',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 48,
        )),
         'imageLinkType' => 'image',
         'imageLinkUrl' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-004-(1).jpg',
         'imageLinkTarget' => '',
      )),
      4 => 
      (array)(array(
         'id' => 235483,
         'src' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006-(1)-190x190-2228.jpg',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/1160659585gallery-img-006-(1).jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006-(1)-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006-(1)-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'medium_large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006-(1)-768x512.jpg',
            1 => 768,
            2 => 512,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006-(1)-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006-(1).jpg',
            1 => 1280,
            2 => 853,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006-(1)-140x140-4766.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006-(1).jpg',
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
               'id' => 53,
               'element_id' => 'ugallery-object-1470616524450-1957',
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
         'rotation' => 0,
         'link' => 'original',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006-(1).jpg',
         'title' => '<p>Image caption</p>',
         'caption' => 'Image description',
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
           'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006-(1).jpg',
           'target' => '',
        )),
         'linkTarget' => '',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1470616524450-1957',
         'urlType' => 'image',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 48,
        )),
         'imageLinkType' => 'image',
         'imageLinkUrl' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-006-(1).jpg',
         'imageLinkTarget' => '',
      )),
      5 => 
      (array)(array(
         'id' => 235484,
         'src' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007-(1)-190x190-1332.jpg',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/2126618022gallery-img-007-(1).jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007-(1)-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007-(1)-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'medium_large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007-(1)-768x512.jpg',
            1 => 768,
            2 => 512,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007-(1)-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007-(1).jpg',
            1 => 1280,
            2 => 853,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007-(1)-140x140-9131.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007-(1).jpg',
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
               'id' => 54,
               'element_id' => 'ugallery-object-1470616524450-1957',
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
         'rotation' => 0,
         'link' => 'original',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007-(1).jpg',
         'title' => '<p>Image caption</p>',
         'caption' => 'Image description',
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
           'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007-(1).jpg',
           'target' => '',
        )),
         'linkTarget' => '',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1470616524450-1957',
         'urlType' => 'image',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 48,
        )),
         'imageLinkType' => 'image',
         'imageLinkUrl' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-007-(1).jpg',
         'imageLinkTarget' => '',
      )),
      6 => 
      (array)(array(
         'id' => 235485,
         'src' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008-(1)-190x190-8967.jpg',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/1355982764gallery-img-008-(1).jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008-(1)-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008-(1)-300x205.jpg',
            1 => 300,
            2 => 205,
            3 => true,
          ),
           'medium_large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008-(1)-768x525.jpg',
            1 => 768,
            2 => 525,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008-(1)-1024x700.jpg',
            1 => 1024,
            2 => 700,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008-(1).jpg',
            1 => 1280,
            2 => 875,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008-(1)-140x140-5548.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008-(1).jpg',
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
               'id' => 55,
               'element_id' => 'ugallery-object-1470616524450-1957',
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
         'rotation' => 0,
         'link' => 'original',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008-(1).jpg',
         'title' => '<p>Image caption</p>',
         'caption' => 'Image description',
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
           'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008-(1).jpg',
           'target' => '',
        )),
         'linkTarget' => '',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1470616524450-1957',
         'urlType' => 'image',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 43,
        )),
         'imageLinkType' => 'image',
         'imageLinkUrl' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-008-(1).jpg',
         'imageLinkTarget' => '',
      )),
      7 => 
      (array)(array(
         'id' => '234381',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-005-1024x683.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-005-1024x683-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-005-1024x683-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'medium_large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-005-1024x683-768x512.jpg',
            1 => 768,
            2 => 512,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-005-1024x683-1024x683.jpg',
            1 => 1024,
            2 => 683,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-005-1024x683.jpg',
            1 => 1024,
            2 => 683,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-005-1024x683-190x190-3213.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-005-1024x683.jpg',
             'full' => 
            (array)(array(
               'width' => 1024,
               'height' => 683,
            )),
             'crop' => 
            (array)(array(
               'width' => 190,
               'height' => 190,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '190',
                 'height' => '190',
                 'left' => 47,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 285,
                 'height' => 190,
              )),
               'id' => 234381,
               'element_id' => 'ugallery-object-1470616524450-1957',
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
           'width' => 190,
           'height' => 190,
        )),
         'cropOffset' => 
        (array)(array(
           'width' => '190',
           'height' => '190',
           'left' => 47,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-005-1024x683-190x190-3213.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1470616524450-1957',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-005-1024x683.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => '<p>Image caption</p>',
         'caption' => 'Image description',
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
           'url' => '{{upfront:style_url}}/images/single-page-gallery/gallery-img-005-1024x683.jpg',
           'target' => '',
        )),
         'linkTarget' => '',
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
    'lightbox_overlay_bg' => 'rgba(0, 0, 0, 0.75)',
    'styles' => '',
    'element_id' => 'ugallery-object-1470616524450-1957',
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
    'current_preset' => 'gallery-alternative',
    'theme_style' => '',
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
    'left_padding_use' => 'yes',
    'right_padding_use' => 'yes',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
         'row' => 87,
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
         'left_padding_num' => '15',
         'left_padding_use' => 'yes',
         'right_padding_num' => '15',
         'right_padding_use' => 'yes',
         'top_padding_num' => '15',
         'top_padding_use' => 'yes',
         'bottom_padding_num' => '15',
         'bottom_padding_use' => 'yes',
         'row' => 99,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1470616680957-1858',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => false,
      'col' => 10,
      'order' => 1,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'clear' => false,
      'col' => 7,
      'order' => 0,
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
      'col' => 10,
      'edited' => true,
      'row' => 87,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
    'mobile' => 
    array (
      'col' => 7,
      'edited' => true,
      'left' => 0,
      'top' => 0,
      'row' => 99,
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1470620546688-1566 upfront-module-spacer',
  'id' => 'module-1470620546688-1566',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1470620546688-1684',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1470620546688-1385',
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
  'class' => 'module-1470616735191-1528 upfront-module-spacer',
  'id' => 'module-1470616735191-1528',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1470616735191-1369',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1470616735191-1942',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 2,
    ),
    'mobile' => 
    array (
      'edited' => true,
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
    'mobile' => 
    array (
      'edited' => true,
    ),
  ),
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'social-footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'social-footer.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

