<?php snippet('header') ?>
<main>
  <article class="blog-article">
    <section class="blog-article-overview">
      <div class="slider">
        <?php if ($cover = $page->cover()) : ?>
        <img
          class="lazy"
          data-lazy="<?= $cover->crop(854, 480, ['quality' => 100])->url() ?>"
          alt="<?= $cover->alt() ?>"
        />
        <?php endif ?>
        <?php foreach ($page->images()->template('blog-article-image') as
        $image): ?>
        <img
          class="lazy"
          data-lazy="<?= $image->crop(854, 480, ['quality' => 100])->url() ?>"
          alt="<?= $image->alt() ?>"
        />
        <?php endforeach ?>
      </div>
      <div class="col-2">
        <h1><?= $page->title() ?></h1>
        <?php if ($page->subheading()->isNotEmpty()): ?>
          <?= $page->subheading()->kt() ?>
        <?php endif ?>
        <div><p>Beschreibung:</p><?= $page->description()->kt() ?></div>
        <div class="blog-subpage-meta">
          <p class="tags">Tags:</p>
          <?php foreach ($page->tags()->split() as $tag): ?>
          <tags class="post-meta">
            <p class="tags"><?= $tag ?></p>
          </tags>
          <?php endforeach ?>
        </div>
      </div>
    </section>
    <?php foreach ($page->fullRow()->toBuilderBlocks() as $block): ?>
    <?php snippet('blocks/' . $block->_key(), ['data' => $block]) ?>
    <?php endforeach ?>
  </article>
  <!-- FOOTER BLOG -->
  <!-- TAGS -->
  <div class="footer-blog-subpage">
  <?php if (!empty($tags)): ?>
  <div class="footer-tags">
   <?= $page->subheading()->kt() ?>
    <div>
      <?php foreach ($tags as $tag): ?>
      <a class="post-meta" href="<?= url('blog', ['params' => ['tag' => $tag]]) ?>"
        ><?= $tag ?></a
      >
      <?php endforeach ?>
    </div>
  </div>
  <?php endif ?>
      <article class="information">
          <p>Title:</p>
          <span>
            <h3><?= $page->title() ?></h3>
          </span>
      </article>
      <article class="information-1">
            <p>Credits:</p>
          <?php foreach ($page->author()->split() as $tag): ?>
          <span>
            <h3><?= $tag ?></h3>
          </span>
          <?php endforeach ?>
      </article>
      <article class="information-2">
          <p>Publication:</p>
          <span>
            <h3><?= $page->date() ?></h3>
          </span>
      </article>
  </div>
  <?php snippet('blog/prevnext') ?>
</main>
<?php snippet('subpageFooter/subpage') ?>
