<?php
/* START_REGION_OUTPUT */
$contacts_callout = upfront_create_region(
			array (
  'name' => 'contacts-callout',
  'title' => 'contacts callout',
  'type' => 'clip',
  'scope' => 'global',
  'container' => 'contacts-callout',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 10,
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
  'background_color' => '#ufc3',
)
			);

$contacts_callout->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '15',
  'margin_bottom' => '0',
  'class' => 'module-1440413734843-1904',
  'id' => 'module-1440413734843-1904',
  'options' => 
  array (
    'content' => 'SUBSCRIBE&nbsp;TO&nbsp;OUR<br class="">NEWSLETTER​',
    'href' => '{{upfront:home_url}}/subscribe/',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1440413734842-1926',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'row' => 6,
    'currentpreset' => 'icon and text',
    'is_edited' => true,
    'theme_style' => 'uf-button-icon-email',
    'linkTarget' => '_self',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440413745897-1433',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 8,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 4,
      'col' => 4,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
  ),
));

$contacts_callout->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '15',
  'margin_bottom' => '0',
  'class' => 'module-1440414527454-1879',
  'id' => 'module-1440414527454-1879',
  'options' => 
  array (
    'content' => 'FOLLOW US ON<br class="">TWITTER​',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'object-1440414527454-1331',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'row' => 6,
    'currentpreset' => 'icon and text',
    'is_edited' => true,
    'theme_style' => 'uf-button-icon-twitter',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440414529853-1198',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 8,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 4,
      'col' => 4,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
  ),
));

$contacts_callout->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '15',
  'margin_bottom' => '0',
  'class' => 'module-1440414531017-1022',
  'id' => 'module-1440414531017-1022',
  'options' => 
  array (
    'content' => 'LIKE US ON<br class="">FACEBOOK​',
    'href' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'object-1440414531018-1366',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'row' => 6,
    'currentpreset' => 'icon and text',
    'is_edited' => true,
    'theme_style' => 'uf-button-icon-facebook',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440414531017-1995',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 8,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 4,
      'col' => 4,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
  ),
));

$regions->add($contacts_callout);

/* END_REGION_OUTPUT */
