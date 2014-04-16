<?php
/**
 * @file
 * dgu_news.features.filter.inc
 */

/**
 * Implements hook_filter_default_formats().
 */
function dgu_news_filter_default_formats() {
  $formats = array();

  // Exported format: Unfiltered.
  $formats['unfiltered'] = array(
    'format' => 'unfiltered',
    'name' => 'Unfiltered',
    'cache' => 1,
    'status' => 1,
    'weight' => -8,
    'filters' => array(),
  );

  return $formats;
}
