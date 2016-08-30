<?php
$layout_version = '1.0.0';

$main = upfront_create_region(
			array (
  'name' => 'main',
  'title' => 'Main Area',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'main',
  'position' => 10,
  'allow_sidebar' => true,
),
			array (
  'row' => 140,
  'background_type' => 'color',
  'background_color' => '#c5d0db',
  'version' => '1.0.0',
)
			);

$main->add_element("PostData", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1467787537272-1394',
  'id' => 'module-1467787537272-1394',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-post_data',
    'id_slug' => 'post-data',
    'data_type' => 'post_data',
    'preset' => 'default',
    'row' => 40,
    'type_parts' => 
    array (
      0 => 'date_posted',
      1 => 'title',
      2 => 'content',
    ),
    'date_posted_format' => 'F j, Y g:i a',
    'content' => 'content',
    'post-part-date_posted' => '<div class="upostdata-part date_posted">
	Posted on <span class="date">{{date}}</span></div>',
    'post-part-title' => '<div class="upostdata-part title">
	<h1>{{title}}</h1>
</div>
',
    'post-part-content' => '<div class="upostdata-part content">
	{{content}}
</div>',
    'element_id' => 'post-data-object-1467787537271-1215',
    'top_padding_num' => 15,
    'bottom_padding_num' => 15,
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
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
    'calculated_left_indent' => 225,
    'calculated_right_indent' => 0,
    'theme_preset' => 'true',
    'hidden_parts' => 
    array (
      0 => 'date_posted',
      1 => 'title',
    ),
    'left_indent' => '5',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1467787553104-1347',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 1,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 1,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '24',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-date_posted',
      'view_class' => 'PostDataPartView',
      'part_type' => 'date_posted',
      'wrapper_id' => 'wrapper-1467787537269-1141',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1467787537270-1276',
      'padding_slider' => 15,
      'use_padding' => 'yes',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
    ),
    1 => 
    array (
      'columns' => '24',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-title',
      'view_class' => 'PostDataPartView',
      'part_type' => 'title',
      'wrapper_id' => 'wrapper-1467787537270-1335',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1467787537270-1762',
      'padding_slider' => 15,
      'use_padding' => 'yes',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
    ),
    2 => 
    array (
      'columns' => '24',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-content',
      'view_class' => 'PostDataPartView',
      'part_type' => 'content',
      'wrapper_id' => 'wrapper-1467787537270-1603',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1467787537271-1078',
      'padding_slider' => 15,
      'use_padding' => 'yes',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
    ),
  ),
));

$main->add_element("PostData", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1467787537282-1320',
  'id' => 'module-1467787537282-1320',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-comments',
    'id_slug' => 'post-data',
    'data_type' => 'comments',
    'preset' => 'default',
    'row' => 40,
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
    'element_id' => 'post-data-object-1467787537281-1775',
    'top_padding_num' => 15,
    'bottom_padding_num' => 15,
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'static-comment_count-use-typography' => 'yes',
    'static-comment_count-font-family' => 'Lato',
    'static-comment_count-weight' => '300',
    'static-comment_count-fontstyle' => '300 normal',
    'static-comment_count-style' => 'normal',
    'static-comment_count-font-size' => '30',
    'static-comment_count-line-height' => '1',
    'static-comment_count-font-color' => 'rgb(45, 45, 45)',
    'static-comments-use-typography' => 'yes',
    'static-comments-font-family' => 'Lato',
    'static-comments-weight' => '300',
    'static-comments-fontstyle' => '300 normal',
    'static-comments-style' => 'normal',
    'static-comments-font-size' => '18',
    'static-comments-line-height' => '1.7',
    'static-comments-font-color' => 'rgba(45,45,45,1)',
    'static-comments_pagination-use-typography' => 'yes',
    'static-comments_pagination-font-family' => 'Lato',
    'static-comments_pagination-weight' => '300',
    'static-comments_pagination-fontstyle' => '300 normal',
    'static-comments_pagination-style' => 'normal',
    'static-comments_pagination-font-size' => '18',
    'static-comments_pagination-line-height' => '2',
    'static-comments_pagination-font-color' => 'rgb(88, 172, 169)',
    'static-comment_form-use-typography' => 'yes',
    'static-comment_form-font-family' => 'Lato',
    'static-comment_form-weight' => '300',
    'static-comment_form-fontstyle' => '300 normal',
    'static-comment_form-style' => 'normal',
    'static-comment_form-font-size' => '30',
    'static-comment_form-line-height' => '1.5',
    'static-comment_form-font-color' => 'rgb(45, 45, 45)',
    'preset_style' => '#page .default.upost-data-object-comments .upfront-wrapper:first-child .upfront-post-data-part:before, #page .default.upost-data-object-comments  .upfront-output-wrapper:first-child .upfront-post-data-part:before {
    content: "";
    width: 100%;
    height: 4px;
    display: block;
    position: relative;
    top: -15px;
    background: /*#ufc1*/#de7854;
}
#page .default.upost-data-object-comments .upfront-post_data-comments, #page .default.upost-data-object-comments .upfront-post_data-comments ol.children {
    list-style: none;
}
#page .default.upost-data-object-comments .upfront-post_data-comments ol.children > li {
    margin-left: 90px;
}
#page .default.upost-data-object-comments .upfront-post_data-comments ol.children > li.depth-3 {
    margin-left: 135px;
}
#page .default.upost-data-object-comments .upfront-post_data-comments ol.children > li:not(.depth-2):not(.depth-3) {
    margin-left: 45px;
}
#page .default.upost-data-object-comments .upfront-post_data-comments article.comment {
    position: relative;
    padding-bottom: 20px;
}
#page .default.upost-data-object-comments .upfront-post_data-comments .avatar {
    width: 60px;
    height: 60px;
    float: left;
    margin-right: 30px;
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
}
#page .default.upost-data-object-comments .upfront-post_data-comments ol.children li:not(.depth-2) .avatar {
    display: none;
}
#page .default.upost-data-object-comments .upfront-post_data-comments .comment-meta .fn {
    color: /*#ufc7*/#b96446;
    font-style: normal;
}
#page .default.upost-data-object-comments .upfront-post_data-comments .comment-meta .comment-time {
    display: block;
}
#page .default.upost-data-object-comments .upfront-post_data-comments .comment-meta .comment-time, #page .default.upost-data-object-comments .upfront-post_data-comments .comment-meta .comment-time time {
    color: /*#ufc5*/#a4b2b0;
    font-size: 14px;
    line-height: 20px;
    font-weight: 500;
}
#page .default.upost-data-object-comments .upfront-post_data-comments .comment-content {
    margin-left: 90px;
}
#page .default.upost-data-object-comments .upfront-post_data-comments ol.children li:not(.depth-2) .comment-content {
    margin-left: 0;
}
#page .default.upost-data-object-comments .upfront-post_data-comments .comment-content, #page .default.upost-data-object-comments .upfront-post_data-comments .comment-content p {
    color: #120e0f;
}
#page .default.upost-data-object-comments .upfront-post_data-comments .comment-content p {
    margin-bottom: 0;
    padding-bottom: 15px;
}
#page .default.upost-data-object-comments .upfront-post_data-comments .comment p.comment-awaiting-moderation {
    color: /*#ufc2*/#5aadaa;
    font-weight: 500;
    font-style: italic;
}
#page .default.upost-data-object-comments .upfront-post_data-comments .edit-link, #page .default.upost-data-object-comments .upfront-post_data-comments .edit-link a {
    color: /*#ufc7*/#b96446;
    font-size: 14px;
    line-height: 18px;
    font-weight: 500;
}
#page .default.upost-data-object-comments .upfront-post_data-comments .edit-link a {
    color: /*#ufc7*/#b96446;
}
#page .default.upost-data-object-comments .upfront-post_data-comments .comment-reply a:hover {
    color: /*#ufc1*/#de7854;
}
#page .default.upost-data-object-comments .upfront-post_data-comments .reply {
    position: absolute;
    top: 0;
    right: 0;
}
#page .default.upost-data-object-comments .upfront-post_data-comments .reply a {
    padding-left: 20px;
    background: url("//localhost:8888/uf/wp-content/themes/uf-issue/ui/sprite.png") no-repeat transparent;
    background-image: url("//localhost:8888/uf/wp-content/themes/uf-issue/ui/sprite.svg"), none;
    background-position: -234px -1032px;
    color: #c5d6d3;
    font-size: 12px;
    line-height: 14px;
    font-weight: 500;
    text-transform: uppercase;
}
#page .default.upost-data-object-comments .upfront-post_data-comments ol.children .reply a {
    display: block;
    padding-left: 12px;
    text-indent: -9999px;
}
#page .default.upost-data-object-comments .upfront-post_data-comments .reply a:before {
    width: 14px;
    height: 10px;
    display: inline-block;
    margin-right: 5px;
    background: url("//localhost:8888/uf/wp-content/themes/uf-issue/ui/sprite.png") no-repeat transparent;
    background-image: url("//localhost:8888/uf/wp-content/themes/uf-issue/ui/sprite.svg"), none;
    background-position: -234px -1035px;
}
#page .default.upost-data-object-comments .upfront-post_data-comments .reply span {
    display: none;
}
#page .default.upost-data-object-comments .comment-respond .comment-reply-title {
    color: inherit;
}
#page .default.upost-data-object-comments .comment-respond .comment-reply-title a {
    color: /*#ufc7*/#b96446;
}
#page .default.upost-data-object-comments .comment-respond .comment-reply-title a:hover {
    color: /*#ufc1*/#de7854;
}
#page .default.upost-data-object-comments .comment-respond .comment-reply-title small {
    display: inline-block;
    vertical-align: middle;
    margin-left: 15px;
}
#page .default.upost-data-object-comments .comment-respond .comment-reply-title small a {
    display: block;
    vertical-align: middle;
    padding: 4px 10px 5px;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    background: /*#ufc7*/#b96446;
    color: /*#ufc6*/#ffffff;
    font-size: 14px;
    line-height: 16px;
    font-weight: 500;
    transition: 0.2s ease-in;
    -moz-transition: 0.2s ease-in;
    -webkit-transition: 0.2s ease-in;
}
#page .default.upost-data-object-comments .comment-respond .comment-reply-title small a:hover {
    background: /*#ufc1*/#de7854;
    color: /*#ufc6*/#ffffff;
}
#page .default.upost-data-object-comments .comment-respond .logged-in-as, #page .default.upost-data-object-comments .comment-respond .logged-in-as a, #page .default.upost-data-object-comments .comment-respond p.comment-notes {
    font-size: 18px;
}
#page .default.upost-data-object-comments .comment-respond .comment-form > p.comment-form-author, #page .default.upost-data-object-comments .comment-respond .comment-form > p.comment-form-email, #page .default.upost-data-object-comments .comment-respond .comment-form > p.comment-form-url {
    position: relative;
}
#page .default.upost-data-object-comments .comment-respond .comment-form label {
    padding-top: 5px;
    padding-bottom: 5px;
    color: /*#ufc4*/#7c8a87;
    font-size: 18px;
    line-height: 20px;
}
#page .default.upost-data-object-comments .comment-respond .comment-form input, #page .default.upost-data-object-comments .comment-respond .comment-form textarea {
    display: block;
    padding: 5px 15px;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    background: #edf3f2;
    color: /*#ufc4*/#7c8a87;
    font-size: 18px;
    line-height: 20px;
}
#page .default.upost-data-object-comments .comment-respond .comment-form input {
    width: 100%;
    max-width: 280px;
}
#page .default.upost-data-object-comments .comment-respond .comment-form textarea {
    width: 100%;
    height: 120px;
    resize: none;
}
#page .default.upost-data-object-comments .comment-respond .form-submit input.submit {
    max-width: 180px;
    height: 45px;
    padding: 9px 15px 11px;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    background: /*#ufc1*/#de7854;
    color: /*#ufc6*/#ffffff;
    font-size: 18px;
    line-height: 25px;
    font-weight: 500;
    transition: 0.2s ease-in;
    -ms-transition: 0.2s ease-in;
    -moz-transition: 0.2s ease-in;
    -webkit-transition: 0.2s ease-in;
}
#page .default.upost-data-object-comments .comment-respond .form-submit input.submit:hover {
    background: /*#ufc7*/#b96446;
}
',
    'hidden_parts' => 
    array (
      0 => 'comments_pagination',
    ),
    'theme_preset' => 'true',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1467787557685-1082',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 2,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 2,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '24',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-comment_count',
      'view_class' => 'PostDataPartView',
      'part_type' => 'comment_count',
      'wrapper_id' => 'wrapper-1467787537279-1294',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1467787537280-1490',
      'padding_slider' => 15,
      'use_padding' => 'yes',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
    ),
    1 => 
    array (
      'columns' => '24',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-comments',
      'view_class' => 'PostDataPartView',
      'part_type' => 'comments',
      'wrapper_id' => 'wrapper-1467787537280-1224',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1467787537280-1798',
      'padding_slider' => 15,
      'use_padding' => 'yes',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
    ),
    2 => 
    array (
      'columns' => '24',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-comments_pagination',
      'view_class' => 'PostDataPartView',
      'part_type' => 'comments_pagination',
      'wrapper_id' => 'wrapper-1467787537280-1050',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1467787537280-1262',
      'padding_slider' => 15,
      'use_padding' => 'yes',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
    ),
    3 => 
    array (
      'columns' => '24',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-comment_form',
      'view_class' => 'PostDataPartView',
      'part_type' => 'comment_form',
      'wrapper_id' => 'wrapper-1467787537281-1408',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1467787537281-1359',
      'padding_slider' => 15,
      'use_padding' => 'yes',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
    ),
  ),
));

$regions->add($main);

