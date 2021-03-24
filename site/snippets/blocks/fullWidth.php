<?php if ($data->moduleLayout()->isNotEmpty()): ?>
  <div class="module-full-width <?= $data->moduleLayout() ?> ">
    <?php if ($imageBuilder = $data->imageBuilderWork()->toFile()): ?>
        <img
          class="lazy"
          alt="<?= $data->imageBuilderWorkAlt() ?>"
          data-src="<?= $imageBuilder->url() ?>"
        />
    <?php endif ?>
  </div>
<?php endif ?>



