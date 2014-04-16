<?php
/**
 * @file
 * dgu_news.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function dgu_news_user_default_roles() {
  $roles = array();

  // Exported role: administrator.
  $roles['administrator'] = array(
    'name' => 'administrator',
    'weight' => 2,
  );

  // Exported role: news moderator.
  $roles['news moderator'] = array(
    'name' => 'news moderator',
    'weight' => 9,
  );

  // Exported role: news publisher.
  $roles['news publisher'] = array(
    'name' => 'news publisher',
    'weight' => 10,
  );

  return $roles;
}
