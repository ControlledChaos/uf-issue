<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$content_cover = upfront_create_region(
			array (
  'name' => 'content-cover',
  'title' => 'content cover',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'content-cover',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 66,
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
  'background_type' => 'featured',
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'background_color' => '#ffffff',
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
)
			);

$regions->add($content_cover);

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
  'row' => 30,
  'background_type' => 'color',
  'background_color' => '#ufc6',
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

$main->add_element("ThisPost", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '12',
  'margin_bottom' => '0',
  'class' => 'default-post',
  'id' => 'default-post',
  'options' => 
  array (
    'type' => 'ThisPostModel',
    'view_class' => 'ThisPostView',
    'class' => 'c24 upfront-this_post',
    'has_settings' => 1,
    'id_slug' => 'this_post',
    'row' => 32,
    'post_data' => 
    array (
      0 => 'date',
    ),
    'layout' => 
    array (
      0 => 
      (array)(array(
         'classes' => 'c24 clr',
         'objects' => 
        array (
          0 => 
          (array)(array(
             'slug' => 'title',
             'classes' => 'post-part c24',
          )),
        ),
      )),
      1 => 
      (array)(array(
         'classes' => 'c24 clr',
         'objects' => 
        array (
          0 => 
          (array)(array(
             'slug' => 'date',
             'classes' => ' post-part c24',
          )),
        ),
      )),
      2 => 
      (array)(array(
         'classes' => 'c24 clr',
         'objects' => 
        array (
          0 => 
          (array)(array(
             'slug' => 'contents',
             'classes' => ' post-part c24',
          )),
        ),
      )),
    ),
    'element_id' => 'default-post-object',
    'hide_featured_image' => '',
    'full_featured_image' => '',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'theme_style' => 'uf-upost-mobile',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'uf-upost-mobile',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => true,
  'disable_resize' => true,
  'disable_drag' => false,
  'wrapper_id' => 'default-post-wrapper',
  'new_line' => true,
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

$main->add_element("Ucomment", array (
  'columns' => '15',
  'margin_left' => '7',
  'margin_right' => '0',
  'margin_top' => '3',
  'margin_bottom' => '0',
  'class' => 'default-comment',
  'id' => 'default-comment',
  'options' => 
  array (
    'id_slug' => 'ucomment',
    'type' => 'UcommentModel',
    'view_class' => 'UcommentView',
    'class' => 'c24 upfront-comment',
    'has_settings' => 1,
    'prepend_form' => false,
    'element_id' => 'default-comment-object',
    'row' => 30,
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'theme_style' => 'uf-ucomment-mobile',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'uf-ucomment-mobile',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'default-comment-wrapper',
  'new_line' => true,
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

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

