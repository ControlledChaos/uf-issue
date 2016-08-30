<?php
/**
 * Template Name: Term Of Use Page template
 *
 * @package WordPress
 * @subpackage term-of-use
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-term-of-use'));

get_header();
echo $layout->apply_layout();
get_footer();