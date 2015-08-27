<?php
/* START_REGION_OUTPUT */
$footer = upfront_create_region(
			array (
  'name' => 'footer',
  'title' => 'footer',
  'type' => 'clip',
  'scope' => 'global',
  'container' => 'footer',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 10,
  'background_type' => 'color',
  'background_color' => 'rgba(46,51,50,1)',
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
)
			);

$footer->add_element("Unewnavigation", array (
  'columns' => '11',
  'margin_left' => '12',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440414796993-1290',
  'id' => 'module-1440414796993-1290',
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
         'menu-item-db-id' => 9,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => '© 2015',
         'menu-item-url' => '#',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '9',
         'menu-item-target' => '',
         'menu-item-position' => 1,
      )),
      1 => 
      (array)(array(
         'menu-item-db-id' => 4,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'post_type',
         'menu-item-title' => 'ABOUT',
         'menu-item-url' => '{{upfront:home_url}}/about/',
         'menu-item-object' => 'page',
         'menu-item-object-id' => '19',
         'menu-item-target' => '_self',
         'menu-item-position' => 2,
      )),
      2 => 
      (array)(array(
         'menu-item-db-id' => 5,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'post_type',
         'menu-item-title' => 'ADVERTISE',
         'menu-item-url' => '{{upfront:home_url}}/advertise/',
         'menu-item-object' => 'page',
         'menu-item-object-id' => '36',
         'menu-item-target' => '_self',
         'menu-item-position' => 3,
      )),
      3 => 
      (array)(array(
         'menu-item-db-id' => 7,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'post_type',
         'menu-item-title' => 'TERMS OF USE',
         'menu-item-url' => '{{upfront:home_url}}/terms-of-use/',
         'menu-item-object' => 'page',
         'menu-item-object-id' => '38',
         'menu-item-target' => '_self',
         'menu-item-position' => 4,
      )),
      4 => 
      (array)(array(
         'menu-item-db-id' => 6,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'post_type',
         'menu-item-title' => 'CONTACT',
         'menu-item-url' => '{{upfront:home_url}}/contact/',
         'menu-item-object' => 'page',
         'menu-item-object-id' => '21',
         'menu-item-target' => '_self',
         'menu-item-position' => 5,
      )),
    ),
    'menu_style' => 'horizontal',
    'menu_alignment' => 'right',
    'allow_sub_nav' => 
    array (
      0 => 'no',
    ),
    'allow_new_pages' => 
    array (
    ),
    'element_id' => 'unewnavigation-object-1440414796990-1143',
    'breakpoint' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'burger_alignment' => 'left',
         'burger_over' => 'over',
         'menu_style' => 'horizontal',
         'menu_alignment' => 'right',
         'is_floating' => 
        array (
        ),
         'width' => 1080,
      )),
       'tablet' => 
      (array)(array(
         'burger_menu' => '',
         'burger_alignment' => 'left',
         'burger_over' => 'over',
         'menu_style' => 'horizontal',
         'menu_alignment' => 'center',
         'is_floating' => 'no',
         'width' => 570,
      )),
       'mobile' => 
      (array)(array(
         'burger_menu' => '',
         'burger_alignment' => 'left',
         'burger_over' => 'over',
         'menu_style' => 'vertical',
         'menu_alignment' => 'center',
         'is_floating' => 'no',
         'width' => 315,
      )),
    )),
    'row' => 8,
    'menu_slug' => 'issue-footer-menu',
    'menu_id' => false,
    'burger_menu' => 
    array (
    ),
    'burger_alignment' => 'left',
    'burger_over' => 'over',
    'is_floating' => 
    array (
    ),
    'anchor' => '',
    'theme_style' => 'uf-menu-footer',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440419248884-1534',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
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

$regions->add($footer);

/* END_REGION_OUTPUT */
