<?php
/**
 * Snippets are a great way to store code snippets for reuse or to keep your templates clean.
 * in loops or simply to keep your templates clean.
 * This intro snippet is reused in multiple templates. While it does not contain much code,
 * it helps to keep your code DRY and thus facilitate maintenance when you have to make changes.
 * More about snippets: https://getkirby.com/docs/guide/templates/snippets
 */
?>

<div class="error-page">
  <section class="cover-animation">
    <div class="type-loop">
      <span class="cover-heading loop-right">––––<?= $page->title() ?>––––––––<?= $page->title() ?>––––––––<?= $page->title() ?>––––––––<?= $page->title() ?>––––––––<?= $page->title() ?>––––––––<?= $page->title() ?>––––</span>
    </div>
    <div class="type-loop">
      <span class="cover-heading loop-left">––––<?= $page->title() ?>––––––––<?= $page->title() ?>––––––––<?= $page->title() ?>––––––––<?= $page->title() ?>––––––––<?= $page->title() ?>––––––––<?= $page->title() ?>––––</span>
    </div>
  </section>
</div>
