<article class="blog-article-excerpt">
  <a href="<?= $article->url() ?>">
    <div class="image">
      <?php if ($cover = $article->cover()->crop(600, 600, ['quality' => 100])): ?>
        <img class="lazy" data-src="<?= $cover->url() ?>" alt="<?= $cover->alt() ?>" />
      <?php endif ?>
      <?php if ($article->pills()->isNotEmpty()): ?>
      <div
        data-link=""
        class="data-link"
      >
        <p><?= $article->pills() ?></p>
        <?php endif ?>
      </div>
    </div>
    <div class="text">
      <div class="blog-article-excerpt-subheadline">
      <?php if ($article->subheading()->isNotEmpty()): ?>
        <?= $article->subheading()->kt() ?>
        <?php endif ?>
      </div>
      <h1 class="blog-article-excerpt-title"><?= $article->title() ?></h1>
      <?php if (($excerpt ?? true) !== false): ?>
        <?= $article->description()->blocks()->excerpt(220) ?>
      <?php endif ?>
    </div>
    <span class="tags">Tags: <?= $article->tags() ?></span>
    <div class="bottom">
        <span class="date"
          >Datum:
          <time
            class="blog-article-excerpt-date"
            datetime="<?= $article->date('c') ?>"
            ><?= $article->date() ?></time
          >
        </span>
    
      </div>
  </a>
</article>
