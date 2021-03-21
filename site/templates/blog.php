<?php snippet('header') ?>
<div class="blog-page">
  <!-- <section class="cover-animation">
    <div class="type-loop">
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
    </div>
  </section> -->
</div>
<main>
  <ul class="grid">
    <?php foreach ($articles as $article): ?>
    <li class="column">
      <?php snippet('blog/excerpt', ['article' =>
      $article]) ?>
    </li>
    <?php endforeach ?>
  </ul>
  <?php snippet('blog/pagination', ['pagination' =>
  $articles->pagination()]) ?>
</main>
<?php snippet('footer') ?>
