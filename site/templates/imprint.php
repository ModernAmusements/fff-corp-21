<?php snippet('header') ?>
<div class="imprint-page">

</div>
<main>
  <section class="imprint-page">
    <section class="work-subpage-content">
      <article class="subpage-information">
        <div class="subpage-meta">
          <p class="sub-sub-heading small">Service provider according to § 5 TMG</p>
         <?= $page->about()->kt() ?>
        </div>
        <div class="subpage-description">
          <p class="sub-sub-heading small">I. Disclaimer</p>
        <?= $page->info()->kt() ?>
        </div>
        <div class="subpage-concept">
          <p class="sub-sub-heading small">II. Copyright</p>
         <?= $page->cv()->kt() ?>
        </div>
        <div class="subpage-capabilities">
          <p class="sub-sub-heading small">III. Privacy</p>
             <?= $page->capabilities()->kt() ?>
        </div>
        <div class="subpage-contact">
          <p class="sub-sub-heading small">IV. Cookies</p>
        <?= $page->cookies()->kt() ?>
        </div>        
      </article>
      <article class="subpage-information">
        <div class="subpage-meta">
          <p class="sub-sub-heading small">Service provider according to § 5 TMG</p>
        <?= $page->googleAnalytics()->kt() ?>
        </div>
        <div class="subpage-description">
          <p class="sub-sub-heading small">I. Google Analytics</p>
         <?= $page->googleAnalyticsConsent()->kt() ?>
        </div>
        <div class="subpage-concept">
          <p class="sub-sub-heading small">II. Objection advertising mails</p>
         <?= $page->noConsent()->kt() ?>
        </div>
        <div class="subpage-capabilities">
          <p class="sub-sub-heading small">III. Purpose of processing</p>
              <?= $page->reason()->kt() ?>
        </div>
        <div class="subpage-contact">
          <p class="sub-sub-heading small">IV. Instagram</p>
          <?= $page->instagram()->kt() ?>
        </div>        
      </article>
    </section>
  </section>
  <!-- <script>
  	$('.subpage-information').find('div').children('p').addClass('tags');
</script> -->
</main>

<?php snippet('footer') ?>
