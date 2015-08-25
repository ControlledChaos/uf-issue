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
  'row' => 35,
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
    'content' => '<h1 class=""><span class="upfront_theme_color_1">SUBSCRIBE</span></h1>',
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

$main->add_element("PlainTxt", array (
  'columns' => '7',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '18',
  'margin_bottom' => '0',
  'class' => 'module-1440493909973-1292',
  'id' => 'module-1440493909973-1292',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="" style="text-align: right;"><span class="upfront_theme_color_1">Stay up to date<br>width every<br>new Issue?</span></h2>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1440493909973-1068',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 8,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'uf-text-content-callout',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'theme_style' => 'uf-text-content-callout-mobile',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'uf-text-content-callout-mobile',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440494531845-1926',
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
      'left' => 2,
      'col' => 8,
      'order' => 0,
      'top' => 9,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 9,
    ),
  ),
));

$main->add_element("Code", array (
  'columns' => '11',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '22',
  'margin_bottom' => '0',
  'class' => 'module-1440495254361-1236',
  'id' => 'module-1440495254361-1236',
  'options' => 
  array (
    'type' => 'CodeModel',
    'view_class' => 'CodeView',
    'class' => 'c24 upfront-code_element-object',
    'has_settings' => 0,
    'id_slug' => 'upfront-code_element',
    'fallbacks' => 
    (array)(array(
       'markup' => '<b>Enter your markup here...</b>',
       'style' => '/* Your styles here */',
       'script' => '/* Your code here */',
    )),
    'element_id' => 'upfront-code_element-object-1440495254361-1926',
    'row' => 8,
    'code_selection_type' => 'Create',
    'markup' => '<form method="post" class="upfront-subscribe-form">
    <div class="upfront-subscribe-input_group">
        <input type="text" class="subscribe-input subscribe-input-name" placeholder="Name">
    </div>
    <div class="upfront-subscribe-input_group">
        <input type="email" class="subscribe-input subscribe-input-email" placeholder="Email">
    </div>
    <div class="upfront-subscribe-notes">
        <p>Required field</p>
    </div>
    <div class="upfront-subscribe-submit_group">
        <input type="submit" class="subscribe-submit" value="Subscribe">
    </div>
</form><!-- end upfront-subscribe-form -->',
    'style' => '.upfront-subscribe-form {
    overflow: hidden;
}
.upfront-subscribe-input_group,
.upfront-subscribe-submit_group {
    display: block;
}
.upfront-subscribe-input_group {
    margin-bottom: 15px;
    position: relative;
}
.upfront-subscribe-input_group:before {
    background: url("{{upfront:style_url}}/ui/issue-sprite.png") no-repeat;
    background-position: -75px -1037px;
    content: "";
    height: 8px;
    right: 10px;
    margin-top: -4px;
    position: absolute;
    top: 50%;
    width: 10px;
}
.subscribe-input {
    border-radius: 4px;
}
.subscribe-submit {
    border-radius: 4px;
    float: right;
    min-width: 150px;
}
.upfront-subscribe-notes {
    margin-bottom: 15px;
    position: relative;
}
.upfront-subscribe-notes:before {
    background: url("{{upfront:style_url}}/ui/issue-sprite.png") no-repeat;
    background-position: -75px -1037px;
    content: "";
    height: 8px;
    left: 0;
    margin-top: -5px;
    position: absolute;
    top: 50%;
    width: 10px;
}
.upfront-subscribe-notes p {
    color: #ufc8;
    font-size: 12px;
    line-height: 2.084em;
    margin-left: 20px;
}
.upfront-subscribe-notes p:last-child {
    margin-bottom: 0;
}',
    'script' => '/* Your code here */',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440495295951-1838',
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
      'top' => 11,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 11,
    ),
  ),
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'contacts-callout.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'contacts-callout.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

