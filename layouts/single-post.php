<?php
$layout_version = '1.0.0';

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$post_featured_image = upfront_create_region(
			array (
  'name' => 'post-featured-image',
  'title' => 'Post Featured Image',
  'type' => 'clip',
  'scope' => 'local',
  'container' => 'post-featured-image',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'version' => '1.0.0',
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
  'bg_padding_type' => 'varied',
  'top_bg_padding_slider' => 0,
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_slider' => 0,
  'bottom_bg_padding_num' => 0,
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
  'background_color' => '#ufc5',
  'background_style' => 'full',
  'background_default' => 'image',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/single-post/issue-no-feature-img.jpg',
  'background_image_ratio' => 0.560000000000000053290705182007513940334320068359375,
)
			);

$regions->add($post_featured_image);

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
  'row' => 175,
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
  'top_bg_padding_slider' => '40',
  'top_bg_padding_num' => '40',
  'bottom_bg_padding_slider' => '70',
  'bottom_bg_padding_num' => '70',
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
  'class' => 'module-1461599976323-1134 upfront-module-spacer',
  'id' => 'module-1461599976323-1134',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1461599976323-1297',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1461599976322-1901',
  'edited' => true,
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
  ),
));

$main->add_group(array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1461599929350-1532',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1461599654191-1517',
  'original_col' => 24,
  'top_padding_num' => 0,
  'bottom_padding_num' => 0,
  'use_padding' => 'yes',
  'row' => 28,
  'edited' => true,
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

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1461600009387-1082 upfront-module-spacer',
  'id' => 'module-1461600009387-1082',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1461600009387-1196',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1461600009386-1529',
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
  'group' => 'module-group-1461599929350-1532',
));

$main->add_element("PostData", array (
  'columns' => '3',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1461599487809-1524',
  'id' => 'module-1461599487809-1524',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-author',
    'id_slug' => 'post-data',
    'data_type' => 'author',
    'preset' => 'gravatar-only',
    'row' => 9,
    'type_parts' => 
    array (
      0 => 'author',
      1 => 'gravatar',
      2 => 'author_email',
      3 => 'author_url',
      4 => 'author_bio',
    ),
    'gravatar_size' => '90',
    'post-part-author' => '<div class="upostdata-part author"><a href="{{url}}" {{target}}>{{name}}</a></div>',
    'post-part-gravatar' => '<div class="upostdata-part gravatar">
	{{gravatar}}
</div>',
    'post-part-author_email' => '<div class="upostdata-part author author-email">
	<a href="mailto:{{email}}">{{email_string}}</a>
</div>',
    'post-part-author_url' => '<div class="upostdata-part author author-url">
	<a href="{{url}}" rel="author external">{{url_string}}</a>
</div>',
    'post-part-author_bio' => '<div class="upostdata-part author author-bio">
	{{bio}}
</div>',
    'static-gravatar-border-width' => '1',
    'static-gravatar-border-type' => 'solid',
    'static-gravatar-border-color' => 'rgb(0, 0, 0)',
    'static-author-use-typography' => 'yes',
    'static-author-font-family' => 'Lato',
    'static-author-weight' => '700',
    'static-author-fontstyle' => '700 normal',
    'static-author-style' => 'normal',
    'static-author-font-size' => '14',
    'static-author-line-height' => '1.45',
    'static-author-font-color' => 'rgb(37, 37, 37)',
    'static-author_email-use-typography' => 'yes',
    'static-author_email-font-family' => 'Lato',
    'static-author_email-weight' => '300',
    'static-author_email-fontstyle' => '300 normal',
    'static-author_email-style' => 'normal',
    'static-author_email-font-size' => '14',
    'static-author_email-line-height' => '1.45',
    'static-author_email-font-color' => '#ufc7',
    'static-author_url-use-typography' => 'yes',
    'static-author_url-font-family' => 'Lato',
    'static-author_url-weight' => '300',
    'static-author_url-fontstyle' => '300 normal',
    'static-author_url-style' => 'normal',
    'static-author_url-font-size' => '14',
    'static-author_url-line-height' => '1.45',
    'static-author_url-font-color' => '#ufc7',
    'static-author_bio-use-typography' => '',
    'static-author_bio-font-family' => 'Lato',
    'static-author_bio-weight' => '300',
    'static-author_bio-fontstyle' => '300 normal',
    'static-author_bio-style' => 'normal',
    'static-author_bio-font-size' => '22',
    'static-author_bio-line-height' => '1.4',
    'static-author_bio-font-color' => 'rgba(45,45,45,1)',
    'preset_style' => '',
    'static-gravatar-lock' => 'yes',
    'static-gravatar-use-radius' => 'yes',
    'static-gravatar-radius1' => '100',
    'static-gravatar-radius2' => '100',
    'static-gravatar-radius3' => '100',
    'static-gravatar-radius4' => '100',
    'static-gravatar-radius' => '100',
    'static-gravatar-radius_number' => '100',
    'target' => 
    array (
      0 => '_blank',
    ),
    'display_name' => 'first_last',
    'element_id' => 'post-data-object-1461599487806-1540',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'gravatar-only',
      )),
    )),
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'left_padding_use' => 'yes',
    'right_padding_use' => 'yes',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1461599929352-1812',
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
  'group' => 'module-group-1461599929350-1532',
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '3',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part',
      'view_class' => 'PostDataPartView',
      'part_type' => 'gravatar',
      'wrapper_id' => 'wrapper-1461599678458-1327',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1461599678459-1970',
      'padding_slider' => '15',
      'use_padding' => 'yes',
      'row' => 9,
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
          'order' => 1,
          'clear' => true,
        ),
        'mobile' => 
        array (
          'col' => 7,
          'order' => 1,
          'clear' => true,
        ),
      ),
      'new_line' => true,
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
    ),
  ),
));

$main->add_element("PostData", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1461599654457-1525',
  'id' => 'module-1461599654457-1525',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-author',
    'id_slug' => 'post-data',
    'data_type' => 'author',
    'preset' => 'author-only',
    'row' => 4,
    'type_parts' => 
    array (
      0 => 'author',
      1 => 'gravatar',
      2 => 'author_email',
      3 => 'author_url',
      4 => 'author_bio',
    ),
    'gravatar_size' => '90',
    'post-part-author' => '<div class="upostdata-part author"><a href="{{url}}" {{target}}>{{name}}</a></div>',
    'post-part-gravatar' => '<div class="upostdata-part gravatar">
	{{gravatar}}
</div>',
    'post-part-author_email' => '<div class="upostdata-part author author-email">
	<a href="mailto:{{email}}">{{email_string}}</a>
</div>',
    'post-part-author_url' => '<div class="upostdata-part author author-url">
	<a href="{{url}}" rel="author external">{{url_string}}</a>
</div>',
    'post-part-author_bio' => '<div class="upostdata-part author author-bio">
	{{bio}}
</div>',
    'static-gravatar-border-width' => '1',
    'static-gravatar-border-type' => 'solid',
    'static-gravatar-border-color' => 'rgb(0, 0, 0)',
    'static-author-use-typography' => 'yes',
    'static-author-font-family' => 'Lato',
    'static-author-weight' => '700',
    'static-author-fontstyle' => '700 normal',
    'static-author-style' => 'normal',
    'static-author-font-size' => '14',
    'static-author-line-height' => '1.45',
    'static-author-font-color' => 'rgb(37, 37, 37)',
    'static-author_email-use-typography' => 'yes',
    'static-author_email-font-family' => 'Lato',
    'static-author_email-weight' => '300',
    'static-author_email-fontstyle' => '300 normal',
    'static-author_email-style' => 'normal',
    'static-author_email-font-size' => '14',
    'static-author_email-line-height' => '1.45',
    'static-author_email-font-color' => '#ufc7',
    'static-author_url-use-typography' => 'yes',
    'static-author_url-font-family' => 'Lato',
    'static-author_url-weight' => '300',
    'static-author_url-fontstyle' => '300 normal',
    'static-author_url-style' => 'normal',
    'static-author_url-font-size' => '14',
    'static-author_url-line-height' => '1.45',
    'static-author_url-font-color' => '#ufc7',
    'static-author_bio-use-typography' => '',
    'static-author_bio-font-family' => 'Lato',
    'static-author_bio-weight' => '300',
    'static-author_bio-fontstyle' => '300 normal',
    'static-author_bio-style' => 'normal',
    'static-author_bio-font-size' => '22',
    'static-author_bio-line-height' => '1.4',
    'static-author_bio-font-color' => 'rgba(45,45,45,1)',
    'preset_style' => '',
    'static-gravatar-lock' => 'yes',
    'static-gravatar-use-radius' => 'yes',
    'static-gravatar-radius1' => '100',
    'static-gravatar-radius2' => '100',
    'static-gravatar-radius3' => '100',
    'static-gravatar-radius4' => '100',
    'static-gravatar-radius' => '100',
    'static-gravatar-radius_number' => '100',
    'target' => 
    array (
      0 => '_blank',
    ),
    'display_name' => 'first_last',
    'element_id' => 'post-data-object-1461599654454-1003',
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'author-only',
      )),
    )),
    'top_padding_use' => 'yes',
    'bottom_padding_use' => 'yes',
    'left_padding_use' => 'yes',
    'right_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1461599929354-1486',
  'new_line' => true,
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
      'edited' => false,
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
  'group' => 'module-group-1461599929350-1532',
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '4',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-author',
      'view_class' => 'PostDataPartView',
      'part_type' => 'author',
      'wrapper_id' => 'wrapper-1461599654450-1897',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1461599654451-1430',
      'padding_slider' => '15',
      'use_padding' => 'yes',
      'row' => 4,
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
          'order' => 1,
          'clear' => true,
        ),
        'mobile' => 
        array (
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
    ),
  ),
));

$main->add_element("PostData", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1461599469649-1023',
  'id' => 'module-1461599469649-1023',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-post_data',
    'id_slug' => 'post-data',
    'data_type' => 'post_data',
    'preset' => 'date-only',
    'row' => 3,
    'type_parts' => 
    array (
      0 => 'date_posted',
      1 => 'title',
      2 => 'content',
    ),
    'date_posted_format' => 'F j, Y g:i a',
    'content' => 'content',
    'post-part-date_posted' => '<div class="upostdata-part date_posted"><span class="date">{{date}}</span></div>',
    'post-part-title' => '<div class="upostdata-part title">
	<h1>{{title}}</h1>
</div>
',
    'post-part-content' => '<div class="upostdata-part content">
	{{content}}
</div>',
    'static-date_posted-use-typography' => 'yes',
    'static-date_posted-font-family' => 'Lato',
    'static-date_posted-weight' => '300',
    'static-date_posted-fontstyle' => '300 normal',
    'static-date_posted-style' => 'normal',
    'static-date_posted-font-size' => '14',
    'static-date_posted-line-height' => '1.45',
    'static-date_posted-font-color' => 'rgb(37, 37, 37)',
    'static-title-use-typography' => 'yes',
    'static-title-font-family' => 'Lato',
    'static-title-weight' => '400',
    'static-title-fontstyle' => 'regular',
    'static-title-style' => 'normal',
    'static-title-font-size' => '45',
    'static-title-line-height' => '1.35',
    'static-title-font-color' => 'rgb(45, 45, 45)',
    'preset_style' => '#page .default.upost-data-object-post_data .title h1 {
    margin-top: 0;
    margin-bottom: 0;
}
',
    'predefined_date_format' => 'M d Y',
    'element_id' => 'post-data-object-1461599469646-1773',
    'top_padding_num' => '0',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'date-only',
      )),
    )),
    'top_padding_use' => 'yes',
    'right_padding_use' => 'yes',
    'left_padding_use' => 'yes',
    'bottom_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'calculated_left_indent' => 0,
    'calculated_right_indent' => 0,
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1461599929355-1562',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 3,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 3,
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
  'group' => 'module-group-1461599929350-1532',
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '4',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-date_posted',
      'view_class' => 'PostDataPartView',
      'part_type' => 'date_posted',
      'wrapper_id' => 'wrapper-1461599469643-1445',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1461599469644-1941',
      'padding_slider' => '15',
      'use_padding' => 'yes',
      'row' => 3,
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
          'order' => 1,
          'clear' => true,
        ),
        'mobile' => 
        array (
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
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1461599983922-1618 upfront-module-spacer',
  'id' => 'module-1461599983922-1618',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1461599983922-1499',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1461599983922-1479',
  'edited' => true,
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

$main->add_element("PostData", array (
  'columns' => '15',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1461013596137-1251',
  'id' => 'module-1461013596137-1251',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-post_data',
    'id_slug' => 'post-data',
    'data_type' => 'post_data',
    'preset' => 'title-only',
    'row' => 5,
    'type_parts' => 
    array (
      0 => 'date_posted',
      1 => 'title',
      2 => 'content',
    ),
    'date_posted_format' => 'F j, Y g:i a',
    'content' => 'content',
    'post-part-date_posted' => '<div class="upostdata-part date_posted"><span class="date">{{date}}</span></div>',
    'post-part-title' => '<div class="upostdata-part title">
	<h1>{{title}}</h1>
</div>
',
    'post-part-content' => '<div class="upostdata-part content">
	{{content}}
</div>',
    'static-date_posted-use-typography' => 'yes',
    'static-date_posted-font-family' => 'Lato',
    'static-date_posted-weight' => '300',
    'static-date_posted-fontstyle' => '300 normal',
    'static-date_posted-style' => 'normal',
    'static-date_posted-font-size' => '14',
    'static-date_posted-line-height' => '1.45',
    'static-date_posted-font-color' => 'rgb(37, 37, 37)',
    'static-title-use-typography' => 'yes',
    'static-title-font-family' => 'Lato',
    'static-title-weight' => '400',
    'static-title-fontstyle' => 'regular',
    'static-title-style' => 'normal',
    'static-title-font-size' => '45',
    'static-title-line-height' => '1.35',
    'static-title-font-color' => 'rgb(45, 45, 45)',
    'preset_style' => '#page .default.upost-data-object-post_data .title h1 {
    margin-top: 0;
    margin-bottom: 0;
}
',
    'predefined_date_format' => 'M d Y',
    'element_id' => 'post-data-object-1461013596130-1842',
    'top_padding_num' => '40',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'title-only',
      )),
    )),
    'top_padding_use' => 'yes',
    'top_padding_slider' => '40',
    'calculated_left_indent' => 0,
    'calculated_right_indent' => 0,
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1461599971282-1384',
  'edited' => true,
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
      'edited' => false,
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
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '15',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-title',
      'view_class' => 'PostDataPartView',
      'part_type' => 'title',
      'wrapper_id' => 'wrapper-1461013596124-1947',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1461013596125-1851',
      'padding_slider' => '15',
      'use_padding' => 'yes',
      'row' => 5,
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
          'order' => 1,
          'clear' => true,
        ),
        'mobile' => 
        array (
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
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1461602466612-1894 upfront-module-spacer',
  'id' => 'module-1461602466612-1894',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1461602466612-1338',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1461602466611-1703',
  'edited' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1461597148033-1673 upfront-module-spacer',
  'id' => 'module-1461597148033-1673',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1461597148033-1846',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1461597148032-1688',
  'edited' => true,
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
  ),
));

$main->add_element("PostData", array (
  'columns' => '20',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1461596380855-1377',
  'id' => 'module-1461596380855-1377',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-post_data',
    'id_slug' => 'post-data',
    'data_type' => 'post_data',
    'preset' => 'content-only',
    'row' => 40,
    'type_parts' => 
    array (
      0 => 'date_posted',
      1 => 'title',
      2 => 'content',
    ),
    'date_posted_format' => 'F j, Y g:i a',
    'content' => 'content',
    'post-part-date_posted' => '<div class="upostdata-part date_posted"><span class="date">{{date}}</span></div>',
    'post-part-title' => '<div class="upostdata-part title">
	<h1>{{title}}</h1>
</div>
',
    'post-part-content' => '<div class="upostdata-part content">
	{{content}}
</div>',
    'static-date_posted-use-typography' => 'yes',
    'static-date_posted-font-family' => 'Lato',
    'static-date_posted-weight' => '300',
    'static-date_posted-fontstyle' => '300 normal',
    'static-date_posted-style' => 'normal',
    'static-date_posted-font-size' => '14',
    'static-date_posted-line-height' => '1.45',
    'static-date_posted-font-color' => 'rgb(37, 37, 37)',
    'static-title-use-typography' => 'yes',
    'static-title-font-family' => 'Lato',
    'static-title-weight' => '400',
    'static-title-fontstyle' => 'regular',
    'static-title-style' => 'normal',
    'static-title-font-size' => '45',
    'static-title-line-height' => '1.35',
    'static-title-font-color' => 'rgb(45, 45, 45)',
    'preset_style' => '#page .default.upost-data-object-post_data .title h1 {
    margin-top: 0;
    margin-bottom: 0;
}
',
    'predefined_date_format' => 'M d Y',
    'element_id' => 'post-data-object-1461596380852-1256',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'content-only',
      )),
    )),
    'calculated_left_indent' => 0,
    'calculated_right_indent' => 0,
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1461597134732-1589',
  'edited' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 3,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 3,
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
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '20',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-content',
      'view_class' => 'PostDataPartView',
      'part_type' => 'content',
      'wrapper_id' => 'wrapper-1461596380850-1770',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1461596380851-1595',
      'padding_slider' => '15',
      'use_padding' => 'yes',
      'row' => 102,
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
          'order' => 1,
          'clear' => true,
        ),
        'mobile' => 
        array (
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
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1461602340226-1391 upfront-module-spacer',
  'id' => 'module-1461602340226-1391',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1461602340225-1190',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1461602340224-1985',
  'edited' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '7',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1461713685690-1273',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1461713685690-1002',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1461713685689-1134',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'edited' => true,
  'new_line' => true,
));

$main->add_element("PostData", array (
  'columns' => '15',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'upfront-post_data_module',
  'id' => 'module-1461713436497-1230',
  'options' => 
  array (
    'data_type' => 'comments',
    'row' => 40,
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-comments',
    'id_slug' => 'post-data',
    'type_parts' => 
    array (
      0 => 'comment_count',
      1 => 'comments',
      2 => 'comments_pagination',
      3 => 'comment_form',
    ),
    'comment_count_hide' => 0,
    'disable_showing' => 
    array (
      0 => 'trackbacks',
    ),
    'disable' => 
    array (
      0 => 'trackbacks',
      1 => 'comments',
    ),
    'order' => 'comment_date_gmt',
    'direction' => 'DESC',
    'limit' => 50,
    'paginated' => 0,
    'post-part-comment_count' => '<div class="upostdata-part comment_count">
	{{comment_count||No comments}}
</div>',
    'post-part-comments' => '<div class="upostdata-part comments">
	{{comments}}
</div>',
    'post-part-comments_pagination' => '<div class="upostdata-part comments comments_pagination">
	{{pagination}}
</div>',
    'post-part-comment_form' => '<div class="upostdata-part comment_form">
	{{comment_form}}
</div>',
    'preset' => 'default',
    'element_id' => 'post-data-object-1461713436496-1487',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '15',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'default',
      )),
    )),
    'theme_style' => '',
  ),
  'row' => 40,
  'wrapper_id' => 'wrapper-1461713452376-1161',
  'edited' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 4,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 4,
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
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '15',
      'class' => 'upfront-post-data-part part-comment_count',
      'view_class' => 'PostDataPartView',
      'part_type' => 'comment_count',
      'wrapper_id' => 'wrapper-1461713436493-1843',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1461713436494-1779',
      'padding_slider' => '15',
      'use_padding' => 'yes',
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
    ),
    1 => 
    array (
      'columns' => '24',
      'class' => 'upfront-post-data-part',
      'view_class' => 'PostDataPartView',
      'part_type' => 'comments',
      'wrapper_id' => 'wrapper-1461728623297-1938',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1461728623299-1620',
      'padding_slider' => '15',
      'use_padding' => 'yes',
      'new_line' => true,
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
          'edited' => false,
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
    ),
    2 => 
    array (
      'columns' => '24',
      'class' => 'upfront-post-data-part',
      'view_class' => 'PostDataPartView',
      'part_type' => 'comment_form',
      'wrapper_id' => 'wrapper-1461728623388-1103',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1461728623389-1856',
      'padding_slider' => '15',
      'use_padding' => 'yes',
      'new_line' => true,
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'edited' => false,
          'col' => 12,
          'order' => 3,
          'clear' => true,
        ),
        'mobile' => 
        array (
          'edited' => false,
          'col' => 7,
          'order' => 3,
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
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '2',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1461713687996-1883',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'element_id' => 'spacer-object-1461713687996-1029',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1461713687996-1991',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'edited' => true,
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

