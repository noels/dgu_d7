<h1>Dataset comments</h1>
<h3>Latest comments on all datasets published by <a href="/publisher/<?php print $publisher->name ?>"><?php print $publisher->title ?></a></h3>
<div class="dataset-comment-report">
<?php
foreach  ($dataset_comments as $row):?>
  <h3>Dataset: <a href="/dataset/<?php print $row->name ?>"><?php print $row->dataset_title ?></a></h3>
  <div class="result boxed">
    <div class="comment">
      <div class="reply-header">
        <h3><?php print $row->subject ?></h3>
        <span class=""submitted">Posted by <a href="/user/<?php print $row->uid ?>"><?php print $row->user_name ?></a></span><span> on <?php print $row->post_date ?> </span>
      </div>
      <p><?php print $row->comment ?></p>
    </div>
  </div>
<?php endforeach ?>
</div>
