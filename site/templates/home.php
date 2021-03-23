<?php snippet('header')?>

<div id="wrapper">

  <nav>

      <!--Grid-->
      <div id="grid">
          <span>Grid</span>
      </div>

      <!--Covers-->
      <div id="covers">
          <span>Covers</span>
      </div>
      
      <!--List-->
      <!-- <div id="list">
          <span>List</span>
      </div> -->
      <div>
          <a href="/works">List</a>
      </div>

  </nav> 

</div>

  <!--Content-->
  <main class="covers">

      <?php if ($worksPage = page('works')): ?>

      <?php foreach ($worksPage->children()->sortBy('date', 'desc') as $work): ?>

          <div class="project <?= $work->layout() ?>">
              <!--Link-->
              <a class="thumbnail scroll" href="<?= $work->url() ?>">

              <?php if ($cover = $work->cover()->resize(1080)) : ?>
                  <img data-src="<?= $cover->url() ?>"
                      class="thumb lazy poster"
                      src="<?= $cover->url() ?>"
                      alt="<?= $cover->alt() ?>"
                      data-w="1600" data-h="1600" />

                <?php endif ?>
              </a>
              <div class="project-information">           
                  <div class="work-title-toggle"><span class="icon-plus">+</span></div>
                    <span class="work-informtion">
                    <?= $work->date()->toDate('Y') ?>
                    <?= $work->title() ?>
                    </span>
              </div>
              <!--List Content-->
              <div class="wrapper">
                  <!--Project Images-->
                  <a href="<?= $work->url() ?>" class="images">

                  <?php foreach ($work->images()->template('work-image') as
                              $image): ?>
                            <img src="<?= $image->resize(1080)->url() ?>" alt="<?= $cover->alt() ?>" />
                    <?php endforeach ?>

                  </a>
                  <!--Link-->
                  <a href="<?= $work->url() ?>">
                    [ VIEW FULL PROJECT ]
                </a>
              </div>
            </div>

        <?php endforeach?>

      <?php endif?>

    </main>
<?=js('assets/js/homePageScripts.js', true)?>
<?php snippet('footer')?>
