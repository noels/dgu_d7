<h4><a href="<?php print($consultation_index['href']); ?>"><?php print $consultation_index['section']; ?> <?php print $consultation_index['title']; ?></a></h4>
<ul>
  <?php foreach ($consultation_index['paragraphs'] as $paragraph): ?>
  <li><?php print $paragraph['section']; ?> <?php print $paragraph['title'] ?></li>
  <?php endforeach; ?>

  <?php if (!empty($consultation_index['subsections'])): ?>
    <?php foreach ($consultation_index['subsections'] as $subsection): ?>
      <li><?php print(theme('consultation_index', array('consultation_index' => $subsection))); ?></li>
    <?php endforeach; ?>
  <?php endif; ?>
</ul>
