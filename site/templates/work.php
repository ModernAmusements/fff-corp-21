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

  <div class="module-full-width small">
    <?php if ($cover = $page->cover()->resize(1080)): ?>
    <img
      class="lazy"
      data-src="<?= $cover->url() ?>"
      alt="<?= $cover->alt() ?>"
    />
    <?php endif ?>
  </div>

  <div class="module-text">
    <p class="Right"><?= $page->concept() ?></p>
  </div>
  <div class="module-gallery-wrap <?= $page->galleryLayout() ?>">
  <div class="counter">
    [GALLERY]
  </div>
  <div class="module-gallery">
    <div class="slider">
      <?php if ($image = $page->image()->resize(1080)): ?>
      <?php foreach ($page->images()->template('work-image') as $image): ?>
      <img data-lazy="<?= $image->url() ?>" alt="<?= $cover->alt() ?>" />
      <?php endforeach ?>
      <?php endif ?>
    </div>
    <div class="text-counter"></div>
    <p class="vid-sub-heading"><?= $cover->alt() ?></p>
  </div>
  </div>
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
  <a id="close" href="index.html">
    [BACK]
  </a>
</main>
<?php snippet('footer') ?>
<?php snippet('footer/workFooter') ?>
