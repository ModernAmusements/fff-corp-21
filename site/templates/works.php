<?php

?>
<?php snippet('header') ?>
<div id="barba-wrapper">
  <div class="barba-container one left" data-namespace="index-page">
    <main id="index">
      <nav class="categories">
        <div class="categories-title">
          <strong>
            <a>Filter:</a>
          </strong>
        </div>
        <ul class="categories-pills">
          <li class="category-li active">
            <button class="button category-button" data-slug="all">All</button>
          </li>
          <li class="category-li">
            <button class="button category-button" data-slug="Development">
            Development
            </button>
          </li>
          <li class="category-li">
            <button class="button category-button" data-slug="CMS">CMS</button>
          </li>
          <li class="category-li">
            <button class="button category-button" data-slug="PHP/Laravel">
            PHP/Laravel
            </button>
          </li>
          <li class="category-li">
            <button class="button category-button" data-slug="VueJs">
            VueJs
            </button>
          </li>
          <li class="category-li">
            <button class="button category-button" data-slug="MySQL">
            MySQL
            </button>
          </li>
          <li class="category-li">
            <button class="button category-button" data-slug="SPA">
            SPA
            </button>
          </li>
        </ul>
      </nav>
      <div class="category-legend">
        <div class="category-legend-title">
          <span>Title:</span>
        </div>
      <div class="category-legend-description">
      <span>Year:</span>
      <span>Type:</span>
      <!-- <span>Client:</span> -->
      </div>
      </div>
      <?php foreach ($page->children()->listed()->sortBy('date', 'desc') as
      $work) : ?>
      <article class="post" data-categories="<?= $tags = implode(' ', $work->tags()->split(','));?> all">
        <header class="post-header">
          <h1 class="post-title"><?= $work->title() ?></h1>
          <div class="post-meta-information">
            <tags>
              <p class="paragraph"><?= $work->date()->toDate('Y') ?></p>
            </tags>
            <?php foreach ($work->tags()->split() as $tag): ?>
            <tags>
              <p class="paragraph"><?= $tag ?></p>
            </tags>
            <?php endforeach ?>
          </div>
          <label class="post-header-toggle">
            <span class="post-chevron"></span>
          </label>
        </header>
        <section class="post-content">
          <article class="work-description">
            <section>
              <?= $work->description()->kt()  ?>
            </section>
          </article>
          <article class="work-subpage-link">
            <a class="link" href="<?= $work->url() ?>">
              <!-- <span class="more">Explore Project
              </span> -->
            <!-- <svg viewBox="0 0 402 42" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M397 23.5002H0V18.5002H397V23.5002Z" />
                <path d="M398.506 17.6775L401.335 20.5059L380.828 41.012L378 38.1836L398.506 17.6775Z" />
                <path d="M401.335 20.5059L398.506 23.3345L378 2.82843L380.828 0L401.335 20.5059Z" />
            </svg> -->
            <div class="right">
                    <button class="btn btn-xsmall btn-outline">Explore Project</button>
                </div>
            </a>
          </article>
          <section class="post-gallery">
            <article class="work-images">
              <div class="slider">
                <?php if ($cover = $work->cover()->resize(1080)) : ?>
                <img data-lazy="<?= $cover->url() ?>" alt="<?= $cover->alt() ?>" />
                <?php endif ?>


                <?php foreach ($work->images()->template('work-image') as
                  $image): ?>
                <img data-lazy="<?= $image->resize(1080)->url() ?>" alt="<?= $cover->alt() ?>" />
                <?php endforeach ?>
              </div>
              <div class="text-counter"></div>
            </article>
            <article class="work-videos">
              <?php foreach ($work->videos()->template('work-videos') as
              $video): ?>
              <div class="video-wrapper post-video" data-state="not-init">
                <video loop playsinline preload="auto" poster="<?= $image->url() ?>">
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
            </article>
          </section>
        </section>
      </article>
      <?php endforeach ?>
    </main>
  </div>
</div>
<?php snippet('footer') ?>
<?php snippet('footer/workFooter') ?>