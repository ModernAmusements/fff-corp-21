<?php snippet('header') ?>
<section class="grid cover-animation">
  <div class="animation transition-fade" id="project-header">
    <a class="work-header-back" href="/home">
      [BACK]
    </a>
    <div><?= $page->about()->kt() ?></div>
    <?php if ($image = $page->image()->resize(600)): ?>
        <article class="about-images">
        <img class="lazy" data-src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" />
          <?php endif ?>
          <div class="about-legend">
            <h3 class="large"><?= $page->company() ?></h3>
            <h3 class="flex-start large">
            3D Artist &<br />
            Artdirector
            </h3>
          </div>
        </article>
    <time>FFFCorp</time>
  </div>
</section>  

<?php snippet('footer') ?>

