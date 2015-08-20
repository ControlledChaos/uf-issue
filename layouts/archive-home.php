<?php
$content = upfront_create_region(
			array (
  'name' => 'content',
  'title' => 'Content Area',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'content',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 80,
  'background_type' => 'color',
  'background_color' => '#c5d0db',
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
)
			);

$content->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'class' => 'default-content-text-module',
  'id' => 'default-content-text-module',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plaintxt',
    'has_settings' => 1,
    'content' => '<p style="text-align:center;">Default preset: Text element in content</p>',
    'element_id' => 'default-content-text-object',
    'class' => 'c24',
    'type' => 'PlainTxtModel',
  ),
  'row' => 2,
  'sticky' => false,
  'wrapper_id' => 'default-content-text-module-wrapper',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
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

$regions->add($content);

