<?php
/* START_REGION_OUTPUT */
$region_a1ef44 = upfront_create_region(
			array (
  'name' => 'header',
  'title' => 'header',
  'type' => 'clip',
  'scope' => 'global',
  'container' => 'header',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 12,
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
       'row' => 19,
       'background_type' => 'color',
    )),
  )),
  'background_type' => 'color',
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'background_color' => 'rgba(46,51,50,1)',
)
			);

$region_a1ef44->add_element("Button", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440428784931-1921',
  'id' => 'module-1440428784931-1921',
  'options' => 
  array (
    'content' => '&nbsp;',
    'href' => '{{upfront:home_url}}',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1440428784931-1088',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'currentpreset' => 'logo',
    'row' => 6,
    'is_edited' => true,
    'theme_style' => 'uf-button-logo',
    'linkTarget' => '_self',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'theme_style' => 'uf-button-logo-mobile',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'uf-button-logo-mobile',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440429460323-1862',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 2,
      'order' => 0,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 5,
      'col' => 2,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 2,
      'order' => 0,
      'hide' => 0,
      'top' => 0,
    ),
  ),
));

$region_a1ef44->add_element("Unewnavigation", array (
  'columns' => '14',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1440428784918-1139',
  'id' => 'module-1440428784918-1139',
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
         'menu-item-db-id' => 12,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Front Page',
         'menu-item-url' => '{{upfront:home_url}}',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '12',
         'menu-item-target' => '_self',
         'menu-item-position' => 1,
      )),
      1 => 
      (array)(array(
         'menu-item-db-id' => 13,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'post_type',
         'menu-item-title' => 'Issues',
         'menu-item-url' => '{{upfront:home_url}}/gallery/',
         'menu-item-object' => 'page',
         'menu-item-object-id' => '22',
         'menu-item-target' => '_self',
         'menu-item-position' => 2,
      )),
      2 => 
      (array)(array(
         'menu-item-db-id' => 15,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'About',
         'menu-item-url' => '{{upfront:home_url}}/about',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '15',
         'menu-item-target' => '_self',
         'menu-item-position' => 3,
      )),
      3 => 
      (array)(array(
         'menu-item-db-id' => 14,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'post_type',
         'menu-item-title' => 'FAQ',
         'menu-item-url' => '{{upfront:home_url}}/faq/',
         'menu-item-object' => 'page',
         'menu-item-object-id' => '31',
         'menu-item-target' => '_self',
         'menu-item-position' => 4,
      )),
      4 => 
      (array)(array(
         'menu-item-db-id' => 16,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'post_type',
         'menu-item-title' => 'Contact',
         'menu-item-url' => '{{upfront:home_url}}/contact/',
         'menu-item-object' => 'page',
         'menu-item-object-id' => '21',
         'menu-item-target' => '_self',
         'menu-item-position' => 5,
      )),
    ),
    'menu_style' => 'horizontal',
    'menu_alignment' => 'left',
    'allow_sub_nav' => 
    array (
      0 => 'no',
    ),
    'allow_new_pages' => 
    array (
    ),
    'element_id' => 'unewnavigation-object-1440428784918-1561',
    'breakpoint' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'burger_alignment' => 'left',
         'burger_over' => 'over',
         'menu_style' => 'horizontal',
         'menu_alignment' => 'left',
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
         'burger_menu' => 'yes',
         'burger_alignment' => 'left',
         'burger_over' => 'over',
         'menu_style' => 'horizontal',
         'menu_alignment' => 'left',
         'is_floating' => 'no',
         'width' => 315,
         'row' => 6,
         'theme_style' => 'uf-menu-mobile',
      )),
    )),
    'row' => 5,
    'menu_slug' => 'issue-menu',
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
  ),
  'row' => 5,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440429825150-1157',
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
      'edited' => true,
      'col' => 2,
      'order' => 1,
      'clear' => false,
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
      'col' => 2,
      'order' => 0,
      'row' => 6,
      'top' => 0,
    ),
  ),
));

$region_a1ef44->add_element("PlainTxt", array (
  'columns' => '2',
  'margin_left' => '4',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1440429427156-1670',
  'id' => 'module-1440429427156-1670',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;"><a rel="external" target="_self" href="{{upfront:home_url}}/login">Sign In</span></a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1440429427155-1462',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 8,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'uf-text-sign-in-link',
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'theme_style' => 'uf-text-sign-in-link-mobile',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440430471748-1529',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 3,
      'order' => 2,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 5,
      'col' => 2,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 3,
      'order' => 0,
      'top' => 4,
    ),
  ),
));

$regions->add($region_a1ef44);

/* END_REGION_OUTPUT */
