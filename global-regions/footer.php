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

$footer->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460769160054-1430 upfront-module-spacer',
  'id' => 'module-1460769160054-1430',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1460769160054-1369',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1460769160053-1974',
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

$footer->add_element("Unewnavigation", array (
  'columns' => '22',
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
         'menu-item-db-id' => 464,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'ADVERTISE',
         'menu-item-url' => '#',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '464',
         'menu-item-target' => '',
         'menu-item-position' => 1,
         'link' => 
        (array)(array(
           'type' => 'unlink',
           'url' => '#',
           'target' => '',
        )),
      )),
      1 => 
      (array)(array(
         'menu-item-db-id' => 465,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'CONTACT',
         'menu-item-url' => '#',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '465',
         'menu-item-target' => '',
         'menu-item-position' => 2,
         'link' => 
        (array)(array(
           'type' => 'unlink',
           'url' => '#',
           'target' => '',
        )),
      )),
      2 => 
      (array)(array(
         'menu-item-db-id' => 466,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'TERMS OF USE',
         'menu-item-url' => '#',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '466',
         'menu-item-target' => '',
         'menu-item-position' => 3,
         'link' => 
        (array)(array(
           'type' => 'unlink',
           'url' => '#',
           'target' => '',
        )),
      )),
    ),
    'preset' => 'navigation-alternative',
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
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'navigation-alternative',
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

$footer->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1460769152005-1437 upfront-module-spacer',
  'id' => 'module-1460769152005-1437',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1460769152005-1325',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1460769152003-1729',
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

$regions->add($footer);

/* END_REGION_OUTPUT */
