<?php

/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 *
 * @ingroup themeable
 */
?>
<div class="profile user-info row"<?php print $attributes; ?>>

  <div class="avatar col-md-2"><?php print render($user_profile['field_avatar']); ?></div>

  <div class="summary col-md-5">
    <?php if($full_name): ?>
      <h3 class="full-name"><?php print $full_name?></h3>
    <?php endif; ?>
    <?php if($job_title): ?>
      <div class="job-title"><?php print $job_title?></div>
    <?php endif; ?>
    <div class="member-for"><?php print $member_for?></div>
    <?php if($twitter): ?>
      <div class="solcial-media twitter"><a href="https://twitter.com/<?php print $twitter?>"><?php print '@' . $twitter?></a></div>
    <?php endif; ?>
    <?php if($linkedin): ?>
      <div class="solcial-media linkedin"><a href="http://<?php print $linkedin?>"><?php print truncate_utf8($linkedin, 55, FALSE, TRUE); ?></a></div>
    <?php endif; ?>
    <?php if($facebook): ?>
      <div class="solcial-media facebook"><a href="https://<?php print $facebook?>"><?php print truncate_utf8($facebook, 55, FALSE, TRUE); ?></a></div>
    <?php endif; ?>
  </div>
  <div class="bio col-md-5"><?php print $bio?></div>
</div>
<div class="profile user-other row">
  <div class="col-md-5">
    <?php
    hide($user_profile['field_avatar']);
    hide($user_profile['field_first_name']);
    hide($user_profile['field_surname']);
    hide($user_profile['field_job_title']);
    hide($user_profile['field_twitter']);
    hide($user_profile['field_linkedin_url']);
    hide($user_profile['field_facebook_url']);
    hide($user_profile['field_bio']);
    hide($user_profile['summary']);
    hide($user_profile['user_picture']);
    ?>
    <?php print render($user_profile); ?>
  </div>
</div>
