<?php


?>
<?php snippet('header') ?>
<main class="works-subpage">
  <div id="project-header">
    <a id="close" href="index.html">
      [BACK]
    </a>
    <div><?= $page->title() ?></div>
    <p class="Right"><?= $page->description() ?></p>
    <time><?= $page->date()->toDate('Y') ?></time>
  </div>

  <?php foreach ($page->pageBuilder()->toBuilderBlocks() as $block): ?>
        <?php snippet('blocks/' . $block->_key(), ['data' => $block]) ?>
  <?php endforeach ?>


  <div class="module-text">
    <p class="Right"><?= $page->concept() ?></p>
  </div>
  <?php if ($image = $page->image()): ?>

  <div class="module-gallery-wrap <?= $page->galleryLayout() ?>">
    <div class="counter">
      [GALLERY]
    </div>

    <div class="module-gallery">
      <div class="slider">

        <?php foreach ($page->images()->template('work-image') as $image): ?>
        <img data-lazy="<?= $image->url() ?>" alt="<?= $image->alt() ?>" />
        <?php endforeach ?>
 
      </div>
      <div class="text-counter">

      </div>
      <p class="vid-sub-heading"><?= $image->alt() ?></p>
    </div>
  </div>

  <?php endif ?>



  <div id="credits">
    <br />
    <wrap>
      <div>
        <span>PROJECT:</span>
        <span><?= $page->title() ?></span>
      </div>
      <div>
        <span>CLIENT:</span>
        <span><?= $page->client() ?></span>
      </div>
      <div>
        <span>YEAR:</span>
        <span><?= $page->date()->toDate('Y') ?></span>
      </div>
      <div>
        <span>Credits:</span>
        <span><?= $page->contributors() ?></span>
      </div>
    </wrap>
  </div>

</main>
<?php snippet('footer') ?>
<?php snippet('footer/workFooter') ?>
