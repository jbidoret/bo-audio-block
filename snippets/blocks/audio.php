<?php if ($file = $block->audio()->toFile()): ?>
<div class="audio-wrapper">  
  <div class="audio-info">
    <audio class="audio-element" controls
      <?= $block->controls()->isTrue() ? 'controls' : '' ?>
      <?= $block->autoplay()->isTrue() ? 'autoplay' : '' ?>
    >
      <source src="<?= $file->url()?>" type="<?= $file->mime() ?>">
      Your browser does not support the <code>audio</code> element.
    </audio>
  </div>
</div>
<?php endif ?>
a