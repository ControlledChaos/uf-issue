<?php
/**
 * Template Name: Subscribe Page template
 *
 * @package WordPress
 * @subpackage subscribe
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-subscribe'));

get_header();
echo $layout->apply_layout();
get_footer();