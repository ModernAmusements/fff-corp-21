<?php
?>
<?php snippet('headerWorkSubpage') ?>
<section class="grid">
  <div class="animation transition-fade" id="project-header">
    <a id="homeIndex" href="/home">
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

<?php foreach ($page->videos()->template('work-videos') as
        $video): ?>
  <div class="module-full-width-video">
    <div id="barba-wrapper">
      <div class="barba-container <?= $page->videoLayout() ?>" data-namespace="index-page">
        <div class="video-wrapper post-video" data-state="not-init">
          <video loop playsinline preload="auto" alt="<?= $video->alt() ?>" poster="<?= $image->url() ?>">
            <source src="<?= $video->url() ?>" type="video/mp4" />
          </video>
          <button class="intro-play"><span>Play</span></button>
          <div class="vid-controls">
            <button class="vid-icon vid-playpause" data-state="play">
              Play
            </button>
            <button class="vid-icon vid-mute" data-state="mute">
              Sound
            </button>
            <button class="vid-icon vid-fullscreen" data-state="go-fullscreen">
              Fullscreen
            </button>
            <div class="vid-progress-wrap" max="14.53756">
              <div class="vid-progress-bar" data-value="0" min="0"></div>
            </div>
          </div>
        </div>
        <?php foreach ($page->videos()->template('work-videos') as
        $video): ?>
        <p class="vid-sub-heading">
          <?= $video->alt() ?> </p>
        <?php endforeach ?>
      </div>
    </div>
  </div>
<?php endforeach ?>

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
</section>


<?php snippet('footer') ?>
<?php snippet('footer/workFooter') ?>
