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
  
  <div class="module-gallery-wrap <?= $page->galleryLayout() ?>">
    <div class="counter">
      [GALLERY]
    </div>
    <div class="module-gallery">
      <div class="slider">
        <?php if ($image = $page->image()): ?>
        <?php foreach ($page->images()->template('work-image') as $image): ?>
        <img data-lazy="<?= $image->url() ?>" alt="<?= $image->alt() ?>" />
        <?php endforeach ?>
        <?php endif ?>
      </div>
      <div class="text-counter">

      </div>
      <p class="vid-sub-heading"><?= $image->alt() ?></p>
    </div>
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


  <?php foreach ($page->moduleFullWidth()->toBuilderBlocks() as $block): ?>
    <?php snippet('blocks/' . $block->_key(), ['data' => $block]) ?>
    <?php endforeach ?>


    <?php foreach ($page->fullRow()->toBuilderBlocks() as $block): ?>
    <?php snippet('blocks/' . $block->_key(), ['data' => $block]) ?>
    <?php endforeach ?>
  <div class="module-text">
    <p class="Right"><?= $page->concept() ?></p>
  </div>

  <div class="module-full-width">
  <div id="barba-wrapper">
        <div class="barba-container one left" data-namespace="index-page">
          <div class="subpage-gallery" id="index">
            <section class="post-gallery">
            
              <article class="work-videos">
                <?php foreach ($page->videos()->template('work-videos') as
                $video): ?>
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
                <?php endforeach ?>
                <?php foreach ($page->videos()->template('work-videos') as
                $video): ?>
                <p class="vid-sub-heading">
                <?= $video->alt() ?> </p>
                <?php endforeach ?>
              </article>
            </section>
          </div>
        </div>
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
