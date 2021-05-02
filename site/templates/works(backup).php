<?php

?>
<?php snippet('header') ?>

<main class="list cover-animation">
<div id="barba-wrapper">
  <div class="barba-container cat-list" data-namespace="index-page">
      <div class="categories">
        <div class="categories-title">
        <strong>
            <a>Filter:</a>
          </strong>
        </div>
        <ul class="categories-pills">
          <li class="category-li active">
            <button class="button category-button" data-slug="all">[All]</button>
          </li>
          <li class="category-li">
            <button class="button category-button" data-slug="Development">
            [Development]
            </button>
          </li>
          <li class="category-li">
            <button class="button category-button" data-slug="CMS">[CMS]</button>
          </li>
          <li class="category-li">
            <button class="button category-button" data-slug="PHP/Laravel">
            [PHP/Laravel]
            </button>
          </li>
          <li class="category-li">
            <button class="button category-button" data-slug="VueJs">
            [VueJs]
            </button>
          </li>
          <li class="category-li">
            <button class="button category-button" data-slug="MySQL">
            [MySQL]
            </button>
          </li>
          <li class="category-li">
            <button class="button category-button" data-slug="SPA">
            [SPA]
            </button>
          </li>
        </ul>
      </div>
      <div class="category-legend">
        <div class="category-legend-title">
          <span>Title</span>
        </div>
      <div class="category-legend-description">
      <span>Client</span>
      <span>Type</span>
      </div>
      <span class="client">Year</span>
      </div>

      <!--  <?php foreach ($page->children()->listed()->sortBy('date', 'desc') as
      $work) : ?>
      <article class="post" data-categories="<?= $tags = implode(' ', $work->tags()->split(','));?> all">
  
      <header class="post-header">
         
          <div class="post-title">
            <a href="<?= $work->url() ?>">
            <span class="icon-right">↗</span>
               <span class="title">
               <?= $work->title() ?>
               </span> 
                </a>
          </div>
          <div class="post-meta-information">
            <tags>
              <?= $work->client() ?>
            </tags>
            <?php foreach ($work->tags()->split() as $tag): ?>
              [<?= $tag ?>]
            <?php endforeach ?>
          </div>

          <div class="client">
          <tags>
              <p><?= $work->date()->toDate('Y') ?></p>
            </tags>
           </div>
        </header>    
      </article>
      <?php endforeach ?>
      </div>
    </div> -->
</main>
<?php snippet('footer') ?>
<?php snippet('footer/workFooter') ?>