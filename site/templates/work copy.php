<?php


?>
<?php snippet('header') ?>
<main class="work-subpage">
  <?php if ($cover = $page->cover()->resize(1080)): ?>
  <section class="cover">
    <img class="lazy" data-src="<?= $cover->url() ?>" alt="<?= $cover->alt() ?>" />
    <time><?= $page->date()->toDate('d F Y') ?></time>
  </section>
  <?php endif ?>
  <section class="work-subpage-content">
    <article class="subpage-information">
      <div class="subpage-meta">
        <p class="sub-sub-heading  ">Block A</p>
        <h1><?= $page->title() ?></h1>
        <p class="sub-sub-heading  ">Tags:</p>
        <?php foreach ($page->tags()->split() as $tag): ?>
        <tags class="post-meta">
          <p class="tags sub-sub-heading  ">
            <?= $tag ?>
          </p>
        </tags>
        <?php endforeach ?>
        <br />
        <p class="sub-sub-heading  " >Client:</p>
        <?= $page->client()->kt() ?>
        <p class="sub-sub-heading  ">Involved:</p>
       <?= $page->contributors()->kt() ?>
      </div>
      <div class="subpage-description">
        <p class="sub-sub-heading  ">Block B</p>
        <?= $page->description()->kt() ?>
      </div>
      <div class="subpage-concept">
        <p class="sub-sub-heading  ">Block C</p>
        <?= $page->concept()->kt() ?>
      </div>
      <div id="barba-wrapper">
        <div class="barba-container one left" data-namespace="index-page">
          <div class="subpage-gallery" id="index">
            <section class="post-gallery">
              <article class="work-images">
                <div class="slider">
                  <?php if ($image = $page->image()->resize(1080)): ?>
                  <?php foreach ($page->images()->template('work-image') as
                  $image): ?>
                  <img data-lazy="<?= $image->url() ?>" alt="<?= $cover->alt() ?>" />
                  <?php endforeach ?>
                  <?php endif ?>
                </div>
                <div class="text-counter"></div>
                <p class="vid-sub-heading">
                <?= $cover->alt() ?> </p>
              </article>
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
    </article>
  </section>
</main>
<?php snippet('subpageFooter/subpage') ?>
<?php snippet('footer/workFooter') ?>