<?php


?>
<?php snippet('header') ?>
<main>
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

<?php if ($image = $page->image()->isNotEmpty()): ?>
  <div class="module-two-columns">
    <div class="module-gallery  <?= $page->galleryLayout() ?> <?= $page->layout() ?>">
      <div class="slider">
      <?php if ($cover = $page->cover()->resize(1080)) : ?>
                <img data-lazy="<?= $cover->url() ?>" alt="<?= $cover->alt() ?>" />
      <?php endif ?>
        <?php if ($image = $page->image()->resize(1080)): ?>
          <?php foreach ($page->images()->template('work-image') as $image): ?>
            <img data-lazy="<?= $image->url() ?>" alt="<?= $image->alt() ?>" />
          <?php endforeach ?>
        <?php endif ?>
      </div>
      <div class="text-counter">
      </div>
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
