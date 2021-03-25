<?php snippet('header')?>

<div id="wrapper">
  <nav>
      <div id="grid">
          <span>Grid</span>
      </div>
      <div id="covers" class="active">
          <span>Covers</span>
      </div>
      <div>
          <a href="/works">List</a>
      </div>
  </nav> 
</div>
<main class="covers">
    <?php if ($worksPage = page('works')): ?>
      <?php foreach ($worksPage->children()->sortBy('date', 'desc') as $work): ?>
          <div class="project <?= $work->layout() ?>">
              <a class="thumbnail scroll" href="<?= $work->url() ?>">
                <?php if ($cover = $work->cover()->resize(1080)) : ?>
                  <div class="image auto-gradient">
                    <img data-src="<?= $cover->url() ?>"
                        class="thumb lazy poster"
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

    <?=js('assets/js/grade.js', true)?>
      <script type="text/javascript">
          window.addEventListener('load', function(){
              Grade(document.querySelectorAll('.auto-gradient'))
          });
      </script>
<?=js('assets/js/homePageScripts.js', true)?>
<?php snippet('footer')?>
