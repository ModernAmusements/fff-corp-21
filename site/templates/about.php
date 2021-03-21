<?php snippet('header') ?>
<div class="about-page">
  <section class="cover-animation">
    <!-- <div class="type-loop">
      <span class="cover-heading loop-right"
        >––––<?= $page->heading()->html() ?>––––––––<?= $page->heading()->html()?>––––––––<?= $page->heading()->html()
        ?>––––––––<?= $page->heading()->html() ?>––––––––<?= $page->heading()->html()?>––––––––<?= $page->heading()->html()
        ?>––––</span
      >
    </div>
    <div class="type-loop">
      <span class="cover-heading loop-left"
        >––––<?= $page->subheading()->html() ?>––––––––<?= $page->subheading()->html()?>––––––––<?= $page->subheading()->html()
        ?>––––––––<?= $page->subheading()->html() ?>––––––––<?= $page->subheading()->html()?>––––––––<?= $page->subheading()->html()
        ?>––––</span
      >
    </div> -->
  </section>
</div>
<main>
  <section class="about-page">
    <section class="work-subpage-content">
      <article class="subpage-information">
        <div class="subpage-meta">
          <p class="sub-sub-heading small">I. About</p>
         <?= $page->about()->kt() ?>
        </div>
        <div class="subpage-description">
          <p class="sub-sub-heading small">II. Information</p>
          <?= $page->info()->kt() ?>
        </div>
        <div class="subpage-concept">
          <p class="sub-sub-heading small">III. Curriculum Vitae</p>
          <?= $page->cv()->kt() ?>
        </div>
        <div class="subpage-capabilities">
          <p class="sub-sub-heading small">IV. Capabilities</p>
          <ul>
            <?php foreach ($page->capabilities()->toStructure() as $profile): ?>
            <li>
             <?= $profile->capabilities()->kt() ?>
            </li>
            <?php endforeach ?>
          </ul>
        </div>
        <div class="subpage-contact">
          <p class="sub-sub-heading small">VI. Get In Touch</p>

            <?= $page->street() ?><br />
            <?= $page->zip() ?><br />
            <?= $page->city() ?><br />
           <p><?= $page->country() ?></p>
            Email:
            <?= Html::email($page->email()) ?><br />
            Phone:
            <?= Html::tel($page->phone()) ?><br />
        </div>        
        <?php if ($image = $page->image()->resize(600)): ?>
        <article class="work-images">
        <img class="lazy" data-src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" />
          <?php endif ?>
          <div class="work-legend">
            <h3 class="large"><?= $page->company() ?></h3>
            <h3 class="flex-start large">
              Web Developer<br />
              Graphic Designer
            </h3>
          </div>
        </article>
      </article>
    </section>
  </section>
</main>

<?php snippet('footer') ?>
