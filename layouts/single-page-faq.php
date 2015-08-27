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
  'row' => 39,
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
  'columns' => '15',
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
    'content' => '<h1 class=""><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1">FAQ</span></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1440493809336-1467',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 13,
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
      'edited' => true,
      'col' => 12,
      'order' => 0,
      'clear' => true,
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
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'top' => 12,
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

$main->add_element("PlainTxt", array (
  'columns' => '15',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'class' => 'module-1440578029535-1487',
  'id' => 'module-1440578029535-1487',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Chambray bitters Blue Bottle ugh, Portland wolf Truffaut sriracha 90\'s before they sold out trust fund selvage. Forage fanny pack DIY roof party 8-bit, narwhal XOXO Truffaut banjo ugh master cleanse banh mi PBR&amp;B authentic plaid. Pour-over lomo Williamsburg swag, actually cardigan synth bespoke direct trade.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1440578029535-1920',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440493909945-1155',
  'new_line' => true,
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 1,
      'top' => 6,
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

$main->add_element("Uaccordion", array (
  'columns' => '15',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '6',
  'margin_bottom' => '0',
  'class' => 'module-1440578029560-1458',
  'id' => 'module-1440578029560-1458',
  'options' => 
  array (
    'type' => 'UaccordionModel',
    'view_class' => 'UaccordionView',
    'has_settings' => 1,
    'class' => 'c24 upfront-accordion',
    'accordion' => 
    array (
      0 => 
      (array)(array(
         'content' => '<p class="">For all queries about your magazine subscription, please email <a rel="email" href="mailto:subscriptions@issuemag.com" target="_blank">subscriptions@issuemag.com</a></p>',
         'title' => 'How can i write for Issue Magazine?',
      )),
      1 => 
      (array)(array(
         'content' => 'Panel 2 content',
         'title' => 'Do you have an RSS Feed?',
      )),
      2 => 
      (array)(array(
         'title' => 'I have a question about my magazine subscription. Who do i contact?',
         'content' => 'Content 3',
      )),
      3 => 
      (array)(array(
         'title' => 'What about international subscriptions?',
         'content' => 'Content 4',
      )),
      4 => 
      (array)(array(
         'title' => 'Can i use a Issuemagaznie.com photo on my blog?',
         'content' => 'Content 5',
      )),
      5 => 
      (array)(array(
         'title' => 'Can i link a Issuemagazine.com story on my own blog?',
         'content' => 'Content 6',
      )),
    ),
    'accordion_count' => 6,
    'accordion_fixed_width' => 'auto',
    'id_slug' => 'uaccordion',
    'preset' => 'faq',
    'element_id' => 'uaccordion-object-1440578029560-1752',
    'row' => 11,
    'anchor' => '',
    'theme_style' => 'uf-accordion-faq',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440493909945-1155',
  'new_line' => true,
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 2,
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

$main->add_element("Uwidget", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '14',
  'margin_bottom' => '0',
  'class' => 'module-1440580161537-1821',
  'id' => 'module-1440580161537-1821',
  'options' => 
  array (
    'id_slug' => 'uwidget',
    'type' => 'UwidgetModel',
    'view_class' => 'UwidgetView',
    'class' => 'c24 upfront-widget',
    'has_settings' => 1,
    'widget' => 'recent-posts-2',
    'element_id' => 'uwidget-object-1440580161537-1961',
    'row' => 11,
    'selected_widget' => 'recent-posts-2',
    'anchor' => '',
    'widget_specific_fields' => 
    (array)(array(
       'widget-recent-posts-__i__-title' => 
      (array)(array(
         'label' => 'Title:',
         'name' => 'title',
         'type' => 'text',
         'value' => '',
      )),
       'widget-recent-posts-__i__-number' => 
      (array)(array(
         'label' => 'Number of posts to show:',
         'name' => 'number',
         'type' => 'text',
         'value' => '5',
      )),
       'widget-recent-posts-__i__-show_date' => 
      (array)(array(
         'name' => 'show_date',
         'type' => 'checkbox',
         'value' => '',
         'label' => 'Display post date?',
      )),
    )),
    'title' => 'NEWEST NEWS',
    'number' => '5',
    'show_date' => 
    array (
    ),
    'theme_style' => 'uf-widget-sidebar',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 13,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440580510212-1220',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 11,
      'order' => 1,
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
      'left' => 1,
      'col' => 10,
      'order' => 3,
      'row' => 13,
      'top' => 6
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'close_wrapper' => false,
));

$main->add_element("PlainTxt", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '3',
  'margin_bottom' => '0',
  'class' => 'module-1440581815017-1476',
  'id' => 'module-1440581815017-1476',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<div class="plaintxt_padding" style="background-color: rgb(240, 246, 245); border: false;"> 
 
      <h4 style="text-align: center;" class=""><a rel="entry" target="_self" href="{{upfront:home_url}}/subscribe/">SUBSCRIBE TODAY</a></h4>
    
</div>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1440581815017-1481',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 11,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgb(240, 246, 245)',
    'anchor' => '',
    'background_color' => 'rgb(240, 246, 245)',
    'theme_style' => 'uf-text-subscribe-sidebar',
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440580510212-1220',
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 3,
      'col' => 5,
      'order' => 4,
      'top' => 3,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'close_wrapper' => false,
));

$main->add_element("Uimage", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1440580161529-1946',
  'id' => 'module-1440580161529-1946',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-faq/poster-190x270-3076.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-faq/poster.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-faq/poster.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'when_clicked' => false,
    'image_link' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 190,
       'height' => 270,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 190,
       'height' => 270,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 195,
       'height' => 270,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '32',
    'align' => 'left',
    'stretch' => false,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'element_id' => 'image-1440580161526-1886',
    'row' => 20,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 57,
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440580510212-1220',
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 3,
      'col' => 5,
      'order' => 5,
      'row' => 57,
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

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'contacts-callout.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'contacts-callout.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

