<?php snippet('header')?>
<main class="covers cover-animation">
    <?php if ($worksPage = page('works')): ?>
      <?php foreach ($worksPage->children()->sortBy('date', 'desc') as $work): ?>
          <div class="project <?= $work->layout() ?>">
              <a class="poster" href="<?= $work->url() ?>">
                <?php if ($cover = $work->cover()->resize(1080)) : ?>
                  <div class="image auto-gradient">
                    <img 
                         class="thumb poster"
                         src="<?= $cover->url() ?>"
                         alt="<?= $cover->alt() ?>"
                        data-w="1600" data-h="1600"
                        />
                  </div>
                <?php endif ?>
              </a>
              <div class="project-information">           
                  <div class="work-title-toggle"><span class="icon-plus">+</span></div>
                    <span class="work-informtion">
                      <?= $work->date()->toDate('Y') ?>
                      <?= $work->title() ?>
                    </span>
              </div>
              <div class="wrapper">
                  <a href="<?= $work->url() ?>" class="images">
                    <?php foreach ($work->images()->template('work-image') as $image): ?>
                        <img src="<?= $image->resize(1080)->url() ?>" alt="<?= $cover->alt() ?>" />
                    <?php endforeach ?>
                  </a>
              </div>
            </div>
        <?php endforeach?>
      <?php endif?>
  </main>
  <div id="preload-homepage">
        <div id="loader-bg"></div>
        <div id="loader-txt-wrap">
          <div class="loader-txt">F</div>
          <div class="loader-txt">F</div>
          <div class="loader-txt">F</div>
          <div class="loader-txt">C</div>
          <div class="loader-txt">O</div>
          <div class="loader-txt">R</div>
          <div class="loader-txt">P</div>
          <div class="loader-txt">2</div>
          <div class="loader-txt">0</div>
          <div class="loader-txt">2</div>
          <div class="loader-txt">1</div>
        </div>
  </div>
<?php snippet('footer')?>
