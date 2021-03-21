<?php if ($cover = $work->cover()->toFile()): ?>
<figure>
  <a href="<?= $cover->url() ?>"></a>
</figure>
<?php endif ?>
