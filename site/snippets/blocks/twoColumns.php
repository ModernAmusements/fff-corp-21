<?php if ($data->moduleLayoutTwoColumns()->isNotEmpty()): ?>
  <?php if ($data->moduleLayoutTwoColumnsSize()->isNotEmpty()): ?>
    <div class="module-two-columns">
        <div class="<?= $data->moduleLayoutTwoColumns() ?> <?= $data->moduleLayoutTwoColumnsSize() ?>">
          <?php if ($imageBuilder = $data->imageBuilderWork()->toFile()): ?>
            <img
              class="lazy"
              alt="<?= $data->imageBuilderWorkAlt() ?>"
              data-src="<?= $imageBuilder->url() ?>"
            />
        <?php endif ?>
      </div>
    </div>
  <?php endif ?>
<?php endif ?>



