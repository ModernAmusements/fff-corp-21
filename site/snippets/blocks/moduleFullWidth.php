<section class="blog-article-content">
  <div class="col-1">
    <?php if ($data->headingC1()->isNotEmpty()): ?>
    <p class="sub-heading"><?= $data->headingC1() ?></p>
    <?php endif ?>
      <?= $data->textC1()->kt() ?>
  </div>
  <div class="col-2">
    <?php if ($data->headingC2()->isNotEmpty()): ?>
  <p class="sub-heading"><?= $data->headingC2() ?></p>
    <?php endif ?>
      <?= $data->textC2()->kt() ?>
  </div>
  <div class="col-3">
    <?php if ($data->headingC3()->isNotEmpty()): ?>
      <p class="sub-heading"><?= $data->headingC3() ?></p>
    <?php endif ?>
    <?php if ($imageBuilder = $data->imageBuilder()->toFile()): ?>
    <img
      class="lazy"
      data-src="<?= $imageBuilder->url() ?>"
      alt="<?= $data->imageBuilderAlt() ?>"
    />
    <?= $data->imageBuilderAlt()->kt() ?>
    <?php endif ?>
    <?php if ($data->textC3()->isNotEmpty()): ?>
      <?= $data->textC3()->kt() ?>
    <?php endif ?>
    <?php if ($data->codeC3()->isNotEmpty()): ?>
      <?= $data->codeHeadingC3()->kt() ?>
      <pre class="code-example">
        <code class="blog-code">
        <?= $data->codeC3()->html()->markdown()->kt() ?>
        </code>
      </pre>
    <?php endif ?>
  </div>
</section>
