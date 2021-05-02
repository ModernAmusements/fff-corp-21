<?php
?>
<!doctype html>
<html lang="de">
<head>
    <!-- Meta Styling -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <?php echo $page->metaTags() ?>

    <?=js('assets/js/grade.js', true) ?>
 
    <?= js('assets/js/jquery.min.js') ?>
    <?= js('assets/js/jquery-ui.min.js', true) ?>
    <?= js('assets/js/js.cookie.min.js', true) ?>
   
    <?php echo mix('/js/homePageScripts.js', true)?>

    <?php echo mix('/css/index.css', true)?>

</head>
<body>
    <header>
       <span class="toggle-animation dark-mode-toggle">
        <span id="sun" class="pointer">
            <svg viewBox="0 0 50 50">
              <g id="sun-group">
                <path class="st0" d="M24.95,34.53c5.25,0,9.5-4.25,9.5-9.5s-4.25-9.5-9.5-9.5s-9.5,4.25-9.5,9.5S19.7,34.53,24.95,34.53z"></path>
                <line class="st0" x1="39.08" y1="25" x2="49.5" y2="25"></line>
                <line class="st0" x1="10.92" y1="25" x2="0.5" y2="25"></line>
                <line class="st0" x1="25" y1="39.08" x2="25" y2="49.5"></line>
                <line class="st0" x1="25" y1="10.92" x2="25" y2="0.5"></line>
                <line class="st0" x1="34.92" y1="14.14" x2="42.28" y2="6.78"></line>
                <line class="st0" x1="34.92" y1="35.86" x2="42.28" y2="43.23"></line>
                <line class="st0" x1="15.07" y1="14.14" x2="7.71" y2="6.78"></line>
                <line class="st0" x1="15.07" y1="35.86" x2="7.71" y2="43.23"></line>
                </g>
            </svg>
          </span>
            <label class="switch">
                <span class="sliderToggle">
                    <div id="circle"></div>
                    <span class="dark">Dark</span>
                    <span class="light">Light</span>
                </span>
            </label>
        </span>
        <menu class="desktop-nav menu-animation">
              <?php $items = $site->children(); $items->prepend('home', page('home')); 
                  if ($items->isNotEmpty()) :?>
                  <?php foreach ($items->listed() as $item) : ?>
                      <a <?php e($item->isOpen(), 'class="active"') ?> href="<?= $item->url() ?>">
                          <?= $item->title()->html() ?><span class="icon-right">↗</span>
                      </a>
                  <?php endforeach ?>
            <?php endif ?>
        </menu>
        <a href="/home" class="home-logo">
            <div class="noise">
              <div class="title">
                <span>FFFCORP2021</span> 
              </div>
            </div>  
        </a>
</header>
