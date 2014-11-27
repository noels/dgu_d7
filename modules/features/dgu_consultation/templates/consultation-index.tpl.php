<h4><a href="<?php print($consultation_index['href']); ?>"<dt><?php print $consultation_index['section']; ?></dt><dd><?php print $consultation_index['title']; ?></dd></a></h4>
<ul>
  <?php foreach ($consultation_index['paragraphs'] as $paragraph): ?>
  <li><dt><?php print $paragraph['section']; ?></dt><dd><?php print $paragraph['title'] ?></dd></li>
  <?php endforeach; ?>

  <?php if (!empty($consultation_index['subsections'])): ?>
    <?php foreach ($consultation_index['subsections'] as $subsection): ?>
      <li><?php print(theme('consultation_index', array('consultation_index' => $subsection))); ?></li>
    <?php endforeach; ?>
  <?php endif; ?>
</ul>
