<?php if ($data->moduleLayoutSideBySide()->isNotEmpty()): ?>
  <?php if ($data->moduleLayoutLeft()->isNotEmpty()): ?>
    <?php if ($data->moduleLayoutSideBySide()->isNotEmpty()): ?>
      <?php if ($data->moduleLayoutLeft()->isNotEmpty()): ?>
        <div class="module-two-columns">
            <div class="<?= $data->moduleLayoutSideBySide() ?> <?= $data->moduleLayoutLeft() ?>">
              <?php if ($imageBuilder = $data->imageBuilderLeft()->toFile()): ?>
                <img
                  class="lazy"
                  data-src="<?= $imageBuilder->url() ?>"
                />
              <?php endif ?>
            </div>
            <div class="<?= $data->moduleLayoutSideBySideTwo() ?> <?= $data->moduleLayoutRight() ?>">
                <?php if ($imageBuilder = $data->imageBuilderRight()->toFile()): ?>
                  <img
                    class="lazy"
                    data-src="<?= $imageBuilder->url() ?>"
                  />
              <?php endif ?>
            </div>
        </div>
      <?php endif ?>
    <?php endif ?>
  <?php endif ?>
<?php endif ?>





  










