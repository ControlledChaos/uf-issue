<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

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
  'row' => 15,
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

$main->add_element("PlainTxt", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '12',
  'margin_bottom' => '0',
  'class' => 'module-1440493809336-1893',
  'id' => 'module-1440493809336-1893',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class=""><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1">ABOUT</span></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1440493809336-1467',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 6,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'uf-text-block-heading',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'theme_style' => 'uf-text-block-heading-tablet',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'uf-text-block-heading-mobile',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440493909945-1155',
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

$regions->add($main);

$cover = upfront_create_region(
			array (
  'name' => 'cover',
  'title' => 'cover',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'cover',
  'position' => 20,
  'allow_sidebar' => true,
),
			array (
  'row' => 80,
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
  'background_type' => 'image',
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'background_color' => '#ffffff',
  'background_slider_transition' => 'crossfade',
  'background_slider_rotate' => true,
  'background_slider_rotate_time' => 5,
  'background_slider_control' => 'always',
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/single-page-about/about-cover.jpg',
  'background_image_ratio' => 0.320000000000000006661338147750939242541790008544921875,
)
			);

$cover->add_group(array (
  'columns' => '10',
  'margin_left' => '7',
  'margin_right' => '0',
  'margin_top' => '4',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1440501937633-1525',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1440501937637-1203',
  'original_col' => 10,
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 11,
      'order' => 0,
      'clear' => true,
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
      'edited' => true,
      'left' => 1,
      'col' => 10,
      'order' => 0,
      'top' => 4,
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

$cover->add_element("PlainTxt", array (
  'columns' => '10',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440500361435-1489',
  'id' => 'module-1440500361435-1489',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="" style="text-align: center;"><span class="upfront_theme_color_3">​MEET OUR EVER</span></h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1440500361435-1110',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 4,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'uf-text-cover-sub-title',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440501937652-1818',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 10,
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
      'col' => 10,
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
  'group' => 'module-group-1440501937633-1525',
));

$cover->add_element("PlainTxt", array (
  'columns' => '10',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440501852442-1346',
  'id' => 'module-1440501852442-1346',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="" style="text-align: center;"><span class="upfront_theme_color_1">GROWING TEAM</span></h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440501852443-1656',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 7,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'uf-text-cover-title',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440501937653-1448',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 10,
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
      'col' => 10,
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
  'group' => 'module-group-1440501937633-1525',
));

$regions->add($cover);

$team_names = upfront_create_region(
			array (
  'name' => 'team-names',
  'title' => 'team names',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'team-names',
  'position' => 20,
  'allow_sidebar' => true,
),
			array (
  'row' => 15,
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
  'background_color' => '#ufc1',
)
			);

$team_names->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1440502203160-1527',
  'id' => 'module-1440502203160-1527',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class="" style="text-align: center;"><a rel="anchor" target="_self" href="#personSethMacfarlane">SETH<br>MACFARLANE</a></h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1440502203159-1705',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 12,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'uf-text-team-name-anchor',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440502282501-1621',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 6,
      'order' => 0,
      'clear' => true,
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
      'left' => 2,
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

$team_names->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1440502673929-1370',
  'id' => 'module-1440502673929-1370',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class="" style="text-align: center;"><a rel="anchor" target="_self" href="#personAlexBorstein">ALEX<br>BORSTEIN</a></h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440502673929-1755',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 11,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'uf-text-team-name-anchor',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440502677038-1659',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 4,
      'order' => 1,
      'clear' => false,
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
      'left' => 0,
      'col' => 4,
      'order' => 1,
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

$team_names->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1440502460176-1683',
  'id' => 'module-1440502460176-1683',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class="" style="text-align: center;"><a rel="anchor" href="#personDavidZuckerman" target="_self">DAVID<br>​ZUCKERMAN</a></h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440502460177-1818',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 10,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'uf-text-team-name-anchor',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440502460176-1711',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 6,
      'order' => 2,
      'clear' => true,
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
      'left' => 2,
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

$team_names->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1440502693614-1713',
  'id' => 'module-1440502693614-1713',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class="" style="text-align: center;"><a rel="anchor" href="#personSteveCallaghan" target="_self">STEVE<br>CALLAGHAN</a></h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440502693614-1009',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 11,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'uf-text-team-name-anchor',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440502693613-1672',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 4,
      'order' => 3,
      'clear' => false,
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
      'left' => 0,
      'col' => 4,
      'order' => 1,
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

$team_names->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'module-1440502951534-1476',
  'id' => 'module-1440502951534-1476',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class="" style="text-align: center;"><a rel="anchor" href="#personCherryChevong" target="_self">CHERRY<br>CHEVONG</a></h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440502951535-1757',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 11,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'uf-text-team-name-anchor',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440502951532-1111',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 6,
      'order' => 4,
      'clear' => true,
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
      'edited' => true,
      'left' => 2,
      'col' => 4,
      'order' => 0,
      'top' => 0,
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

$regions->add($team_names);

$team = upfront_create_region(
			array (
  'name' => 'team',
  'title' => 'team',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'team',
  'position' => 20,
  'allow_sidebar' => true,
),
			array (
  'row' => 28,
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
  'background_color' => '#ffffff',
)
			);

$team->add_group(array (
  'columns' => '8',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '15',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1440514963711-1439',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1440514963713-1321',
  'original_col' => 8,
  'background_color' => 'rgba(0,0,0,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => 'personSethMacfarlane',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 10,
      'order' => 0,
      'clear' => true,
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
      'left' => 2,
      'col' => 8,
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

$team->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440508953515-1314',
  'id' => 'module-1440508953515-1314',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Seth MacFarlane</span></h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1440508953514-1492',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 4,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'uf-text-team-name',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514963751-1304',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 8,
      'order' => 0,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 0,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 8,
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
  'group' => 'module-group-1440514963711-1439',
));

$team->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440509080010-1866',
  'id' => 'module-1440509080010-1866',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class=""><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1">Editor-in-Chief</span></h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1440509080009-1697',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 4,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'uf-text-team-position',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514963753-1468',
  'new_line' => true,
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
      'edited' => true,
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
      'col' => 8,
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
  'group' => 'module-group-1440514963711-1439',
));

$team->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440509129860-1152',
  'id' => 'module-1440509129860-1152',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><span class="upfront_theme_color_0">Selfies street art Pitchfork, leggings tofu literally swag before they sold out typewriter Neutra actually. Lo-fi brunch sustainable vegan, hashtag art party paleo iPhone Wes Anderson pop-up. Tattooed pug post-ironic put a bird on it American Apparel PBR&amp;B, Cosby sweater Tumblr. Mumblecore actually photo booth, Schlitz keytar ethical Truffaut keffiyeh readymade Brooklyn Williamsburg DIY Intelligentsia.</span><br></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1440509129859-1997',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'uf-text-team-description',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514963754-1301',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 8,
      'order' => 2,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 8,
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
  'group' => 'module-group-1440514963711-1439',
));

$team->add_element("PlainTxt", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440509169120-1188',
  'id' => 'module-1440509169120-1188',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><a rel="external" href="http://linkedin.com" target="_blank">L</a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1440509169119-1007',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'is_edited' => true,
    'theme_style' => 'uf-text-team-social-linkedin',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514963756-1372',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 3,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 3,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 0,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 0,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1440514963711-1439',
));

$team->add_element("PlainTxt", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440509302692-1870',
  'id' => 'module-1440509302692-1870',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><a rel="external" href="http://twitter.com" target="_blank">T</a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440509302692-1685',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'is_edited' => true,
    'theme_style' => 'uf-text-team-social-twitter',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514963756-1615',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 4,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 4,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 1,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 1,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1440514963711-1439',
));

$team->add_group(array (
  'columns' => '8',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '15',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1440514993355-1325',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1440512705082-1422',
  'original_col' => 8,
  'background_color' => 'rgba(0,0,0,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => 'personAlexBorstein',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 10,
      'order' => 1,
      'clear' => true,
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
      'edited' => true,
      'left' => 2,
      'col' => 8,
      'order' => 0,
      'top' => 6,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 6,
    ),
  ),
));

$team->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440507435344-1389',
  'id' => 'module-1440507435344-1389',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Alex Borstein</span></h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440507435344-1730',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 6,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'uf-text-team-name',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514996531-1806',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 8,
      'order' => 0,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 0,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 8,
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
  'group' => 'module-group-1440514993355-1325',
));

$team->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440507474618-1931',
  'id' => 'module-1440507474618-1931',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class=""><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1">Creative Director</span></h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440507474619-1385',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 4,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'uf-text-team-position',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514996536-1793',
  'new_line' => true,
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
      'edited' => true,
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
      'col' => 8,
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
  'group' => 'module-group-1440514993355-1325',
));

$team->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440507477215-1458',
  'id' => 'module-1440507477215-1458',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span id="selection-marker-1" class="redactor-selection-marker" data-verified="redactor">​</span>Farm-to-table dreamcatcher locavore butcher. Mustache salvia Portland, you pr obably haven\'t heard of them single-origin coffee banh mi Godard High Life. Flannel whatever seitan dreamcatcher. Tattooed quinoa squid irony banh mi viral, VHS 3 wolf moon.<span id="selection-marker-2" class="redactor-selection-marker" data-verified="redactor">​</span></span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440507477215-1898',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 4,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'uf-text-team-description',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514996538-1858',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 8,
      'order' => 2,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 8,
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
  'group' => 'module-group-1440514993355-1325',
));

$team->add_element("PlainTxt", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440507484653-1376',
  'id' => 'module-1440507484653-1376',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><a rel="external" target="_blank" href="http://linkedin.com">L</a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440507484654-1937',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'uf-text-team-social-linkedin',
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'row' => 8,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514997992-1967',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 3,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 3,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 0,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 0,
      'row' => 8,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1440514993355-1325',
));

$team->add_element("PlainTxt", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440507490750-1756',
  'id' => 'module-1440507490750-1756',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><a rel="external" href="http://twitter.com" target="_blank">T</a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440507490750-1728',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'uf-text-team-social-twitter',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440515000818-1973',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 4,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 4,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 1,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 1,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1440514993355-1325',
));

$team->add_element("PlainTxt", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440507495826-1924',
  'id' => 'module-1440507495826-1924',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><a rel="external" href="http://instagram.com" target="_blank">I</a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440507495826-1930',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'uf-text-team-social-instagram',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440515004055-1818',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 5,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 5,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 2,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 2,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1440514993355-1325',
));

$team->add_group(array (
  'columns' => '8',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1440514798415-1917',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1440515084068-1295',
  'original_col' => 8,
  'background_color' => 'rgba(0,0,0,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => 'personCherryChevong',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 10,
      'order' => 2,
      'clear' => true,
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
      'left' => 2,
      'col' => 8,
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

$team->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440509219439-1213',
  'id' => 'module-1440509219439-1213',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class=""><span class="upfront_theme_color_0">Cherry Chevong</span></h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440509219439-1130',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 4,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'uf-text-team-name',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514798452-1958',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 8,
      'order' => 0,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 0,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 8,
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
  'group' => 'module-group-1440514798415-1917',
));

$team->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440509225445-1994',
  'id' => 'module-1440509225445-1994',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class=""><span class="upfront_theme_color_1">Fashion Editor</span></h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440509225445-1692',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 4,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'uf-text-team-position',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514798454-1768',
  'new_line' => true,
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
      'edited' => true,
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
      'col' => 8,
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
  'group' => 'module-group-1440514798415-1917',
));

$team->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440509229756-1865',
  'id' => 'module-1440509229756-1865',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><span class="upfront_theme_color_0">American Apparel biodiesel farm-to-table, literally bicycle rights tote bag artisan tofu typewriter post-ironic butcher. Disrupt slow-carb four loko, fashion axe irony artisan deep v mumblecore direct trade Pitchfork readymade banjo. Vinyl fanny pack ethical Austin deep v scenester. Umami lo-fi sriracha street art aesthetic raw denim fap. Viral sustainable Vice narwhal ethical photo booth, pickled distillery cardigan wolf.</span><br></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440509229756-1208',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'uf-text-team-description',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514798455-1008',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 8,
      'order' => 2,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 8,
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
  'group' => 'module-group-1440514798415-1917',
));

$team->add_element("PlainTxt", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440509352110-1703',
  'id' => 'module-1440509352110-1703',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><a rel="external" href="http://facebook.com" target="_blank">F</a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440509352110-1546',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'is_edited' => true,
    'theme_style' => 'uf-text-team-social-facebook',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514798455-1049',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 3,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 3,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 0,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 0,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1440514798415-1917',
));

$team->add_element("PlainTxt", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440510830215-1772',
  'id' => 'module-1440510830215-1772',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><a rel="external" href="http://twitter.com" target="_blank">T</a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440510830215-1426',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'is_edited' => true,
    'theme_style' => 'uf-text-team-social-twitter',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514798456-1901',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 4,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 4,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 1,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 1,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1440514798415-1917',
));

$team->add_element("PlainTxt", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440510835130-1603',
  'id' => 'module-1440510835130-1603',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><a rel="external" href="http://pinterest.com" target="_blank">P</a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440510835130-1901',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'is_edited' => true,
    'theme_style' => 'uf-text-team-social-pinterest',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514798457-1393',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 5,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 5,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 2,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 2,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1440514798415-1917',
));

$team->add_group(array (
  'columns' => '8',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1440515146008-1593',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1440515162088-1593',
  'original_col' => 8,
  'background_color' => 'rgba(0,0,0,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => 'personSteveCallaghan',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 10,
      'order' => 3,
      'clear' => true,
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
      'left' => 2,
      'col' => 8,
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

$team->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440512766318-1381',
  'id' => 'module-1440512766318-1381',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Steve Callaghan</span></h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440512766318-1630',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'uf-text-team-name',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440515146043-1321',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 8,
      'order' => 0,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 0,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 8,
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
  'group' => 'module-group-1440515146008-1593',
));

$team->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440512771335-1678',
  'id' => 'module-1440512771335-1678',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class=""><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1">Blogger</span></h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440512771336-1563',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 11,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'uf-text-team-position',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440515146044-1199',
  'new_line' => true,
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
      'edited' => true,
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
      'col' => 8,
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
  'group' => 'module-group-1440515146008-1593',
));

$team->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440512798303-1203',
  'id' => 'module-1440512798303-1203',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><span class="upfront_theme_color_0">8-bit distillery single-origin coffee, VHS chia hella cred cray Truffaut. Freegan literally post-ironic, scenester put a bird on it organic Blue Bottle viral sriracha semiotics banh mi Thundercats raw denim. Messenger bag single-origin coffee banh mi, next level flexitarian skateboard bicycle rights slow-carb typewriter.</span><br></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440512798303-1374',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 8,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'uf-text-team-description',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440515146045-1002',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 8,
      'order' => 2,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 8,
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
  'group' => 'module-group-1440515146008-1593',
));

$team->add_element("PlainTxt", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440512749647-1263',
  'id' => 'module-1440512749647-1263',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><a rel="external" href="http://facebook.com" target="_blank">F</a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440512749647-1282',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'is_edited' => true,
    'theme_style' => 'uf-text-team-social-facebook',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440515146046-1173',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 3,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 3,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 0,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 0,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1440515146008-1593',
));

$team->add_element("PlainTxt", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440512777073-1073',
  'id' => 'module-1440512777073-1073',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><a rel="external" href="http://twitter.com" target="_blank">T</a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440512777073-1957',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'is_edited' => true,
    'theme_style' => 'uf-text-team-social-twitter',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440515146046-1121',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 4,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 4,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 1,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 1,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1440515146008-1593',
));

$team->add_element("PlainTxt", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440512848928-1285',
  'id' => 'module-1440512848928-1285',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><a rel="external" href="http://instagram.com" target="_blank">I</a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440512848928-1866',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'is_edited' => true,
    'theme_style' => 'uf-text-team-social-instagram',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440515146047-1747',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 5,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 5,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 2,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 2,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1440515146008-1593',
));

$team->add_element("PlainTxt", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440512861338-1784',
  'id' => 'module-1440512861338-1784',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><a rel="external" href="http://linkedin.com" target="_blank">L</a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440512861338-1752',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'is_edited' => true,
    'theme_style' => 'uf-text-team-social-linkedin',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440515146047-1820',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 6,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 6,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 3,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 3,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1440515146008-1593',
));

$team->add_element("PlainTxt", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440512868412-1756',
  'id' => 'module-1440512868412-1756',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><a rel="external" href="http://pinterest.com" target="_blank">P</a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440512868412-1865',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'is_edited' => true,
    'theme_style' => 'uf-text-team-social-pinterest',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440515146048-1269',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 7,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 7,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 4,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 4,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1440515146008-1593',
));

$team->add_group(array (
  'columns' => '8',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1440514943146-1745',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1440515089897-1521',
  'original_col' => 8,
  'background_color' => 'rgba(0,0,0,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => 'personDavidZuckerman',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 10,
      'order' => 4,
      'clear' => true,
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
      'left' => 2,
      'col' => 8,
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

$team->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440513132586-1653',
  'id' => 'module-1440513132586-1653',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">David Zuckerman</span></h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440513132587-1484',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 4,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'uf-text-team-name',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514943185-1817',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 8,
      'order' => 0,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 0,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 8,
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
  'group' => 'module-group-1440514943146-1745',
));

$team->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440513136128-1960',
  'id' => 'module-1440513136128-1960',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class=""><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1">Webmaster</span></h4>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440513136129-1487',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 4,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'uf-text-team-position',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514943187-1871',
  'new_line' => true,
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
      'edited' => true,
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
      'col' => 8,
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
  'group' => 'module-group-1440514943146-1745',
));

$team->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440513143059-1113',
  'id' => 'module-1440513143059-1113',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><span class="upfront_theme_color_0">Bicycle rights narwhal you probably haven\'t heard of them blog, keffiyeh skateboard synth salvia Intelligentsia ennui jean shorts hashtag deep v. Drinking vinegar trust fund occupy, disrupt chillwave pour-over cray. Odd Future hashtag Brooklyn ethical, wayfarers polaroid direct trade flexitarian chambray Wes Anderson cardigan. Odd Future post-ironic plaid, fap salvia Pinterest Thundercats hella craft beer. </span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440513143059-1283',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'uf-text-team-description',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514943189-1351',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 8,
      'order' => 2,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 8,
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
  'group' => 'module-group-1440514943146-1745',
));

$team->add_element("PlainTxt", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440512781990-1394',
  'id' => 'module-1440512781990-1394',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><a rel="external" href="http://facebook.com" target="_blank">F</a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440512781991-1280',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'is_edited' => true,
    'theme_style' => 'uf-text-team-social-facebook',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514943191-1160',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 3,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 3,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 0,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 0,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1440514943146-1745',
));

$team->add_element("PlainTxt", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440513252099-1118',
  'id' => 'module-1440513252099-1118',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><a rel="external" href="http://twitter.com" target="_blank">T</a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440513252099-1251',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'is_edited' => true,
    'theme_style' => 'uf-text-team-social-twitter',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514943192-1416',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 4,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 4,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 1,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 1,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1440514943146-1745',
));

$team->add_element("PlainTxt", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440513255952-1144',
  'id' => 'module-1440513255952-1144',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><a rel="external" href="http://pinterest.com" target="_blank">P</a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440513255953-1132',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'is_edited' => true,
    'theme_style' => 'uf-text-team-social-pinterest',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440514943192-1613',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 5,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 1,
      'order' => 5,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 2,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 1,
      'order' => 2,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1440514943146-1745',
));

$team->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'class' => 'module-1440515271973-1015',
  'id' => 'module-1440515271973-1015',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h4 class=""><span class="upfront_theme_color_1">Want to join the team?<br>Drop us a line now!</span></h4>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1440515271973-1099',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 8,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => 'uf-text-contact-heading',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440515449924-1609',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 10,
      'order' => 5,
      'clear' => true,
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
      'left' => 2,
      'col' => 8,
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
  'close_wrapper' => false,
));

$team->add_element("Ucontact", array (
  'columns' => '8',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440515271995-1531',
  'id' => 'module-1440515271995-1531',
  'options' => 
  array (
    'form_add_title' => 
    array (
    ),
    'form_title' => 'Join the theme',
    'form_name_label' => 'Name:',
    'form_email_label' => 'Email:',
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
    'form_message_label' => 'Message:',
    'form_button_text' => 'Send',
    'form_validate_when' => 'submit',
    'form_label_position' => 'over',
    'type' => 'UcontactModel',
    'view_class' => 'UcontactView',
    'class' => 'c24 upfront-contact-form',
    'has_settings' => 1,
    'id_slug' => 'ucontact',
    'element_id' => 'ucontact-object-1440515271994-1663',
    'row' => 67,
    'anchor' => '',
    'theme_style' => 'uf-contact-join-the-team',
  ),
  'row' => 67,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440515449924-1609',
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 2,
      'col' => 8,
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

$regions->add($team);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'contacts-callout.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'contacts-callout.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

