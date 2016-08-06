<?php
/* START_REGION_OUTPUT */
$footer = upfront_create_region(
			array (
  'name' => 'footer',
  'title' => 'Footer',
  'type' => 'clip',
  'scope' => 'global',
  'container' => 'footer',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'version' => '1.0.0',
  'row' => 8,
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
  'background_color' => '#ufc0',
)
			);

$footer->add_element("PlainTxt", array (
  'columns' => '17',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1470499667631-1120',
  'id' => 'module-1470499667631-1120',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h6 style="text-align: right;"><span class="upfront_theme_color_6" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_6">2016 © INCSUB</span></h6>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1470499667631-1877',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'default',
    'padding_slider' => '15',
    'top_padding_num' => '18',
    'bottom_padding_num' => '10',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'row' => 5,
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'current_preset' => 'default',
    'top_padding_use' => 'yes',
    'bottom_padding_use' => 'yes',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1470500096817-1623',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 4,
      'order' => 0,
      'edited' => true,
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
      'col' => 4,
      'edited' => true,
      'left' => 0,
      'top' => 0,
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

$footer->add_element("Unewnavigation", array (
  'columns' => '7',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460602751853-1023',
  'id' => 'module-1460602751853-1023',
  'options' => 
  array (
    'type' => 'UnewnavigationModel',
    'view_class' => 'UnewnavigationView',
    'class' => 'c24 upfront-navigation',
    'has_settings' => 1,
    'id_slug' => 'unewnavigation',
    'menu_items' => 
    array (
      0 => 
      (array)(array(
         'menu-item-db-id' => 866,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'ADVERTISE',
         'menu-item-url' => '#',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '866',
         'menu-item-target' => '',
         'menu-item-position' => 1,
      )),
      1 => 
      (array)(array(
         'menu-item-db-id' => 867,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'CONTACT',
         'menu-item-url' => '{{upfront:home_url}}/contact/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '867',
         'menu-item-target' => '',
         'menu-item-position' => 2,
      )),
      2 => 
      (array)(array(
         'menu-item-db-id' => 868,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'TERMS OF USE',
         'menu-item-url' => '#',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '868',
         'menu-item-target' => '',
         'menu-item-position' => 3,
      )),
    ),
    'preset' => 'navigation-footer-white',
    'allow_sub_nav' => 
    array (
      0 => 'no',
    ),
    'allow_new_pages' => 
    array (
      0 => 'no',
    ),
    'element_id' => 'unewnavigation-object-1460602751851-1886',
    'padding_slider' => '15',
    'top_padding_num' => '5',
    'bottom_padding_num' => '5',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'menu_slug' => 'footer-menu',
    'menu_id' => false,
    'lock_padding' => '',
    'padding_number' => '15',
    'left_padding_num' => '0',
    'right_padding_num' => '10',
    'anchor' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'navigation-footer-white',
      )),
    )),
    'row' => 2,
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '5',
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
    'current_preset' => 'navigation-footer-white',
    'left_padding_use' => 'yes',
    'right_padding_use' => 'yes',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1460603110402-1751',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 8,
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
      'col' => 8,
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
    'current_property' => 
    array (
      0 => 'col',
    ),
  ),
));

$regions->add($footer);

/* END_REGION_OUTPUT */
