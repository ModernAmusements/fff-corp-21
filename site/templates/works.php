<?php

?>
<?php snippet('header') ?>
<div id="wrapper">

  <nav>

      <!--Grid-->
      <div id="grid">
          <a href="/">
          <span>Grid</span>
          </a> 
      </div>

      <!--Covers-->
      <div id="covers">
        <a href="/">
          <span>Covers</span>
          </a>
      </div>

      <div id="list" class="active">
          <a href="/works">List</a>
      </div>

  </nav> 

</div>
<div id="barba-wrapper">
  <div class="barba-container one left" data-namespace="index-page">
    <main id="index">
      <div class="categories">
        <div class="categories-title">
 
          Filter:

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
          <span>Title:</span>
        </div>
      <div class="category-legend-description">
      <span>Year:</span>
      <span>Type:</span>
      <!-- <span>Client:</span> -->
      </div>
      </div>
      <main class="list">
      <?php foreach ($page->children()->listed()->sortBy('date', 'desc') as
      $work) : ?>
      <article class="post" data-categories="<?= $tags = implode(' ', $work->tags()->split(','));?> all">
      <div class="project">
      <div class="trigger">
        <!--Trigger-->
        <span>
          [<span class="dot"></span>]
        </span>
        <!--Title-->
        <wrap>
          <span><?= $work->date()->toDate('Y') ?>
        </span>
        <span><?= $work->title() ?></span>
            <!--Year-->
            <?php foreach ($work->tags()->split() as $tag): ?>
            <span>
            <?= $tag ?>
            </span>
     
            <?php endforeach ?>
        </wrap>
    </div>


    
      </article>
      <?php endforeach ?>
      </main>
    </main>
  </div>
</div>
<?php snippet('footer') ?>
<?php snippet('footer/workFooter') ?>