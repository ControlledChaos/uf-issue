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
  'row' => 40,
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
    'content' => '<h1 class=""><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1">COMPUTER GALLERY</span></h1>',
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
  'columns' => '10',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '4',
  'margin_bottom' => '0',
  'class' => 'module-1440574189273-1193',
  'id' => 'module-1440574189273-1193',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Computer skateboard Carles, occaecat Pinterest hashtag assumenda PBR&amp;B. Quis authentic scenester cupidatat incididunt, brunch letterpress yoyo veniam flexitarian Carles anim freegan elit deep v.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1440574189273-1735',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'row' => 33,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440574379034-1429',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 11,
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
      'left' => 1,
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
));

$main->add_element("PlainTxt", array (
  'columns' => '10',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '4',
  'margin_bottom' => '0',
  'class' => 'module-1440574710280-1850',
  'id' => 'module-1440574710280-1850',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">VHS lo-fi viral magna, incididunt 3 wolf moon literally. Truffaut kale chips seitan, ex small batch chia keytar Portland ennui leggings butcher Schlitz church-key Banksy hashtag. Gluten-free Williamsburg et sriracha.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1440574710280-1820',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'row' => 33,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440574711562-1959',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 11,
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
      'left' => 1,
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
));

$main->add_element("Ugallery", array (
  'columns' => '20',
  'margin_left' => '2',
  'margin_right' => '0',
  'margin_top' => '5',
  'margin_bottom' => '0',
  'class' => 'module-1440574645950-1053',
  'id' => 'module-1440574645950-1053',
  'options' => 
  array (
    'type' => 'UgalleryModel',
    'view_class' => 'UgalleryView',
    'has_settings' => 1,
    'class' => 'c24 upfront-gallery',
    'id_slug' => 'ugallery',
    'status' => 'ok',
    'images' => 
    array (
      0 => 
      (array)(array(
         'id' => '23',
         'srcFull' => '{{upfront:home_url}}/wp-content/uploads/sites/9/2015/08/Mac-Galymzhan Abdugalimov.JPG',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/Mac-Galymzhan Abdugalimov-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/Mac-Galymzhan Abdugalimov-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/Mac-Galymzhan Abdugalimov-1024x683.jpg',
            1 => 1024,
            2 => 683,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:home_url}}/wp-content/uploads/sites/9/2015/08/Mac-Galymzhan Abdugalimov.JPG',
            1 => 2400,
            2 => 1600,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/Mac-Galymzhan Abdugalimov-140x140-7758.jpg',
             'urlOriginal' => '{{upfront:home_url}}/wp-content/uploads/sites/9/2015/08/Mac-Galymzhan Abdugalimov.JPG',
             'full' => 
            (array)(array(
               'width' => 2400,
               'height' => 1600,
            )),
             'crop' => 
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 35,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 210,
                 'height' => 140,
              )),
               'id' => 23,
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 307.5,
           'height' => 205,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' => 
        (array)(array(
           'width' => '140',
           'height' => '140',
           'left' => 35,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-gallery/Mac-Galymzhan Abdugalimov-205x205-8178.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1440574645948-1422',
         'urlType' => 'image',
         'url' => '{{upfront:home_url}}/wp-content/uploads/sites/9/2015/08/Mac-Galymzhan Abdugalimov.JPG',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'linkTarget' => '',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 51,
        )),
      )),
      1 => 
      (array)(array(
         'id' => '24',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh0n9pHJW1st5lhmo1_1280.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh0n9pHJW1st5lhmo1_1280-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh0n9pHJW1st5lhmo1_1280-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh0n9pHJW1st5lhmo1_1280-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh0n9pHJW1st5lhmo1_1280.jpg',
            1 => 1280,
            2 => 853,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh0n9pHJW1st5lhmo1_1280-140x140-3688.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh0n9pHJW1st5lhmo1_1280.jpg',
             'full' => 
            (array)(array(
               'width' => 1280,
               'height' => 853,
            )),
             'crop' => 
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 35,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 210,
                 'height' => 140,
              )),
               'id' => 24,
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 307.5,
           'height' => 205,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' => 
        (array)(array(
           'width' => '140',
           'height' => '140',
           'left' => 35,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh0n9pHJW1st5lhmo1_1280-205x205-9338.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1440574645948-1422',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh0n9pHJW1st5lhmo1_1280.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'linkTarget' => '',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 51,
        )),
      )),
      2 => 
      (array)(array(
         'id' => '25',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh1d7s3UD1st5lhmo1_1280.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh1d7s3UD1st5lhmo1_1280-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh1d7s3UD1st5lhmo1_1280-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh1d7s3UD1st5lhmo1_1280-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh1d7s3UD1st5lhmo1_1280.jpg',
            1 => 1280,
            2 => 853,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh1d7s3UD1st5lhmo1_1280-140x140-7556.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh1d7s3UD1st5lhmo1_1280.jpg',
             'full' => 
            (array)(array(
               'width' => 1280,
               'height' => 853,
            )),
             'crop' => 
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 35,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 210,
                 'height' => 140,
              )),
               'id' => 25,
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 307.5,
           'height' => 205,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' => 
        (array)(array(
           'width' => '140',
           'height' => '140',
           'left' => 35,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh1d7s3UD1st5lhmo1_1280-205x205-9780.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1440574645948-1422',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh1d7s3UD1st5lhmo1_1280.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'linkTarget' => '',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 51,
        )),
      )),
      3 => 
      (array)(array(
         'id' => '26',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh1uhYnog1st5lhmo1_1280.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh1uhYnog1st5lhmo1_1280-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh1uhYnog1st5lhmo1_1280-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh1uhYnog1st5lhmo1_1280-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh1uhYnog1st5lhmo1_1280.jpg',
            1 => 1280,
            2 => 853,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh1uhYnog1st5lhmo1_1280-140x140-7340.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh1uhYnog1st5lhmo1_1280.jpg',
             'full' => 
            (array)(array(
               'width' => 1280,
               'height' => 853,
            )),
             'crop' => 
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 35,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 210,
                 'height' => 140,
              )),
               'id' => 26,
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 307.5,
           'height' => 205,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' => 
        (array)(array(
           'width' => '140',
           'height' => '140',
           'left' => 35,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh1uhYnog1st5lhmo1_1280-205x205-4109.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1440574645948-1422',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh1uhYnog1st5lhmo1_1280.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'linkTarget' => '',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 51,
        )),
      )),
      4 => 
      (array)(array(
         'id' => '27',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh2m1hnS81st5lhmo1_1280.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh2m1hnS81st5lhmo1_1280-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh2m1hnS81st5lhmo1_1280-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh2m1hnS81st5lhmo1_1280-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh2m1hnS81st5lhmo1_1280.jpg',
            1 => 1280,
            2 => 853,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh2m1hnS81st5lhmo1_1280-140x140-7926.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh2m1hnS81st5lhmo1_1280.jpg',
             'full' => 
            (array)(array(
               'width' => 1280,
               'height' => 853,
            )),
             'crop' => 
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 35,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 210,
                 'height' => 140,
              )),
               'id' => 27,
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 307.5,
           'height' => 205,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' => 
        (array)(array(
           'width' => '140',
           'height' => '140',
           'left' => 35,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh2m1hnS81st5lhmo1_1280-205x205-2574.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1440574645948-1422',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh2m1hnS81st5lhmo1_1280.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'linkTarget' => '',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 51,
        )),
      )),
      5 => 
      (array)(array(
         'id' => '28',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh29fxz111st5lhmo1_1280.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh29fxz111st5lhmo1_1280-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh29fxz111st5lhmo1_1280-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh29fxz111st5lhmo1_1280-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh29fxz111st5lhmo1_1280.jpg',
            1 => 1280,
            2 => 853,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh29fxz111st5lhmo1_1280-140x140-8894.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh29fxz111st5lhmo1_1280.jpg',
             'full' => 
            (array)(array(
               'width' => 1280,
               'height' => 853,
            )),
             'crop' => 
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 35,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 210,
                 'height' => 140,
              )),
               'id' => 28,
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 307.5,
           'height' => 205,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' => 
        (array)(array(
           'width' => '140',
           'height' => '140',
           'left' => 35,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh29fxz111st5lhmo1_1280-205x205-7689.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1440574645948-1422',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh29fxz111st5lhmo1_1280.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'linkTarget' => '',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 51,
        )),
      )),
      6 => 
      (array)(array(
         'id' => '29',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh121HEWa1st5lhmo1_1280.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh121HEWa1st5lhmo1_1280-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh121HEWa1st5lhmo1_1280-300x200.jpg',
            1 => 300,
            2 => 200,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh121HEWa1st5lhmo1_1280-1024x682.jpg',
            1 => 1024,
            2 => 682,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh121HEWa1st5lhmo1_1280.jpg',
            1 => 1280,
            2 => 853,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh121HEWa1st5lhmo1_1280-140x140-5760.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh121HEWa1st5lhmo1_1280.jpg',
             'full' => 
            (array)(array(
               'width' => 1280,
               'height' => 853,
            )),
             'crop' => 
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 35,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 210,
                 'height' => 140,
              )),
               'id' => 29,
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 307.5,
           'height' => 205,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' => 
        (array)(array(
           'width' => '140',
           'height' => '140',
           'left' => 35,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh121HEWa1st5lhmo1_1280-205x205-2101.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1440574645948-1422',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mnh121HEWa1st5lhmo1_1280.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'linkTarget' => '',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 51,
        )),
      )),
      7 => 
      (array)(array(
         'id' => '30',
         'srcFull' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mpp6tjdFhf1st5lhmo1_1280.jpg',
         'sizes' => 
        (array)(array(
           'thumbnail' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mpp6tjdFhf1st5lhmo1_1280-150x150.jpg',
            1 => 150,
            2 => 150,
            3 => true,
          ),
           'medium' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mpp6tjdFhf1st5lhmo1_1280-300x205.jpg',
            1 => 300,
            2 => 205,
            3 => true,
          ),
           'large' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mpp6tjdFhf1st5lhmo1_1280-1024x700.jpg',
            1 => 1024,
            2 => 700,
            3 => true,
          ),
           'full' => 
          array (
            0 => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mpp6tjdFhf1st5lhmo1_1280.jpg',
            1 => 1280,
            2 => 875,
            3 => false,
          ),
           'custom' => 
          (array)(array(
             'error' => false,
             'url' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mpp6tjdFhf1st5lhmo1_1280-140x140-6008.jpg',
             'urlOriginal' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mpp6tjdFhf1st5lhmo1_1280.jpg',
             'full' => 
            (array)(array(
               'width' => 1280,
               'height' => 875,
            )),
             'crop' => 
            (array)(array(
               'width' => 140,
               'height' => 140,
            )),
             'editdata' => 
            (array)(array(
               'rotate' => 0,
               'crop' => 
              (array)(array(
                 'width' => '140',
                 'height' => '140',
                 'left' => 32,
                 'top' => 0,
              )),
               'resize' => 
              (array)(array(
                 'width' => 205,
                 'height' => 140,
              )),
               'id' => 30,
            )),
          )),
        )),
         'size' => 
        (array)(array(
           'width' => 300.17857142899998734719702042639255523681640625,
           'height' => 205,
        )),
         'cropSize' => 
        (array)(array(
           'width' => 140,
           'height' => 140,
        )),
         'cropOffset' => 
        (array)(array(
           'width' => '140',
           'height' => '140',
           'left' => 32,
           'top' => 0,
        )),
         'src' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mpp6tjdFhf1st5lhmo1_1280-205x205-1463.jpg',
         'loading' => false,
         'status' => 'ok',
         'element_id' => 'ugallery-object-1440574645948-1422',
         'urlType' => 'image',
         'url' => '{{upfront:style_url}}/images/single-page-gallery/tumblr_mpp6tjdFhf1st5lhmo1_1280.jpg',
         'rotation' => 0,
         'link' => 'original',
         'title' => 'Image caption',
         'caption' => 'Image description',
         'alt' => '',
         'tags' => 
        array (
        ),
         'margin' => 
        (array)(array(
           'left' => 0,
           'top' => 0,
        )),
         'linkTarget' => '',
         'cropPosition' => 
        (array)(array(
           'top' => 0,
           'left' => 47,
        )),
      )),
    ),
    'elementSize' => 
    (array)(array(
       'width' => 0,
       'height' => 0,
    )),
    'labelFilters' => 
    array (
      0 => 'true',
    ),
    'thumbProportions' => '1',
    'thumbWidth' => '205',
    'thumbHeight' => 205,
    'captionType' => 'none',
    'captionColor' => '#ffffff',
    'captionUseBackground' => 0,
    'captionBackground' => '#000000',
    'showCaptionOnHover' => 
    array (
      0 => 'true',
    ),
    'linkTo' => 'image',
    'even_padding' => 
    array (
      0 => 'true',
    ),
    'thumbPadding' => 15,
    'fitThumbCaptions' => 
    array (
    ),
    'thumbCaptionsHeight' => 20,
    'element_id' => 'ugallery-object-1440574645948-1422',
    'row' => 8,
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1440574896939-1003',
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

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'contacts-callout.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'contacts-callout.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

